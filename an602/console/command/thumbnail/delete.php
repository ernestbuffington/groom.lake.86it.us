<?php
/**
*
* This file is part of the AN602 CMS Software package.
*
* @copyright (c) AN602 Limited <https://www.groom.lake.86it.us>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/
namespace an602\console\command\thumbnail;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class delete extends \an602\console\command\command
{
	/**
	* @var \an602\config\config
	*/
	protected $config;

	/**
	* @var \an602\db\driver\driver_interface
	*/
	protected $db;

	/**
	* AN602 root path
	* @var string
	*/
	protected $an602_root_path;

	/**
	* Constructor
	*
	* @param \config\config $config The config
	* @param \an602\user $user The user object (used to get language information)
	* @param \an602\db\driver\driver_interface $db Database connection
	* @param string $an602_root_path Root path
	*/
	public function __construct(\an602\config\config $config, \an602\user $user, \an602\db\driver\driver_interface $db, $an602_root_path)
	{
		$this->config = $config;
		$this->db = $db;
		$this->an602_root_path = $an602_root_path;

		parent::__construct($user);
	}

	/**
	* Sets the command name and description
	*
	* @return null
	*/
	protected function configure()
	{
		$this
			->setName('thumbnail:delete')
			->setDescription($this->user->lang('CLI_DESCRIPTION_THUMBNAIL_DELETE'))
		;
	}

	/**
	* Executes the command thumbnail:delete.
	*
	* Deletes all existing thumbnails and updates the database accordingly.
	*
	* @param InputInterface $input The input stream used to get the argument and verbose option.
	* @param OutputInterface $output The output stream, used for printing verbose-mode and error information.
	*
	* @return int 0 if all is ok, 1 if a thumbnail couldn't be deleted.
	*/
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$io = new SymfonyStyle($input, $output);

		$io->section($this->user->lang('CLI_THUMBNAIL_DELETING'));

		$sql = 'SELECT COUNT(*) AS nb_missing_thumbnails
			FROM ' . ATTACHMENTS_TABLE . '
			WHERE thumbnail = 1';
		$result = $this->db->sql_query($sql);
		$nb_missing_thumbnails = (int) $this->db->sql_fetchfield('nb_missing_thumbnails');
		$this->db->sql_freeresult($result);

		if ($nb_missing_thumbnails === 0)
		{
			$io->warning($this->user->lang('CLI_THUMBNAIL_NOTHING_TO_DELETE'));
			return 0;
		}

		$sql = 'SELECT attach_id, physical_filename, extension, real_filename, mimetype
			FROM ' . ATTACHMENTS_TABLE . '
			WHERE thumbnail = 1';
		$result = $this->db->sql_query($sql);

		$progress = $this->create_progress_bar($nb_missing_thumbnails, $io, $output);

		$progress->setMessage($this->user->lang('CLI_THUMBNAIL_DELETING'));

		$progress->start();

		$thumbnail_deleted = array();
		$return = 0;
		while ($row = $this->db->sql_fetchrow($result))
		{
			$thumbnail_path = $this->an602_root_path . $this->config['upload_path'] . '/thumb_' . $row['physical_filename'];

			if (@unlink($thumbnail_path))
			{
				$thumbnail_deleted[] = $row['attach_id'];

				if (count($thumbnail_deleted) === 250)
				{
					$this->commit_changes($thumbnail_deleted);
					$thumbnail_deleted = array();
				}

				$progress->setMessage($this->user->lang('CLI_THUMBNAIL_DELETED', $row['real_filename'], $row['physical_filename']));
			}
			else
			{
				$return = 1;
				$progress->setMessage('<error>' . $this->user->lang('CLI_THUMBNAIL_SKIPPED', $row['real_filename'], $row['physical_filename']) . '</error>');
			}

			$progress->advance();
		}
		$this->db->sql_freeresult($result);

		if (!empty($thumbnail_deleted))
		{
			$this->commit_changes($thumbnail_deleted);
		}

		$progress->finish();

		$io->newLine(2);
		$io->success($this->user->lang('CLI_THUMBNAIL_DELETING_DONE'));

		return $return;
	}

	/**
	* Commits the changes to the database
	*
	* @param array $thumbnail_deleted
	*/
	protected function commit_changes(array $thumbnail_deleted)
	{
		$sql = 'UPDATE ' . ATTACHMENTS_TABLE . '
				SET thumbnail = 0
				WHERE ' . $this->db->sql_in_set('attach_id', $thumbnail_deleted);
		$this->db->sql_query($sql);
	}
}

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

namespace an602\console\command\user;

use an602\console\command\command;
use an602\db\driver\driver_interface;
use an602\language\language;
use an602\log\log_interface;
use an602\user;
use an602\user_loader;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;

class delete extends command
{
	/** @var driver_interface */
	protected $db;

	/** @var language */
	protected $language;

	/** @var log_interface */
	protected $log;

	/** @var user_loader */
	protected $user_loader;

	/**
	 * AN602 root path
	 *
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * PHP extension.
	 *
	 * @var string
	 */
	protected $php_ext;

	/**
	 * Construct method
	 *
	 * @param user             $user
	 * @param driver_interface $db
	 * @param language         $language
	 * @param log_interface    $log
	 * @param user_loader      $user_loader
	 * @param string           $an602_root_path
	 * @param string           $php_ext
	 */
	public function __construct(user $user, driver_interface $db, language $language, log_interface $log, user_loader $user_loader, $an602_root_path, $php_ext)
	{
		$this->db = $db;
		$this->language = $language;
		$this->log = $log;
		$this->user_loader = $user_loader;
		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;

		$this->language->add_lang('acp/users');
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
			->setName('user:delete')
			->setDescription($this->language->lang('CLI_DESCRIPTION_USER_DELETE'))
			->addArgument(
				'username',
				InputArgument::REQUIRED,
				$this->language->lang('CLI_DESCRIPTION_USER_DELETE_USERNAME')
			)
			->addOption(
				'delete-posts',
				null,
				InputOption::VALUE_NONE,
				$this->language->lang('CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS')
			)
		;
	}

	/**
	 * Executes the command user:delete
	 *
	 * Deletes a user from the database. An option to delete the user's posts
	 * is available, by default posts will be retained.
	 *
	 * @param InputInterface  $input  The input stream used to get the options
	 * @param OutputInterface $output The output stream, used to print messages
	 *
	 * @return int 0 if all is well, 1 if any errors occurred
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$name = $input->getArgument('username');
		$mode = ($input->getOption('delete-posts')) ? 'remove' : 'retain';

		if ($name)
		{
			$io = new SymfonyStyle($input, $output);

			$user_id  = $this->user_loader->load_user_by_username($name);
			$user_row = $this->user_loader->get_user($user_id);

			if ($user_row['user_id'] == ANONYMOUS)
			{
				$io->error($this->language->lang('NO_USER'));
				return 1;
			}

			if (!function_exists('user_delete'))
			{
				require($this->an602_root_path . 'includes/functions_user.' . $this->php_ext);
			}

			user_delete($mode, $user_row['user_id'], $user_row['username']);

			$this->log->add('admin', ANONYMOUS, '', 'LOG_USER_DELETED', false, array($user_row['username']));

			$io->success($this->language->lang('USER_DELETED'));
		}

		return 0;
	}

	/**
	 * Interacts with the user.
	 * Confirm they really want to delete the account...last chance!
	 *
	 * @param InputInterface  $input  An InputInterface instance
	 * @param OutputInterface $output An OutputInterface instance
	 */
	protected function interact(InputInterface $input, OutputInterface $output)
	{
		$helper = $this->getHelper('question');

		$question = new ConfirmationQuestion(
			$this->language->lang('CLI_USER_DELETE_CONFIRM', $input->getArgument('username')),
			false
		);

		if (!$helper->ask($input, $output, $question))
		{
			$input->setArgument('username', false);
		}
	}
}
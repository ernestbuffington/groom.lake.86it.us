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

namespace an602\db\extractor;

use an602\db\extractor\exception\invalid_format_exception;
use an602\db\extractor\exception\extractor_not_initialized_exception;

/**
 * Abstract base class for database extraction
 */
abstract class base_extractor implements extractor_interface
{
	/**
	 * @var    string    AN602 root path
	 */
	protected $an602_root_path;

	/**
	 * @var    \an602\request\request_interface
	 */
	protected $request;

	/**
	 * @var    \an602\db\driver\driver_interface
	 */
	protected $db;

	/**
	 * @var    bool
	 */
	protected $download;

	/**
	 * @var    bool
	 */
	protected $store;

	/**
	 * @var    int
	 */
	protected $time;

	/**
	 * @var    string
	 */
	protected $format;

	/**
	 * @var    resource
	 */
	protected $fp;

	/**
	 * @var string
	 */
	protected $write;

	/**
	 * @var string
	 */
	protected $close;

	/**
	 * @var bool
	 */
	protected $run_comp;

	/**
	 * @var bool
	 */
	protected $is_initialized;

	/**
	 * Constructor
	 *
	 * @param string $an602_root_path
	 * @param \an602\request\request_interface $request
	 * @param \an602\db\driver\driver_interface $db
	 */
	public function __construct($an602_root_path, \an602\request\request_interface $request, \an602\db\driver\driver_interface $db)
	{
		$this->an602_root_path	= $an602_root_path;
		$this->request			= $request;
		$this->db				= $db;
		$this->fp				= null;

		$this->is_initialized   = false;
	}

	/**
	* {@inheritdoc}
	*/
	public function init_extractor($format, $filename, $time, $download = false, $store = false)
	{
		$this->download			= $download;
		$this->store			= $store;
		$this->time				= $time;
		$this->format			= $format;

		switch ($format)
		{
			case 'text':
				$ext = '.sql';
				$open = 'fopen';
				$this->write = 'fwrite';
				$this->close = 'fclose';
				$mimetype = 'text/x-sql';
			break;
			case 'bzip2':
				$ext = '.sql.bz2';
				$open = 'bzopen';
				$this->write = 'bzwrite';
				$this->close = 'bzclose';
				$mimetype = 'application/x-bzip2';
			break;
			case 'gzip':
				$ext = '.sql.gz';
				$open = 'gzopen';
				$this->write = 'gzwrite';
				$this->close = 'gzclose';
				$mimetype = 'application/x-gzip';
			break;
			default:
				throw new invalid_format_exception();
			break;
		}

		if ($download === true)
		{
			$name = $filename . $ext;
			header('Cache-Control: private, no-cache');
			header("Content-Type: $mimetype; name=\"$name\"");
			header("Content-disposition: attachment; filename=$name");

			switch ($format)
			{
				case 'bzip2':
					ob_start();
				break;

				case 'gzip':
					if (strpos($this->request->header('Accept-Encoding'), 'gzip') !== false && strpos(strtolower($this->request->header('User-Agent')), 'msie') === false)
					{
						ob_start('ob_gzhandler');
					}
					else
					{
						$this->run_comp = true;
					}
				break;
			}
		}

		if ($store === true)
		{
			$file = $this->an602_root_path . 'store/' . $filename . $ext;

			$this->fp = $open($file, 'w');

			if (!$this->fp)
			{
				trigger_error('FILE_WRITE_FAIL', E_USER_ERROR);
			}
		}

		$this->is_initialized = true;
	}

	/**
	* {@inheritdoc}
	*/
	public function write_end()
	{
		static $close;

		if (!$this->is_initialized)
		{
			throw new extractor_not_initialized_exception();
		}

		if ($this->store)
		{
			if ($close === null)
			{
				$close = $this->close;
			}
			$close($this->fp);
		}

		// bzip2 must be written all the way at the end
		if ($this->download && $this->format === 'bzip2')
		{
			$c = ob_get_clean();
			echo bzcompress($c);
		}
	}

	/**
	* {@inheritdoc}
	*/
	public function flush($data)
	{
		static $write;

		if (!$this->is_initialized)
		{
			throw new extractor_not_initialized_exception();
		}

		if ($this->store === true)
		{
			if ($write === null)
			{
				$write = $this->write;
			}
			$write($this->fp, $data);
		}

		if ($this->download === true)
		{
			if ($this->format === 'bzip2' || $this->format === 'text' || ($this->format === 'gzip' && !$this->run_comp))
			{
				echo $data;
			}

			// we can write the gzip data as soon as we get it
			if ($this->format === 'gzip')
			{
				if ($this->run_comp)
				{
					echo gzencode($data);
				}
				else
				{
					ob_flush();
					flush();
				}
			}
		}
	}
}

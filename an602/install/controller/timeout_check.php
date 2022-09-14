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

namespace an602\install\controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class timeout_check
{
	/**
	 * @var helper
	 */
	protected $helper;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Constructor
	 *
	 * @param helper	$helper
	 * @param string	$an602_root_path
	 */
	public function __construct(helper $helper, $an602_root_path)
	{
		$this->helper = $helper;
		$this->an602_root_path = $an602_root_path;
	}

	/**
	 * Controller for querying installer status
	 */
	public function status()
	{
		$lock_file = $this->an602_root_path . 'store/io_lock.lock';
		$response = new JsonResponse();

		if (!file_exists($lock_file))
		{
			$response->setData(array(
				'status' => 'fail',
			));
		}
		else
		{
			$fp = @fopen($lock_file, 'r');

			if ($fp && flock($fp, LOCK_EX | LOCK_NB))
			{
				$status = (filesize($lock_file) >= 2 && fread($fp, 2) === 'ok') ? 'continue' : 'fail';

				$response->setData(array(
					'status' => $status,
				));
				flock($fp, LOCK_UN);
				fclose($fp);
			}
			else
			{
				$response->setData(array(
					'status' => 'running',
				));
			}
		}

		return $response;
	}
}

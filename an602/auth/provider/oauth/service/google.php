<?php
/**
 *
 * This file is part of the AN602 CMS Software package.
 *
 * @copyright (c) PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace an602\auth\provider\oauth\service;

/**
 * Google OAuth service
 */
class google extends base
{
	/** @var \an602\config\config */
	protected $config;

	/** @var \an602\request\request_interface */
	protected $request;

	/**
	 * Constructor.
	 *
	 * @param \an602\config\config				$config		Config object
	 * @param \an602\request\request_interface	$request	Request object
	 */
	public function __construct(\an602\config\config $config, \an602\request\request_interface $request)
	{
		$this->config	= $config;
		$this->request	= $request;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_auth_scope()
	{
		return [
			'userinfo_email',
			'userinfo_profile',
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_service_credentials()
	{
		return [
			'key'		=> $this->config['auth_oauth_google_key'],
			'secret'	=> $this->config['auth_oauth_google_secret'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function perform_auth_login()
	{
		if (!($this->service_provider instanceof \OAuth\OAuth2\Service\Google))
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE');
		}

		try
		{
			// This was a callback request, get the token
			$this->service_provider->requestAccessToken($this->request->variable('code', ''));
		}
		catch (\OAuth\Common\Http\Exception\TokenResponseException $e)
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_REQUEST');
		}

		try
		{
			// Send a request with it
			$result = (array) json_decode($this->service_provider->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
		}
		catch (\OAuth\Common\Exception\Exception $e)
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_REQUEST');
		}

		// Return the unique identifier
		return $result['id'];
	}

	/**
	 * {@inheritdoc}
	 */
	public function perform_token_auth()
	{
		if (!($this->service_provider instanceof \OAuth\OAuth2\Service\Google))
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE');
		}

		try
		{
			// Send a request with it
			$result = (array) json_decode($this->service_provider->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
		}
		catch (\OAuth\Common\Exception\Exception $e)
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_REQUEST');
		}

		// Return the unique identifier
		return $result['id'];
	}
}

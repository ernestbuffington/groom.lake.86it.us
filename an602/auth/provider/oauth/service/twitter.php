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

namespace an602\auth\provider\oauth\service;

/**
 * Twitter OAuth service
 */
class twitter extends base
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
	public function get_service_credentials()
	{
		return [
			'key'		=> $this->config['auth_oauth_twitter_key'],
			'secret'	=> $this->config['auth_oauth_twitter_secret'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function perform_auth_login()
	{
		if (!($this->service_provider instanceof \OAuth\OAuth1\Service\Twitter))
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE');
		}

		$storage = $this->service_provider->getStorage();

		try
		{
			/** @var \OAuth\OAuth1\Token\TokenInterface $token */
			$token = $storage->retrieveAccessToken('Twitter');
		}
		catch (\OAuth\Common\Storage\Exception\TokenNotFoundException $e)
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_REQUEST');
		}

		$secret = $token->getRequestTokenSecret();

		try
		{
			// This was a callback request, get the token
			$this->service_provider->requestAccessToken(
				$this->request->variable('oauth_token', ''),
				$this->request->variable('oauth_verifier', ''),
				$secret
			);
		}
		catch (\OAuth\Common\Http\Exception\TokenResponseException $e)
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_REQUEST');
		}

		// Send a request with it
		$result = (array) json_decode($this->service_provider->request('account/verify_credentials.json'), true);

		// Return the unique identifier
		return $result['id'];
	}

	/**
	 * {@inheritdoc}
	 */
	public function perform_token_auth()
	{
		if (!($this->service_provider instanceof \OAuth\OAuth1\Service\Twitter))
		{
			throw new exception('AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE');
		}

		// Send a request with it
		$result = (array) json_decode($this->service_provider->request('account/verify_credentials.json'), true);

		// Return the unique identifier
		return $result['id'];
	}
}

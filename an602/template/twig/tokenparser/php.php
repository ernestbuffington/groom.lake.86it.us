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

namespace an602\template\twig\tokenparser;

class php extends \Twig\TokenParser\AbstractTokenParser
{
	/** @var \an602\template\twig\environment */
	protected $environment;

	/**
	* Constructor
	*
	* @param \an602\template\twig\environment $environment
	*/
	public function __construct(\an602\template\twig\environment $environment)
	{
		$this->environment = $environment;
	}

	/**
	* Parses a token and returns a node.
	*
	* @param \Twig\Token $token A Twig\Token instance
	*
	* @return \Twig\Node\Node A Twig\Node instance
	*/
	public function parse(\Twig\Token $token)
	{
		$stream = $this->parser->getStream();

		$stream->expect(\Twig\Token::BLOCK_END_TYPE);

		$body = $this->parser->subparse(array($this, 'decideEnd'), true);

		$stream->expect(\Twig\Token::BLOCK_END_TYPE);

		return new \an602\template\twig\node\php($body, $this->environment, $token->getLine(), $this->getTag());
	}

	public function decideEnd(\Twig\Token $token)
	{
		return $token->test('ENDPHP');
	}

	/**
	* Gets the tag name associated with this token parser.
	*
	* @return string The tag name
	*/
	public function getTag()
	{
		return 'PHP';
	}
}

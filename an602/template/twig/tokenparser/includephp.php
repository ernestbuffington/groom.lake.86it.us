<?php
/**
*
* This file is part of the AN602 CMS Software package.
*
* @copyright (c) AN602 Limited <https://www.groom.lake.86it.us>
* @copyright Portions (c) 2009 Fabien Potencier, Armin Ronacher
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace an602\template\twig\tokenparser;

class includephp extends \Twig\TokenParser\AbstractTokenParser
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
		$expr = $this->parser->getExpressionParser()->parseExpression();

		$stream = $this->parser->getStream();

		$ignoreMissing = false;
		if ($stream->test(\Twig\Token::NAME_TYPE, 'ignore'))
		{
			$stream->next();
			$stream->expect(\Twig\Token::NAME_TYPE, 'missing');

			$ignoreMissing = true;
		}

		$stream->expect(\Twig\Token::BLOCK_END_TYPE);

		return new \an602\template\twig\node\includephp($expr, $this->environment, $token->getLine(), $ignoreMissing, $this->getTag());
	}

	/**
	* Gets the tag name associated with this token parser.
	*
	* @return string The tag name
	*/
	public function getTag()
	{
		return 'INCLUDEPHP';
	}
}

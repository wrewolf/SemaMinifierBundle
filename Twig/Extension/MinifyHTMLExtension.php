<?php

namespace Wrewolf\Bundle\MinifierBundle\Twig\Extension;

use Wrewolf\Bundle\MinifierBundle\Twig\TokenParser\MinifyHTMLTokenParser;


/**
 * MediaExtension
 */
class MinifyHTMLExtension extends \Twig_Extension
{
	/**
	 * {@inheritdoc}
	 */
	public function getTokenParsers()
	{
		return array(
			new MinifyHTMLTokenParser()
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		return 'minifyhtml';
	}

}

<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-17
 * Time: 14h56
 * Updated:
*/


namespace Grafikart\RecaptchaBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	/**
	 * @inheritDoc
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder('recaptcha');
		// convention snake_case minuscule, nom du bundle, sans bundle. Ignoré si par réspécté.

		$treeBuilder->getRootNode()
			->children()

			->scalarNode('key')
			->isRequired()
			->cannotBeEmpty()
			->end()

			->scalarNode('secret')
			->cannotBeEmpty()
			->isRequired()
			->end()

			->end();

		return $treeBuilder;
	}
}
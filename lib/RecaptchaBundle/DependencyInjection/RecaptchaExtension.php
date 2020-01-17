<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-17
 * Time: 14h54
 * Updated:
*/


namespace Grafikart\RecaptchaBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class RecaptchaExtension extends Extension
{
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new YamlFileLoader(
			$container,
			new FileLocator(__DIR__ . '/../Resources/config')
		);

		$loader->load('services.yaml');

		$configuration = new Configuration();
		// N'a besoin de rien au niveau de son constructeur.

		$config = $this->processConfiguration($configuration, $configs);

		$container->setParameter('recaptcha.key', $config['key']);
		$container->setParameter('recaptcha.secret', $config['secret']);
	}
}
<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-17
 * Time: 14h27
 * Updated:
*/


namespace Grafikart\RecaptchaBundle;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RecaptchaCompilerPass implements CompilerPassInterface
{

	public function process(ContainerBuilder $container)
	{
		if($container->hasParameter('twig.form.resources')) { // TODO: Implement process() method.

			$resources = $container->getParameter('twig.form.resources') ?: [];
			array_unshift($resources, '@Recaptcha/fields.html.twig');

			// On peut lui dire redéfinir cette nouvelle variable.
			$container->setParameter('twig.form.resources', $resources);
		}
	}
}
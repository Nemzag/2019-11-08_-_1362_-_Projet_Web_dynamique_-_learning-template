<?php

namespace Grafikart\RecaptchaBundle\Type;

use Grafikart\RecaptchaBundle\Constraints\Recaptcha;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecaptchaSubmitType extends AbstractType
{
	/**
	 * @var string
	 */
	private $key;

	public function __construct(string $key)
	{
		$this->key = $key;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'mapped' => false, // Ce champ la n'est pas lié à un champ de notre DB.
			'constraints' => new Recaptcha()
		]);
	}

	public function buildView(FormView $view, FormInterface $form, array $options)
	{
		// Modifier la variable label
		$view->vars['label'] = false;

		// On doit lui envoyé une clé.
		$view->vars['key'] = $this->key;

		$view->vars['button'] = $options['label'];
	}

	// Permet de donner un préfixe à nos bloques.
	public function getBlockPrefix()
	{
		return 'recaptcha_submit';
	}

	public function getParent()
	{
		return TextType::class;
	}
}
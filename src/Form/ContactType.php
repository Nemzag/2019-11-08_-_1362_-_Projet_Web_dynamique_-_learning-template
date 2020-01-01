<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-11-28
 * Time: 10h16
 * Updated:
*/

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('firstName', TextType::class, [
				'label' => 'Prénom',
				])

			->add('lastName', TextType::class, [
				'label' => 'Nom',
			])

			->add('email', EmailType::class, [
				'label' => 'Courriel',
			])

			->add('subject', TextType::class, [
				'label' => 'Sujet',
			])

			->add('message', TextareaType::class)

			->add('submit', SubmitType::class, [
				'label' => 'Envoyer',
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			// Configure your form options here
			'data_class' => Contact::class
		]);
	}
}


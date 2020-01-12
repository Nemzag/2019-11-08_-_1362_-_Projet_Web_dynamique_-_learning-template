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


				'attr' => [
					'minlength' => '2',
					'maxlength' => '20',
					'placeholder' => '2 caractères minimum, 20 maximum.‬'
				]
				])

			->add('lastName', TextType::class, [
				'label' => 'Nom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '20',
					'placeholder' => '2 caractères minimum, 20 maximum.‬'
				]
			])

			->add('email', EmailType::class, [
				'label' => 'Courriel',

				'attr' => [
					'minlength' => '5',
					'maxlength' => '255',
					'placeholder' => '5 caractères minimum, 255 maximum.‬'
				]
			])

			->add('subject', TextType::class, [

				'label' => 'Sujet',

				'attr' => [
					'minlength' => '10',
					'maxlength' => '255',
					'placeholder' => '10 caractères minimum, 255 maximum.‬'
				]
			])

			->add('message', TextareaType::class, [

				'attr' => [
					'minlength' => '10',
					'maxlength' => '65536',
					'placeholder' => '10 caractères minimum, 65.536 maximum.‬'
				]
			])

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


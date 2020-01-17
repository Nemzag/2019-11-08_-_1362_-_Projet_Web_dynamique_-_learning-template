<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints\IsTrue;

use Vich\UploaderBundle\Form\Type\VichImageType;

class UserEditType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('userName', TextType::class, [

				'label' => 'Pseudo‑onyme',

				'attr' => [
					'minlength' => '3',
					'maxlength' => '255',
					'placeholder' => '3 caractères minimum, 255 maximum.‬'
				]
			])
			/* Prénom */
			->add('firstName', TextType::class, [

				'label' => 'Prénom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '2 caractères minimum, 255 maximum.‬'
				]
			])
			/* Nom */
			->add('lastName', TextType::class, [

				'label' => 'Nom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '2 caractères minimum, 255 maximum.‬'
				]
			])
			->add('email', EmailType::class, [

				'label' => 'Courriel',

				'attr' => [
					'minlength' => '8',
					'maxlength' => '255',
					'placeholder' => '8 caractères minimum & 255 caractères maximum.‬'
				]
			])

			->add('isDisabled', ChoiceType::class, [

				'label' => 'Activé',

				'choices' => [
					'Oui' => 0,
					'Non' => 1,
				],
			])

			->add('imageFile', VichImageType::class, [

				'label' => "Inséré une image",

				'required' => false,

				'download_uri' => false,
				'download_label' => "Télécharger l'image",
				// Je ne comprend générer le vrai "path" exact entre le nom du fichier et le localhost

				'image_uri' => false,

				'allow_delete' => false,

				// 'asset_helper' => true,
				// 'attr' => ['placeholder' => 'Name']
				// 'attr' => ['class' => 'form-control']
			])

			/*

			->add('lastLogAt', DateTimeType::class, [

				'label' => 'Date de dernière connection',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],

			])
			*/

			->add('agreeTerms', CheckboxType::class, [
				'label' => "Accepter les clauses.",
				'mapped' => false,
				'constraints' => [
					new IsTrue([
						'message' => 'Vous devez acceptez nos clauses.',
					]),
				],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}

<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('userName', TextType::class, [

				'label' => 'Pseudo‑onyme',

				'attr' => [
					'minlength' => '4',
					'maxlength' => '255',
					'placeholder' => '255 caractères maximum.‬'
				]
			])

			/* Prénom */
			->add('firstName', TextType::class, [

				'label' => 'Prénom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '255 caractères maximum.‬'
				]
			])

			/* Nom */
			->add('lastName', TextType::class, [

				'label' => 'Nom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '255 caractères maximum.‬'
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

			->add('password', PasswordType::class, [

				'label' => 'Mot de passe',

				'attr' => [
					'minlength' => '6',
					'maxlength' => '255',
					'placeholder' => '6 caractères minimum & 255 caractères maximum.‬'
				]
			])

			->add('confirmPassword', PasswordType::class, [

				'label' => 'Confirmer le mot de passe',

				'attr' => [
					'minlength' => '6',
					'maxlength' => '255',
					'placeholder' => '6 caractères minimum & 255 caractères maximum.‬'
				]
			])

			->add('createdAt', DateTimeType::class, [

				'label' => 'Date de création',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],
			])

			->add('updatedAt', DateTimeType::class, [

				'label' => 'Date de mise à jours',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],
			])
			->add('isDisabled', ChoiceType::class, [

				'label' => 'Activé',

				'choices' => [
					'Oui' => 1,
					'Non' => 0,
				],
			])

			->add('role', ChoiceType::class, [

				'label' => 'Rôle',

				'multiple' => true,
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
					'Étudiant' => 'ROLE_STUDENT',
					'Professeur' => 'ROLE_PROFESSOR',
					'Administrateur' => 'ROLE_ADMIN'
				]
			])

			->add('imageFile', VichImageType::class, [

				'label' => "Inséré une image",
				'required' => false,
				'download_uri' => false,

				'download_label' => "Télécharger l'image",
				// 'asset_helper' => true,
				'attr' => ['placeholder' => 'Photo']
				// 'attr' => ['class' => 'form-control']
			])

			->add('lastLogAt', DateTimeType::class, [

				'label' => 'Date de dernière connection',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],

			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}

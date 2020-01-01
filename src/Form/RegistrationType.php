<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('firstName', TextType::class, [
				'label' => 'Prénom',
				'required' => true
			])

			->add('lastName', TextType::class, [
				'label' => 'Nom',
				'required' => true
			])

			->add('userName', TextType::class, [
				'label' => 'Nom d\'utilisateur',
				'required' => true

			])
			->add('email', EmailType::class, [
				'label' => 'Courriel',
				'required' => true
			])

			->add('password', PasswordType::class, [
				'label' => 'Mot de passe',
				'required' => true,
				// instead of being set onto the object directly,
				// this is read and encoded in the controller
				'mapped' => false,
				'constraints' => [
					new NotBlank([
						'message' => 'Please enter a password',
					]),
					new Length([
						'min' => 6,
						'minMessage' => 'Your password should be at least {{ limit }} characters',
						// max length allowed by Symfony for security reasons
						'max' => 4096,
					]),
				],
			])

			->add('confirmPassword', PasswordType::class, [
				'label' => 'Confirmation de mot de passe',
				'required' => true

			])
			/*
			->add('createdAt', DateTimeType::class, [
				'label' => "Date de création",
				'data' => new \DateTime()
			])
			*/

			->add('createdAt', DateType::class, [

				// 'label' => "Date de création",
				'label' => false,
				/* Pour ne pas l'afficher dans le new, sinon : "Date de inscription :" */

				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;']
			])

			->add('updatedAt', DateType::class, [
				'label' => false,
				/* Pour ne pas l'afficher dans le new, sinon : "Date de inscription :" */

				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;']
			])


			->add('lastLogAt', DateType::class, [
				'label' => false,
				/* Pour ne pas l'afficher dans le new, sinon : "Date de inscription :" */

				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;']
			])

			->add('isDisabled', IntegerType::class, [

				// 'label' => "Visible",
				'label' => false,

				'data' => '0',

				'attr' => ['style' => 'display:none;']
			])
			->add('roles', ChoiceType::class, [

				'label' => false,
				'multiple' => true,
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
				],
				'preferred_choices' => ['Utilisateur' => 'ROLE_USER'],

				'attr' => ['style' => 'display:none;']

				/*
				 * ->add('roles', ChoiceType::class, [

				'label' => 'Rôle',
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
					'Modérateur' => 4,
					'Contributeur' => 3,
					'Administrateur' => 'ROLE_ADMIN',
					'Super‑Administrateur' => 'ROLE_SUPER_ADMIN',
					],
				'preferred_choices' => ['Utilisateur' => 5],
					*/

			])
			->add('image', FileType::class, [
				'label' => "Inséré votre image",

				'data_class' => null,

				'required' => false
			])

			->add('agreeTerms', CheckboxType::class, [
				'label' => "Accepter les clauses.",
				'mapped' => false,
				'constraints' => [
					new IsTrue([
						'message' => 'Vous devez acceptez nos clauses.',
					]),
				],
			])

			->add('submit', SubmitType::class);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}
<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Vich\UploaderBundle\Form\Type\VichImageType;

class AdminUserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder

			->add('role', ChoiceType::class, [

				'label' => 'Rôle',

				'multiple' => true,
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
					'Étudiant' => 'ROLE_STUDENT',
					'Professeur' => 'ROLE_PROFESSOR',
					'Administrateur' => 'ROLE_ADMIN'
				]
			]);

			/*
			->add('imageFile', VichImageType::class, [

				// 'disabled' => true,
				'label' => "Inséré une image",
				'allow_delete' => false,
				'required' => false,
				'download_uri' => false,
				'image_uri' => false,

				'download_label' => "Télécharger l'image",
				// 'asset_helper' => true,
				'attr' => ['placeholder' => 'Photo']
				// 'attr' => ['class' => 'form-control']
			]);
			*/

	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}

<?php

namespace App\Form;

use App\Entity\Course;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Generator\UrlGenerator as BaseUrlGenerator ;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Vich\UploaderBundle\Form\Type\VichImageType;

class CourseType extends AbstractType
{

	/*
	public $router;

	public function __construct(UrlGeneratorInterface $router)
	{
		$this->router = $router;
	}
	*/

	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
			->add('name', TextType::class, [

				'label' => 'Nomination',

				'attr' => [
					'minlength' => '4',
					'maxlength' => '120',
					'placeholder' => '120 caractères maximum.‬'
				]
			])

			->add('smallDescription', TextType::class, [

				'label' => 'Déscription courte',

				'attr' => [
					'minlength' => '4',
					'maxlength' => '255',
					'placeholder' => '255 caractères maximum.‬'
				]
			])

			->add('fullDescription', TextType::class, [

				'label' => 'Déscription longue',

				'attr' => [
					'minlength' => '20',
					'maxlength' => '65536‬',
					'placeholder' => '65.536 caractères maximum.‬'
				]
			])

			->add('duration', TextareaType::class, [

				'label' => 'Durée',

				'attr' => [
					'maxlength' => '60',
					'rows' => 2
				]
			])

			->add('price', MoneyType::class, [
				// 'attr' => ['class' => 'gaz-show-price-in-euro']

				'label' => 'Prix',

				'scale' => 2,

				'attr' => [
					'minlength' => '1',
					'maxlength' => '8',
					'type' => 'number',
					'step' => '0.01',
				]
			])

			->add('createdAt', DateTimeType::class, [

				'label' => 'Date de création',
				'data' => new \DateTime(),
			])

			->add('isPublished', ChoiceType::class, [

				'label' => 'Visible',

				'choices' => [
					'Oui' => 1,
					'Non' => 0,
				],
			])

			->add('slug')

			/*
			->add('image', FileType::class, [
				'label' => "Inséré une image",

				'data_class' => null,

				'required' => false,
			])
			*/
			->add('imageFile', VichImageType::class, [

				'label' => "Inséré une image",
				'required' => false,
				'image_uri' => false,
				'download_uri' => false,

				/*
				$builder->add('genericFile', VichImageType::class, [
					'download_uri' => static function (Course $course) use ($router) {
						return $router->generateUrl('courses_img', $course->getImage());
					},
				]),
				*/
		// Je ne suis pas parvenu à l'afficher avec l'adresse adequate et fonctionnel.

				// 'download_uri' => true,

				// String
				// 'download_uri' => $this->router->generate('courses_img', $course->getImage()),
				// 'download_uri' => $this->router->generateUrl('courses_img', $course->getImage()),
				// 'download_uri' => $this->router->generate('courses_img', $course->getImage()),

				// Static
				// 'download_uri' => static function (Course  $course) {
				//	    return $this->router->generate('courses_img', $course->getImage());
				// },
				// 'download_uri' => static function (Course  $course) use ($router) {
				//		return $router->generateUrl('courses_img', $course->getImage());
				//	},

				'download_label' => "Télécharger l'image",
				// 'asset_helper' => true,
				'attr' => ['placeholder' => 'Photo']
				// 'attr' => ['class' => 'form-control']
			])

			->add('schedule', TextareaType::class, [
				'attr' => ['rows' => '2'],
				'label' => "Planning",
			])

			->add('programFile', VichImageType::class, [

				'required' => false,
				'label' => "P.D.F. explicatif du cours",
				'download_uri' => false,
			])
			/*
			->add('program', FileType::class, [

				'label' => "P.D.F. explicatif du cours",

				'data_class' => null,

				'empty_data' => "default.pdf",

				'required' => false,

			])
			*/

			->add('professor', EntityType::class, array(

				'class' => User::class,

				'query_builder' => function (EntityRepository $repository) {
					return $repository->createQueryBuilder('c')
						->where('c.role LIKE :role')
						->setParameter('role', '%ROLE_PROFESSOR%')
						->orderBy('c.userName', 'ASC');
				}

			))

			->add('category')

			->add('level')
		;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Course::class,
		]);
	}
}

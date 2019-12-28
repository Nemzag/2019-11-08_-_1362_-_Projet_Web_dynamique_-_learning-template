<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-12-05
 * Time: 14h24
 * Updated:
*/


namespace App\DataFixtures;

// Bien ajouté le extends.
// Bien ajouté implements.
use App\Entity\Course;
use App\Entity\Comment;
use App\Entity\User;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{

	public function load(ObjectManager $manager)
		// Injection de dépendance récupère la méthode getDoctrine.
	{
		// $product = new Product();
		// $manager->persist($product);

		// Create Faker pour Comment
		$faker = Factory::create('fr_FR');

		$courses = $manager->getRepository(Course::class)->findAll();
		$users = $manager->getRepository(User::class)->findAll();

		for ($i = 1; $i < 10; $i++) {

			// Instanciation
			// $slugify = new Slugify();
			$comment = new Comment();

			// Faker Generation

			$comment->setComment($faker->text($maxNbChars = 255));
			$comment->setDateAddedAt($faker->dateTimeThisYear("now"));
			$comment->setUser($users[$faker->numberBetween(0, count($users) - 1)]); // Le P.D.F. de’s cours.
			$comment->setCourse($courses[$faker->numberBetween(0, count($courses) - 1)]);
			// nombre aleatoire à générer. Moins 1 car dans la d ?
			$comment->setEvaluation($faker->numberBetween(0, 5));                   // Offset

			// Persist Datha.
			$manager->persist($comment);
		}

		// Flush Datha in Datha‑Base.
		$manager->flush();
	}

	// Ce nom est obligatorie et proposé car j'utilise une interface.
	public function getDependencies()
	{
		// TODO: Implement getDependencies() method.
		return [
			UserFixtures::class,
			CourseFixtures::class
		];
	}
}
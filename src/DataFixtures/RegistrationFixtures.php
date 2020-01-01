<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2019-12-28
 * Time: 19h34
 * Updated:
*/

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\Registration;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class RegistrationFixtures extends fixture implements DependentFixtureInterface
{

	public function load(ObjectManager $manager)
	{
		// Injection de dépendance récupère la méthode getDoctrine.
		{
			// $product = new Product();
			// $manager->persist($product);

			// Create Faker pour Course
			$faker = Factory::create('fr_FR');

			// On a besoin de toute les categories.
			// Utilisation de repository des categories pour invoquer la méthode findAll.
			$users = $manager->getRepository(User::class)->findAll();
			// Comme j'utilise ObjectManager, je ne dois pash invoquer getDoctrine
			$courses = $manager->getRepository(Course::class)->findAll();

			for ($i = 1; $i < 20; $i++) {

				// Instanciation
				$registration = new Registration();

				$registration->setUser($users[$faker->numberBetween(0, count($users) - 1)]);

				$registration->setCourse($courses[$faker->numberBetween(0, count($courses) - 1)]); // Offset

				$registration->setCreatedAt($faker->dateTimeBetween("-6 month", "-3 month"));

				// N'oubli pas de ajouter à l'affichage number_format().
				$registration->setAmount(round($faker->randomFloat(2, 200, 2000)), -4);

				// Persist Datha.
				$manager->persist($registration);
			}

			// Flush Datha in Datha‑Base.
			$manager->flush();
		}
	}

	// Ce nom est obligatorie et proposé car j'utilise une interface.
	public function getDependencies()
	{
		// TODO: Implement getDependencies() method.
		return [
			CourseFixtures::class,
			UserFixtures::class
		];
	}
}
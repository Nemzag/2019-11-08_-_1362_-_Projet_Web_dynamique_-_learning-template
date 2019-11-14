<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 13/11/2019
 * Time: 22:31
 * Updated:
*/

namespace App\DataFixtures;

use App\Entity\CourseLevel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory ; // Le use pour le bundle Faker

// Bien ajouté le extends.
class CourseLevelFixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		// $product = new Product();
		// $manager->persist($product);

		// Create Faker pour Course
		$faker = Factory::create('fr_FR');

		for ($i = 0; $i < 20; $i++) {

			// Instanciation
			$CoursesLevel = new CourseLevel();

			$CoursesLevel->setName($faker->text($maxNbChars = 30));
			$CoursesLevel->setPrerequisite($faker->text($maxNbChars = 255));

			// Persist Datha.
			$manager->persist($CoursesLevel);
		}

		// Flush Datha in Datha‑Base.
		$manager->flush();
	}
}
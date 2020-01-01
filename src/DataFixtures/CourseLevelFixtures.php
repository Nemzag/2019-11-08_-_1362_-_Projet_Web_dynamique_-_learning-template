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

	// Je veux générer quelque chose de correct.
	private $levels = [
		'C2D',  /* Certificat du Deuxième Degré. */
		'CEB',  /* Certificat d'Étude de Base. */
		'CESI', /* Certificat d'Enseignement Secondaire Inférieur. */
		'CESS', /* Certificat d'Enseignement Secondaire Supérieur. */
		'CQ'    /* Certificat de Qualification. */
	];

	public function load(ObjectManager $manager)
	{
		// $product = new Product();
		// $manager->persist($product);

		// Create Faker pour Course
		$faker = Factory::create('fr_FR');

		foreach($this->levels as $level) {

			// Instanciation
			$CoursesLevel = new CourseLevel();

			$CoursesLevel->setName($level);
			$CoursesLevel->setPrerequisite($faker->text($maxNbChars = 255));

			// Persist Datha.
			$manager->persist($CoursesLevel);
		}

		// Flush Datha in Datha‑Base.
		$manager->flush();
	}
}
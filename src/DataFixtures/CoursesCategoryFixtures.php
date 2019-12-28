<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 13/11/2019
 * Time: 21:02
 * Updated:
*/

namespace App\DataFixtures;

use App\Entity\CourseCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory ; // Le use pour le bundle Faker

// Bien ajouté le extends.
class CoursesCategoryFixtures extends Fixture
{
	// Je veux générer quelque chose de correct.
	private $categories = [
		'Artisanat',
		'Artistique',
		'Bien être',
		'Coiffure',
		'Économie',
		'Éducation',
		'Informatique de bureau',
		'Langue',
		'Machinerie',
		'Mathématique',
		'Mécanique',
		'Programmation',
		'Social',
		'Science',
		'Science ħumaine',
		'Technique',
		'Techno‑logie'
	];

	public function load(ObjectManager $manager)
	{
		// $product = new Product();
		// $manager->persist($product);

		// Create Faker pour Course
		$faker = Factory::create('fr_FR');
		// Initialisation du générateur Faker

		foreach($this->categories as $cat) {

			// Instanciation
			$CoursesCategory = new CourseCategory();

			// Faker
			$CoursesCategory->setName($cat);
			$CoursesCategory->setDescription($faker->sentence(14, true));

			// Persist Datha.
			$manager->persist($CoursesCategory);
	    }

		// Flush Datha in Datha‑Base.
		$manager->flush();
	}
}
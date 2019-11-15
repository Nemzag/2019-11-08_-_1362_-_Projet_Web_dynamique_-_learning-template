<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 13/11/2019
 * Time: 20:40
 * Updated:
*/

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseLevel;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory ; // Le use pour le bundle Faker

// Bien ajouté le extends.
// Bien ajouté implements.
class CourseFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
	    // Injection de dépendance récupère la méthode getDoctrine.
    {
        // $product = new Product();
        // $manager->persist($product);

	    // Create Faker pour Course
	    $faker = Factory::create('fr_FR');

	    // On a besoin de toute les categories.
	    // Utilisation de repository des categories pour invoquer la méthode findAll.
	    $categories = $manager->getRepository(CourseCategory::class)->findAll();
	    // Comme j'utilise ObjectManager, je ne dois pash invoquer getDoctrine
	    $level = $manager->getRepository(CourseLevel::class)->findAll();

	    for ($i = 1; $i < 20; $i++) {

		    // Instanciation
		    $slugify = new Slugify();
		    $course = new Course();

		    // Faker Generation
		    $course->setName($faker->text($maxNbChars =  40));
		    $course->setSmallDescription($faker->sentence(14, true));
		    $course->setFullDescription($faker->paragraphs(4, true));
		    $course->setDuration($faker->text(60));
		    $course->setPrice($faker->randomFloat(2, 50, 250));
		    $course->setCreatedAt($faker->dateTime("now"));
		    $course->setIsPublished(1);
		    // Slug
		    $course->setSlug($slugify->slugify($course->getName()));
		    $course->setImage($i.'.jpg');
		    $course->setSchedule($faker->sentence(7, true));
		    $course->setProgram($faker->text($maxNbChars = 251) . '.pdf'); // Le P.D.F. de’s cours.
		    $course->setCategory($categories[$faker->numberBetween(0, count($categories) - 1)]);
		    // nombre aleatoire à générer. Moins 1 car dans la d ?
		    $course->setLevel($level[$faker->numberBetween(0, count($level) - 1)]); // Offset

		    // Persist Datha.
		    $manager->persist($course);
	    }

	    // Flush Datha in Datha‑Base.
        $manager->flush();
    }

	// Ce nom est obligatorie et proposé car j'utilise une interface.
	public function getDependencies()
	{
		// TODO: Implement getDependencies() method.
		return [
			CoursesCategoryFixtures::class,
			CourseLevelFixtures::class
		];
	}
}
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
use App\Entity\User;
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

	    $user = $manager->getRepository(User::class)->findAll();

	    for ($i = 1; $i < 20; $i++) {

		    // Instanciation
		    $slugify = new Slugify();
		    $course = new Course();

		    // Faker Generation
		    $course->setCategory($categories[$faker->numberBetween(0, count($categories) - 1)]);

		    // nombre aleatoire à générer. Moins 1 car dans la d ?
		    $course->setLevel($level[$faker->numberBetween(0, count($level) - 1)]); // Offset

		    $course->setProfessor($user[$faker->numberBetween(0, count($user) - 1)]); // Offset

		    $course->setName($faker->text($maxNbChars =  40));

		    $course->setSmallDescription($faker->sentence(14, true));

		    $course->setFullDescription($faker->paragraphs(4, true));

		    $course->setDuration('1 an.');

		    $course->setPrice($faker->randomFloat(2, 50, 250));

		    // $course->setCreatedAt($faker->dateTime("now"));
		    $course->setCreatedAt($faker->dateTimeBetween($startDate = '-4 years', $endDate = 'now', $timezone = null));

		    $course->setIsPublished(1);

		    // Slug
		    $course->setSlug($slugify->slugify($course->getName()));

		    $course->setImage($i.'.jpg');
		    $course->setImageUpdatedAt($faker->dateTime("now"));

		    $course->setSchedule($faker->sentence(7, true));

		    $course->setProgram($faker->text($maxNbChars = 251) . '.pdf'); // Le P.D.F. de’s cours.

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
			CourseLevelFixtures::class,
			UserFixtures::class
		];
	}
}

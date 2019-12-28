<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 14/11/2019
 * Time: 13:51
 * Updated:
*/


namespace App\DataFixtures;

use App\Entity\News;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory ; // Le use pour le bundle Faker

class NewsFixtures extends Fixture
{
	public function load(ObjectManager $manager)
		// Injection de dépendance récupère la méthode getDoctrine.
	{
		// $product = new Product();
		// $manager->persist($product);

		// Create Faker pour Course
		$faker = Factory::create('fr_FR');

		// On a besoin de toute les news.
		// Utilisation de repository des news pour invoquer la méthode findAll.
		$news = $manager->getRepository(News::class)->findAll();

		for ($i = 1; $i < 20; $i++) {

			// Instanciation
			$news = new News();

			// Faker Generation
			$news->setTitle($faker->text($maxNbChars =  255));
			$news->setImage('0' . $i.'.png');
			$news->setCreatedAt($faker->dateTime("now"));
			// $news->setIsPublished(1);
			$news->setText($faker->paragraphs(8, true));

			// Persist Datha.
			$manager->persist($news);
		}

		// Flush Datha in Datha‑Base.
		$manager->flush();
	}


}
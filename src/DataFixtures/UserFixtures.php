<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 15/11/2019
 * Time: 10:12
 * Updated:
*/

namespace App\DataFixtures;

use App\Entity\User;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends fixture
{
	private $encoder;

	public function __construct(UserPasswordEncoderInterface $encoder)
	{
		$this->encoder = $encoder;
	}

	public function load(ObjectManager $manager)
	{
		// Injection de dépendance récupère la méthode getDoctrine.
		{
			// $product = new Product();
			// $manager->persist($product);

			// Create Faker pour Course
			$faker = Factory::create('fr_FR');

			// On a besoin de toute les news.
			// Utilisation de repository des news pour invoquer la méthode findAll.
			// $user = $manager->getRepository(User::class)->findAll();

			$genres = ["male", "female"];

			for ($i = 1; $i < 40; $i++) {

				// Instanciation
				$user = new User();
				$slugify = new Slugify();

				// Faker Generation
				$genre = $faker->randomElement($genres);
				$user->setFirstName($faker->firstName($genre));
				$user->setLastName($faker->lastName);
				$user->setUserName($user->getFirstName() . $user->getLastName());
				// $user->setEmail($slugify->slugify($user->getFirstName() . "." . $user->getLastName()) . "@gmail.com");
				$user->setEmail(($slugify->slugify($user->getFirstName())) . "." . ($slugify->slugify($user->getLastName())) . "@gmail.com");
				// Double Slugification, car il remplace le "." par "-". Et je ne veux pash.
				$genre = $genre == 'male' ? 'm' : 'f';
				$user->setImage('0' . ($i+9). $genre . '.jpg');
				$user->setPassword('password');
				$user->setPassword($this->encoder->encodePassword($user, $user->getPassword()));
				$user->setCreatedAt($faker->dateTimeBetween("-6 month", "-3 month"));
				$user->setUpdatedAt($faker->dateTimeBetween("-3 month", "now"));
				$user->setLastLogAt($faker->dateTimeBetween("now"));
				$user->setIsDisabled($faker->boolean(20));
				$user->setRole(["ROLE_USER"]);

				// Persist Datha.
				$manager->persist($user);
			}

			// Flush Datha in Datha‑Base.
			$manager->flush();
		}
	}

}
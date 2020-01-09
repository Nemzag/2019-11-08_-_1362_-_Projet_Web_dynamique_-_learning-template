<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 15/11/2019
 * Time: 10:12
 * Updated:
*/

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\Registration;
use App\Entity\User;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
// use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends fixture /* implements DependentFixtureInterface */
{
	private $encoder;

	public function __construct(UserPasswordEncoderInterface $encoder)
	{
		$this->encoder = $encoder;
	}

	// Je veux générer quelque chose de correct.
	private $roleFixtures = [
		'ROLE_USER',
		'ROLE_STUDENT',
		'ROLE_PROFESSOR',
		'ROLE_ADMIN',
	];


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

			for ($i = 1; $i < 20; $i++) {

				foreach ($this->roleFixtures as $roleFixture) {

					// Instanciation
					$user = new User();
					$slugify = new Slugify();

					// Faker Generation
					$genre = $faker->randomElement($genres);

					$user->setFirstName($faker->firstName($genre));

					$user->setLastName($faker->lastName);

					// Afin de générer le UserName après LastName & FirstName.
					// $user->setUserName($user->getFirstName() . ' ' . $user->getLastName());

					$user->setUserName($faker->userName);

					$user->setEmail(($slugify->slugify($user->getFirstName())) . "." . ($slugify->slugify($user->getLastName())) . "@gmail.com");

					// Double Slugification, car il remplace le "." par "-". Et je ne veux pash.
					$user->setPassword('password');
					$user->setPassword($this->encoder->encodePassword($user, $user->getPassword()));

					$user->setCreatedAt($faker->dateTimeBetween("-6 month", "-3 month"));

					$user->setUpdatedAt($faker->dateTimeBetween("-3 month", "now"));

					$user->setLastLogAt($faker->dateTimeBetween("now"));

					$user->setIsDisabled($faker->boolean(1));

					$user->setRole([$roleFixture]);

					$genre = $genre == 'male' ? 'm' : 'f';

					$user->setImage('0' . ($i + 9) . $genre . '.jpg');
					$user->setImageUpdatedAt($faker->dateTime("now"));

					// Persist Datha.
					$manager->persist($user);

				}
			}

			// Flush Datha in Datha‑Base.
			$manager->flush();
		}
	}


}
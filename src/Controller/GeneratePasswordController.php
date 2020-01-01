<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2019-12-28
 * Time: 23h30
 * Updated:
*/


namespace App\Controller;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Routing\Annotation\Route;

class GeneratePasswordController
{
	/**
	 * @Route("/generate_password", name="generate_password")
	 * @param UserPasswordEncoderInterface $encoder
	 */
	public function GeneratePassword(UserPasswordEncoderInterface $encoder)
	{
		$user = new User();
		$plainPassword = 'password';
		$encoded = $encoder->encodePassword($user, $plainPassword);

		dump($encoded);
		// $argon2i$v=19$m=65536,t=4,p=1$d3dwcGNkOXVUSkJXbFZhdA$+34zsdsDRtPx4DgaO3liFzJRgxL40Lz6OAdSQzcT0zs
	}
}
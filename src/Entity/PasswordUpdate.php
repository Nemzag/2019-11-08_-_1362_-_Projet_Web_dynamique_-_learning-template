<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-04
 * Time: 13h48
 * Updated:
*/

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PasswordUpdate
{
	/**
	 * @SecurityAssert\UserPassword(
	 *     message = "Mauvaise valeur pour votre mot de passe actuel.",
	 * )
	 * @Assert\NotBlank(
	 *     message = "S.V.P. inséré un mot de passe",
	 * )
	 * @Assert\Length(
	 *      min = 6,
	 *      max = 255,
	 *      minMessage = "Le mot de passe doit contenir au minimum {{ limit }} caractères.",
	 *      maxMessage = "Le mot de passe doit contenir au maximum {{ limit }} caractères.",
	 * )
	 */
	private $newPassword;

	/**
	 * @return mixed
	 */
	public function getNewPassword()
	{
		return $this->newPassword;
	}

	/**
	 * @param mixed $newPassword
	 */
	public function setNewPassword($newPassword): void
	{
		$this->newPassword = $newPassword;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Assert\NotBlank(
	 *      message = "S.V.P. inséré un mot de passe",
	 * )
	 * @Assert\Length(
	 *      min = 6,
	 *      max = 255,
	 *      minMessage = "Le mot de passe doit contenir au minimum {{ limit }} caractères.",
	 *      maxMessage = "Le mot de passe doit contenir au maximum {{ limit }} caractères.",
	 * )
	 */
	private $oldPassword;

	/**
	 * @return mixed
	 */
	public function getOldPassword()
	{
		return $this->oldPassword;
	}

	/**
	 * @param mixed $oldPassword
	 */
	public function setOldPassword($oldPassword): void
	{
		$this->oldPassword = $oldPassword;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	private $confirmPassword;
	/**
	 * @Assert\NotBlank(
	 *     message = "S.V.P. inséré un mot de passe",
	 * )
	 * @Assert\EqualTo(propertyPath="newPassword", message="Le mot de passe doit être identique")
	 * @Assert\Length(
	 *      min = 6,
	 *      max = 255,
	 *      minMessage = "Le mot de passe doit contenir au minimum {{ limit }} caractères.",
	 *      maxMessage = "Le mot de passe doit contenir au maximum {{ limit }} caractères.",
	 * )
	 */

	/**
	 * @return mixed
	 */
	public function getConfirmPassword()
	{
		return $this->confirmPassword;
	}

	/**
	 * @param mixed $confirmPassword
	 */
	public function setConfirmPassword($confirmPassword): void
	{
		$this->confirmPassword = $confirmPassword;
	}
}
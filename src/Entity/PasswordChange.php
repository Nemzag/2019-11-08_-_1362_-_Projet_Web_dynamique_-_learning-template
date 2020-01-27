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
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class PasswordChange
{
	/**
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
	public function getNewPassword(): ?string
	{
		return $this->newPassword;
	}

	/**
	 * @param mixed $newPassword
	 * @return PasswordChange
	 */
	public function setNewPassword(string $newPassword): self
	{
		$this->newPassword = $newPassword;

		return $this;
	}
	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @SecurityAssert\UserPassword(
	 *     message = "Mauvaise valeur pour votre mot de passe actuel.",
	 * )
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
	private $confirmNewPassword;

	/**
	 * @return mixed
	 */
	public function getConfirmNewPassword()
	{
		return $this->confirmNewPassword;
	}

	/**
	 * @param mixed $confirmNewPassword
	 */
	public function setConfirmNewPassword($confirmNewPassword): void
	{
		$this->confirmNewPassword = $confirmNewPassword;
	}
}
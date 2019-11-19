<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $userName;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $firstName;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $lastName;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $email;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $password;

	/**
	 * @Assert\EqualTo(propertyPath="password", message="Le mot de passe doit être identique")
	 */
	public $confirmPassword;

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $createdAt;

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $updatedAt;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isDisabled;

	/**
	 * @ORM\Column(type="json")
	 */
	private $role = [];

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $image;

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $lastLogAt;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getUsername(): string
		// Le point de interrogation ?string signifie que il peut être nul. 7.2.
		// Dans le code du prof il ne l'a pash mit.
	{
		// return $this->userName;
		return (string) $this->email;
	}

	public function setUserName(string $userName): self
	{
		$this->userName = $userName;

		return $this;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail(string $email): self
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * @param mixed $firstName
	 */
	public function setFirstName($firstName): void
	{
		$this->firstName = $firstName;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * @param mixed $lastName
	 */
	public function setLastName($lastName): void
	{
		$this->lastName = $lastName;
	}

	public function getPassword(): ?string
	{
		return $this->password;
	}

	public function setPassword(string $password): self
	{
		$this->password = $password;

		return $this;
	}

	public function getCreatedAt(): ?\DateTimeInterface
	{
		return $this->createdAt;
	}

	public function setCreatedAt(\DateTimeInterface $createdAt): self
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	public function getIsDisabled(): ?bool
	{
		return $this->isDisabled;
	}

	public function setIsDisabled(bool $isDisabled): self
	{
		$this->isDisabled = $isDisabled;

		return $this;
	}

	public function getUpdatedAt(): ?\DateTimeInterface
	{
		return $this->updatedAt;
	}

	public function setUpdatedAt(\DateTimeInterface $updatedAt): self
	{
		$this->updatedAt = $updatedAt;

		return $this;
	}

	public function getImage(): ?string
	{
		return $this->image;
	}

	public function setImage(string $image): self
	{
		$this->image = $image;

		return $this;
	}

	/**
	 * Returns the roles granted to the user.
	 *
	 * <code>
	 * public function getRoles()
	 * {
	 *     return array('ROLE_USER');
	 * }
	 * </code>
	 *
	 * Alternatively, the roles might be stored on a ``roles`` property,
	 * and populated in any number of different ways when the user object
	 * is created.
	 *
	 * @return Role[] The user roles
	 */
	public function getRoles()
	{
		// TODO: Implement getRoles() method.
		return ['ROLE_USER'];
	}

	public function getRole(): ?array
	{
		return $this->role;
	}

	public function setRole(array $role): self
	{
		$this->role = $role;

		return $this;
	}

	/**
	 * Returns the salt that was originally used to encode the password.
	 *
	 * This can return null if the password was not encoded using a salt.
	 *
	 * @return string|null The salt
	 */
	public function getSalt()
	{
		// TODO: Implement getSalt() method.
	}

	/**
	 * Removes sensitive data from the user.
	 *
	 * This is important if, at any given point, sensitive information like
	 * the plain-text password is stored on this object.
	 */
	public function eraseCredentials()
	{
		// TODO: Implement eraseCredentials() method.
	}

	public function getLastLogAt(): ?\DateTimeInterface
	{
		return $this->lastLogAt;
	}

	public function setLastLogAt(\DateTimeInterface $lastLogAt): self
	{
		$this->lastLogAt = $lastLogAt;

		return $this;
	}
}

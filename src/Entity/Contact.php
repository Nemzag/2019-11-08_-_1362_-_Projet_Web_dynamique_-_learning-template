<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
	/**
	 * @var string|null
	 * @Assert\NotBlank()
	 * @Assert\Length(min=2)
	 */
	private $firstName;

		/**
		 * @var string|null
		 * @Assert\NotBlank()
		 * @Assert\Length(min=2)
		 */
	private $lastName;

			/**
			 * @var string|null
			 * @Assert\NotBlank()
			 * @Assert\email
			 */
			// Fonctionnalité spécifique de’s contrainte’s.
	private $email;

		/**
		 * @var string|null
		 * @Assert\NotBlank()
		 * @Assert\Length(min=5)
		 */
	private $subject;

			/**
			 * @var string|null
			 * @Assert\NotBlank()
			 * @Assert\Length(min=10)
			 */
	private $message;

	/**
	 * @return string|null
	 */
	public function getFirstName(): ?string
	{
		return $this->firstName;
	}

	/**
	 * @param string|null $firstName
	 */
	public function setFirstName(?string $firstName): void
	{
		$this->firstName = $firstName;
	}

	/**
	 * @return string|null
	 */
	public function getLastName(): ?string
	{
		return $this->lastName;
	}

	/**
	 * @param string|null $lastName
	 */
	public function setLastName(?string $lastName): void
	{
		$this->lastName = $lastName;
	}

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @param string|null $email
	 */
	public function setEmail(?string $email): void
	{
		$this->email = $email;
	}

	/**
	 * @return string|null
	 */
	public function getSubject(): ?string
	{
		return $this->subject;
	}

	/**
	 * @param string|null $subject
	 */
	public function setSubject(?string $subject): void
	{
		$this->subject = $subject;
	}

	/**
	 * @return string|null
	 */
	public function getMessage(): ?string
	{
		return $this->message;
	}

	/**
	 * @param string|null $message
	 */
	public function setMessage(?string $message): void
	{
		$this->message = $message;
	}


}

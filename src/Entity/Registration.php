<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegistrationRepository")
 */
class Registration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

	public function getId(): ?int
	{
		return $this->id;
	}

	//=======================================================================================

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

	public function getUser(): ?User
	{
		return $this->user;
	}

	public function setUser(?User $user): self
	{
		$this->user = $user;

		return $this;
	}

	//=======================================================================================

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=false)
     */
    private $course;

	public function getCourse(): ?Course
	{
		return $this->course;
	}

	public function setCourse(?Course $course): self
	{
		$this->course = $course;

		return $this;
	}

	//=======================================================================================

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

	public function getCreatedAt(): ?\DateTimeInterface
	{
		return $this->createdAt;
	}

	public function setCreatedAt(\DateTimeInterface $createdAt): self
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	//=======================================================================================

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

	public function getAmount(): ?int
	{
		return $this->amount;
	}

	public function setAmount(int $amount): self
	{
		$this->amount = $amount;

		return $this;
	}

	//=======================================================================================

}

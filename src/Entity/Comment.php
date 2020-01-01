<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 * @UniqueEntity(
 *     fields={"user", "course"},
 *     message="Vous avez déjà commenté."
 * )
 */
class Comment
{
	public function __toString()
	{
		return $this->comment;
	}

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

	//══════════════════════════════════════════════════════════════════════════════════════════════

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *     min="5",
     *     max="255",
     *     minMessage="La notation doit être de {{ limit }} caractères minimum.",
     *     maxMessage="Le notation doit être de {{ limit }} caractères maximum.",
     * )
     */
    private $comment;

	public function getComment(): ?string
	{
		return $this->comment;
	}

	public function setComment(string $comment): self
	{
		$this->comment = $comment;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateAddedAt;

	public function getDateAddedAt(): ?\DateTimeInterface
	{
		return $this->dateAddedAt;
	}

	public function setDateAddedAt(\DateTimeInterface $dateAddedAt): self
	{
		$this->dateAddedAt = $dateAddedAt;

		return $this;
	}
	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
     * @ORM\Column(type="integer")
     */
    private $evaluation;

	public function getEvaluation(): ?int
	{
		return $this->evaluation;
	}

	public function setEvaluation(int $evaluation): self
	{
		$this->evaluation = $evaluation;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="comments")
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

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course", inversedBy="comments")
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
}

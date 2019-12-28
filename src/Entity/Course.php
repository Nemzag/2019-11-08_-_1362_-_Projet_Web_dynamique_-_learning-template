<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
 */
class Course
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

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=120)
	 */
	private $name;

	public function getName(): ?string
                  	{
                  		return $this->name;
                  	}

	public function setName(string $name): self
                  	{
                  		$this->name = $name;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $smallDescription;

	public function getSmallDescription(): ?string
                  	{
                  		return $this->smallDescription;
                  	}

	public function setSmallDescription(string $smallDescription): self
                  	{
                  		$this->smallDescription = $smallDescription;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="text")
	 */
	private $fullDescription;

	public function getFullDescription(): ?string
                  	{
                  		return $this->fullDescription;
                  	}

	public function setFullDescription(string $fullDescription): self
                  	{
                  		$this->fullDescription = $fullDescription;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=60)
	 */
	private $duration;


	public function getDuration(): ?string
                  	{
                  		return $this->duration;
                  	}

	public function setDuration(string $duration): self
                  	{
                  		$this->duration = $duration;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="float")
	 */
	private $price;

	public function getPrice(): ?float
                  	{
                  		return $this->price;
                  	}

	public function setPrice(float $price): self
                  	{
                  		$this->price = $price;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

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

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isPublished;

	public function getIsPublished(): ?bool
                  	{
                  		return $this->isPublished;
                  	}

	public function setIsPublished(bool $isPublished): self
                  	{
                  		$this->isPublished = $isPublished;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $slug;

	public function getSlug(): ?string
                  	{
                  		return $this->slug;
                  	}

	public function setSlug(string $slug): self
                  	{
                  		$this->slug = $slug;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $image;

	public function getImage(): ?string
                  	{
                  		return $this->image;
                  	}

	public function setImage(string $image): self
                  	{
                  		$this->image = $image;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $schedule;

	public function getSchedule(): ?string
                  	{
                  		return $this->schedule;
                  	}

	public function setSchedule(string $schedule): self
                  	{
                  		$this->schedule = $schedule;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $program;

	public function getProgram(): ?string
                  	{
                  		return $this->program;
                  	}

	public function setProgram(string $program): self
                  	{
                  		$this->program = $program;
                  
                  		return $this;
                  	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\CourseCategory", inversedBy="courses")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $category;

	public function getCategory(): ?CourseCategory
                  	{
                  		return $this->category;
                  	}

	public function setCategory(?CourseCategory $category): self
                  	{
                  		$this->category = $category;
                  
                  		return $this;
                  	}

	//═════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\CourseLevel")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $level;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="course")
	 */
	private $comments;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $professor;

	public function __construct()
                  	{
                  		$this->comments = new ArrayCollection();
                  	}

	public function getLevel(): ?CourseLevel
                  	{
                  		return $this->level;
                  	}

	public function setLevel(?CourseLevel $level): self
                  	{
                  		$this->level = $level;
                  
                  		return $this;
                  	}

	/**
	 * @return Collection|Comment[]
	 */
	public function getComments(): Collection
                  	{
                  		return $this->comments;
                  	}

	public function addComment(Comment $comment): self
                  	{
                  		if (!$this->comments->contains($comment)) {
                  			$this->comments[] = $comment;
                  			$comment->setCourse($this);
                  		}
                  
                  		return $this;
                  	}

	public function removeComment(Comment $comment): self
                  	{
                  		if ($this->comments->contains($comment)) {
                  			$this->comments->removeElement($comment);
                  			// set the owning side to null (unless already changed)
                  			if ($comment->getCourse() === $this) {
                  				$comment->setCourse(null);
                  			}
                  		}
                  
                  		return $this;
                  	}

    public function getProfessor(): ?User
    {
        return $this->professor;
    }

    public function setProfessor(?User $professor): self
    {
        $this->professor = $professor;

        return $this;
    }


	//══════════════════════════════════════════════════════════════════════════════════════════════
}

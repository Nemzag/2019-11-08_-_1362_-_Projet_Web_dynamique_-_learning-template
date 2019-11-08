<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CourseCategory", mappedBy="course")
     */
    private $categoryId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CourseLevel", mappedBy="course")
     */
    private $levelId;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $smallDescription;

    /**
     * @ORM\Column(type="text")
     */
    private $fullDescription;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $duration;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_published;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $schedule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $program;

    public function __construct()
    {
        $this->categoryId = new ArrayCollection();
        $this->levelId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|CourseCategory[]
     */
    public function getCategoryId(): Collection
    {
        return $this->categoryId;
    }

    public function addCategoryId(CourseCategory $categoryId): self
    {
        if (!$this->categoryId->contains($categoryId)) {
            $this->categoryId[] = $categoryId;
            $categoryId->setCourse($this);
        }

        return $this;
    }

    public function removeCategoryId(CourseCategory $categoryId): self
    {
        if ($this->categoryId->contains($categoryId)) {
            $this->categoryId->removeElement($categoryId);
            // set the owning side to null (unless already changed)
            if ($categoryId->getCourse() === $this) {
                $categoryId->setCourse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CourseLevel[]
     */
    public function getLevelId(): Collection
    {
        return $this->levelId;
    }

    public function addLevelId(CourseLevel $levelId): self
    {
        if (!$this->levelId->contains($levelId)) {
            $this->levelId[] = $levelId;
            $levelId->setCourse($this);
        }

        return $this;
    }

    public function removeLevelId(CourseLevel $levelId): self
    {
        if ($this->levelId->contains($levelId)) {
            $this->levelId->removeElement($levelId);
            // set the owning side to null (unless already changed)
            if ($levelId->getCourse() === $this) {
                $levelId->setCourse(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSmallDescription(): ?string
    {
        return $this->smallDescription;
    }

    public function setSmallDescription(string $smallDescription): self
    {
        $this->smallDescription = $smallDescription;

        return $this;
    }

    public function getFullDescription(): ?string
    {
        return $this->fullDescription;
    }

    public function setFullDescription(string $fullDescription): self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->is_published;
    }

    public function setIsPublished(bool $is_published): self
    {
        $this->is_published = $is_published;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

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

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(string $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function getProgram(): ?string
    {
        return $this->program;
    }

    public function setProgram(string $program): self
    {
        $this->program = $program;

        return $this;
    }
}

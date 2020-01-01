<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CourseCategoryRepository")
 */
class CourseCategory
{
	public function __toString()
	{
		return $this->name;
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
    private $description;

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(string $description): self
	{
		$this->description = $description;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

}

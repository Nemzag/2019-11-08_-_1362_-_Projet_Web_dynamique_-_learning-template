<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 */
class Course
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
	 * @Assert\Length(
	 *     min="4",
	 *     max="120",
	 *     minMessage="La nomination doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="La nomination  doit être de {{ limit }} caractères maximum.",
	 * )
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
	 * @Assert\Length(
	 *     min="4",
	 *     max="255",
	 *     minMessage="La courte déscription doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="La courte déscription doit être de {{ limit }} caractères maximum.",
	 *  )
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
	 * @Assert\Length(
	 *     min="20",
	 *     max="65536‬",
	 *     minMessage="La longue déscription doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="La longue déscription doit être de {{ limit }} caractères maximum.",
	 *  )
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
	 * @Assert\Length(
	 *     min="4",
	 *     max="60‬",
	 *     minMessage="La durée doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="Le durée doit être de {{ limit }} caractères maximum.",
	 *  )
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
	 * @Assert\Length(
	 *     min="1",
	 *     max="8",
	 *     minMessage="Le prix doit être de {{ limit }} € minimum.",
	 *     maxMessage="Le courte déscription doit être de {{ limit }} € maximum.",
	 * )
	 * @Assert\Type(
	 *     type = "float",
	 *     message = "Votre prix contenir que des chiffres et la décimale doit être representé par une virgule et deux chiffres minimum & maximum."
	 * )
	 * @Assert\Regex(
	 *     pattern = "/^(\d+\.{0,1}\d{0,2})$/",
	 *     htmlPattern = "[0-9]\,[0-9]{2}",
	 *     message = "Votre prix contenir que des chiffres et la décimale doit être representé par une virgule et deux chiffres minimum & maximum.",
	 * )
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
	 * @Assert\Length(
	 *     min="5",
	 *     max="255‬",
	 *     minMessage="Le « slug » doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="Le « slug » doit être de {{ limit }} caractères maximum.",
	 *  )
	 * @Assert\Regex(
	 *     pattern = "/^[a-z0-9_-]*$/",
	 *     message = "Le commêntaire doit être de type texte miniscule, chiffres, lettres, moins & moins‑dessous « _ », tout autres caractères est refusé.",
	 * )
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

	/**
	 * @ORM\PrePersist
	 * @ORM\PreUpdate
	 */
	public function createSlug() {
		$slugify = new Slugify();
		$this->slug = $slugify->slugify($this->name);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $image;

	/**
	 * @Vich\UploadableField(mapping="courses_img", fileNameProperty="image")
	 * @var File
	 * @Assert\Length(
	 *     min = 1,
	 *     max = 255,
	 *     minMessage = "L'image doit être cômposé de au moins {{ limit }} caractère.",
	 *     maxMessage = "L'image doit être cômposé de au plus {{ limit }} caractères."
	 * )
	 * @Assert\Image(
	 *     mimeTypes={"image/png", "image/jpeg", "image/jpg", "image/gif"},
	 *     mimeTypesMessage = "Ce fichier n'est pas une image valide (jpg, jpeg, gif, png).",
	 *     minWidthMessage = "Cette image a une largeur trop petite.",
	 *     minHeightMessage = "Cette image a une hauteur trop petite.",
	 *     minWidth = "100",
	 *     minHeight = "100",
	 *     disallowEmptyMessage="Vous êtes obligé de choisir une image pour le produit.",
	 *     notFoundMessage="Vous êtes obligé de choisir une image pour le produit.",
	 * )
	 */
	private $imageFile;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var DateTime
	 */
	private $imageUpdatedAt;

	// ...
	// Getter & Setter Personnel ajouté.
	public function getImageUpdatedAt(): ?DateTimeInterface
	{
		return $this->imageUpdatedAt;
	}

	public function setImageUpdatedAt(DateTimeInterface $imageUpdatedAt): self
	{
		$this->imageUpdatedAt = $imageUpdatedAt;

		return $this;
	}

	public function getImageFile()
	{
		return $this->imageFile;
	}

	public function setImageFile(File $image = null)
	{
		$this->imageFile = $image;

		// VERY IMPORTANT:
		// It is required that at least one field changes if you are using Doctrine,
		// otherwise the event listeners won't be called and the file is lost
		if ($image) {
			// if 'updatedAt' is not defined in your entity, use another property
			$this->imageUpdatedAt = new \DateTime('now');
		}
	}

	// 	public function getImage(): ?string
	public function getImage()
	{
		return $this->image;
	}

	//public function setImage($image)
	public function setImage($image): self
	{
		$this->image = $image;

		return $this;
	}

	/*
	public function getImage(): ?string
	{
		return $this->image;
	}

	public function setImage(string $image): self
	{
		$this->image = $image;

		return $this;
	}
	*/

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Length(
	 *     min = 1,
	 *     max = 255,
	 *     minMessage = "Le planning doit être cômposé de au moins {{ limit }} caractère.",
	 *     maxMessage = "Le planning doit être cômposé de au plus {{ limit }} caractères."
	 * )
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
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $program;

	/**
	 * @Vich\UploadableField(mapping="courses_pdf", fileNameProperty="program")
	 * @var File
	 * @Assert\Length(
	 *     min = 7,
	 *     max = 255,
	 *     minMessage = "Le nom de fichier du programme doit être cômposé de au moins {{ limit }} caractère.",
	 *     maxMessage = "Le nom de fichier du programme doit être cômposé de au plus {{ limit }} caractères."
	 * )
	 */
	private $programFile;

	public function setProgramFile(File $program = null)
	{
		$this->programFile = $program;

		// VERY IMPORTANT:
		// It is required that at least one field changes if you are using Doctrine,
		// otherwise the event listeners won't be called and the file is lost
		/*
		if ($image) {
			// if 'updatedAt' is not defined in your entity, use another property
			$this->imageUpdatedAt = new \DateTime('now');
		}
		*/
	}

	public function getProgramFile()
	{
		return $this->programFile;
	}

	public function getProgram(): ?string
	{
		return $this->program;
	}

	public function setProgram($program): self
	{
		$this->program = $program;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	//  * @ORM\ManyToOne(targetEntity="App\Entity\CourseCategory", inversedBy="courses")
	/*
	The association App\Entity\Course#category refers to the inverse side field App\Entity\CourseCategory#courses which does not exist.
	*/

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\CourseCategory")
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

	public function getLevel(): ?CourseLevel
	{
		return $this->level;
	}

	public function setLevel(?CourseLevel $level): self
	{
		$this->level = $level;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="course")
	 */
	private $comments;

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Id")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $professor;

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

	public function __construct()
	{
		$this->comments = new ArrayCollection();
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

	//══════════════════════════════════════════════════════════════════════════════════════════════
}

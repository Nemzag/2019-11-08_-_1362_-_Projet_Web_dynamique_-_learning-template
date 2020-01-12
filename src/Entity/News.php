<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsRepository")
 */
class News
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
     * @ORM\Column(type="string", length=255)
     */
    private $title;

	public function getTitle(): ?string
         	{
         		return $this->title;
         	}

	public function setTitle(string $title): self
         	{
         		$this->title = $title;
         
         		return $this;
         	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $image;

	/**
	 * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
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
	 *     disallowEmptyMessage="Vous êtes obligé de choisir une image pour le cours.",
	 *     notFoundMessage="Vous êtes obligé de choisir une image pour le cours.",
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

	public function setImageFile(File $image = null)
         	{
         		$this->imageFile = $image;
         
         		// VERY IMPORTANT:
         		// It is required that at least one field changes if you are using Doctrine,
         		// otherwise the event listeners won't be called and the file is lost
         		if ($image) {
         			// if 'updatedAt' is not defined in your entity, use another property
         			$this->imageUpdatedAt = new DateTime('now');
         		}
         	}

	public function getImageFile()
         	{
         		return $this->imageFile;
         	}

	// 	public function getImage(): ?string
	public function getImage()
         	{
         		return $this->image;
         	}

	//public function setImage($image)
	public function setImage(string $image): self
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
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

	public function getCreatedAt(): ?DateTimeInterface
         	{
         		return $this->createdAt;
         	}

	public function setCreatedAt(DateTimeInterface $createdAt): self
         	{
         		$this->createdAt = $createdAt;
         
         		return $this;
         	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }
}

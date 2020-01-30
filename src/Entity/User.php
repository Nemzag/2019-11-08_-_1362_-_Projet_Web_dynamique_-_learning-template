<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

use Serializable;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *     fields = {"email"},
 *     message = "Cet email est deja utilisé."
 * )
 * @Vich\Uploadable
 */
class User implements UserInterface, \Serializable
{
	public function __toString(): string
	{
		return $this->userName;
	}

	/**
	 * @see \Serializable::serialize()
	 */
	public function serialize()
	{
		return serialize(array(
			$this->id,
			$this->userName,
			$this->password,
			// see section on salt below
			// $this->salt,
		));
	}

	/**
	 * @param $serialized
	 * @see \Serializable::unserialize()
	 */
	public function unserialize($serialized)
	{
		list (
			$this->id,
			$this->userName,
			$this->password,
			// see section on salt below
			// $this->salt
			) = unserialize($serialized);
	}

	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Course", mappedBy="professor")
	 */
	private $Id;

	public function __construct()
	{
		$this->comments = new ArrayCollection();
		$this->Id = new ArrayCollection();
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Length(
	 *     min="3",
	 *     max="255",
	 *     minMessage="Le pseudonyme doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="Le pseudonyme doit être de {{ limit }} caractères maximum.",
	 * )
	 */
	private $userName;

	public function getUsername(): ?string
		// Le point de interrogation ?string signifie que il peut être nul. 7.2.
		// Dans le code du prof il ne l'a pash mit.
	{
		// return $this->userName;
		return (string)$this->userName;
	}

	public function setUserName(string $userName): self
	{
		$this->userName = $userName;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Length(
	 *     min="2",
	 *     max="255",
	 *     minMessage="Le prénom doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="Le prénom doit être de {{ limit }} caractères maximum.",
	 * )
	 * @Assert\Regex(
	 *     pattern = "/^[a-zA-Z]+$/",
	 *     htmlPattern = "[A-Za-z]",
	 *     message = "Vous devez utilisé des lettres de l'alpha‑beta et vous pouvez aussi utiliser des hyphens ou trait de unions (-, ‑).",
	 * )
	 */
	private $firstName;

	/**
	 * @return mixed
	 */
	public function getFirstName(): ?string  // Martin Brognon, l'avait pash moi.
	{
		return $this->firstName;
	}

	/**
	 * @param mixed $firstName
	 * @return User
	 */
	public function setFirstName($firstName): self // void, pash le meme que Martin.
	{
		$this->firstName = $firstName;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Length(
	 *     min="2",
	 *     max="255",
	 *     minMessage="Le nom de famille doit être de {{ limit}} caractères minimum.",
	 *     maxMessage="Le nom de famille doit être de {{ limit}} caractères maximum.",
	 * )
	 * @Assert\Regex(
	 *     pattern = "/^[a-zA-Z]+$/",
	 *     htmlPattern = "[A-Za-z]",
	 *     message = "Vous devez utilisé des lettres de l'alpha‑beta et vous pouvez aussi utiliser des hyphens ou trait de unions (-, ‑).",
	 * )
	 */
	private $lastName;

	/**
	 * @return mixed
	 */
	public function getLastName(): ?string // Martin Brognon, l'avait pash moi.
	{
		return $this->lastName;
	}

	/**
	 * @param mixed $lastName
	 * @return User
	 */
	public function setLastName($lastName): self // void, pash le meme que Martin.
	{
		$this->lastName = $lastName;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Length(
	 *     min="8",
	 *     max="255",
	 *     minMessage="Le courriel doit être de {{ limit }} caractères minimum.",
	 *     maxMessage="Le courriel doit être de {{ limit }} caractères maximum.",
	 * )
	 * @Assert\Email(
	 *     mode = "html5",
	 *     message = "Inséré une addresse valide.",
	 * )
	 */
	private $email;

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail(string $email): self
	{
		$this->email = $email;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Length(
	 *     min = 6,
	 *     max = 255,
	 *     minMessage = "Le mot de passe doit contenir au minimum {{ limit }} caractères.",
	 *     maxMessage = "Le mot de passe doit contenir au maximum {{ limit }} caractères.",
	 * )
	 */
	private $password;

	public function getPassword(): ?string
	{
		return $this->password;
	}

	public function setPassword(string $password): self
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * @Assert\EqualTo(propertyPath="password", message="Le mot de passe doit être identique")
	 * @Assert\Length(
	 *     min = 6,
	 *     max = 255,
	 *     minMessage = "Le mot de passe doit contenir au minimum {{ limit }} caractères.",
	 *     maxMessage = "Le mot de passe doit contenir au maximum {{ limit }} caractères.",
	 * )
	 */
	public $confirmPassword;

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
	 * @ORM\Column(type="datetime")
	 */
	private $updatedAt;

	public function getUpdatedAt(): ?DateTimeInterface
	{
		return $this->updatedAt;
	}

	public function setUpdatedAt(DateTimeInterface $updatedAt): self
	{
		$this->updatedAt = $updatedAt;
		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $lastLogAt;

	public function getLastLogAt(): ?DateTimeInterface
	{
		return $this->lastLogAt;
	}

	public function setLastLogAt(DateTimeInterface $lastLogAt): self
	{
		$this->lastLogAt = $lastLogAt;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isDisabled;

	public function getIsDisabled(): ?bool
	{
		return $this->isDisabled;
	}

	public function setIsDisabled(bool $isDisabled): self
	{
		$this->isDisabled = $isDisabled;

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="json")
	 */
	private $role = [];

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
	 * @return Role|string[] The user roles
	 */
	public function getRoles()
	{
		// TODO: Implement getRoles() method.
		return $this->role;
		/*
		Return [
			'ROLE_USER',
			'ROLE_PROFESSOR',
			'ROLE_ADMIN',
			'ROLE_SUPER_ADMIN'
		];
		*/
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

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $image;

	/**
	 * @Vich\UploadableField(mapping="user_img", fileNameProperty="image")
	 * @var File
	 * @Assert\Length(
	 *     min = 3,
	 *     max = 255,
	 *     minMessage = "L'image doit être cômposé de au moins {{ limit }} caractère.",
	 *     maxMessage = "L'image doit être cômposé de au plus {{ limit }} caractères."
	 * )
	 * @Assert\Image(
	 *     mimeTypes={"image/png", "image/jpeg", "image/jpg", "image/gif"},
	 *     mimeTypesMessage = "Ce fichier n'est pas une image valide.",
	 *     minWidthMessage = "Cette image a une largeur trop petite.",
	 *     minHeightMessage = "Cette image a une hauteur trop petite.",
	 *     minWidth = "50",
	 *     minHeight = "50",
	 *     disallowEmptyMessage="Vous êtes obligé de choisir une image pour le utilisateur.",
	 *     notFoundMessage="Vous êtes obligé de choisir une image pour le utilisateur.",
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
			$this->imageUpdatedAt = new DateTime('now');
		}
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
	 * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="user")
	 */
	private $comments;

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
			$comment->setUser($this);
		}

		return $this;
	}

	public function removeComment(Comment $comment): self
	{
		if ($this->comments->contains($comment)) {
			$this->comments->removeElement($comment);
			// set the owning side to null (unless already changed)
			if ($comment->getUser() === $this) {
				$comment->setUser(null);
			}
		}

		return $this;
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

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

	/*
	public function addId(Course $id): self
	{
		if (!$this->Id->contains($id)) {
			$this->Id[] = $id;
			$id->setProfessor($this);
		}

		return $this;
	}

	public function removeId(Course $id): self
	{
		if ($this->Id->contains($id)) {
			$this->Id->removeElement($id);
			// set the owning side to null (unless already changed)
			if ($id->getProfessor() === $this) {
				$id->setProfessor(null);
			}
		}

		return $this;
	}
	*/
}

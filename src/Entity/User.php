<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

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

	public function getId(): ?int
            	{
            		return $this->id;
            	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $userName;

	public function getUsername(): ?string
            		// Le point de interrogation ?string signifie que il peut être nul. 7.2.
            		// Dans le code du prof il ne l'a pash mit.
            	{
            		// return $this->userName;
            		return (string)$this->email;
            	}

	public function setUserName(string $userName): self
            	{
            		$this->userName = $userName;
            
            		return $this;
            	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @ORM\Column(type="string", length=255)
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
	 */
	public $confirmPassword;

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
	 * @ORM\Column(type="datetime")
	 */
	private $updatedAt;

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
            		return [
            			'ROLE_USER',
            			'ROLE_PROFESSOR',
            			'ROLE_ADMIN',
            			'ROLE_SUPER_ADMIN'];
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
	 * @ORM\Column(type="datetime")
	 */
	private $lastLogAt;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="user")
	 */
	private $comments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Course", mappedBy="professor")
     */
    private $Id;

	public function __construct()
            	{
            		$this->comments = new ArrayCollection();
              $this->Id = new ArrayCollection();
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

	//══════════════════════════════════════════════════════════════════════════════════════════════

	public function getUpdatedAt(): ?\DateTimeInterface
            	{
            		return $this->updatedAt;
            	}

	public function setUpdatedAt(\DateTimeInterface $updatedAt): self
            	{
            		$this->updatedAt = $updatedAt;
            
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
}

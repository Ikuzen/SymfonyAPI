<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SuperheroesRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=SuperheroesRepository::class)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="superheroes")
 * @ApiResource()
 */
#[ApiResource]
class Superheroes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(length=70)
     * @Assert\NotBlank()
     */
    public string $name;

    /**
     * @ORM\Column(length=70, unique=true)
     * @Assert\NotBlank()
     */
    public string $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    public bool $featured = false;

    /**
     * @ORM\Column(type="datetime")
     */
    public ?\DateTime $created_at = null;


    /******** METHODS ********/

    public function getId()
    {
        return $this->id;
    }

    /**
     * Prepersist gets triggered on Insert
     * @ORM\PrePersist
     */
    public function updatedTimestamps()
    {
        if ($this->created_at == null) {
            $this->created_at = new \DateTime('now');
        }
    }

    public function __toString()
    {
        return $this->name;
    }
}
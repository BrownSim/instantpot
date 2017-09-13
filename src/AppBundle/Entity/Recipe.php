<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="recipe")
 */
class Recipe
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="recipes")
     * @ORM\JoinColumn(name="user_ud", referencedColumnName="is")
     */
    private $user;

    /**
     * @var Allergen[]|Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Allergen", inversedBy="recipes", cascade={"persist"})
     * @ORM\JoinTable(name="recipes_has_allergens")
     */
    private $allergens;

    /**
     * @var Quantity[]|Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Quantity", mappedBy="recipe", cascade={"all"}))
     */
    private $quantities;

    /**
     * @var Collection|Step[]
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Step", mappedBy="recipe", cascade={"persist"})
     */
    private $steps;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->label;
    }

    public function __construct()
    {
        $this->allergens = new ArrayCollection();
        $this->quantities = new ArrayCollection();
        $this->steps = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Allergen[]|Collection
     */
    public function getAllergens()
    {
        return $this->allergens;
    }

    /**
     * @param Allergen $allergen
     *
     * @return $this
     */
    public function addAllergen(Allergen $allergen)
    {
        if (!$this->allergens->contains($allergen)) {
            $this->allergens->add($allergen);
        }
        $allergen->addRecipe($this);

        return $this;
    }

    /**
     * @param Allergen $allergen
     *
     * @return $this
     */
    public function removeAllergen(Allergen $allergen)
    {
        $this->allergens->removeElement($allergen);

        return $this;
    }

    /**
     * @return Quantity[]|Collection
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * @param Quantity $quantity
     *
     * @return $this
     */
    public function addQuantity(Quantity $quantity)
    {
        if (!$this->quantities->contains($quantity)) {
            $this->quantities->add($quantity);
        }
        $quantity->setRecipe($this);

        return $this;
    }

    /**
     * @param Quantity $quantity
     *
     * @return $this
     */
    public function removeQuantity(Quantity $quantity)
    {
        $this->quantities->removeElement($quantity);

        return $this;
    }

    /**
     * @return Step[]|Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Step[]|Collection $steps
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * @param Step $step
     *
     * @return $this
     */
    public function addStep(Step $step)
    {
        if (!$this->steps->contains($step)) {
            $this->steps[] = $step;
        }
        $step->setRecipe($this);

        return $this;
    }

    /**
     * @param Step $step
     *
     * @return $this
     */
    public function removeStep(Step $step)
    {
        $this->steps->removeElement($step);

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return $this
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function setLabel(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }
}

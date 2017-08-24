<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="unit")
 */
class Unit
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
     * @var Ingredient
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ingredient", mappedBy="unit")
     *
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string")
     */
    private $label;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Ingredient[]|Collection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param Ingredient $ingredient
     *
     * @return $this
     */
    public function addIngredient(Ingredient $ingredient)
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients->add($ingredient);
        }
        $ingredient->setUnit($this);

        return $this;
    }

    /**
     * @param Ingredient $ingredient
     *
     * @return $this
     */
    public function removeIngredient(Ingredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}

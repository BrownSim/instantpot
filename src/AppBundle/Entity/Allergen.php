<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="allergen")
 */
class Allergen
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
     * @var Recipe[]|Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Recipe", mappedBy="allergens")
     */
    private $recipes;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string")
     */
    private $label;

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->label;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }



    /**
     * @return Recipe[]|Collection
     */
    public function getRecipes()
    {
        return $this->recipes;
    }

    /**
     * @param Recipe $recipe
     *
     * @return $this
     */
    public function addRecipe(Recipe $recipe)
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes->add($recipe);
        }

        return $this;
    }

    public function removeRecipe(Recipe $recipe)
    {
        $this->recipes->removeElement($recipe);

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
}

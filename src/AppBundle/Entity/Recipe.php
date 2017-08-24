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
     * @var Image
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", inversedBy="recipe")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", nullable=true)
     */
    private $label;

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
    }

    /**
     * @return int
     */
    public function getId()
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
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     *
     * @return $this
     */
    public function setImage(Image $image)
    {
        $this->image = $image;

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
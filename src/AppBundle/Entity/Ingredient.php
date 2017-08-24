<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ingredient")
 */
class Ingredient
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
     * @var Quantity[]|Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Quantity", mappedBy="ingredient", cascade={"all"})
     */
    private $quantities;

    /**
     * @var Unit
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Unit", inversedBy="ingredients")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
     *
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string")
     */
    private $label;

    public function __construct()
    {
        $this->quantities = new ArrayCollection();
    }

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
    public function getId()
    {
        return $this->id;
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
        $quantity->setIngredient($this);

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
     * @return Unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param Unit $unit
     *
     * @return $this
     */
    public function setUnit(Unit $unit)
    {
        $this->unit = $unit;

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

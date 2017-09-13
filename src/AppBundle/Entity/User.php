<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Collection|Commentary[]
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentary", mappedBy="commentary")
     */
    private $commentaries;

    /**
     * @var Collection|Recipe[]
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Recipe", mappedBy="user")
     */
    private $recipes;

    public function __construct()
    {
        parent::__construct();
        $this->commentaries = new ArrayCollection();
        $this->recipes = new ArrayCollection();
    }


    /**
     * @return Commentary[]|Collection
     */
    public function getCommentaries()
    {
        return $this->commentaries;
    }

    /**
     * @param Commentary $commentary
     *
     * @return $this
     */
    public function addCommentary(Commentary $commentary)
    {
        $this->commentaries = $commentary;

        return $this;
    }

    /**
     * @param Commentary $commentary
     *
     * @return $this
     */
    public function removeCommentary(Commentary $commentary)
    {
        $this->commentaries->removeElement($commentary);

        return $this;
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
        $this->recipes = $recipe;

        return $this;
    }

    /**
     * @param Recipe $recipe
     *
     * @return $this
     */
    public function removeRecipe(Recipe $recipe)
    {
        $this->recipes->removeElement($recipe);

        return $this;
    }
}

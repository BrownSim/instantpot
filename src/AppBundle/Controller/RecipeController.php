<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class RecipeController extends Controller
{

    /**
     * @Route("/list-recipes", name="list-recipes")
     */
    public function showRecipeAction()
    {
        $listRecipes = $this->getDoctrine()->getRepository('AppBundle:Recipe')->findAll();

        return $this->render(':Recipe:index.html.twig');
    }
}

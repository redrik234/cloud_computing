<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ThirdLabController extends AbstractController {

    /**
     * @Route("/3", name="3")
     */
    function index() {
        return $this->render("home.html.twig", []);
    }
}
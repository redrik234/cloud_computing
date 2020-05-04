<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FirstLabController extends AbstractController {

    /**
     * @Route("/1", name="1")
     */
    function index() {
        return $this->render("firstLab.html.twig", []);
    }
}
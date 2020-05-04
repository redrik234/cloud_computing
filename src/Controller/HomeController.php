<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home")
     */
    function home() {
        return $this->render("home.html.twig", [
            'home' => '/',
            'lab1' => '/1',
            'lab2' => '/2',
            'lab3' => '/3'
        ]);
    }
}
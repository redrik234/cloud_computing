<?php

namespace App\Controller;

use App\Repository\PlanetRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SecondLabController extends AbstractController {

    private $planetRepository;

    public function __construct(PlanetRepository $planetRepository)
    {
       $this->planetRepository = $planetRepository; 
    }
    /**
     * @Route("/2", name="2")
     */
    function index() {
        $planets = $this->planetRepository->getAllPlanets('ASC');
        return $this->render("secondLab.html.twig", ['planets' => $planets]);
    }

    /**
     * @Route("/2/search", name="planet_search")
     */
    function search(Request $request) {
        $query = $request->query->get('q');
        $planets = $this->planetRepository->findAllWithSearch($query);
        return $this->render("secondLab.html.twig", ['planets' => $planets]);
    }

    // function searchBar() {
    //     return $this->createFormBuilder(null)
    //             ->add('query', TextType::class)
    //             ->add('search', SubmitType::class, [
    //                 'attr' => [
    //                     'class' => 'btn btn-primary'
    //                 ]
    //             ])
    //             ->getForm();
    // }
}
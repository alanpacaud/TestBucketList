<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * Affiche une page d'accueil
     * @Route("/home", name="home")
     */
    public function test()
    {
        return $this->render("main/home.html.twig");
    }
    /**
     * Affiche une page ABOUT US
     * @Route("/aboutUs", name="about-us")
     */
    public function aboutUs()
    {
        return $this->render("main/about-us.html.twig");
    }
}

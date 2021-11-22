<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function home(): Response
    {
        return $this->render('pages/home.html.twig');
    }
    
     /**
     * @Route("/becomeDriver", name="app_becomeDriver")
     */
    public function becomeDriver(): Response
    {
        return $this->render('pages/becomeDriver.html.twig');
    }
}
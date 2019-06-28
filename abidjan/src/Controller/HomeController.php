<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends AbstractController

{
    public function index()
    {
        return $this->render('home/index.html.twig'); 
    }

    public function don()
    {
        return $this->render('home/don.html.twig'); 
    }

    public function mensuel()
    {
        return $this->render('home/mensuel.html.twig'); 
    }
}
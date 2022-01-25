<?php

namespace App\Controller\main;

use Symfony\Component\Routing\Annotation\Route;

class HomeController extends BaseController
{

    /**
     * @Route("/", name="home")
     */

    public function index(){

        $forRender = parent::renderDefault();

        return $this->render('main/index.html.twig', $forRender);

    }

}
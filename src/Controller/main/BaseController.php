<?php

namespace App\Controller\main;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{

    public function renderDefault(){

        return [
            'title' => 'Сайт'
        ];

    }

}
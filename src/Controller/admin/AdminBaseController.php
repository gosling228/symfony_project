<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBaseController extends AbstractController
{

    public function renderDefault(){

        return [
            'title' => 'Сайт админ панель'
        ];

    }

}
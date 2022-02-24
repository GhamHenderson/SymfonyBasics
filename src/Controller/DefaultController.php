<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(): Response
    {

        $template = 'default/index.html.twig';
        $name = "Graham";
        $age = 27;
        $argsArray = ['name' => $name, 'age' => $age];

        return $this->render($template, $argsArray);
    }
}

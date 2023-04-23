<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    #[Route('', name: 'app_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $name = $request->query->get('name');

        return $this->render(
            view: 'index.html.twig',
            parameters: [
                'name' => $name
            ]
        );
    }
}

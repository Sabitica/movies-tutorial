<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    // // defaults allows a default route parameter 
    // // $name will work so long as it matches the {name} slug
    // #[Route('/movies/{name}', name: 'app_movies', defaults:['name' => null], methods:['GET', 'HEAD'])]
    // public function index($name): JsonResponse
    // {
    //     return $this->json([
    //         'message' => $name,
    //         'path' => 'src/Controller/MoviesController.php',
    //     ]);
    // }

    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {

        return $this->render('index.html.twig');
    }


}

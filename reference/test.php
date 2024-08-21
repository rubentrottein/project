<?php

namespace App\Controller;

use App\Service\ArticleApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    private ArticleApiService $articleApiService;

    public function __construct(ArticleApiService $articleApiService)
    {
        $this->articleApiService = $articleApiService;
    }

    #[Route('/test', name: 'default_test', methods: ['GET'])]
    public function test(): Response
    {
        // Récupération des articles depuis l'API via le service
        $posts = $this->articleApiService->fetchArticles();

        return $this->render('default/test.html.twig', [
            'posts' => $posts,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Service\ArticleApiService;
use App\Repository\UserRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    public function __construct(UserRepository $userRepository, ArticleApiService $articleApiService)
    {
        $this->articleApiService = $articleApiService;
        $this->userRepository = $userRepository;
    }

    public ArticleApiService $articleApiService;

    #[Route('/articles', name: 'default_articles', methods: ['GET', 'POST'])]
    public function articles(): Response
    {
        try {
            $articles = file_get_contents('http://localhost:3999/api/school/articles');
            $articlesList = json_decode($articles, true);
            $lastArticle = end($articlesList);
            return $this->render("default/articles.html.twig", ['articles' => $articlesList, 'lastArticle' => $lastArticle]);
        } catch (\Exception $exception) {
            $error = $exception->getMessage();
            $articlesList = [$exception->getMessage()];
            return $this->render('default/articles.html.twig', ["articles" => $articlesList,"error" => $error, 'lastArticle' => $lastArticle]);
        }
    }

    #[Route('/test', name: 'default_test', methods: ['GET', 'POST'])]
    public function test(): Response
    {

        #2
        //$users = $this-> $userRepository->findAll();
        $posts = $this->articleApiService->fetchArticles();

        return $this->render('default/test.html.twig',
            ['posts' => $posts]);

    }

    /**
     * @throws \Exception
     */
    #[Route('/article/{id}', name: 'article_get_one', methods: ['GET'])]
    public function getArticleById(string $id): Response
    {

        try {
            $article = $this->articleApiService->fetchArticleById($id);
            //dd($article["image"]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return $this->render('default/test.html.twig',
            ['post' => $article]);

    }
}
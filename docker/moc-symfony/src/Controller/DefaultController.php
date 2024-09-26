<?php

namespace App\Controller;

use App\Service\ArticleApiService;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;

class DefaultController extends AbstractController
{

    public function __construct(private UserRepository $userRepository, ArticleApiService $articleApiService) {
        $this->articleApiService = $articleApiService;
        $this->userRepository = $userRepository;
    }
    private ArticleApiService $articleApiService;

    #[Route('/', name: 'default_home', methods: ['GET'])]
    public function home(): Response
    {
        try {
            $articles = file_get_contents('http://localhost:3999/api/school/articles');
            $articlesList = json_decode($articles, true);

            if (!empty($articlesList) && is_array($articlesList)) {
                $lastArticle = end($articlesList);
                $lastChapter = isset($lastArticle['chapters']) && is_array($lastArticle['chapters'])
                    ? end($lastArticle['chapters'])
                    : null;
                $lastChapterTitle = isset($lastArticle['chaptersTitles']) && is_array($lastArticle['chaptersTitles'])
                    ? end($lastArticle['chaptersTitles'])
                    : null;
            } else {
                $lastArticle = $lastChapter = $lastChapterTitle = null;
            }

            return $this->render("default/home.html.twig", [
                'articles' => $articlesList,
                'article' => $articlesList[0],
                'lastArticle' => $lastArticle,
                'lastChapter' => $lastChapter,
                'lastChapterTitle' => $lastChapterTitle
            ]);
        } catch (\Exception $exception) {
            // Log the exception for debugging purposes
            error_log('Error fetching articles: ' . $exception->getMessage());

            // Return a user-friendly error message
            return $this->render('default/home.html.twig', [
                'articles' => [],
                'error' => 'Unable to fetch articles at this time. Please try again later.'
            ]);
        }
    }
    #[Route('/articles', name: 'default_articles', methods: ['GET'])]
    public function articles() : Response
    {
        try{
            $articles = file_get_contents('http://localhost:3999/api/school/articles');
            $articlesList = json_decode($articles, true);
            $lastArticle = end($articlesList);
            return $this->render("default/articles.html.twig", ['articles' => $articlesList, 'lastArticle'=> $lastArticle]);
        } catch (\Exception $exception) {
            $articlesList = [$exception->getMessage()];
            return $this->render('default/articles.html.twig', ["articles" => $articlesList]);
        }
    }

    #[Route('/test', name: 'default_test', methods: ['GET'])]
    public function test () : Response
    {

        #2
        //$users = $this-> $userRepository->findAll();
        $posts = $this->articleApiService->fetchArticles();
        $testPosts = "Hedgehog";

        return $this->render('default/test.html.twig',
            ['posts' => $posts]);

    }
}
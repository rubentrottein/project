<?php

namespace App\Controller;

use App\Service\ArticleApiService;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    public function __construct(UserRepository $userRepository, ArticleApiService $articleApiService) {
        $this->articleApiService = $articleApiService;
        $this->userRepository = $userRepository;
    }
    public ArticleApiService $articleApiService;

    #[Route('/home', name: 'default_home', methods: ['GET'])]
    public function home () : Response
    {

        #2
        //$users = $this-> $userRepository->findAll();
        $posts = $this->articleApiService->fetchArticles();
        $message = ['content' => 'Message Flash', 'type' => "success"];
        return $this->render('default/home.html.twig',
            ['posts' => $posts, 'message' => $message, 'article' => $posts[0]]
        );

    }
            
    #[Route('/', name: 'default_landing', methods: ['GET'])]
    function landing (SecurityController $security) : Response
    {
        //Modified controller (toGit)
        $articlesList = [];
        try{
            if ($security->getUser()) {
                $articles = file_get_contents('http://localhost:3999/api/school/articles');
                $articlesList = json_decode($articles, true);
                $lastArticle = end($articlesList);
                return $this->render("default/home.html.twig", ['articles' => $articlesList, 'lastArticle'=> $lastArticle]);
            } else {
                return $this->render("landing.html.twig");
            }
        } catch (\Exception $exception) {
            //$error = new Article();
            //$error->title = $exception->getMessage();
            //$articlesList = [$error];

            $articlesList = [$exception->getMessage()];
            return $this->render('landing.html.twig');
        }
    }
    #[Route('/articles', name: 'default_articles', methods: ['GET'])]
    public function articles() : Response
    {
        $articlesList = [];
        try{
            $articles = file_get_contents('http://localhost:3999/api/school/articles');
            $articlesList = json_decode($articles, true);
            $lastArticle = end($articlesList);
            return $this->render("default/articles.html.twig", ['articles' => $articlesList, 'lastArticle'=> $lastArticle]);
        } catch (\Exception $exception) {
            //$error = new Article();
            //$error->title = $exception->getMessage();
            $articlesList = [$exception->getMessage()];
            return $this->render('default/articles.html.twig', ["articles" => $articlesList, 'lastArticle'=> $lastArticle]);
        }
    }

    #[Route('/test', name: 'default_test', methods: ['GET'])]
    public function test () : Response
    {

        #2
        //$users = $this-> $userRepository->findAll();
        $posts = $this->articleApiService->fetchArticles();

        return $this->render('default/test.html.twig',
            ['posts' => $posts]);

    }
    

    #[Route('/profile', name: 'user_test', methods: ['GET'])]
    public function profile () : Response
    {

        #2
        //$users = $this-> $userRepository->findAll();
        $posts = $this->articleApiService->fetchArticles();
        $testPosts = "Hedgehog";

        return $this->render('default/test.html.twig',
            ['posts' => $posts]);

    }
}
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

    #[Route('/home', name: 'default_home', methods: ['GET', 'POST'])]
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
        $articles = file_get_contents('http://localhost:3999/api/school/articles');
        $articlesList = json_decode($articles, true);
        $lastArticle = end($articlesList);
        try{
            if ($security->getUser()) {
                $articlesList = json_decode($articles, true);
                $lastArticle = end($articlesList);
                return $this->render("default/home.html.twig", ['all_content' => $articlesList, 'lastArticle'=> $lastArticle]);
            } else {
                //Mise à disposition des 5 derniers articles (démo sans connexion)

                return $this->render("landing.html.twig", ['all_content' => $articlesList]);
            }
        } catch (\Exception $exception) {
            //$error = new Article();
            //$error->title = $exception->getMessage();
            //$articlesList = [$error];

            $articlesList = [$exception->getMessage()];
            return $this->render('landing.html.twig', ['all_content' => $articlesList]);
        }
    }
}
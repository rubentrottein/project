<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default_home', methods: ['GET'])]
    public function home() : Response
    {
        $articlesList = [];
        try{
            $articles = file_get_contents('http://localhost:3999/api/school/articles');
            $articlesList = json_decode($articles, true);
            $lastArticle = end($articlesList);
            return $this->render("default/home.html.twig", ['articles' => $articlesList, 'lastArticle'=> $lastArticle]);
        } catch (\Exception $exception) {
            $error = new Article();
            $error->title = $exception->getMessage();
            $articlesList = [$error];
            return $this->render('default/home.html.twig', ["articles" => $articlesList]);
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
            $error = new Article();
            $error->title = $exception->getMessage();
            $articlesList = [$error];
            return $this->render('default/articles.html.twig', ["articles" => $articlesList]);
        }
    }

}
<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{
    
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('articles/homepage.html.twig');
    } 

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public function show($slug)
    {
        
        return $this->render('articles/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug))
        ]);
    }
    
}
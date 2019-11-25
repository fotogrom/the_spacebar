<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}",name="article_show");
     */
    public function show($slug)
    {
        $comments = ['This comment is very important!','This is a second comment','This is a third comment'];

       // dump($slug,$this);
        //return new Response(sprintf('Future page to show the article %s',$slug));
        return $this->render('article/show.html.twig',['title'=>ucwords(str_replace("-",' ',$slug)),'comments'=>$comments,'slug'=>$slug]);
    }

    /**
     * @Route("/news/{slug}/heart",name="article_toggle_heart",methods={"POST"})
     */
    public function toggleArticleHeart($slug){

        //TODO: actually heart/unheart the article
        //return new Response(json_encode(['hearts'=>5]));
        return new JsonResponse(['hearts'=>rand(5,100)]);
    }
}
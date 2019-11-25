<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! WHOOO!');
    }

    /**
     * @Route("/news/{slug}");
     */
    public function show($slug)
    {
        $comments = ['This comment is very important!','This is a second comment','This is a third comment'];

       // dump($slug,$this);
        //return new Response(sprintf('Future page to show the article %s',$slug));
        return $this->render('article/show.html.twig',['title'=>ucwords(str_replace("-",' ',$slug)),'comments'=>$comments]);
    }
}
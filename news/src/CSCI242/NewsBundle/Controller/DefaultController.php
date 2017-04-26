<?php

namespace CSCI242\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CSCI242\NewsBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CSCI242NewsBundle:Default:index.html.twig');
    }
    /**
     * Lists all category entities.
     *
     * @Route("/category", name="category_index")
     * 
     */
    public function categoryIndexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('CSCI242NewsBundle:Category')->findAll();

        return $this->render('category/index.html.twig', array(
            'categories' => $categories,
        ));
    }
    
    
    
    /**
     * Finds and displays a article entity.
     *
     * @Route("/article/{id}", name="default_article_show")
     * @Method("GET")
     */
    public function showAction(Article $article)
    {

        return $this->render('default/article.html.twig', array(
            'article' => $article
        ));
    }
}

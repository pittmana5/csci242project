<?php

namespace CSCI242\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CSCI242\NewsBundle\Entity\Article;
use CSCI242\NewsBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $recentArticles = $em->getRepository('CSCI242\NewsBundle\Entity\Article')->findBy(array(), array('updatedAt' => 'DESC'), 3);
        $categories = $em->getRepository('CSCI242\NewsBundle\Entity\Category')->findBy(array());
        return $this->render('default/index.html.twig', array(
            'recentArticles' => $recentArticles,
            'categories'=> $categories
        ));
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
     * @Route("/about", name="default_about")
     */
    public function aboutAction()
    {
        return $this->render('default/about.html.twig');
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

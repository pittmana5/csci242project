<?php

namespace CSCI242\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @Method("GET")
     */
    public function categoryIndexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('CSCI242NewsBundle:Category')->findAll();

        return $this->render('category/index.html.twig', array(
            'categories' => $categories,
        ));
    }
}

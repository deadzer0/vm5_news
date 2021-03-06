<?php

namespace NewsBundle\Controller;

use NewsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $newsrepo = $this->getDoctrine()->getRepository('NewsBundle:Post');
        $news = $newsrepo->findBy(array(), array('id' => 'DESC'));

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $news,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );

        return $this->render('default/index.html.twig', array(
            'news' => $result

        ));
    }
}

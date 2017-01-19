<?php

namespace NewsBundle\Controller;

use NewsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $newsrepo = $this->getDoctrine()->getRepository('NewsBundle:Post');
        $news = $newsrepo->findAll();

        return $this->render('default/index.html.twig', array(
            'news' => $news

        ));
    }
}

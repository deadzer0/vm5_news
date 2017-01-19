<?php

namespace NewsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @Route("/admin/", name="admin_panel")
     */
    public function indexAction()
    {
        return $this->render(':admin:index.html.twig');
    }


}

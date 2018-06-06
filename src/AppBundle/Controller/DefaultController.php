<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('homepage/homepage.html.twig');
    }

    /**
     * @Route("/faq", name="faqpage")
     */
    public function faqView()
    {
        return $this->render('faq/faq.html.twig');
    }

    /**
     * @Route("/apprenti", name="apprentipage")
     */
    public function apprentiView()
    {
        return $this->render('apprenti/apprenti.html.twig');
    }
}

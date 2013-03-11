<?php

namespace Coddict\DevExtraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/_manage/test-layout")
 */
class TestLayoutController extends Controller
{
    /**
     * @Route("/")
     */
    public function loginAction()
    {
        return $this->render("CoddictDevExtraBundle:Layout:login.html.twig");
    }
    
    /**
     * @Route("/app-layout/")
     */
    public function appLayoutAction()
    {
        return $this->render("CoddictDevExtraBundle:Layout:app-layout.html.twig");
    }
}

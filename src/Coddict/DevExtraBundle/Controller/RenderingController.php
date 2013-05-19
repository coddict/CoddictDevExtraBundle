<?php

namespace Coddict\DevExtraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/_manage")
 */
class RenderingController extends Controller
{
    /**
     * @Route("/")
     */
    public function schemaUpdateAction()
    {
        try{
            $this->get('coddictdevextra.entitymanager')->schemaUpdate();    
        }catch(\Exception $e){
            die("Database schema could not be updated: " . $e->getMessage());
        }
        
        return new Response("Database schema in-sync!");
    }
}

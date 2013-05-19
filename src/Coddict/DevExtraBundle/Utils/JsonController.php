<?php

namespace Coddict\DevExtraBundle\Utils;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * This class wraps the Symfony2 Controller object and adds to it the awesomeness of returning JSON responses
 * with indication of whether the request had faced some fatal error, or went through awesomely.
 */
class JsonController extends Controller
{

    protected function JsonResponse($arrayResponse = array(), $resCode = 200)
    {
        return new Response(
            json_encode($arrayResponse, JSON_PRETTY_PRINT),
            $resCode,
            array("Content-Type" => "application/json")
        );
    }
    
    protected function JsonSuccess($arrayResponse = array())
    {
        $arrayResponse["coddictdevextra"]["success"] = true;
        return $this->JsonResponse($arrayResponse, 200);
    }
    
    protected function JsonError($message = "")
    {
        $arrayResponse = array(
            "coddictdevextra" => array(
                "success" => false, 
                "message" => $message
            )
        );
        
        return $this->JsonResponse($arrayResponse, 500);
    }
    
    
}

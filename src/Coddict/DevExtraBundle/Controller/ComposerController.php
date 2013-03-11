<?php

namespace Coddict\DevExtraBundle\Controller;

use Coddict\DevExtraBundle\Utils\JsonController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/_manage/service/composer")
 */
class ComposerController extends JsonController
{
    /**
     * @Route("/add-dependency", name="coddictdevextra.composer.add-dependency", options={"expose"=true})
     * @Method({"POST"})
     */
    public function addDependencyAction(Request $request)
    {
        try{
            $this->get("coddictdevextra.composer")->addDependency(
                $request->request->get('name'), 
                $request->request->get('version')
            );
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess();
    }
    //getComposerContent
    
    /**
     * @Route("/get-dependencies", name="coddictdevextra.composer.get-dependencies", options={"expose"=true})
     */
    public function getDependenciesAction(Request $request)
    {
        try{
            $dependencies = $this->get("coddictdevextra.composer")->getDependencies();
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess(array("dependencies" => $dependencies));
    }
    
}

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
            
            $dependencies = $this->get("coddictdevextra.composer")->getDependencies();
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess(array("dependencies" => $dependencies));
    }
    
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
    
    /**
     * @Route("/update-dependency", name="coddictdevextra.composer.update-dependency", options={"expose"=true})
     * @Method({"POST"})
     */
    public function updateDependencyAction(Request $request)
    {
        try{
            $this->get("coddictdevextra.composer")->updateDependency(
                $request->request->get('name'), 
                $request->request->get('version')
            );
            
            $dependencies = $this->get("coddictdevextra.composer")->getDependencies();
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess(array("dependencies" => $dependencies));
    }
    
    /**
     * @Route("/remove-dependency", name="coddictdevextra.composer.remove-dependency", options={"expose"=true})
     * @Method({"POST"})
     */
    public function removeDependencyAction(Request $request)
    {
        try{
            $this->get("coddictdevextra.composer")->removeDependency(
                $request->request->get('name')
            );
            
            $dependencies = $this->get("coddictdevextra.composer")->getDependencies();
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess(array("dependencies" => $dependencies));
    }
    
}

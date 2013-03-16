<?php

namespace Coddict\DevExtraBundle\Controller;

use Coddict\DevExtraBundle\Utils\JsonController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/_manage/service/packagist-search")
 */
class PackagistSearchController extends JsonController
{
    /**
     * @Route("/search", name="coddictdevextra.packagist-search.search", options={"expose"=true})
     */
    public function searchAction(Request $request)
    {
        try{
            $searchResults = $this->get("coddictdevextra.packagistsearch")->search(
                $request->query->get('term')
            );
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess(array("searchResults" => $searchResults));
    }
    
    /**
     * @Route("/get-package", name="coddictdevextra.packagist-search.get-package", options={"expose"=true})
     */
    public function getPackageAction(Request $request)
    {
        try{
            $package = $this->get("coddictdevextra.packagistsearch")->getPackage(
                $request->query->get('name')
            );
        }catch(\Exception $e){
            return $this->JsonError($e->getMessage());
        }
        return $this->JsonSuccess(array("package" => $package));
    }
    
}

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
            
            foreach($searchResults as $index => $package){
    			$searchResults[$index] = $package["name"];
    		}
            
        }catch(\Exception $e){
            return $this->JsonResponse();
        }
        return $this->JsonResponse($searchResults);
    }
    
    /**
     * @Route("/get-package-versions", name="coddictdevextra.packagist-search.get-package-versions", options={"expose"=true})
     */
    public function getPackageVersionsAction(Request $request)
    {
        try{
            $package = $this->get("coddictdevextra.packagistsearch")->getPackage(
                $request->query->get('name')
            );
            
            $versions = array();
            foreach($package["versions"] as $version => $versionObj){
                $versions[] = $version;
            }
            
            
        }catch(\Exception $e){
            return $this->JsonResponse();
        }
        
        return $this->JsonResponse($versions);
    }
    
}

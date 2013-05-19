<?php

namespace Coddict\DevExtraBundle\Services;

use Sensio\Bundle\GeneratorBundle\Generator\BundleGenerator;
use Symfony\Component\Filesystem\Filesystem;

use Sensio\Bundle\GeneratorBundle\Command\Validators;

class BundleManager extends AbstractService
{
    protected $skeletonDir = 'sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/skeleton/bundle';
    
    public function getBundles()
    {
	    // return registered bundles
	    // array of bundleName => className
	    $bundles = $this->container->getParameter('kernel.bundles');
	    return $bundles;
    }
    
    /**
     * in symfony 2.3 __constructor of BundleGenerator takes only 1 param filesystem
    */
    public function newBundle($namespace, $bundle, $dir , $format)
    {
        // validation
    	$namespace = Validators::validateBundleNamespace($namespace);
    	$bundle = Validators::validateBundleName($bundle);
    	$format = Validators::validateFormat($format);
    	$dir = Validators::validateTargetDir($dir, $bundle, $namespace);
    	
    	$filesystem = $this->get('filesystem');
    	
    	if (!$filesystem->isAbsolutePath($dir)) 
            $dir = getcwd().'/'.$dir;
        
    	$vendorDir = $this->get('kernel')->getRootDir().'/../vendor/';
    	
    	$generator = new BundleGenerator($filesystem, $vendorDir.$this->skeletonDir);
    	$generator->generate($namespace, $bundle, $dir, $format, true);
    	
    	// TODO : check that the namespace is already autoloaded
    	
    	// TODO : register the bundle in the Kernel class
    	
    	// TODO : update routing
    	
	    return true;
    }
        
}

?>

<?php

namespace Coddict\DevExtraBundle\Services;

use Sensio\Bundle\GeneratorBundle\Generator\BundleGenerator;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\KernelInterface;
use Sensio\Bundle\GeneratorBundle\Command\Validators;
use Sensio\Bundle\GeneratorBundle\Manipulator\KernelManipulator;
use Sensio\Bundle\GeneratorBundle\Manipulator\RoutingManipulator;

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
    	
    	// check that the namespace is already autoloaded
        $this->checkAutoloader($namespace, $bundle, $dir);

        // register the bundle in the Kernel class
        $this->updateKernel($this->get('kernel'), $namespace, $bundle);

        // routing
        $this->updateRouting($bundle, $format);
    	
	    return true;
    }
    
    protected function checkAutoloader($namespace, $bundle, $dir)
    {
        if (!class_exists($namespace.'\\'.$bundle)) 
        {
            throw new \RuntimeException(
            	'- Edit the <comment>composer.json</comment> file and register the bundle'.
				'  namespace in the "autoload" section:'
            );
        }
    }
    
    protected function updateKernel(KernelInterface $kernel, $namespace, $bundle)
    {
        $manip = new KernelManipulator($kernel);
        try {

            return $manip->addBundle($namespace.'\\'.$bundle);

        } catch (\RuntimeException $e) 
        {
	        throw new \RuntimeException(
	        	sprintf('Bundle <comment>%s</comment> is already defined in <comment>AppKernel::registerBundles()</comment>.', $namespace.'\\'.$bundle)
	        );
        }
    }

    protected function updateRouting($bundle, $format)
    {

        $routing = new RoutingManipulator($this->get('kernel')->getRootDir().'/config/routing.yml');
        try {
            return $routing->addResource($bundle, $format);

        } catch (\RuntimeException $e) 
        {
            throw new \RuntimeException(
                sprintf('Bundle <comment>%s</comment> is already imported.', $bundle)
            );
        }
    }
        
}

?>

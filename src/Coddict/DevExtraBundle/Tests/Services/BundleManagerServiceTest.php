<?php

namespace Coddict\DevExtraBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Filesystem\Filesystem;

class BundleManagerServiceTest extends WebTestCase
{
	protected $filesystem;
    protected $tmpDir;

    protected function setUp()
    {
    	$container = static::createClient()->getContainer();
        $this->tmpDir = /*sys_get_temp_dir().*/$container->get('kernel')->getRootDir().'/../src/';
        $this->filesystem = new Filesystem();
    }

    protected function tearDown()
    {
        //$this->filesystem->remove($this->tmpDir);
    }
    public function testGetBundles()
    {
        $container = static::createClient()->getContainer();
        $service = $container->get('coddict_devextra.bundle_manager');
        $bundles = $service->getBundles();
        $this->assertNotEmpty($bundles);
    }
    
    public function testNewBundle()
    {
    	$this->setUp();
	    $container = static::createClient()->getContainer();
        $service = $container->get('coddict_devextra.bundle_manager');
        $result = $service->newBundle('Company/MainBundle', 'CompanyMainBundle', $this->tmpDir, 'annotation');
        //$result = $service->newBundle('Company/UserBundle', 'CompanyUserBundle', $this->tmpDir, 'yml') && $result;
        //$result = $service->newBundle('Company/AdminBundle', 'CompanyAdminBundle', $this->tmpDir, 'xml') && $result;
        $this->assertTrue($result);
        $this->tearDown();
    }
}

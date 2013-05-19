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
        $this->tmpDir = /*sys_get_temp_dir().*/__DIR__.'/../dir_tmp_testBundleManager';
        $this->filesystem = new Filesystem();
        $this->filesystem->remove($this->tmpDir);
    }

    protected function tearDown()
    {
        $this->filesystem->remove($this->tmpDir);
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
        $result = $service->newBundle('Company/UserBundle', 'CompanyUserBundle', $this->tmpDir, 'yml') && $result;
        $result = $service->newBundle('Company/AdminBundle', 'CompanyAdminBundle', $this->tmpDir, 'xml') && $result;
        $this->assertTrue($result);
        $this->tearDown();
    }
}

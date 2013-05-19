<?php

namespace Coddict\DevExtraBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PackagistSearchTest extends WebTestCase
{

    public function testindex()
    {	
    	$container = static::createClient()->getContainer();
        $data = $container->get('coddictdevextra.packagistsearch')->search("paypal");
        //var_dump($package);
    	$this->assertTrue(true);
    }
    
    public function testGetPackage()
    {
    	$container = static::createClient()->getContainer();
    	$package = $container->get('coddictdevextra.packagistsearch')->getPackage("smart-core/fos-user-bundle");
    	//var_dump($package);
    	$this->assertTrue(true);
    }
}

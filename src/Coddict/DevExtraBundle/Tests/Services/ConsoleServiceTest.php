<?php

namespace Coddict\DevExtraBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConsoleServiceTest extends WebTestCase
{

    public function testGetCommands()
    {	
    	$container = static::createClient()->getContainer();
        $commands = $container->get('coddictdevextra.console')->getCommands();
        //var_dump($commands);
    	$this->assertTrue(true);
    }
    
    public function testRunCommand()
    {	
    	$container = static::createClient()->getContainer();
        $container->get('coddictdevextra.console')->runCommand("list","list");
    	$this->assertTrue(true);
    }
    
}

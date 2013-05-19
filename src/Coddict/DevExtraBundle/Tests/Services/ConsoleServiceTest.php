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
    	$this->assertNotEmpty($commands);
    }
    
    public function testFindCommand()
    {
    	$container = static::createClient()->getContainer();
	    $command = $container->get('coddictdevextra.console')->findCommand("cache:clear");
	    $this->assertNotNUll($command);
    }
    public function testRunCommand()
    {	
    	$container = static::createClient()->getContainer();
        $output = $container->get('coddictdevextra.console')->runCommand("list",'--raw');
        //printf($output->getOutput());
    	$this->assertNotNull($output);
    }
    
}

<?php

namespace Coddict\DevExtraBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComposerServiceTest extends WebTestCase
{

    public function testAddRemoveDepencency()
    {	
    	$depencendyName = 'dev/extra/dependency';
        $container = static::createClient()->getContainer();
        $container->get('coddictdevextra.composer')->addDependency($depencendyName, '0.11.*');
        $container->get('coddictdevextra.composer')->removeDependency($depencendyName);
    }
}

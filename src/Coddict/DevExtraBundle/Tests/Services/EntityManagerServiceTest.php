<?php

namespace Coddict\DevExtraBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EntityManagerServiceTest extends WebTestCase
{
    public function testSchemaUpdate()
    {
        $container = static::createClient()->getContainer();
        $service = $container->get('coddictdevextra.entitymanager');
        $this->assertTrue($service->schemaUpdate());
    }
}

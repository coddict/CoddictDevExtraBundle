<?php

namespace Coddict\DevExtraBundle\Services;
use Symfony\Component\Console\Output\ConsoleOutput;

class EntityManager extends AbstractService{
    
    public function schemaUpdate(){
        $kernel = $this->get('kernel');
        $application = new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
        $application->setAutoExit(false);
        $options = array('command' => 'doctrine:schema:update',"--force" => true);
        $output = new ConsoleOutput();
        $application->run(new \Symfony\Component\Console\Input\ArrayInput($options), $output);
        
        return true;
    }
    
    protected function getMetaDatas(){
        return $this->get('doctrine')
                    ->getEntityManager()
                    ->getMetadataFactory()
                    ->getAllMetadata();
    }
    
}

?>

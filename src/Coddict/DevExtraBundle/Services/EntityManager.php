<?php

namespace Coddict\DevExtraBundle\Services;

use Coddict\DevExtraBundle\Utils\StringOutput;

class EntityManager extends AbstractService{
    
    /**
     * Updates the database schema based on existing entities
     */
    public function schemaUpdate(){
        $kernel = $this->get('kernel');
        $application = new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
        $application->setAutoExit(false);
        $options = array('command' => 'doctrine:schema:update',"--force" => true);
        $output = new StringOutput();
        $application->run(new \Symfony\Component\Console\Input\ArrayInput($options), $output);
        
        if(strstr(strtolower($output->getOutput()), "exception")){
            throw new \Exception($output->getOutput());
        }
        
        return true;
    }
    
    
    /**
     * Returns all known metadatas from the doctrine entity manager
     */
    protected function getMetaDatas(){
        return $this->get('doctrine')
                    ->getEntityManager()
                    ->getMetadataFactory()
                    ->getAllMetadata();
    }
    
}

?>

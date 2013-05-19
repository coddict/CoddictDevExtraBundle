<?php

namespace Coddict\DevExtraBundle\Services;

abstract class AbstractService{
    
    protected $container;
    
    public function __construct($container){
        $this->container = $container;
    }
    
    protected function get($name){
        return $this->container->get($name);
    }
    
}

?>
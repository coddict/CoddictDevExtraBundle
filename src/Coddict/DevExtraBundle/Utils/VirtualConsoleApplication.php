<?php

namespace Coddict\DevExtraBundle\Utils;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\HttpKernel\KernelInterface;

class VirtualConsoleApplication Extends Application
{
    public function __construct(KernelInterface $kernel)
    {
    	parent::__construct($kernel);
    }
    
    public function registerCommands(){
	    parent::registerCommands();
    }
}

?>
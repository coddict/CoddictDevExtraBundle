<?php

namespace Coddict\DevExtraBundle\Utils;

use Symfony\Component\Console\Output\Output;

class StringOutput Extends Output{
    protected $output = "";
    
    public function getOutput(){
        return $this->output;
    }
    
    protected function doWrite($message, $newline){
        $this->output .= $message;
        if($newline){
            $this->output .= "\n";
        }
    }
}

?>
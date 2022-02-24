<?php

class charset{
    
    public function __construct($sCharset){
        $this->charset = $sCharset;
    }

    public function __toString(){
        $sString = '<meta charset='. $this->charset .'>';
        return $sString;
    }
}
<?php

class body {

    public function __construct($sBody){
        $this->body = $sBody;
    }

    public function __toString(){
        $sString = '<'. $this->body .'body>';
        return $sString;
    }
}
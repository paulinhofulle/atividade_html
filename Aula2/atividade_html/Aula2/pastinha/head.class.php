<?php

class head{

    public function __construct($sHead){
        $this->head = $sHead;
    }

    public function __toString(){
        $sString = '<'. $this->head .'head>';
        return $sString;
    }
}
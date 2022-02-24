<?php

class title{

    public function __construct($sTitle){
        $this->title = $sTitle;
    }

    public function __toString(){
        $sString = '<title>'. $this->title .'</title>';
        return $sString;
    }
}
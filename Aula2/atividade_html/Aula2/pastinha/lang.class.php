<?php

class lang {

    public function __construct($sLang){
        $this->lang = $sLang;
    }

    public function __toString(){
        $sString = '<html lang='. $this->lang .'>';
        return $sString;
    }
}
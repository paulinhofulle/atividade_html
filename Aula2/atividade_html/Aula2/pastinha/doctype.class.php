<?php 

class doctype{

    public function __construct($sDoctype){
        $this->doctype = $sDoctype;
    }

    public function __toString() {
        $sString = '<!DOCTYPE '. $this->doctype .'>';
        return $sString;
    }
}
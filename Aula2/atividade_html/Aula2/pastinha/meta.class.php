<?php

class meta{

    public function __construct($sMeta){
        $this->meta = $sMeta;
    }

    public function __toString(){
        $sString = '<meta ' . $this->meta . '>';
        return $sString;
    }
}
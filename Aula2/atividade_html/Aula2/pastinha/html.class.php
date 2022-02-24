<?php

class html{
    function __construct($sDoctype, $sLang, $sHead, $sCharset, $sMeta1, $sMeta2, $sTitle, $sHead2, $sBody, $sBody2){
        $this->doctype = $sDoctype;
        $this->lang = $sLang;
        $this->head1 = $sHead;
        $this->charset = $sCharset;
        $this->meta1 = $sMeta1;
        $this->meta2 = $sMeta2;
        $this->title = $sTitle;
        $this->head2 = $sHead2;
        $this->body1 = $sBody;
        $this->body2 = $sBody2;
    }

    function __toString(){
        $sReturn = $this->doctype.
         $this->lang .
         $this->head1 .
         $this->charset . 
         $this->meta1 . 
         $this->meta2 .
         $this->title .
         $this->head2 .
         $this->body1 .
         $this->body2 .
         '</html>';
        
        return $sReturn;
    }
}
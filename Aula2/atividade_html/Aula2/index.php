<?php
include "pastinha/li.class.php";
include "pastinha/ul.class.php";
include "pastinha/html.class.php";
include "pastinha/doctype.class.php";
include "pastinha/lang.class.php";
include "pastinha/head.class.php";
include "pastinha/charset.class.php";
include "pastinha/meta.class.php";
include "pastinha/title.class.php";
include "pastinha/body.class.php";

$sDoctype = new doctype('html');
$sLang = new lang('"pt-br"');
$sHead = new head('');
$sCharset = new charset('"UTF-8"');
$sMeta1 = new meta('http-equiv="X-UA-Compatible" content="IE=edge"');
$sMeta2 = new meta('name="viewport" content="width=device-width, initial-scale=1.0"');
$sTitle = new title('Document');
$sHead2 = new head('/');
$sBody = new body('');
$sBody2 = new body('/');


$html = new html($sDoctype, $sLang, $sHead, $sCharset, $sMeta1, $sMeta2, $sTitle, $sHead2, $sBody, $sBody2);

echo $html;

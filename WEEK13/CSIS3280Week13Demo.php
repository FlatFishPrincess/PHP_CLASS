<?php

require_once("inc/Utility/Page.class.php");

Page::$title = "CSIS3280Week12 Demo";

Page::header();


$pen = new StdClass;
$pen->color = "Silver";
$pen->refill = "Black";
$pen->capacity = "90%";

$jsonPen = json_encode($pen);
echo "<PRE>";
echo $jsonPen;
echo "</PRE>";

var_dump(json_decode($jsonPen));

$xml = new SimpleXMLElement('<xml/>');
$penXML = $xml->addChild('pen');
$penXML->addChild('color', $pen->color);
$penXML->addChild('refill', $pen->refill);
$penXML->addChild('capacity', $pen->capacity);
$myXml = $xml->addChild('cute');
$myXml->addChild('name', 'jiweon');
$myXml->addChild('age', 25);
$myXml->addChild('from', 'Korea');
// header("Content-Type: text/xml");
$xmlString = $xml->asXML();
var_dump($xmlString);
$xmlPen = simplexml_load_string($xmlString);

var_dump($xmlPen);

Page::footeR();

?>
<?php

$email = "example@domain.com";
$length =  strlen($email); 

$atsignloc = strpos($email, '@');
$periodloc = strpos($email, '.');

echo "the userlocal: " . substr($email, 0, $atsignloc ) . "\n";
echo "the domain: " . substr($email, $atsignloc + 1,($periodloc - $atsignloc + 1)) . "\n";
echo "the com: " . substr($email, $periodloc + 1,$length) . "\n";

?>
<?php

// strpos: find the position
// Sysntax: strpos(string,find,start) 
// string	Required. Specifies the string to search
// find	Required. Specifies the string to find
// start	Optional. Specifies where to begin the search


// substring syntax: substr(string,start,length)
$email = "example@domain.com";
$atsignloc =  strpos($email,'@');
$periodloc =  strpos($email,'.');

echo "User name", substr($email, 0, $atsignloc) ,"\n";
echo "Domain: ", substr($email, $atsignloc + 1, $periodloc - $atsignloc-1), "\n";
echo "Com: ", substr($email, $periodloc+1);

// echo "The userlocal: " . substr($email,0,$atsignloc) . "\n";
// echo "the domain: " . substr($email,($atsignloc +1),($periodloc  - $atsignloc -1)) ."\n";
// echo "the TLD: " . substr($email,$periodloc +1, strlen($email));

?>
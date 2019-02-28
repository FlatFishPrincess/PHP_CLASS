<?php

function cmp_courses($x,$y)  {
    echo "X:  $x";
    echo "Y: $y";

    $xArr = explode(" ", $x);
    $yArr = explode(" ", $y);

    if ($xArr[2] > $yArr[2])    {
        return 1;
    } else if ($xArr[2] < $yArr[2]) {
        return -1;
    } else {
        return 0;
    }
}

?>
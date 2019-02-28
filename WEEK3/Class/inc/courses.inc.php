<?php
    function cmp_courses($x, $y){
        echo "X: $x \n";
        echo "Y: $y \n";

        $xArr = explode(" ", $x);
        $yArr = explode(" ", $y);

        echo "xarr[2]: " . $xArr[2] . "\n yArr[2]" . $yArr[2] . "\n";
        if($xArr[2] > $yArr[2]){
            return 1;
        } else if($xArr[2] < $yArr[2]){
            return -1;
        } else {
            return 0;
        }
    }
?>
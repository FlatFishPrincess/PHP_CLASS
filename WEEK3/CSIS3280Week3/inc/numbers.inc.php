<?php

function cmp_numbers($x,$y)  {
    //Compare the numbers
    if ($x > $y) {
        return 1;
    } else if ($x < $y)  {
        return -1;
    } else {
        return 0;
    }
}

?>
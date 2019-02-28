<?php
    $letters = range("a", "f");
    // var_dump($letters);
    // for($i = 0; $i < count($letters); $i++){
    //     $letters[$i] = array($letters[$i], $i + 10);
    // }
    // var_dump($letters);
    print_r($letters);
    // echo $letters[2][0];

    for($i = 0; $i< count($letters); $i++){
        $letters[$i] = array($letters[$i], $i);
    }
    print_r($letters);
?>
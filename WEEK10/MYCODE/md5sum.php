<?php 

    $password = "Test";
    echo "md5: " . md5($password) . "\n";

    $hash =  password_hash($password, PASSWORD_DEFAULT);
    echo "hash: " . $hash . "\n";

    echo "Valid results are: " . password_verify($password, $hash) . "\n"; // return 1
    echo "Invalid results are: [" . password_verify("Jonah", $hash) . "]" . "\n"; // return nothing


?>

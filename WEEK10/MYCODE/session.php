<?php 
    session_start();
    $_SESSION["messages"] = "How are u?";
   
    $_SESSION["trace"] = time();
    var_dump($_SESSION);
?>
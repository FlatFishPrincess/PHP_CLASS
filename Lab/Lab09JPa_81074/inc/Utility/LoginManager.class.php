<?php


class LoginManager  {

    //This function checks if the user is logged in, if they are not they are redirected to the login page
    static function verifyLogin()   {
        session_start();
        //Check for a session_id or the $_SESSION variable
        $userInSession = $_SESSION['loggedin'];
        //Start it up
            //The user is not logged in
            //Destroy any session just in case
            //Send them back to the login page
            // compare POST 
        // var_dump($_POST);
        if(!$userInSession){
            unset($_SESSION);
            header('Location: Lab09-SWh-56789-login.php');
            return false;
        }
        return true;
    }
}

?>
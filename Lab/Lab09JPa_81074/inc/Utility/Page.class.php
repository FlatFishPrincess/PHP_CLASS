<?php

class Page  {

    public static $title = "Set Title!";

    static function header($logoff = null)    { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <meta charset="utf-8">
            <title><?php echo self::$title; ?></title>
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Check if its a logout page, if it is, then put in the redirect -->
            <?php if (!is_null($logoff))  {
                echo '<meta http-equiv="refresh" content="10; url=Lab09-SWh-56789-login.php">';
            } ?>
                <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

            <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/skeleton.css">

            <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <link rel="icon" type="image/png" href="images/favicon.png">

        </head>

        <body>

            <!-- Primary Page Layout
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <div class="container">
                <div class="row">
                    <div class="one-half column" style="margin-top: 25%">
                        <h4><?php echo self::$title; ?></h4>
    <?php }

    static function footer()    { ?>

            </div>
        </div>
        </div>

        <!-- End Document
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        </body>
        </html>

    <?php }

    static function listUsers($userData) {
        
        echo '<table class="u-full-width">
        <thead>
          <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($userData as $user)  {
            echo '<TR>';
            echo '<TD>'.$user->getUsername().'</TD>';
            echo '<TD>'.$user->getFirstName().'</TD>';
            echo '<TD>'.$user->getLastName().'</TD>';
            echo '<TD>'.$user->getEmail().'</TD>';
            echo '<TD><A HREF="'.$_SERVER["PHP_SELF"].'?action=delete&id='.$user->getUserId().'">Delete</A></TD>';
            echo '</TR>';
        }
         echo '</tbody>
      </table>';

    }

    static function addUser()   { ?>

    <h4>Add Customer</h4>
    <!-- The above form looks like this -->
    <form method="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div class="row">

        <div class="six columns">
        <label for="name">name</label>
        <input class="u-full-width" type="TEXT" placeholder="First Last" id="name" NAME="name">
        </div>

        <div class="six columns">
        <label for="name">address</label>
        <input class="u-full-width" type="TEXT" placeholder="Full Address" id="address" NAME="address">
        </div>
        
        <div class="six columns">
        <label for="name">City</label>
        <input class="u-full-width" type="TEXT" placeholder="City Name" id="city" NAME="city">
        </div>

    </div>
    <input class="button-primary" type="submit" value="Submit">
    </form>

    <?php }

    static function showLogin()    { ?>

    <h4>Please Login</h4>
    <!-- The above form looks like this -->
    <form method="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="action" value="login">

        <div class="row">

            <div class="six columns">
            <label for="username">Username</label>
            <input class="u-full-width" type="TEXT" placeholder="Username" id="username" NAME="username">
            </div>

            <div class="six columns">
            <label for="name">Passowrd</label>
            <input class="u-full-width" type="PASSWORD" id="password" NAME="password">
            </div>
            
        </div>
        <input class="button-primary" type="submit" value="Login">
        </form>
    <?php }

    //This function takes information from the header and welcomes the user.

    static function welcome()   { 
        $currentUser = $_SESSION["loggedin"];
        ?>

        <p>Hello <?php echo $currentUser->getfirstName(); ?>, <?php echo $currentUser->getLastName(); ?>.</p>
        <p>We currently have the following email address on file for you:  <?php echo $currentUser->getEmail(); ?>.</p>
        <p>Please contact us if you would like to change it.</p>

        <p>Click <A HREF="Lab09-SWh-56789-logout.php">here to logout</A>.</p>

    <?php }

    static function goodBye()  { ?>

       <p>Thanks for stopping by.</p>

    <?php   }

    static function displayErrors($errors) { 
        foreach($errors as $error){
            echo '<p style="color:red">' . $error . '</p>';
        }
    }
}
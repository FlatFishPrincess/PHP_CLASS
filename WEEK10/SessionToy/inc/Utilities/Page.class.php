<?php

class Page {

    public static $title = "Session Toy";

    static function header()    { ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>

        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title><?php echo self::$title; ?></title>
        <meta name="description" content="">
        <meta name="author" content="">

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

<?php     }

    static function footer()    { ?>
        </div>
        </div>
      </div>
    
    <!-- End Document
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    </body>
    </html>
    <?php }

    static function addForm()   { ?>

<!-- The above form looks like this -->
<form METHOD="POST" ACTION="">
  <div class="row">
    <div class="six columns">
      <label for="message">Message</label>
      <input class="u-full-width" type="text" placeholder="Enter your message here..." id="message" name="message">

  <input class="button-primary" type="submit" value="Submit">
  <a class="button" href="SessionToy.php?action=clear" style="background-color: red; color: white;">CLEAR</a>
    </div>
</form>

    <?php }

    static function showMessages($messages)   {
        echo '<table class="u-full-width">
            <thead>
                <tr>
                <th>Message</th>
                <th>Date</th>
                </tr>
            </thead>
            <tbody>';
        var_dump($messages);
        if(is_array($messages)){
            foreach($messages as $message)  {
                echo '<TR><TD>'.$message->getMessage().'</TD><TD>'.$message->getDateTime().'</TD></TR>';
            }
        } else {
            echo '<tr>
                <td>' . $messages . '</td>
                </tr>';
        }
     
        echo '   </tbody>
        </table>';
    }
}
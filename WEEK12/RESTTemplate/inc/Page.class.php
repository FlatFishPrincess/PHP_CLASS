<?php

class Page {
    
    static function header()    { ?>

        <!DOCTYPE html>
        <html>
            <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>

            <body>
            <DIV ID="container">
   
   <?php }

    static function footer()    { ?>

            </DIV>
            <!--JavaScript at end of body for optimized loading-->
            <script type="text/javascript" src="js/materialize.min.js"></script>
            </body>
        </html>

    <?php }

    static function requestForm()   { ?>

        <FORM METHOD="GET" ACTION="">

        <label>Request Select</label>

        <select class="browser-default" name="requesttype">
                <option value="" disabled selected>Select the Request Type</option>
                <option value="GET">GET</option>
                <option value="POST">POST</option>
                <option value="PUT">PUT</option>
                <option value="DELETE">DELETE</option>
        </select>

        <INPUT TYPE="Submit" VALUE="Go!">

        </FORM>

    <?php }

    static function showResult($result) { ?>
      <div class="row">
        <div class="col s12 m5">
        <div class="card-panel light-blue darken-4">
            <span class="white-text"> <?php var_dump($result); ?>
            </span>
        </div>
        </div>
    </div>

    <?php }
}

?>
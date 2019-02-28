<?php 

    // Encapsulation concept => public private (cannot access for private but not public)
    // Page is a static class, usually for utility

    // how to use class public fields? :
    // for static, use self::$var 
    // not static, $this -> var
    class Page {
        public static $title = "";
        static function header(){ ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <!-- Basic Page Needs
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <meta charset="utf-8">
                    <title><?php echo self::$title ?></title>
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
                            <h4>Basic Page</h4>
        <?php }

        static function footer() { ?>
                        <p>Hello World!</p>
                        </div>
                        </div>
                    </div>

                <!-- End Document
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                </body>
                </html>
    <?php }
        static function mobileAddForm(){ ?> 
            <!-- type, cpu_type, formFactor, RAM,color -->
            <form action="POST">
                <input type="text" size="10" name="type">
                <input type="text" size="10" name="cpu_type">
                <input type="text" size="10" name="formFactor">
                <input type="text" size="10" name="RAM">
                <input type="text" size="10" name="color">
                <input type="submit" >
            </form>
    
    <?php }

    }
?>
<?php 
    class Page {
        static $title = "CSISWeek9Demo";
        
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
                      
                        </div>
                        </div>
                    </div>

                <!-- End Document
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                </body>
                </html>
    <?php } 

        public static function listBooks($books){
            echo '<table class="u-full-width">';
            echo '
                <thead>
                    <tr>
                        <th scope="col">ISBN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>';
            foreach($books as $bookData){
                echo '<tr>' .
                        '<td>'. $bookData->ISBN . '</td>' .
                        '<td>'. $bookData->Title . '</td>' .
                        '<td>'. $bookData->Author . '</td>' .
                        '<td>'. $bookData->Price . '</td>' .
                    '</tr>';
            }
               
             echo '</table>';
        }

        public static function showAddForm(){ ?> 
            <form method="POST" action="<?php echo $_SERVER["PHP_SERBER"] ?>">
                <div class="row">
                    <div class="six columns">
                        <label for="isbn">ISBN</label>
                        <input class="u-full-width" type="test" placeholder="ISBN" id="isbn" name="isbn">
                    </div>
                    <div class="six columns">
                        <label for="title">Title</label>
                        <input class="u-full-width" type="test" placeholder="title" id="title" name="title">
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <label for="author">Author</label>
                        <input class="u-full-width" type="test" placeholder="author" id="author" name="author">
                    </div>
                    <div class="six columns">
                        <label for="price">Price</label>
                        <input class="u-full-width" type="test" placeholder="price" id="price" name="price">
                    </div>
                </div>
                <input class="button-primary" type="submit" value="Submit">
            </form>
        <?php }

    }

?>

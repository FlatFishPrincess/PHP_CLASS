<?php
class Page  {

    public static $title = "Please set your title!";

    static function header()   { ?>
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
    <?php }

    static function footer()   { ?>
            </div>
            </div>
        </div>

        <!-- End Document
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        </body>
        </html>

    <?php }

    static function listBooks($bookData)    {

        echo '<table class="u-full-width">
        <thead>
          <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($bookData as $book)    {
            echo '  <tr>
            <td>'.$book->getISBN().'</td>
            <td>'.$book->getTitle().'</td>
            <td>'.$book->getAuthor().'</td>
            <td>'.$book->getPrice().'</td>
            <td><A HREF="'.$_SERVER["PHP_SELF"].'?action=delete&isbn='.$book->getISBN().'
            ">Delete</A></td>
            </tr>';
        }
        
        echo '</tbody>
        </table>';
  
    }

    static function showAddForm()   { ?>

        <form method="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="row">


            <div class="eight columns">
            <label for="Title">ISBN</label>
            <input class="u-full-width" type="text" placeholder="XXX-XXX-XXX" id="isbn" name="isbn">
            
            <label for="title">Title</label>
            <input class="u-full-width" type="text" placeholder="Book Title" id="title" name="title">

\            <label for="title">Author</label>
            <input class="u-full-width" type="text" placeholder="Book Author" id="author" name="author">
 
            <label for="title">Price</label>
            <input class="u-full-width" type="text" placeholder="Book Price X.XX" id="price" name="price">
  
            <input class="button-primary" type="submit" value="Submit">
            </div>
          

        </div>
        
        </form>

    <?php }
}
<?php 
    function html_header($title){ ?> 
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

            <title><?php echo $title; ?></title>
        </head>
        <body>
            <h1><?php echo $title; ?></h1>
<?php } 
    
   function html_footer(){ ?> 
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        </body>
        </html>
<?php } 

    function html_uploadForm(){ ?>
        <form method = "POST" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data"> 
            <input type="file" name="fileToUpload" />
            <input type="submit" value="Uplaod File!" />
        </form>
<?php }

    function html_errors($errors){ 
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Please fix the following errors:';
        echo '<ul>';
        foreach($errors as $error){
            echo '<li>'. $error .'</li>';
        }
        echo '<ul>';
        echo '</div>';
    }
   
    function html_pizzaList($pizzas){
        // Create the table and the header
        echo '<table class="table">';
        echo '<tr>
                <th scope="col">Pizza Type</th>
                <th scope="col">Crust Type</th>
                <th scope="col">Veggie Type</th>
                <th scope="col">Meat Type</th>
                <th scope="col">Order Type</th>
             </tr>';
       
        foreach($pizzas as $pizza){
            echo '<tr>' .
                    '<td>'. $pizza[0] . '</td>' .
                    '<td>'. $pizza[1] . '</td>' .
                    '<td>'. $pizza[2] . '</td>' .
                    '<td>'. $pizza[3] . '</td>' .
                    '<td>'. $pizza[4] . '</td>' .
                '</tr>';
        }
       
        echo '</table>';
    }
 ?>
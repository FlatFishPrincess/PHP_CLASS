<?php

function html_header($title)   { ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
  </head>
  <body>
  <div>
    <h1><?php echo $title; ?></h1>

<?php }

function html_footer()   { ?>

</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

<?php }

function html_uploadForm()  { ?>

<P>Please select a file to upload.</P>
<FORM METHOD="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
<INPUT TYPE="file" NAME="fileToUpload">
<INPUT TYPE="submit" VALUE="Upload File!">
</FORM>

<?php }

function html_errors($errors)   {

    echo '<div class="alert alert-warning" role="alert">';
    echo 'Please fix the following errors:';
    echo '<UL>';
    foreach($errors as $pinkponies) {
        echo "<LI>$pinkponies</LI>";
    }
    echo '</UL>';
    echo '</div>';
}

function html_pizzaList($pizzas)   {
// pizza_type,crust_type,veggie_topping,meat_topping,order_type

//Create the table and the header
echo  '<TABLE CLASS="table">';
echo '<TR><TH SCOPE="col">Pizza Type</TH>
<TH SCOPE="col">Crust Type</TH>
<TH SCOPE="col">Veggie Topping</TH>
<TH SCOPE="col">Meat Topping</TH>
<TH SCOPE="col">Order Type</TH></TR>';

//Iterate through the pizzas
foreach ($pizzas as $pizza) {
    echo "<TR><TD>".$pizza[0]."</TD>
    <TD>".$pizza[1]."</TD>
    <TD>".$pizza[2]."</TD>
    <TD>".$pizza[3]."</TD>
    <TD>".$pizza[4]."</TD></TR>";
}

echo "</TABLE>";

}

?>
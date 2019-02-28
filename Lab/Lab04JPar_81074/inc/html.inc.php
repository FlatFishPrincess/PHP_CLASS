<?php

function htmlHeader($header = "Lab04JPa_82017")   { ?>
  <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <title><?php echo $header; ?></title>
    </head>
    <body>
        <h1><?php echo $header; ?></h1>

<?php }

function htmlFooter()   { ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
    </html>

<?php }

function htmlRoster($rosterData)    {
    // add images into array 
    $imgArr = array();
    foreach($rosterData as $roster){
      $imgArr[] = '<img src="./img/' . strtolower($roster[0]) .'.gif">';
    }
    echo '<table class="table">';
    echo '<tr>
            <th scope="col">Logo</th>
            <th scope="col"><a href="Lab04JPa_81074.php?sort=team" >Team Name</a></th>
            <th scope="col"><a href="Lab04JPa_81074.php?sort=payroll" >Payrolls</a></th>
            <th scope="col"><a href="Lab04JPa_81074.php?sort=win">Wins</a></th>
         </tr>';
    $counter = 0;
    foreach($rosterData as $roster){
        echo '<tr>' .
                '<td>'. $imgArr[$counter] . '</td>' .
                '<td>'. $roster[0] . '</td>' .
                '<td>'. $roster[1] . '</td>' .
                '<td>'. $roster[2] . '</td>' .
            '</tr>';
        $counter++;
    }
    echo '</table>';
    echo '</form>';
}

?>

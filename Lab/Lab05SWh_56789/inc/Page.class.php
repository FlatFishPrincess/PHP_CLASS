<?php

//This Class is to construct our html page.

class Page  {
  public $title = "Please set the title";

  //Constructor - Set the title when it is passed in __construct($newTitle)  {
    public function __construct($_title) {
      $this->title = $_title;
  }

  //This function displays the html header
  function header() { ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
          <!-- Basic Page Needs
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          <meta charset="utf-8">
          <title> <?php echo $this->title ?> </title>
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
                <h4>header</h4>
  <?php }

  //This function displays the html footer
  function footer() { ?>
              </div>
              </div>
          </div>
        </body>
        </html>
  <?php }

  //This function displays the upload form for the CSV file
  function uploadForm() { ?>
        <form method = "POST" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data"> 
            <input type="file" name="fileToUpload" />
            <input type="submit" value="Uplaod File" />
        </form>
  <?php }


  function showRoster($team)  { ?>
      <!-- Setup the table roster -->
      <table class="table">
        <tr>
          <th scope="col">Player Number</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Position</th>
          <th scope="col">Bats</th>
          <th scope="col">Throw</th>
          <th scope="col">Age</th>
          <th scope="col">Height</th>
          <th scope="col">Weight</th>
          <th scope="col">Birth Place</th>
      </tr>

      <?php 
      //Iterate through the roster and print it out
        foreach ($team->players as $player)  {
          echo '<tr>' .
                  '<td>'. $player->playerNum . '</td>' .
                  '<td>'. $player->firstName . '</td>' .
                  '<td>'. $player->lastName . '</td>' .
                  '<td>'. $player->position . '</td>' .
                  '<td>'. $player->bats . '</td>' .
                  '<td>'. $player->throw . '</td>' .
                  '<td>'. $player->age . '</td>' .
                  '<td>'. $player->height . '</td>' .
                  '<td>'. $player->weight . '</td>' .
                  '<td>'. $player->birthPlace . '</td>' .
                '</tr>';
        } ?>
      </table>
      <!-- End the table roster -->
      <p>Total Player Count: <?php echo $team->numberOfPlayers ?></p>
      <!-- Display the total count of team members -->
  <?php }


} ?>

<?php

// static object => 
class Page {
    // store title in the class
    public static $title = "";

    static function header() {?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
        
          <!-- Basic Page Needs
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          <meta charset="utf-8">
          <!-- ***Static class- > self::$var/ nonStatic -> $this->var-->
          <title><?php echo self::$title?></title>
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

              <h4><?php echo self::$title?></h4>

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

    static function mobileAddForm() { 
      // type, cpu_type, formFactor, RAM, color
      ?>
        
    <FORM METHOD = "POST" ACTION <?php echo $_SERVER["PHP_SELF"];?>>
        <INPUT TYPE= "TEXT" SIZE= "10" NAME = "type">
        <INPUT TYPE= "TEXT" SIZE= "10" NAME = "cpu_type">
        <INPUT TYPE= "TEXT" SIZE= "10" NAME = "formFactor">
        <INPUT TYPE= "TEXT" SIZE= "10" NAME = "RAM">
        <INPUT TYPE= "TEXT" SIZE= "10" NAME = "color">
        <INPUT TYPE= "SUBMIT" >

    </FORM>
        
<?php  }

static function listMobiles($mobiles) { 

echo '<TABLE>';
//Print out the header
echo '<TR><TH class="cols">Type</TH>
  <TH class="cols">CPU Type</TH>
  <TH class="cols">Form Factor</TH>
  <TH class="cols">RAM</TH>
  <TH class="cols">Color</TH></TR>';

  //Go through all th emobiles
  foreach ($mobiles as $mobile) {
    echo '<TR><TH class="cols">'.$mobile->type.'</TH>
    <TH class="cols">'.$mobile->cpu_type.'</TH>
  <TH class="cols">'.$mobile->formFactor.'</TH>
  <TH class="cols">'.$mobile->RAM.'</TH>
  <TH class="cols">'.$mobile->color.'</TH></TR>';
  
}

echo '</TABLE>';

}

 }

?>
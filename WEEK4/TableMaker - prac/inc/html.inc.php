<?php

function html_header($title)    { ?>

<HTML>
<HEAD>
    <TITLE><?php echo $title; ?></TITlE>
</HEAD>
<BODY>
<H1><?php echo $title; ?></H1>

<?php }

function html_footer()  { ?>

</BODY>
</HTML>

<?php }

function html_tableForm()   { ?>
<FORM METHOD="GET" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">

<TABLE>
    <TR>
        <TD>Please enter a height</TD>
        <TD><INPUT TYPE="TEXT" SIZE="2" NAME="height"></TD>
    </TR>
    <TR>
        <TD>Please enter a width</TD>
        <TD><INPUT TYPE="TEXT" SIZE="2" NAME="width"></TD>
    </TR>
    <TR>
        <TD>Please enter a marker</TD>
        <TD><INPUT TYPE="TEXT" SIZE="2" NAME="marker"></TD>
    </TR>
</TABLE>
<INPUT TYPE="Submit">
</FORM>

<?php }

function html_generate_table($data)  {

    $height = (int)$data["height"];
    $width = (int)$data["width"];
    $marker = (int)$data["marker"];

    $counter = 1;

    echo '<table border=1 CELLPADDING=10px>';
    for($x = 0; $x < $height; $x++){
        echo '<tr>';
        // echo "create table";
        for($y = 1; $y <= $width; $y++){
            if($counter == $marker){
                echo '<td bgcolor="orange"></td>';
            } else {
                echo '<td></td>';
            }
            $counter++;
        }
        echo '</tr>';
    }
    echo '</table>';
    
    // $height = $_GET["height"];
    // $width = $_GET["width"];

    // $counter = 0;

    // echo "<TABLE BORDER=1 CELLPADDING=10px>";
    // for ($x = 0; $x < $width; $x++) {
    //     echo "<TR>";
    //         for ($y = 0; $y < $height; $y++)  {
    //             $counter++;
    //             if ($counter == $_GET["marker"])    {
    //                 echo "<TD BGCOLOR=\"orange\"></TD>";
    //             } else {
    //                 echo "<TD></TD>";
    //             }
    //         }
    //     echo "</TR>";
    // }
    // echo "</TABLE>";

 }

 function html_errors($errors)  {
     foreach($errors as $error){
         echo '<p>' . $error . '</p>';
     }
    //  echo '<DIV STYLE="border-radius:5px;background-color:#FDA;padding:5px;width:50%">';
    //  echo '<h3>Please fix the following errors:</h3>';
    //  echo '<UL>';
    //  foreach ($errors as $error)    {
    //     echo '<LI>'.$error.'</LI>';
    //  }
    //  echo '</UL>';
    //  echo '</DIV>';
 }
?>
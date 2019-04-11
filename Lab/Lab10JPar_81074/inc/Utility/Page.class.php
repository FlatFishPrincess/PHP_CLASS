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

    static function listCustomers($customerData)    {

        echo '<table class="u-full-width">
        <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Address</th>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>';

        foreach ($customerData as $customer)    {
            echo '  <tr>
            <td>'.$customer->getName().'</td>
            <td>'.$customer->getCity().'</td>
            <td>'.$customer->getAddress().'</td>
            <td>
                <A HREF="'.$_SERVER["PHP_SELF"].'?action=delete&customerId='.$customer->getCustomerID().'">Delete</A>
            </td>
            <td>
                <A HREF="'.$_SERVER["PHP_SELF"].'?action=edit&customerId='.$customer->getCustomerID().'">Edit</A>
            </td>
            </tr>';
        }
        
        echo '</tbody>
        </table>';

    }

    static function showAddForm($customer = null)   { ?>
        <form method="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="row">
                <h4><?php echo $customer? "Edit Customer - " . $customer->getCustomerID() : "Add Customer" ?></h4>
                <div class="eight columns">
                    <label for="name">name</label>
                    <input class="u-full-width" type="text" placeholder="First Last" id="name" name="name"
                        value="<?php echo $customer? $customer->getName() : ""  ?>">
                    
                    <label for="address">address</label>
                    <input class="u-full-width" type="text" placeholder="full address" id="address" name="address"
                        value="<?php echo $customer? $customer->getAddress() : "" ?>">

                    <label for="city">city</label>
                    <input class="u-full-width" type="text" placeholder="city name" id="city" name="city"
                        value="<?php echo $customer? $customer->getCity() : "" ?>">

                    <input class="u-full-width" type="hidden" placeholder="customer Id" id="customerID" name="customerId" 
                        value="<?php echo $customer? $customer->getCustomerID(): ""  ?>">
                    
                    <input class="button-primary" type="submit" value="Submit">
                </div>
            </div>
        </form>
    <?php }

} 
?>
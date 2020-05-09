<!DOCTYPE html>
<html>

<head>
    <title>Order Summary Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="Bromwich Farms Order Summary">
    <meta name="Description" content="Confirmation details for produce order.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div id="page-content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Bromwich Farms  |</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  <span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="order_entry.php">Order Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member_form.php">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="newsletter.php">Newsletter<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="order_entry.php">Order Entry System</a>
                                <a class="dropdown-item" href="newsletter.php">Newsletter Sign Up</a>
                                <a class="dropdown-item" href="newsletter_report.php">Newsletter Database Report</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://www.w3schools.com/php/default.asp">PHP @ W3Schools.Com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="banner">
                <img src="images/slides/slide1_1900x600.jpg" width="100%" alt="newsletter_banner">
            </div>
            <br>
            <h2 style="font-weight:bold; color: #693b8e;">ORDER SUMMARY</h2>


            <?php

        
/* Pulling variable components from POST array */
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tomatoes = $_POST['tomatoes'];
$carrots = $_POST['carrots'];
$lettuce = $_POST['lettuce'];

/* Defining constant values for prices of produce */
define('CARROTS',0.17);
define('TOMATOES',0.48);
define('LETTUCE',0.86);

/* Setting up validation for form completion */
if ($fname == "" || $lname == "" || !is_numeric($tomatoes) || !is_numeric($carrots) || !is_numeric($lettuce)) {
    /* Problem with the data so sending back to form */
    header("Location: order_entry.php");
    
} else {
    /* Printing order summary to screen (item detail) */
    print("<br><h3>Order for:   $fname $lname</h3>");
    print('<br>Number of carrots:'.'  '.$carrots.' @ $'.CARROTS.' each.');
    print('<br>Number of tomatoes:'.'  '.$tomatoes.' @ $'.TOMATOES.' each.');
    print('<br>Heads of lettuce:'.'  '.$lettuce.' @ $'.LETTUCE.' each.');
    echo '<br><br>';

    /* Printing order totals to screen */            
    $items_ordered = $tomatoes + $carrots + $lettuce;
    $order_total = ($tomatoes*TOMATOES) + ($carrots*CARROTS) + ($lettuce * LETTUCE);
    print('Total items ordered: '.$items_ordered);
    print('<br>Invoice total:  $'.$order_total);        
}
?>
                <br><br>
                <h4>CALL 319-555-1212 TO ARRANGE DELIVERY</h4>
                <script src="js/jqueryUI.3.3.1.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

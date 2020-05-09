<!DOCTYPE html>
<html>

<head>
    <title>Newsletter Sign Up Processing</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="Bromwich Farms newsletter">
    <meta name="Description" content="Processing and confirmation of newsletter sign up.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div id="page-content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px solid black;margin-bottom:2em;">
                <a class="navbar-brand" href="index.php">Bromwich Farms  |</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  <span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
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
            <h3 style="font-weight:bold;color:green;">We've processed your request!</h3>
            <div class="banner">
                <img src="images/thumbs-up-1026395_1920.jpg" width="200" height="200" alt="newsletter_banner"><br>
            </div>
            <div id="confirmation">
                <br>
                <p>The following information was added to our newsletter database:</p>
                <?php

/* Printing out array with variable definitions */
/* print_r($_POST); */

/* Pulling variable components from POST array */
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$hidden_field = $_POST['hidden_field'];
$regmail_format = $_POST['regmail_format'];
$email_format = $_POST['email_format'];


/* Validating that data has been received by submission of the form fields */
if($hidden_field == "form_submitted") {
    
    /* Now validating that the form has been completed entirely before processing */
	if($fname=="" || $lname=="" || $street=="" || $city=="" || $state=="" || $zip=="" || $email=="") {
		header('Location: index.php');
		exit;
	} else {
        /* Reporting back to the user what is being submittied to the database */
		print("Last Name:  $lname".'<br>');
        print("First name:  $fname".'<br>');
        print("Address: $street, $city, $state, $zip".'<br>');
        print("Email Address:  $email".'<br>');
        print("Regular mail newsletter:  $regmail_format".'<br>');
        print("Email newsletter: $email_format".'<br>');
        
        /* Combining all fields into one comma seperated text line */
        $submission = "$lname,$fname,$street,$city,$state,$zip,$email,$regmail_format,$email_format";
        
        /* Writing text lines to newsletter_database.txt */
        $open = fopen('newsletter_database.txt','a+');
        if (!$open) {
                echo 'Database failed to update, please try again later.';
                exit;
        } else {
            fwrite($open,"$submission \n");
            echo 'Database update complete.';    
        }
        fclose($open);
	}
} else {
    /* This script executes if the data was not received through form submission */
	echo '<p style="color:red; font-weight: bold; font-size: 130%;">It appears your data was submitted by a robot!</p>';
	echo 'If this is an error, please complete the form and re-submit.';
	echo 'Thank you!';
}	

?>
                    <br><br>
                    <p>Email admin@bromwichfarms.com if there is a problem with your submission</p><br><br>


                    <h5>For Bromwhich Farms IT support:</h5><br>

                    <a href="newsletter_report.php"><button type="button">Administrative Reports</button></a>
                    <br>
            </div>


            <script src="js/jqueryUI.3.3.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

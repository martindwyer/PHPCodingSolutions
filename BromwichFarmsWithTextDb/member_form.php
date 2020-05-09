<!DOCTYPE html>
<html>

<head>
    <title>Bromwich Farms Home Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="Bromwich Farms Home Page">
    <meta name="Description" content="Home page for grower of Iowa vegetables.">
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
                        <li class="nav-item active">
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
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/slides/slide1_1900x600.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slides/slide2_1900x600.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slides/slide3_1900x600.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slides/slide1_1900x600.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slides/slide4_1900x600.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slides/slide5_1900x600.jpg" alt="First slide">
                    </div>
                </div>
            </div>

            <br>
            <h3 style="font-weight:bold; color: #693b8e;">MEMBERSHIP APPLICATION</h3>
            <br>

            <form method="post" action="member_form.php" id="member_form">


                <label>First Name</label>
                <input type="text" name="fname" value="" required><br>
                <label>Last Name</label>
                <input type="text" name="lname" value="" required><br>

                <label>Address</label>
                <input type="text" name="address" value="" required><br>
                <label>City</label>
                <input type="text" name="city" value="" required><br>
                <label>State</label>
                <input type="text" name="state" value="" required><br>
                <label>Zip Code</label>
                <input type="text" name="zip" value="" required><br>
                <label>Email Address</label>
                <input type="email" name="email1" value="" required><br>
                <label>Re-Enter Email Address</label>
                <input type="email" name="email2" value="" required><br>
                <div id="sec_code">
                    <label>3 Digit Security Code</label>
                    <input type="number" max=999 name="sec_code" required><br>
                </div>
                <div id="member_type">
                    <label>Type of Membership</label>
                    <select name="membership_type">
                            <option value="blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="guest">Guest</option>
                            <option value="publisher">Publisher</option>
                            <option value="editor">Editor</option>
                            <option value="seller">Seller</option>
                            <option value="purchaser">Purchaser</option>
                            <option value="administrator">Administrator</option>
                        </select>
                </div>



                <br><br>


                <input type="submit" name="submit" value="Submit Application" class="member_button">
                <input type="reset" name="reset" value="Reset" class="member_button">



            </form>


            <div id="member_feedback">


                <?php
    
    if (!isset($_POST['submit'])) {
        echo ' ';
        exit;
      
    } else {

        /* Printing post for development reference */ 
        // print_r($_POST);
        /* echo '<br><br>';  */
        
        /* Breaking posted array down into seperate variables */
        $fname = addslashes(ucfirst($_POST['fname']));
        $lname = addslashes(ucfirst($_POST['lname']));
        $address = addslashes(ucfirst($_POST['address']));
        $city = addslashes(ucfirst($_POST['city']));
        $state = addslashes(ucfirst($_POST['state']));
        $zip = $_POST['zip'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $email1 = $_POST['email1'];
        $email2 = $_POST['email2'];
        $sec_code = $_POST['sec_code'];
        $membership_type = $_POST['membership_type'];
        
        /* The following code validates email addresses */
        $re1='([\\w-+]+(?:\\.[\\w-+]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7})';	# Email Address 1
        if ($email1 != $email2) {
            echo '<br>';
            echo 'Email addresses did not match.  Please resubmit form.';
            exit;
        } else if ($c=preg_match_all ("/".$re1."/is", $email1, $matches))
        {
            $email1=$matches[1][0];
            echo '<br>';
            print "Your email address ($email1) has been validated \n";
            echo '<br>';
        } else {
            echo '<br>';
            echo 'Please resubmit form with valid email address';
            exit;            
        }
        
        /* The following is a final validation to ensure customer entered membership type */
        if ($membership_type == 'blank') {
            echo '<br>';
            echo 'Please enter a valid membership type and resubmit form';
            exit;
        } else {
            echo '<br>';
            echo 'Application for '.$membership_type.' role has been received and';
            echo ' has been submitted for review and approval.'.'<br><br>';
            $exploded_email = explode('@',$email1);
            $submission = "$lname,$fname,$address,$city,$state,$zip,$email1,$membership_type,$sec_code,$exploded_email[0],$exploded_email[1]";
            $open = fopen('users_list.txt','a+');
            if (!$open) {
                echo 'Database failed to update, please try again later.';
                exit;
            } else {
                fwrite($open,"$submission \n");
                echo 'Database update complete.'.'<br><br>';    
                echo 'The following data has been submitted for approval.'.'<br>';
                print("Last Name:  $lname".'<br>');
                print("First name:  $fname".'<br>');
                print("Address: $address, $city, $state, $zip".'<br>');
                print("Email Address:  $email1".'<br>');
                print("Membership Type:  $membership_type".'<br>');
        }
        fclose($open);
            
        }
        
        

  #-----
  # Paste the code into a new php file. Then in Unix:
  # $ php x.php 
  #-----    
     
        
    }

    
    ?>

            </div>



            <script src="js/jqueryUI.3.3.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

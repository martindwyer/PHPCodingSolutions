<!DOCTYPE html>
<html>

<head>
    <title>Newsletter Sign Up Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="Bromwich Farms newsletter">
    <meta name="Description" content="A form for users to sign up for newsletter.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS file links here -->
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
                        <li class="nav-item">
                            <a class="nav-link" href="order_entry.php">Order Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member_form.php">Membership</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="newsletter.php">Newsletter<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="order_entry.php">Order Entry</a>
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
            <h3 style="font-weight:bold; color: #693b8e;">Newsletter Sign Up Form</h3>
            <div class="banner">
                <img src="images/icon-1798271_1280.png" width="50%" alt="newsletter_banner">
            </div>
            <form id="newsletter_signup" method="post" action="newsletter_proc.php">
                <label>First Name:</label>
                <input type="text" name="fname" value=""><br><br>
                <label>Last Name:</label>
                <input type="text" name="lname" value=""><br><br>
                <label>Street:</label>
                <input type="text" name="street" value=""><br><br>
                <label>City:</label>
                <input type="text" name="city" value=""><br><br>
                <label>State:</label>
                <input type="text" name="state" value=""><br><br>
                <label>Zip:</label>
                <input type="number" name="zip" value=""><br><br>
                <label>Email:</label>
                <input type="email" name="email" value=""><br><br>


                <div id="newsletter_format">
                    <br>
                    <h4>Newsletter Format</h4>
                    <select name="regmail_format">
    <option value=" ">&nbsp;</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
                    <label>Receive newsletter by regular mail:</label>
                    <input type="checkbox" name="regmail_format" value="Yes">
                    <p>Receive newsletter by email:</p>
                    <input type="checkbox" name="email_format" value="Yes">Yes<br>
                    <input type="checkbox" name="email_format" value="No">No<br>
                </div>
                <input type="text" name="hidden_field" value="form_submitted"><br>

                <div>
                    <p>Submit to process your oder.</p>
                    <input type="submit" name="submit" value="Submit" style="width:75px; height:30px;float:left;">
                    <input type="reset" name="reset" value="Reset" style="width:75px; height:30px;float:left;"><br><br><br>
                    <p>If properly completed a summary of your order will be presented. If corrections are needed you will need to complete the form again.</p>


                </div>


            </form>




            <script src="js/jqueryUI.3.3.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

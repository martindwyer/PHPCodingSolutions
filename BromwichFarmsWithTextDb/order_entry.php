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
            <h3 style="font-weight:bold; color: #693b8e;">Enter Your Produce Order Here:</h3>
            <p>(All fields must be completed)</p>

            <form id="order-entry" method="post" action="order_summary.php">
                <div id="name-address" style="min-width: 250px;">
                    <label>First Name:</label>
                    <input type="text" name="fname" value=""><br><br>
                    <label>Last Name:</label>
                    <input type="text" name="lname" value=""><br><br>
                </div>
                <div id="product-cards">

                    <div class="card" style="width: 30%;min-width: 250px;margin-right:4%;margin-bottom: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Carrotts</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Enter number of carrots below</h6>
                            <img src="images/carrots-1200x675.jpg" width="80%"><br><br>
                            <label>Number:</label>
                            <input type="number" name="carrots" value=""><br><br>
                        </div>
                    </div>
                    <div class="card" style="width: 30%;min-width: 250px;margin-right:4%;margin-bottom:15px;">
                        <div class="card-body">
                            <h5 class="card-title">Tomatoes</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Enter number of tomatoes below:</h6>
                            <img src="images/tomatoes-1200x675.jpg" width="80%"><br><br>
                            <label>Number:</label>
                            <input type="number" name="tomatoes" value=""><br><br>
                        </div>
                    </div>
                    <div class="card" style="width: 30%;min-width: 250px;margin-right:0%;margin-bottom:15px;">
                        <div class="card-body">
                            <h5 class="card-title">Lettuce</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Enter heads of lettuce below:</h6>
                            <img src="images/lettuce-1200x675.jpg" width="80%"><br><br>
                            <label>Heads:</label>
                            <input type="number" name="lettuce" value=""><br><br>
                        </div>
                    </div>
                </div>
                <br>

                <div class="banner">

                </div><br>

                <div class="banner">

                </div><br>

                <div>
                    <br>
                    <p style="margin:10px 25px;">Submit to process your oder. If properly completed a summary of your order will be presented. If corrections are needed you will need to complete the form again.</p>
                    <input type="submit" name="submit" value="Submit" style="width:75px; height: 25px; margin: 0 25px;"><br><br>

                </div>



            </form>


            <script src="js/jqueryUI.3.3.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

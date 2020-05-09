<!DOCTYPE html>
<html>

<head>
    <title>Newsletter Database Report</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="Bromwich Farms Newsletter Database Report">
    <meta name="Description" content="A report of all subscribers to the newsletter.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container-fluid-report">
        <div id="page-content-report">
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
            <h3 style="font-weight:bold; color:#693b8e;">Newsletter Database Report</h3>

            <table id="newsletter-report">
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Email Address</th>
                    <th>Regular Mail</th>
                    <th>Email </th>
                </tr>
                <?php
            
                $open = fopen('newsletter_database.txt','r');
                while(!feof($open)) {
                    $customer = fgetcsv($open,0,",");
                    print('<tr>');
                    for($i=0; $i < 9; $i += 1) {
                        print('<td>'."$customer[$i]".'</td>');
                    }
                    print('</tr>');
                }
                fclose($open);


                ?>
            </table>
            <br><br>
            <p>End of Report</p>

            <script src="js/jqueryUI.3.3.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

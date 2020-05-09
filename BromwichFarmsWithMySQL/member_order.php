<?php session_start();?>

<?php require('lib/head_sec.inc'); ?>

<body>
    <div class="container-fluid">

        <div id="page-content">

            <?php require('lib/nav.inc'); ?>
            <div class="banner">
                <img src="images/slides/slide1_1900x600.jpg" width="100%" alt="newsletter_banner">
            </div>

            <div class="col-sm-12">

                <br>
                <h3 style="font-weight:bold; color: #693b8e;">Bromwich Farms</h3>
                <h6 style="font-weight:bold; color: #693b8e;">Member Order Page</h6>
                <?php require('lib/connect.inc');     ?>
                <?php 

                                $test = $_SESSION['email_one'];
                                $query = "SELECT * FROM users WHERE email_one = '$test'";

                                $result = mysqli_query($connect,$query);

                                if (!$result) {

                                    echo 'uh oh';

                                } else {

                                    $row = mysqli_fetch_array($result);

                                    echo '<br>';
                                    if ($row['image_path'] != "") {
                                        echo '<img src=';
                                        echo $row['image_path'];
                                        echo ' height = "150" width = "150">'.'<br><br>';
                                    } else {
                                        echo '<img src="avi/anonymous.jpg" height="150" width="150"><br><br>';
                                    }
                                    echo  'Member: '.$row['fname'].' '.$row['lname'].'<br>';
                                    echo  'Membership Type:  '.$row['member_type'].'<br><br>';

                                }
                                ?>

            </div>
            <br>
            <h5>Enter Your Produce Order Here:</h5>
            <p>(All fields must be completed)</p>
            <div class="row" style="width:80%;margin:0 auto;">
                <form id="order-entry" method="post" action="member_order_summary.php">
                    <div id="product-cards">

                        <div class="card" style="width: 29%;min-width: 225px;margin-right:4%;margin-bottom: 15px;">
                            <div class="card-body">
                                <h5 class="card-title">Carrotts</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Enter number of carrots below</h6>
                                <img src="images/carrots-1200x675.jpg" width="80%"><br><br>
                                <label>Number:</label>
                                <input type="number" name="carrots" value="" required><br><br>
                            </div>
                        </div>
                        <div class="card" style="width: 29%;min-width: 225px;margin-right:4%;margin-bottom:15px;">
                            <div class="card-body">
                                <h5 class="card-title">Heirloom Tomatoes</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Enter number of tomatoes below:</h6>
                                <img src="images/tomatoes-1200x675.jpg" width="80%"><br><br>
                                <label>Number:</label>
                                <input type="number" name="tomatoes" value="" required><br><br>
                            </div>
                        </div>
                        <div class="card" style="width: 29%;min-width: 225px;margin-right:4%;margin-bottom:15px;">
                            <div class="card-body">
                                <h5 class="card-title">Romaine Lettuce</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Enter heads of lettuce below:</h6>
                                <img src="images/lettuce-1200x675.jpg" width="80%"><br><br>
                                <label>Heads:</label>
                                <input type="number" name="lettuce" value="" required><br><br>
                            </div>
                        </div>
                        <div class="card" style="width: 29%;min-width: 225px;margin-right:4%;margin-bottom:15px;">
                            <div class="card-body">
                                <h5 class="card-title">Broccoli</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Enter heads of broccoli below:</h6>
                                <img src="images/broccoli-1200x675.jpg" width="80%"><br><br>
                                <label>Heads:</label>
                                <input type="number" name="broccoli" value="" required><br><br>
                            </div>
                        </div>
                        <div class="card" style="width: 29%;min-width: 225px;margin-right:4%;margin-bottom:15px;">
                            <div class="card-body">
                                <h5 class="card-title">Potatoes</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Enter pounds of potatoes below:</h6>
                                <img src="images/potatoes-1200x675.jpg" width="80%"><br><br>
                                <label>Pounds:</label>
                                <input type="number" name="potatoes" value="" required><br><br>
                            </div>
                        </div>
                        <div class="card" style="width: 29%;min-width: 225px;margin-right:0%;margin-bottom:15px;">
                            <div class="card-body">
                                <h5 class="card-title">Corn</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Enter bushels of corn below:</h6>
                                <img src="images/corn-1200x675.jpg" width="80%"><br><br>
                                <label>Bushels:</label>
                                <input type="number" name="corn" value="" required><br><br>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div style="clear:both;width:60%;">
                        <br>
                        <p style="margin:10px 25px;">Submit to process your oder. If properly completed a summary of your order will be presented. If corrections are needed you will need to complete the form again.</p>
                        <input type="submit" name="submit" value="Submit" style="width:125px; height: 75px; margin: 0 25px;background-color:green;color:white;font-weight:bold;font-size:125%;"><br><br>

                    </div>



                </form>


                <script src="js/jqueryUI.3.3.1.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/site.js"></script>
            </div>
        </div>
</body>

</html>

<?php session_start();?>
<?php require('lib/connect.inc');  ?>
<?php require('lib/head_sec.inc'); ?>

<body>
    <div class="container-fluid">
        <div id="page-content">
            <?php require('lib/nav.inc'); ?>

            <div class="banner">
                <img src="images/slides/slide1_1900x600.jpg" width="100%" alt="newsletter_banner">
            </div>
            <br>
            <h2 style="font-weight:bold; color: #693b8e;">ORDER SUMMARY</h2>


            <?php
            /* Pull user data from database */
    			$test = $_SESSION['email_one'];   
    			$result = mysqli_query($connect,"SELECT * FROM users WHERE email_one = '$test'");
				$user_data = mysqli_fetch_array($result);
        
				/* Pulling variable components from POST array */
				            
				$fname = $user_data['fname'];
				$lname = $user_data['lname'];
				$tomatoes = $_POST['tomatoes'];
				$carrots = $_POST['carrots'];
				$lettuce = $_POST['lettuce'];
				$broccoli = $_POST['broccoli'];
				$potatoes = $_POST['potatoes'];
				$corn = $_POST['corn'];

				/* Defining constant values for prices of produce */
				define('CARROTS',0.17);
				define('TOMATOES',0.48);
				define('LETTUCE',0.86);
				define('BROCCOLI',1.25);
				define('POTATOES',2,85);
				define('CORN',2.53);

				/* Setting up validation for form completion */
				if ($fname == "" || $lname == "" || !is_numeric($tomatoes) || !is_numeric($carrots) || !is_numeric($lettuce)) {
				    /* Problem with the data so sending back to form */
				    print_r($_SESSION);
				    
				} else {
				    /* Printing order summary to screen (item detail) */
				    print("<br><h3>Order for:   $fname $lname</h3>");
				    print('<br>Number of carrots:'.'  '.$carrots.' @ $'.CARROTS.' each.');
				    print('<br>Number of tomatoes:'.'  '.$tomatoes.' @ $'.TOMATOES.' each.');
				    print('<br>Heads of lettuce:'.'  '.$lettuce.' @ $'.LETTUCE.' each.');
				    print('<br>Heads of broccoli:'.'  '.$broccoli.' @ $'.BROCCOLI.' each.');
				    print('<br>Pounds of potatoes:'.'  '.$potatoes.' @ $'.POTATOES.' each.');
				    print('<br>Bushels of corn:'.'  '.$corn.' @ $'.CORN.' each.');
				    echo '<br><br>';
				
				    /* Printing order totals to screen */            
				    $order_total = ($tomatoes*TOMATOES) + ($carrots*CARROTS) + ($lettuce * LETTUCE)+($broccoli*BROCCOLI)+($potatoes*POTATOES)+($corn*CORN);
				    print('<br>Invoice total:  $'.$order_total);        
				}
				?>
                <br><br>
                <h4>Delivery</h4>
                <p style="text-align:center;"><img src="images/truck-1200x675.jpg" width="600"></p>
                <h6>CALL 319-555-1212 TO ARRANGE DELIVERY</h6>
                
                <script src="js/jqueryUI.3.3.1.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/site.js"></script>
        </div>
        <?php
        		/* Organizing data for insertion into the orders table of the b_farms database  */
            $user_num = $user_data['user_num'];
            $tomato_cost = $tomatoes*TOMATOES;
            $carrot_cost = $carrots*CARROTS;
            $lettuce_cost = $lettuce*LETTUCE;
            $broccoli_cost = $broccoli*BROCCOLI;
            $potatoes_cost = $potatoes*POTATOES;
            $corn_cost = $corn*CORN;
            
            /* Inserting one purchase order for each vegetable item into the database */
        
            $query = "INSERT INTO orders (user_num, date_time, product, quantity, cost) VALUES  ('$user_num', CURRENT_TIMESTAMP, 'tomatoes', '$tomatoes', '$tomato_cost');";
            $result = mysqli_query($connect,$query);
            
            $query = "INSERT INTO orders (user_num, date_time, product, quantity, cost) VALUES  ('$user_num', CURRENT_TIMESTAMP, 'carrots', '$carrots', '$carrot_cost');";
            $result = mysqli_query($connect,$query);
            
            $query = "INSERT INTO orders (user_num, date_time, product, quantity, cost) VALUES  ('$user_num', CURRENT_TIMESTAMP, 'lettuce', '$lettuce', '$lettuce_cost');";
            $result = mysqli_query($connect,$query);
            
            $query = "INSERT INTO orders (user_num, date_time, product, quantity, cost) VALUES  ('$user_num', CURRENT_TIMESTAMP, 'broccoli', '$broccoli', '$broccoli_cost');";
            $result = mysqli_query($connect,$query);
            
            $query = "INSERT INTO orders (user_num, date_time, product, quantity, cost) VALUES  ('$user_num', CURRENT_TIMESTAMP, 'carrots', '$potatoes', '$potatoes_cost');";
            $result = mysqli_query($connect,$query);
            
            $query = "INSERT INTO orders (user_num, date_time, product, quantity, cost) VALUES  ('$user_num', CURRENT_TIMESTAMP, 'carrots', '$corn', '$corn_cost');";
            $result = mysqli_query($connect,$query);
            
        ?>

    </div>
</body>

</html>

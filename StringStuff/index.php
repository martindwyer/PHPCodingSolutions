<!DOCTYPE html>
<html>

<head>
    <title>Unit Four</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="PHP Unit Four">
    <meta name="Description" content="Index page designed to include all of unit four.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <h1>Manipulating Strings</h1>

    <form method="post" action="index.php" class="order_form">
        <div class="left_side">
            <fieldset>
                <legend>Personal Data</legend>
                <label>First Name</label>
                <input type="text" name="fname" value=""><br>
                <label>Last Name</label>
                <input type="text" name="lname" value=""><br>
                <label>Email Address</label>
                <input type="text" name="email" value=""><br>
                <label>Address</label>
                <input type="text" name="address" value=""><br>
                <label>City</label>
                <input type="text" name="city" value=""><br>
                <label>State</label>
                <input type="text" name="state" value=""><br>
                <label>Zip Code</label>
                <input type="text" name="zip" value=""><br>
                <label>Is your Mailing address same for shipping?</label><br> Yes
                <input type="radio" name="shipping" value="yes"><br> No
                <input type="radio" name="shipping" value="no"><br>


            </fieldset>
        </div>
        <div class="right_side">
            <fieldset>
                <legend>Credit Card Info</legend>
                <input type="list" list="credit" name="credit" value=""><br>
                <datalist id="credit">
                <?php
                    $cards = array('My Card','Master Card','Visa','American Express','Diners Club','Discover');
                    sort($cards);
                    foreach ($cards AS $x) {
                        echo '<option value="'.$x.'">';
                        
                    }
                    
                    ?>
     
     
                </datalist>

                <h4>Credit Card Number</h4>

                <input type="text" name="card_num">

                <h4>Expiration Date</h4>
                <label>Month</label>
                <input type="list" list="months" name="card_month">
                <datalist id="months">
                <?php
                    $months = range(1,12);
                    foreach ($months AS $y) {
                        echo '<option value="'.$y.'">';
                        
                    }
                    
                    ?>
                </datalist><br>
                <label>Year</label>
                <input type="list" list="years" name="card_year">
                <datalist id="years">
                <?php
                    $years = range(2018,2028);
                    foreach ($years AS $z) {
                        echo '<option value="'.$z.'">';
                        
                    }
                    
                    ?>
                </datalist><br>

                <label>Security Code</label>
                <input type="number" max="999" name="sec_code" required>

            </fieldset>





        </div>
        <div class="float_clear"></div>

        <input type="submit" name="submit" value="Place Order">
        <input type="reset" name="reset" value="Reset" style="margin-left:10px;">



    </form>


    <?php
    
    if (!isset($_POST['submit'])) {
        echo ' ';
      
    } else {
        print_r($_POST);
        echo '<br><br>';
        $fname = trim($_POST['fname']);
        $lname = addslashes(rtrim($_POST['lname']));
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = strtoupper($_POST['state']);
        $zip = $_POST['zip'];
        $credit = $_POST['credit'];
        $card_num = addslashes($_POST['card_num']);
        $card_month = $_POST['card_month'];
        $card_year = $_POST['card_year'];
        $sec_code = $_POST['sec_code'];
        echo '<br><br>';
        echo date('time');
        echo '<br><br>';
        $date = getDate();
        // print_r($date);
        // echo '<br><br>';        
        $t_date = date("s:m:h - m/d/y");
        // echo '<br><br>';
        // echo date("s:m:h");
        
        $num = 251.67;
        
        /*  The following does not work in uniform server */
        // echo money_format("The price is %i", $num);
        // echo '<br><br>';
        // echo '$'.number_format($num, 2, '.',',');
       
         echo 'Time Stamp: '.$t_date.'<br>';
        echo $state.'<br>';
        echo stripslashes($lname).'<br>';
        echo $card_num.'<br>';
        
        /* grand fashion comment about EXPLOSIONS :-) */
        // $ex_email = explode('@',$email);
        
        // echo $ex_email[0].'<br>';
        // echo $ex_email[1].'<br>'; 
        
        // $im_email = implode('@',$ex_email);
        
        // echo $im_email.'<br>';
        
        $bad_word = 'ass';
        $good_word = 'butt';
        
        $fixed = str_replace($bad_word,$good_word,$address);
        
        echo $fixed.'<br>';
        
          # URL that generated this code:
  # http://txt2re.com/index-php.php3?s=mark.bromwich@kirkwood.edu&1

  $txt='mark.bromwich@kirkwood.edu';

  $re1='([\\w-+]+(?:\\.[\\w-+]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7})';	# Email Address 1

  if ($c=preg_match_all ("/".$re1."/is", $email, $matches))
  {
      $email1=$matches[1][0];
      print "($email1) \n";
  }

  #-----
  # Paste the code into a new php file. Then in Unix:
  # $ php x.php 
  #-----    
     
        
    }

    
    ?>


</body>

</html>

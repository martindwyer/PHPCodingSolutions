<?php session_start();?>

<?php require('lib/head_sec.inc'); ?>

<body>
    <div class="container-fluid">
        <div id="page-content">
            <?php require('lib/nav.inc'); ?>




            <body>

                <main class="container-fluid">

                    <div class="row" style="width:60%;margin:0 auto;">
                        <div class="col-sm-12">
                            <div>
                                <h4><br><br>Bromwich Farms User Information</h4>
                                <?php    
                    require('lib/connect.inc');
                    ?>
                                <?php 
                    
                    $test = $_SESSION['email_one'];
                    $query = "SELECT * FROM users WHERE email_one = '$test'";
                    
                    $result = mysqli_query($connect,$query);
                    
                    if (!$result) {
                        
                        echo 'uh oh';
                        
                    } else {
                        
                        echo '<p>Please verify the information below.</p>';
                        echo '<p>Contact us if any changes are needed.</p>';
                        
                        
                        $row = mysqli_fetch_array($result);
                        
                        echo '<br>';
                        if ($row['image_path'] != "") {
                            echo '<img src="';
                            echo $row['image_path'];
                            echo '" height = "250" width = "250">'.'<br><br>';
                        } else {
                            echo '<img src="avi/anonymous.jpg" height="200" width="250"><br><br>';
                        }
                        echo  'User: '.$row['fname'].' '.$row['lname'].'<br>';
                        echo  'Street Address: '.$row['address'].'<br>';
                        echo  'City: '.$row['city'].', '.$row['state'].'  '.$row['zip'].'<br>';
                        echo  'Email Address: '.$row['email_one'].'<br>';
                        echo  'Membership Type:  '.$row['member_type'].'<br><br>';
                        
                        
                        
                        
                    }
                    ?>
                            </div>
                        </div>




                        <?php require('lib/footer.inc'); ?>

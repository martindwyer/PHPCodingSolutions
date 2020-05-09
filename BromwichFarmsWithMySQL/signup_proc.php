<?php require('lib/connect.inc'); ?>
<?php

/* Confirm connection to database before proceeding   */
if (!$connect) {
    die('No connection at this time!');
} else {
    echo 'You are now connected to the database'.'<br>';
    
    /* Confirm that a form has been submitted with data  */
    if (!isset($_POST)) {
        header('location:index.php');
    } else {
            print_r($_POST);
            echo '<br>';
            echo $_FILES['my_image']['name'];
         echo '<br>';
        
        /* Read in and process data  */
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email_one = $_POST['email_one'];
        $email_two = $_POST['email_two'];
        $password_one = trim($_POST['password_one']);
        $password_two = trim($_POST['password_two']);
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $member_type = $_POST['membership_type'];
        $image_size = getimagesize($_FILES['my_image']['tmp_name']);
        $image_path = 'avi/'.$_FILES['my_image']['name'];
        $image_name = $_FILES['my_image']['name'];
        $image_type = exif_imagetype($_FILES['my_image']['name']);
        
        echo $image_type;
        
        
        
        /* Verify email address and password before proceeding  */
        if ($email_one != $email_two || $password_one != $password_two) {
            header('location:user_error.php');
        } else {
            
            if($image_size == false) {
                $image_path = "";
            }else  {         	
                move_uploaded_file($_FILES['my_image']['tmp_name'],$image_path);
            }
            
            $password_one = md5($password_one);

            $query = "INSERT INTO users (email_one, pass_one, fname, lname, address, city, state, zip, image_path, member_type) VALUES  ('$email_one', '$password_one', '$fname', '$lname', '$address', '$city', '$state', '$zip','$image_path','$member_type');";
            $result = mysqli_query($connect,$query); 
            if(!$result) { 
                header('location:user_error.php'); 
            } else { 
            	$email = trim($_POST['email_one']);
     				$password = md5(trim($_POST['password_one']));
        
			        $query = "SELECT * FROM users WHERE email_one = '$email' AND pass_one = '$password'";    
			        $result = mysqli_query($connect,$query);
	     
			        if (!$result) {
			            header('location:user_error.php');
			            
			        } elseif (mysqli_num_rows($result) != 1) {
			            header('location:user_error.php');
			        } else {
			            $row = mysqli_fetch_array($result);
			            session_start();
			            $_SESSION['email_one'] = $row['email_one'];
			            header('location:user.php');
			        }
            } 
        } 
    }
}
?>

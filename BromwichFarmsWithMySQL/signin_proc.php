<?php require('lib/connect.inc'); ?>
<?php

/* Confirm connection to database before proceeding   */
if (!$connect) {
    die('No connection at this time!');
} else {
        
    /* Confirm that a form has been submitted with data  */
    if (!isset($_POST)) {
        header('location:index.php');
    } else {
        
        $email = trim($_POST['email']);
        $password = md5(trim($_POST['password']));
        
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
            header('location:member_order.php');
        }
        
    }
    
    
}

?>

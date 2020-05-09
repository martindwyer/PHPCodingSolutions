<?php

// echo 'Hello World';
// print_r($_POST);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$position = $_POST['position'];
$email = $_POST['email'];
$message = $_POST['message'];

// echo "$fname $lname $position";

$total_message = "$fname, $lname, $position, $email, $message";

if ($fname == "") {
    header("Location: index.php");
    exit;  // Could also use the die() method
} else {
    $open = fopen('email_adds.txt','a+');
    if (!$open) {
        echo 'Uh Oh';
        exit;
    } else {
        fwrite($open,"$total_message \n");
        echo 'Data has been written';    
    }
        
}
fclose($open);
echo '<ul>';

$open = fopen('email_adds.txt','r');
while(!feof($open)) {
    echo '<li>';
    echo fgetss($open);
    echo '</li>';
}

echo '</ul>';

fclose($open);


?>
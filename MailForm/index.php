<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link ref="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Unit 2: Contact Form</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Unit Two</h1>

        <div id="page-content">
            <h2>Contact Us</h2>
            <form method="post" action="mail_proc.php" class="mail_form">
                <br><br>
                <h3>Employee First Name</h3>
                <input type="text" name="fname" value="" placeholder="First Name">
                <br><br>
                <h3>Employee Last Name</h3>
                <input type="text" name="lname" value="" placeholder="Last Name">
                <br><br>
                <h3>Employee Position</h3>
                <select name="position">
                    <option value=""></option>
                        <option value="Accountants">Accountant</option>
                        <option value="Production">Production</option>
                        <option value="Manager">Manager</option>
                        <option value="HumanResources">Human Resources</option>
                    <option value="Maintenance">Maintenance</option>    
                    </select><br>
                <h3>Employee Email</h3>
                <input type="email" name="email" value="" placeholder="Email Address"><br>
                <h3>Your Message:</h3>
                <textarea name="message" value="">
                    
                    </textarea><br>
                <br>
                <input type="submit" name="submit" value="Send Email">

                <input type="reset" name="reset" value="Clear Form"><br>

            </form>
            <?php
                             
                    
                    ?>




                <script src="js/jqueryUI.3.3.1.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/site.js"></script>
        </div>
    </div>
</body>

</html>

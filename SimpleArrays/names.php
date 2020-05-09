<!DOCTYPE html>
<html>

<head>
    <title>Unit Three</title>
    <meta charset="utf-8">
    <meta name="author" content="Martin Dwyer">
    <meta name="Keywords" content="PHP Unit Three">
    <meta name="Description" content="Index page designed to include all of unit three.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <h1>Baby Name Generator</h1>

    <form method="post" action="names.php" class="mailform">

        <label>Enter Your Last Name</label>
        <input type="text" name="lname" value="" required><br><br><br>
        <label>Is this a boy name or girl name?</label>
        <select name="borg">
        <option value="0">&nbsp;</option>
            <option value="1">Boy</option>
            <option value="2">Girl</option>
               <option value="3">Surprise Me</option>
               </select><br><br><br>
        <input name="submit" value="Generate Name" type="submit"><br>



    </form>


    <?php
    
    /* print_r($_POST); */
    
    
    /* executing if 'submit' button was hit */
    if($_POST != NULL) {
        $lname = $_POST['lname'];
        $borg = $_POST['borg'];
        $times = 3;

        $girl_1 = array('Hannah','Elizabeth','Janice','Sarah');
        $girl_2 = array('Hannah','Elizabeth','Janice','Sarah');

        $boy_1 = array('Cody','Dakota','Dylan','Robert');
        $boy_2 = array('Cody','Dakota','Dylan','Robert');

        echo '<div class="mailform">';
        if ($borg == 1) {
            /* boys name here */
            
            for ($x = 0; $x < $times; $x ++) {
                shuffle($boy_1);
                shuffle($boy_2);
                echo $boy_1[0].' '.$boy_2[0].' '.$lname.'<br>';
                
            }
            
        } elseif ($borg == 2) {
            /* girls name here */
            for ($x = 0; $x < $times; $x ++) {
                shuffle($girl_1);
                shuffle($girl_2);
                echo $girl_1[0].' '.$girl_2[0].' '.$lname.'<br>';
                
            }
            
        } elseif ($borg == 3) {
            /* unknown here */
            echo 'This section still under development';
        }
        echo '</div>';
    
        
    
    }
    
    echo '<div class="mailform">';
    
    $careers = array(
        array('Mechanical','Engineer','4 yrs degree',55000),
        array('Bio','Chemist','4yr degree',50000),
        array('Network','Administrator','2yrs degree',45500),
        array('Neuro','Surgeon','8yrs degree',4000000)
    );
    
    $count_1 = count($careers);
    $count_2 = count($careers[0]);

    
    echo '<h3>Possible Careers For Your Child</h3>';
    echo '<table border="1" style="margin: 0 auto;">';
    for ($x=0; $x<$count_1; $x++) {
        echo '<tr>';
        for ($y=0; $y < $count_2; $y++){
            echo'<td>'.$careers[$x][$y].'</td>';
        }
        echo '</tr>';    
    }
    echo '</table>';
    echo '</div>';
    
    ?>




</body>

</html>

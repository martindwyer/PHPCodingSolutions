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

    <h1>Working with Arrays</h1>
    <?php 
    /* arrays */
        $myNames = array('Thomas','Sally'.'Wendy','Billy');
        $myNums = array(52,14,76,99);
        echo $myNames[1];
    echo '<br>';
    echo $myNums[1];
    
    /* array with named indices */
    $newNames = array('Thom' => 23, 'Sally' => 61);
    echo '<br>';
    echo $newNames['Thom'];
    
    /* range array  */
    $myRange = range(1,10);
    echo '<br>'.$myRange[3];
    
    for($x = 0; $x < 10; $x++) {
        echo '<br>'.$myRange[$x];
        
    }
    
    echo '<br>all done';
    
    ?>




    <script src="js/jqueryUI.3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/site.js"></script>

</body>

</html>

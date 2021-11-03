<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Information</title>
</head>
<body>
    
<?php
include 'components/navigation.php'
?>

<div class="container">
    <h3>Showing Sessions</h3>
    <?
    session_start();

    print_r($_SESSION);

    echo "<br>";
    // Showing session variable
    echo "Favorite color is " . $_SESSION["colour"] . ".<br>";

    ?>
</div>


<script src="js/bootstrap.js" ></script>
</body>
</html>
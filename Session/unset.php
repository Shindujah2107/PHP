<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Unset</title>
</head>
<body>
    
<?php
include 'components/navigation.php'
?>

<div class="container">
    <h3>Unset Sessions</h3>
    <?

    session_start();

    // remove session variables
    unset($_SESSION["colour"]);

    // remove all session variables
    // session_unset();

    // destroy the session
    // session_destroy();

    ?>
</div>


<script src="js/bootstrap.js" ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>

<?php
    include 'components/navigation.php'
?>

<div class="container">
    <h3>Setting Sessions</h3>
    <?php
    
    // Session Start
    session_start();

    // Set session variables
    $_SESSION["colour"] = "green";
    $_SESSION["name"] = "Karunathilaka";

    ?>
</div>


<script src="js/bootstrap.js" ></script>
</body>
</html>
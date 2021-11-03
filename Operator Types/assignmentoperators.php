<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment operators</title>
</head>
<body>
    <?php

    $x = 10;
    $y = 5;

    $sum = $x + $y;
    echo $sum."<br>";

    $sum += $x; // $sum = $sum + $x
    echo $sum."<br>"; //25

    $sum -= $x; // $sum = $sum - $x
    echo $sum."<br>"; //15

    $sum *= $x; // $sum = $sum * $x
    echo $sum."<br>"; // 150 Fazni

    $sum /= $x; // $sum = $sum / $x
    echo $sum."<br>"; // 15 Manish

    $sum %= $x; // $sum =$sum % $x
    echo $sum."<br>"; // 5 Hasara


    ?>
</body>
</html>
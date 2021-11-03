<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>

<body>
    <?php

    $x = 5;
    $y = 3;

    echo decbin($x & $y);
    echo "<br>";
    echo $x & $y;
    echo "<br>";

    echo decbin($x | $y);
    echo "<br>";
    echo $x | $y;
    echo "<br>";

    echo decbin(~$x);
    echo "<br>";
    echo ~$x;
    echo "<br>";

    echo decbin($x << 2);
    echo "<br>";
    echo $x << 2;
    echo "<br>";

    echo decbin($x >> 2);
    echo "<br>";
    echo $x >> 2;
    echo "<br>";


    ?>
</body>

</html>
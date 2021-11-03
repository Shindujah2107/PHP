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

    $x = 10;
    $y = 10;

    var_dump($x == $y);
    echo "<br>"; // False - Kalani , False - Niroshan

    var_dump($x != $y);
    echo "<br>"; // True - Kalani, True - Niroshan

    var_dump($x > $y);
    echo "<br>"; // True - Kalani, True- Niroshan

    var_dump($x < $y);
    echo "<br>"; // False - Kalani, False- Niroshan

    var_dump($x >= $y);
    echo "<br>"; // True - Kalani, True - Niroshan

    var_dump($x <= $y);
    echo "<br>"; // False - Kalani, False - Niroshan

    var_dump($y <=> $x); // 1,0,-1
    // > 1
    // < -1
    // == 0
    echo "<br>";






    ?>
</body>

</html>
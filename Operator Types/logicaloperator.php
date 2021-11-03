<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>

<body>
    <?php

    $x = 5;
    $y = 10;

    var_dump($x > 5 and $y >10);
    echo "<br>"; // False - kokila , False - Susmitha

    var_dump($x >= 5 and $y >= 10);
    echo "<br>"; // true
    

    var_dump($x >= 5 or $y >10);
    echo "<br>"; //true

    var_dump($x >= 5 xor $y >10);
    echo "<br>"; // true

    var_dump(!($x >= 5));
    echo "<br>"; // false

    ?>
</body>

</html>
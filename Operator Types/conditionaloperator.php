<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Operator</title>
</head>

<body>
    <h1>Additon</h1>
    <form action="conditionaloperator.php" method="GET">
        Num1 : <input type="number" name="num1">
        Num2 : <input type="number" name="num2">
        <input type="submit">
        <input type="reset">
    </form>

    <?php

     // $x=10;
        // $y = $x > 10 ? true : false;
        // var_dump($y);
        //  

   // $num1 = $_GET["num1"] ?? 0;
   // $num2 = $_GET["num2"] ?? 0;

    if (isset($_GET['num1']) && isset($_GET['num2'])) {

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "The Addition :" . $num1 + $num2;
    }

    echo "The Addition :" . $num1 + $num2;
    ?>
</body>

</html>
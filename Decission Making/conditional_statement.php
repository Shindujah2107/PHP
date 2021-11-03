<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>

<body>

    <?php

    // IF Else Condition
    $x =30;
    if($x >= 40){
        echo "The Value $x is Greator than 40";
    }else{
        echo "The Value $x is Less than 40";
    }


    // IF ElseIF Condition
    $x =5;
    if($x >= 40){
        echo "The Value $x is Greator than 40";
    }elseif($x >= 20){
        echo "The Value $x is Greator than 20";
    }elseif($x >= 10){
        echo "The Value $x is Greator than 10";
    }else{
        echo "The Value $x is less than 10";
    }


    // Switch Condition
    $car = "Mini Van";

    switch ($car) {
        case "Mini Van":
            echo "It's Mini Van";
            break;

        case "Maruti":
            echo "It's Maruti";
            break;

        deafult:
            echo "None of the Above";
            break;
    }

    ?>

</body>

</html>
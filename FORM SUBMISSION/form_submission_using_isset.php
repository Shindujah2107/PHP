<html>

<head>
    <title>Sample Document</title>
</head>

<body>

    <h1>Additon</h1>

    <form action="form_submission_using_isset.php" method="GET">
        Num1 : <input type="number" name="num1">
        Num2 : <input type="number" name="num2">
        <input type="submit">
        <input type="reset">
    </form>

    <?php

    if (isset($_GET['num1']) && isset($_GET['num2'])) {

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "The Addition :" . $num1 + $num2;
    }

    ?>

</body>

</html>
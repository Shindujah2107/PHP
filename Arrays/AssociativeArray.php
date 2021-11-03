<html>
<head><title>Associative Arrays</title></head>
<body>
<?php

/* First method to associate create array. */ 
$age = array( "Jhonathan" => 20, "Nipuna" => 19, "Siva" => 30, "Abdul" => 28 );
 
echo "Jhonathan  is". $age['Jhonathan'] . "<br />"; 
echo "Nipuna is". $age['Nipuna']. "<br />"; 
echo "Siva is". $age['Siva']. "<br />";
echo "Abdul is". $age['Abdul']. "<br />"; 

/* Second method to create array. */ 
$age['Jhonathan'] = "20 Yrs"; 
$age['Nipuna'] = "19 Yrs"; 
$age['Siva'] = "30 Yrs";
 
echo "Jhonathan is ". $age['Jhonathan'] . "<br />"; 
echo "Nipuna is ". $age['Nipuna']. "<br />";

foreach($age as $value){
    echo $value."<BR/>";
 }

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>

</body>
</html>
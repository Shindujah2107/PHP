<html>
<head>
 <title>Arrays in PHP</title>
</head>
<body>
<?php

//Numeric Array
$colors = array("Red", 10.2, 10, True);


// second way
$hello[0] = "Red";
$hello[1] = "Green";
$hello[2] = "Yellow";
$hello[3] = "Orange";
echo var_dump($hello);

foreach($colors as $value){
	echo $value."<br>";
}

//Associative Array
$age = array( "Jhonathan" => 10, "Nipuna" => 19, "Siva" => 30, "Abdul" => 28 );

echo "Jhonathan  is". $age["Jhonathan"] . "<br />"; 
echo "Nipuna is". $age['Nipuna']. "<br />"; 
echo "Siva is". $age['Siva']. "<br />";
echo "Abdul is". $age['Abdul']. "<br />";

foreach($age as $key => $value){
	echo $key." is ".$value." old<br>";
}

// Multidimensional Array
$details = array(
    "Kamal" => array("Address" => "No 45, Klein Road, Colombo 7", "Age" => 30)); 
		
echo "address of Kamal is". $details['Kamal']['Address']."<br>";
echo "age of Kamal is". $details['Kamal']['Age']."<br>";

foreach($details as $key => $value){
	echo "I am ".$key." <br>";
	foreach($value as $key2 => $value2){
		echo "My ". $key2." is ".$value2."<br>";
	}
}






	


?>
</body>
</html>
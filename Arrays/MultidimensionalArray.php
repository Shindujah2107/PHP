<html>
<head><title>Multidimensional Arrays</title></head>
<body>

<?php 
$details = array(
    "Kamal" => array("Address" => "No 45, Klein Road, Colombo 7", "Age" => 30)); /* Accessing multi-dimensional array values */

echo "Address of Kamal is". $details["Kamal"]["Address"]."<BR/>";
echo "Age of Kamal is". $details["Kamal"]["Address"]."<BR/>";

foreach($details as $x => $x_value){
    var_dump($x);
    echo "<BR/>";
    var_dump($x_value);
}

foreach($details as $key => $value){
	echo "I am ".$key." <br>";
	foreach($value as $key2 => $value2){
		echo "My ". $key2." is ".$value2."<br>";
	}
}


?>

</body>
</html>

    
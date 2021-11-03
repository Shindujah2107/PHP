<html>
<head>
 <title>Loops in PHP</title>
</head>
<body>
<?php

// For Loop
for($x=0; $x <= 10;$x++){
	echo $x."<br>";
}

$x = 0;
// while loop
while($x <= 5){
	echo "hello<br>";
	$x++;
}

// Do While Loop
$x = 1;
do{
	echo "hello<br>";
	$x--;
}while($x == 0);

// for each 
$x = array(10.0,"hello",30,40,50);
foreach($x as $value){
    echo $value."<BR>";
}

?>
</body>
</html>


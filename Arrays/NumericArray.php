<html>
<head><title>Numeric Arrays</title></head>
<body>

<?php
$colors = array("Red", "Green", "Yellow");
echo count($colors)."<BR/>"; // Array length

echo $colors[0]."<BR/>"; // Displaying first element 
echo $colors[1]."<BR/>"; // Displaying second element 
echo $colors[2]."<BR/>"; // Displaying third element 

// Displaying the elements via foreach
foreach($colors as $value){
   echo $value."<BR/>";
}
?>

</body>
</html>

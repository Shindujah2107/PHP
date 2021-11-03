<?php
$str = " Hello World! ";

echo "Without trim:" . $str;
echo "<br>";

echo "With trim:" . trim($str);
echo "<br>";

echo "With Character trim:" . trim($str," Hell");
?>
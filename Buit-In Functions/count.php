<?php
$details = array(
  "Kamal" => array("Address" => "No 45, Klein Road, Colombo 7", "Age" => 30, "Gender" => "Male"));

echo "Normal count: " . count($details)."<br>";
echo "Recursive count: " . count($details,1);

?>
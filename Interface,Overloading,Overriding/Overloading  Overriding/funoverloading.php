<?php
// PHP program to explain function 
// overloading in PHP
  
// Creating a class of type shape
class Vehicle {
      
    // __call is magic function which accepts 
    // function name and arguments
    function __call($name_of_function, $arguments) {
              
        // It will match the function name
        if($name_of_function == 'car') {
              
            switch (count($arguments)) {
                      
                // If there is only one argument
                case 1:
                    return "There is only one car, which is ".$arguments[0];
                          
                // IF two arguments then car;
                case 2:
                    return "There are two cars, which are ".$arguments[0].','.$arguments[1];
            }
        }
    }
}
      
// Declaring a Vehicle
$s = new Vehicle;
      
// Function call 
echo($s->car("Toyota"));
echo "<br>";
      
echo ($s->car("Lucid Air", "Tesla Model S"));
echo "<br>";

// echo ($s->car("Lucid Air", "Tesla Model S", "BMW M3"));
?>
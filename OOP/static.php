<!-- Ths purpose creating a static method id that we dont need to create an instance -->
<?php

class University{

    public static $department = "IIT AND CS";

    public static function getDepartment(){
        return self::$department;
    }
}

// $uwu = new University();
// echo $uwu->getDepartment();

echo University::getDepartment();
echo "<BR>";
echo University::$department;

?>
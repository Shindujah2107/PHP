<?php

class User{
    public $name;
    
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;

    }
}

$student = new User();
echo $student->setName("Duminda");
echo $student->getName();
echo "<BR>";
echo $student->name;
echo "<BR>";
<?php

class User{

 public $id;
 private $name = "Super Man";
 protected $address ="Kandy";

 public function setGetName($name){
     $this->$name = $name;
     echo $this->$name;
 }

 public function setGetAddress($address){
    $this->$address = $address;
    echo $this->$address;
}

}


class childUser extends User{

    public function outputName(){
        //private {Cannot be accessed due to the access modifier is Private}
        return $this->name;
    }

    public function outputAddress(){
        //protected
        return $this->address;
    }
}


$cstiitusers = new childUser;
// $cstiitusers->id = 2;
// echo $cstiitusers->id;
// echo "<BR>";
// // echo $cstiitusers->name = "Malki";
// echo "<BR>";
// // echo $cstiitusers->address = "LA, USA";
// echo "<BR>";
// echo $cstiitusers->setGetName("Randika");
// echo "<BR>";
// echo $cstiitusers->setGetAddress("Badulla");
echo "<BR>";
echo $cstiitusers->outputAddress();

?>
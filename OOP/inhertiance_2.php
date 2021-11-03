<?php

class Customer{

    private $id;
    private $name;
    private $email;
    private $address;

    public function __construct($id,$name,$email,$address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    
    }

    public function getEmail(){
        return $this->email;
    }
}


class FrequentCustomer extends Customer{
    public $sum;

    public function __construct($id,$name,$email,$address,$sum)
    {
        $this->sum = $sum;
        parent::__construct($id,$name,$email,$address);
    }

    public function finalSum(){
        return $this->sum;
    }
}


$supun = new FrequentCustomer(0,"Supun Malinda","supunmalinda@gmail.com","Moratuwa",10000);
echo $supun->getEmail();
echo "<BR>";
echo $supun->finalSum();

?>

<?php

class customException extends Exception{
    public function errorMessage(){
        // Error Message in here!
        $errorMsg = 'Error for CST,IIT People on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().':(';
        return $errorMsg;
    }
}


// try catch throw
function givenNo($no){
    if($no >5){
        
        throw new customException("value must be below 5");
    }
    return true;
}

// trigger exception in a "try" block
try{
    givenNo(6);

}catch(customException $ex){ 
  echo $ex->errorMessage();
}


?>
<?php

// try catch throw
function givenNo($no){
    if($no >5){
        
        throw new Exception("value must be below 5");
    }
    return true;
}

// trigger exception in a "try" block
try{
    givenNo(6);

}catch(Exception $ex){
    // catch the exception
 echo "we are inside! Hoooery!<br>";   
 echo "Message is ".$ex->getMessage();
}

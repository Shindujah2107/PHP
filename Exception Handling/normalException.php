<?php

// try catch throw

function givenNo($no){
    if($no >5){
        throw new Exception("value must be below 5");
    }
    return true;
}

// trigger the exception
givenNo(6);
<?php

function exception_error_handler($errno,$errstr,$errfile,$errline){
    throw new ErrorException ($errstr,$errno,0,$errfile,$errline);
}

set_error_handler("exception_error_handler");

try{
    require 'file.php';
}catch(ErrorException $ex){
    echo $ex->getMessage();
    // echo "unable to load include file.";
}

echo "<br>";
echo "hello";


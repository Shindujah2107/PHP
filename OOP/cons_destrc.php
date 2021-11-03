<?php

class User{

    function __construct(){
        echo "<BR>Hoorey! construct Initiated!";

    }

    function __destruct()
    {
        echo "<BR>So Sad :'( destruct Initiated!"; 
    }

}

$student = new User();

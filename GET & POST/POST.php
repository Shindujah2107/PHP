<?php
   echo $_SERVER["PHP_SELF"];

   if(isset( $_POST["colour"])) {
      echo "You have entered ". $_POST['colour']. " color.";
   }
?>
<html>
   <body>
      <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "POST">
         Color: <input type = "text" name = "colour" />
         <input type = "submit" />
      </form>
   </body>
</html>

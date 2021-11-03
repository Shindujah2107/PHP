<?php
   if(isset($_GET["colour"])) {
      echo "You have entered ". $_GET['colour']. " color.";
   }
?>
<html>
   <body>
      <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "GET">
         Color: <input type = "text" name = "colour" />
         <input type = "submit" />
      </form>
   </body>
</html>
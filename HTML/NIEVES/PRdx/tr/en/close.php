<!-- Close session-->
<?php
   session_start();

   session_unset();
   session_destroy();
?>

<!DOCTYPE html>
<html>
   <head>
      <!-- Messege-->
      <title>Session close</title>
      <meta http-equiv = "refresh" content = "0.1; url = index.php" />
   </head>
   <body>
      <p>Session close</p>
   </body>
</html>
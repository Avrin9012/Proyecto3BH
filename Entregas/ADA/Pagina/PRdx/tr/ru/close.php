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
      <title>Сессии закрываются </title>
      <meta http-equiv = "refresh" content = "0.1; url = index.php" />
   </head>
   <body>
      <p>Сессии закрываются </p>
   </body>
</html>
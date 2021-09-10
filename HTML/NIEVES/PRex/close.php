<?php 
   session_start();

   session_unset();
   session_destroy();
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Cerrando sesion</title>
      <meta http-equiv = "refresh" content = "0.1; url = index.php" />
      <link rel="shortcut icon" href="assets/img/favicon.ico">
   </head>
   <body>
      <p>Cerrando sesion</p>
   </body>
</html>
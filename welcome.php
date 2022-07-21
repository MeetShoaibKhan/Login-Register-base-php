<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome Page</title>
  </head>
  <body>
    <?php echo "Welcome " . $_SESSION['username']; ?>
  </body>
</html>

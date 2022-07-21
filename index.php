
<?php
  include 'config.php';
  error_reporting(0);
  session_start();

  if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql= "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){

      $row = mysqli_fetch_assoc($result);

      $_SESSION['username'] = $row['username'];
      //echo $_SESSION['username'];
      header("location: welcome.php");

    }
    else{
      echo "<script>alert('Password not matched.')</script>";

    }
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login-form</title>
  </head>
  <body>
    <div>
      <form action="" method="post">
        <h1>Login Form</h1>
        <input type="email" placeholder="Email" name="email" required >
        <input type="password" placeholder="Password" name="password" required>
        <button name="submit" value="submit">Login</button>
        <p>Register <a href="register.php">here</a></p>
      </form>
    </div>
  </body>
</html>

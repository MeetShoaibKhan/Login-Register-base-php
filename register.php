
<?php
  include 'config.php';
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    echo "string";
    if($password == $cpassword){

      $sql= "INSERT INTO users(username, email, password)
             VALUES('$username', '$email', '$password')";
      $result = mysqli_query($conn, $sql);

      if(!$result){
        echo "<script>alert('Woops Something went wrong.')</script>";
      }
      else{
      echo "<script>alert('User registered')</script>";

      }

    }
    else{
      echo "<script>alert('Password not matched.')</script>";

    }
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register-form</title>
  </head>
  <body>
    <div>
      <form action="" method="post">
        <h1>Register Form</h1>
        <input type="text" placeholder="Username" name="username" required >
        <input type="email" placeholder="Email" name="email" required >
        <input type="password" placeholder="Password" name="password" required>
        <input type="password" placeholder="Conform Password" name="cpassword" required>
        <button name="submit" value="submit">Register</button>
        <p>Login <a href="index.php">here</a></p>
      </form>
    </div>
  </body>
</html>

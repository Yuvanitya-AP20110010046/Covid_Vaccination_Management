<?php
  include('config.php');     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <form action="loginForm.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br><br>
        <button type="submit"name="submit" value="Login">Login</button><br><br>
        <p>Don't have an account?<br>
        <a  href="registerForm.php">Register now</a></p>

    </form>
    
</body>
</html>
<?php
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = md5($_POST["password"]);
  $select = "SELECT * FROM user_form WHERE name = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $select);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    if($row["user_type"] == "admin"){
      header('Location:admin.php');
    }
    else{
      header('Location:user.php');
    }
  }
  else{
    $error[] = "Invalid username or password";
    echo "<script>alert('Invalid username or password')</script>";
  }
} 
?>
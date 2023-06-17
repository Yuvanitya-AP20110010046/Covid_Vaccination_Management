<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>
  <form action="registerForm.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Enter your username">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Enter your password">
    <br>
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password">
    <br>
    <label for="role">Role</label>
    <select name="role" id="role">
      <option value="admin">Admin</option>
      <option value="user">User</option>
    </select>
    <br><br>
    <button type="submit" name="submit" value="Register">Register</button>
  </form>
  
</body>
</html>
<?php
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = md5($_POST["password"]);
  $confirm_password = md5($_POST["confirm_password"]);
  $role = $_POST["role"];
  $select = "SELECT * FROM user_form WHERE email = '$email'";
  $result = mysqli_query($conn, $select);
  if(mysqli_num_rows($result) > 0){
    $error[] = "Email already exists";
  }
  else{
    if($password != $confirm_password){
      $error[] = "Password does not match";
    }
    else{
      $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$username', '$email', '$password', '$role')";
      $result = mysqli_query($conn, $insert);
      if($result){
        header('Location: loginForm.php');
      }
      else{
        $error[] = "Something went wrong";
      }
    }
  }
} 
?>
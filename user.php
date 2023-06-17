<?php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h1>User</h1><br><br>
        <a href="registerForm.php">Register</a> 
        <a href="user/searchCenters.php">Search Centers</a>
        <a href="user/bookAppointment.php">Book Appointment</a>
        <a href="logout.php">Logout</a>
           
    </div>
</body>
</html>
<?php
try{
    if(http_response_code() == 404){
        header('Location:error.php');
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
?>
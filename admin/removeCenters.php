<?php
 include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Vaccination center</title>
    <link rel="stylesheet" href="../styles.css">

</head>
<body>
    <form action="removeCenters.php" method="post">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name of Vaccination center">
        <br>
        <button type="submit" name="submit" value="Remove">Remove</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $insert = "DELETE FROM vaccination_centers WHERE name = '$name'";
        $result = mysqli_query($conn, $insert);
        if($result){
            echo "<script>alert('Vaccination center removed successfully!')</script>";
            header('Location: ../admin.php');
        }
        else{
            $error[] = "Something went wrong";
        }
    }
    // else{
    //     echo "<script>alert('Please fill all the fields')</script>";
    // }

?>
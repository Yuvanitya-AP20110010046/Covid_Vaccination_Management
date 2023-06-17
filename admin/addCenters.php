<?php
 include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vaccination center</title>
    <link rel="stylesheet" href="../styles.css">

</head>
<body>
    <form action="addCenters.php" method="post">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name of Vaccination center">
        <br>
        <label>Start hour</label>
        <input type="time" name="start_hour" id="start_hour" placeholder="Enter start hour">
        <br>
        <label>End hour</label>
        <input type="time" name="end_hour" id="end_hour" placeholder="Enter end hour">
        <br>
        <button type="submit" name="submit" value="Add">Add</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $start_hour = $_POST["start_hour"];
        $end_hour = $_POST["end_hour"];
        $insert = "INSERT INTO vaccination_centers(name, start_hour, end_hour) VALUES('$name', '$start_hour', '$end_hour')";
        $result = mysqli_query($conn, $insert);
        if($result){
            echo "<script>alert('Vaccination center added successfully!')</script>";
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
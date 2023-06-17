<?php
 include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Vaccination centers</title>
    <link rel="stylesheet" href="../styles.css">

</head>
<body>
    <form action="searchCenters.php" method="post">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name of Vaccination center">
        <br>
        <button type="submit" name="submit" value="Search">Search</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $insert = "SELECT name,start_hour,end_hour FROM  vaccination_centers WHERE name = '$name'";
        $result = mysqli_query($conn, $insert);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            echo "Name: ".$row["name"]."<br>"."Start hour: " . $row["start_hour"]."<br>". "End hour: " . $row["end_hour"]. "<br>";
        }
        else{
            // $error[] = "Something went wrong";
            echo "Vaccination center with this name does not exist!";
        }
    }

?>
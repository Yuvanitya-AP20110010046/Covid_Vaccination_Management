<?php 
 include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book slot</title>
    <link rel="stylesheet" href="../styles.css">

</head>
<body>
    <form action="bookAppointment.php" method="post">
        <label>Vaccination Center Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name of Vaccination center">
        <br>
        <label>Slot</label>
        <input type="time" name="slot" id="slot" placeholder="Enter slot">
        <br>
        <button type="submit" name="submit" value="Book">Book</button>
    </form>
</body>
</html>
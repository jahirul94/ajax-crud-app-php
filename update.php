<?php
$connect = mysqli_connect("localhost", "root", "", "wp");
$userId = $_GET['id'];
  
$select = "SELECT * FROM ajax WHERE id = $userId";
$ex = mysqli_query($connect, $select);
$row = mysqli_fetch_array($ex);





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Page </title>
</head>

<body>
    <div class="container">
        <p id="edit-title">Edit Page</p>
        <input value="<?php echo $row['name'] ?>" type="text" placeholder="Enter Your Name ..." name="name" id="update_name">
        <input value="<?php echo $row['email'] ?>" type="email" placeholder="Enter Your Email" name="email" id="update_email"> <br>
        <input value="<?php echo $row['password'] ?>" type="text" placeholder="Enter Your Password ..." name="password" id="update_password">
        <button id="btn" onclick="update_data_from_db(<?php echo $row['id'] ?>)">Update</button> </br>
        <button id="btn" onclick="home()">Home</button> </br>
    </div>
</body>

</html>
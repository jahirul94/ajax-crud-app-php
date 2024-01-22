<?php
$connect = mysqli_connect("localhost", "root", "", "wp");
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['id'];

$update = "UPDATE ajax SET name='$name' , email='$email' , password = '$password' WHERE id = $id";
$ex = mysqli_query($connect, $update);

if ($ex) {
    echo "update successfully";
} else {
    echo "fail to update";
}




?>
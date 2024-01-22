<?php
$connect = mysqli_connect("localhost","root","","wp");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
echo($name);

$insert = "INSERT INTO ajax(name , email , password) VALUES('$name' , '$email' , '$password')";
$query = mysqli_query($connect, $insert);

if($query){
    echo "data insert success";
}
else {
    echo "Data insert failed";
}







?>


<?php 
  $connect = mysqli_connect("localhost","root","","wp");
  $userId = $_POST['id'];
  $delete = "DELETE FROM ajax WHERE id = '$userId'";
  
  $query = mysqli_query($connect, $delete);


?>
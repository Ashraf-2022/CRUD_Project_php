<?php  
  $conn= new mysqli('localhost','root','','crud_project');
  if(!$conn){
    die(mysqli_error($conn));
  }
?>
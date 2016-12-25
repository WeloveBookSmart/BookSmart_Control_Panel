<?php
//update.php is the logic for the view_package table
$connect = mysqli_connect("localhost", "root", "", "test");  
$id = $_POST["id"];  
$text = $_POST["text"];  
$column_name = $_POST["column_name"];  
$sql = "UPDATE tbl_packages SET ".$column_name."='".$text."' WHERE id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      header(location:'view_package.php');  
 }  

?>
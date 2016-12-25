<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $sql = "DELETE FROM tbl_packages WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  
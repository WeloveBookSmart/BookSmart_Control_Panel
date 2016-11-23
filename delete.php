<?php  
 $connect = mysqli_connect("localhost", "root", "", "booksmart");  
 $sql = "DELETE FROM tbl_services WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  
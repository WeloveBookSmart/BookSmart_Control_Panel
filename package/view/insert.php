 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $sql = "INSERT INTO tbl_packages(package_name, user_book, price,payment_status) VALUES('".$_POST["package_name"]."', '".$_POST["user_book"]."', '".$_POST["price"]."', '".$_POST["payment_status"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>  
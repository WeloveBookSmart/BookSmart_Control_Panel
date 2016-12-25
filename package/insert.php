 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $sql = "INSERT INTO tbl_packages(package_name, detail, price) VALUES('".$_POST["package_name"]."', '".$_POST["detail"]."', '".$_POST["price"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>  
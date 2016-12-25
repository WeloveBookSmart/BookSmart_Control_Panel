  <?php
	$con = mysqli_connect("localhost", "root", "", "test");  
	
	if(isset($_POST['submit'])){
	
	//get the text data from the fields
	$package_name = mysqli_escape_string($con,$_POST['package_name']);
	$package_details = mysqli_escape_string($con,$_POST['detail']);
	$package_availability = mysqli_escape_string($con,$_POST['availability']);
	$price = mysqli_escape_string($con,$_POST['price']);
	
	$sql = "INSERT INTO tbl_packages(package_name,detail,availability,price) VALUE ('$package_name','$detail','$availability','$price')";
	$result = mysqli_query($con, $sql);

	if($result){
	
	echo "<script>alert('Package Has Been Uploaded!')</script>";
	echo "<script>window.open('package/index.php','_SELF')</script>";
	
	}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Package Details</title>

   
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>
		tinymce.init({selector:'textarea'});
	</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body> 
	<div class="container">
  <form class="form-horizontal" action="package_submit.php" method="post" enctype="multipart/form-data">
	<fieldset>

<!-- Form Name -->
<legend style="text-align:center;">Modify Your Package</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Package Name:</label>  
  <div class="col-md-4">
  <input id="package_name" name="package_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddress">Details:</label>  
  <div class="col-md-4">
   <td><textarea name="package_details" cols="20" rows="10"></textarea></td>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Number Of Package Availability:</label>  
  <div class="col-md-4">
  <input id="availability" name="package_availability" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Price:</label>  
  <div class="col-md-4">
  <input id="price" name="price" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>

</fieldset>
</form>
</div>
	<div class="button" style="float:right">
		<a href="payment/payment_made.php" method="post" class="btn btn-success" type="submit" name="submit" id="submit" value="Upload Package!"/>
	</div>
	
	<div class="button" style="float:left">
		<a href="../index.php" method="post" class="btn btn-danger" type="submit" name="cancel" id="cancel" value="Cancel"/>
	</div>

	<hr class="divider">
	  <footer>
		<div style="text-align:center;" id="copyright">
				@BookSmart.Inc 2016
		</div>
		  <p class="pull-right"><a href="#">Back To Top</a></p>
		  <p><a href="#">Privacy</a> . <a href="#">Term</a></p> . <p><a href="about.html">About Us</a>
               
	  </footer>
		

 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
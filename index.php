<?php
	sleep(2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
           <title>Service Management</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->		   
      </head> 
		<style>
		
		</style>
      <body>  
	   <nav class="navbar navbar-default navbar-inverse" style="border-radius:0px !important; margin-bottom:0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <img src="lo2.png" width="82" height="72"/>
      <div align="left" style="color:#FFFFFF">BookSmart</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
		<li><a href="career.html">Join Us</a></li>  
		<li class="User">
          <a href="#" class="dropdown-toggle" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Join Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Software Developer</a></li>
            <li><a href="#">Hardware Engineer</a></li>
            <li><a href="#">Application Developer</a></li>
			<li><a href="#">Site Reliability Engineer</a></li>
            <li><a href="#">System Management</a></li>
			<li><a href="#">User Experience Architect</a></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Marketing Superstar</a></li>
			<li><a href="#">Operation Engineer</a></li>
			<li><a href="#">Community Leader</a></li>
          </ul>
        </li>
          <li><a href="ui/community.html">Community</a></li>
      </ul>
      <form class="form-search navbar-form navbar-left " role="search">
        <div class="form-group" class="search-query" style="text-align:center;">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="User">
          <a href="#" class="dropdown-toggle" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile/manage_booking.php">Manage Personal Bookings</a></li>
            <li><a href="profile/manage_services.php">Manage Services</a></li>
            <li><a href="notification/notification.php">Notification</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../authentication/logout.php">Logout</a></li>
          </ul>
        </li>
		<li><a href="Upload/client.html" class="btn btn-warning" style="color:#FFFFFF">Become Our Client</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
           <div class="container">  
                <br />  
                <br />  
                <br />  
				<div style="float:left;">
                <div class="table-responsive" style="margin-right:20px; !important; float:right">  
                     <h3 align="center">Your Service Management Center</h3><br /> 					 
                     <div id="live_data"></div>                 
                </div> 
		
				</div>
			<div class="col-md-3 col-sw-3 col-xs-3" style="float:right; margin-left:0px;">
				<p class="lead">Client Menu:</p>
					<div class="list-group">
						<a href="../../../../profile.html" class="list-group-item">Dashboard</a>
						<a href="manage_services/index.php" class="list-group-item">Manage Service</a>
						<a href="manage_bookings/index.php" class="list-group-item">Personal Booking</a>
						<a href="about/index.php" class="list-group-item">About</a>
						<a href="account_settings.php" class="list-group-item">Account Settings</a>
					</div>
			</div>
           </div>  
		  
      </body>  
 </html> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.first_name', function(){  
           var id = $(this).data("id1");  
           var first_name = $(this).text();  
           edit_data(id, first_name, "first_name");  
      });  
      $(document).on('blur', '.last_name', function(){  
           var id = $(this).data("id2");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "last_name");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      }); 
		 $(document).on('click', '.btn_check-in', function(){  
           var id=$(this).data("id4");    
           {  
                $.ajax({  
                     url:"checkin.php",  
                     method:"GET",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      }); 
	   $(document).on('click', '.btn_check-out', function(){  
           var id=$(this).data("id5");    
           {  
                $.ajax({  
                     url:"checkin.php",  
                     method:"GET",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      }); 
 });  
 </script>  

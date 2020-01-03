<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ftucafe";

$id_c = $_SESSION['ID_C'];

$con = new mysqli($servername, $server_user, $server_pass, $dbname);



$result = mysqli_query($con, "SELECT * FROM customer where ID_C = $id_c");
while($row = mysqli_fetch_array($result)){
$fullname = $row['name_c']; 
$email = $row['email_c'];
$username = $row['username_c'];
$password = $row['password_c'];
}


?>

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Profile</title>

	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>




  
   

</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a href="https://is.gd/nXt8pN">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/new_logo.jpg">
                        </div>
                        <div class="brand">
                            Fatoni Cafe'
                        </div>
                    </div>
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="orderconfirm.php">My Ordered</a></li>
                    <li><a href="orderfood.php">Order Food</a></li>
                    <li><a href="profile_cus.php"><?php echo $username;?></a></li>
                    <li><a href="http://localhost/food/home.php" class="btn btn-round btn-default">Log out</a></li>



               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>MY PROFILE</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 



  
    










<div class="main">
    <div class="container tim-container">
     
       
     
<div class="space-30"></div>
        <div id="images">
            <div class="tim-title"></div><br>
                <div class="row"></div>
                <div class="col-md-6 col-sm-6">
                   
      
      <h2>Edit My Profile</h2>
      <form method="post" action="router/details-router.php">  
      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Name: <input type="text" name="fullname" id="fullname"  class="form-control" value="<?php echo $fullname;?>" />
                  
              </div>      
          </div>
      </div>


      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  E-mail: <input type="text" name="email" id="email" class="form-control" value="<?php echo $email;?>"/>
                  
              </div>          
          </div>
      </div>

      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Username: <input type="text" name="username" id="username" class="form-control" value="<?php echo $username;?>" />
                  
              </div>          
          </div>
      </div>

      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Password: <input type="password" name="password" id="password" class="form-control" value="<?php echo $password;?>"/>
                  
              </div>          
          </div>
      </div>



      
      <div class="space-30"></div>
      <input class="btn btn-info" type="submit" name="submit" value="Submit" />
      
       <div class="space-100"></div>
       
      </form> 
                    </div>
                   
                </div>

         
    </div>
</div>
 


        

</html>
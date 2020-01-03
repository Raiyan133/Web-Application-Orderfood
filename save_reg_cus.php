<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">  
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Register Customer</title>


    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="navbar-full">
    
        <nav class="navbar navbar-ct-white navbar-transparent navbar-fixed-top" role="navigation">
          
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
            
          </div><!-- /.container-fluid -->
        </nav>
   
    
    <div class='blurred-container'>
        <div class="motto">
            <div>CUSTOMER</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 

<?php
	mysql_connect("localhost","root","");
	mysql_select_db("ftucafe");
	
	if(trim($_POST["name"]) == "")
	{
		echo "Please input name!";
		exit();	
	}
	
	if(trim($_POST["email"]) == "")
	{
		echo "Please input Email!";
		exit();	
	}	

	if(trim($_POST["username"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
		
	if(trim($_POST["password"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}
	
	if(trim($_POST["gender"]) == "")
	{
		echo "Please input Gender!";
		exit();	
	}	
	
	$strSQL = "SELECT * FROM customer WHERE username_c = '".trim($_POST['username'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO customer (name_c,email_c,username_c,password_c,gender_c) VALUES ('".$_POST["name"]."', 
		'".$_POST["email"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["gender"]."')";
		$objQuery = mysql_query($strSQL);
		
		header("location:logincustomer.php");
		
	}

	mysql_close();
?>
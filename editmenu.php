<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ftucafe";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>







<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">  
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Edit Menu</title>

  
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
                    <li><a href="show_order.php">Show Order</a></li>
                    <li><a href="All_customer.php">All Customer</a></li>
                    <li><a href="editmenu.php">Edit Menu</a></li>
                    
                    
                    <li><a href="http://localhost/food/home.php" class="btn btn-round btn-default">Log out</a></li>
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>EDIT MENU</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 














<div class="main">
    <div class="container tim-container">
       <div class="space-100"></div>


<section id="content">
          
      <form method="post" action="router/menu-router.php" >
            <div class="row">
              <div class="tim-title text-center">
                    <h3>Edit Menu</h3>
                </div>
              <div>
                  <table >
                    <thead>
                      <tr>
                        <th><div class="col-md-4 col-sm-6">
                    <h4>Name</h4>
                    
                </div></th>
                        <th><div class="col-md-4 col-sm-6">
                    <h4>Price/Piece</h4>
                    
                </div></th>
                        <th><div class="col-md-4 col-sm-6">
                    <h4>Available</h4>
                    
                </div></th>
                        
                      </tr>
                    </thead>

                    <tbody>
        <?php
        $result = mysqli_query($con, "SELECT * FROM items");
        while($row = mysqli_fetch_array($result))
        {
          echo '<tr><td><div class="input-field col s12"><label for="'.$row["id"].'_name">Name</label>';
          echo '<input value="'.$row["name"].'" id="'.$row["id"].'_name" name="'.$row['id'].'_name" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';          
          echo '<td><div class="input-field col s12 "><label for="'.$row["id"].'_price">Price</label>';
          echo '<input value="'.$row["price"].'" id="'.$row["id"].'_price" name="'.$row['id'].'_price" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';                   
          echo '<td>';
          if($row['deleted'] == 0){
            $text1 = 'selected';
            $text2 = '';
          }
          else{
            $text1 = '';
            $text2 = 'selected';            
          }
          echo '<select name="'.$row['id'].'_hide">
                      <option value="1"'.$text1.'>Available</option>
                      <option value="2"'.$text2.'>Not Available</option>
                    </select></td></tr>';
        }
        ?>
                    </tbody>
</table>
              </div>
        <div class="input-field col s12">
          <div class="space-30"></div>
            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
              <i class="mdi-content-send right"></i>
            </button>
        </div>
       </div>
      </form>

      
            
        </div><div class="space-100"></div>
        </div>
        <!--end container-->

      </section>







 
         
    </div>
</div>
 


        


</html>
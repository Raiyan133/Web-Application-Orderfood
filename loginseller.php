<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
  <title>Login Seller</title>

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
            
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>SELLER</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 







<div class="main">
    <div class="container tim-container">
    <div class="col-md-4 col-sm-3"></div>
        <div class="col-md-5 col-sm-6">           
        
        <h2>Log in</h2>
          <form method="post" action="check_login_seller.php" >  
              <div class="row">
                  <div class="col-sm-10">
                      <div class="form-group">
                          Username: <input type="text" name="s_username" id="s_username" value="" class="form-control" />
                      </div>    
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-10">
                      <div class="form-group">
                          Password: <input type="password" name="s_password" id="s_password" value="" class="form-control" />
                      </div>          
                  </div>
              </div>
            <input class="btn btn-info" type="submit" name="submit" value="log in" />  
          </form > 
     
        </div>   
    </div>
</div>    




</div>
    
</div> 


</body>
</html>





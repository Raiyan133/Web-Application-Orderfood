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











<div class="main">
    <div class="container tim-container">
        

        <div class="space-30"></div>
        <div id="images">
            <div class="tim-title"></div><br>
                <div class="row"></div>
                <div class="col-md-6 col-sm-6">
                   
      
      <h2>Create new account</h2>
      <form method="post" action="save_reg_cus.php">  
      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Name: <input type="text" name="name" value="" placeholder="Full Name" class="form-control" />
                  
              </div>      
          </div>
      </div>


      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  E-mail: <input type="text" name="email" value="" placeholder="example@email.com" class="form-control" />
                  
              </div>          
          </div>
      </div>

      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Username: <input type="text" name="username" value="" placeholder="Including text & number" class="form-control" />
                  
              </div>          
          </div>
      </div>

      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Password: <input type="password" name="password" value="" placeholder="A-Z, a-z, 0-9" class="form-control" />
                  
              </div>          
          </div>
      </div>



      <div class="row">
          <div class="col-sm-10">
              <div class="form-group">
                  Gender: &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="gender" value="female">&nbsp;Female
                  &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="gender" value="male">&nbsp;Male
                
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
         
            <div class="row"></div>
        </div>  
    <!--   end images -->
        
      
  


</body>
</html>





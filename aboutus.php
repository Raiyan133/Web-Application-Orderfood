<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
	<title>About Us</title>

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
                    
                    <li><a href="home.php">Home</a></li>
                    
                    
                    
               </ul>
            
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>ABOUT US</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 



<div class="main">
    <div class="container tim-container">
        <div class="space-100"></div>
        <div id="images">
                <div class="col-md-12 col-sm-6">
                  
                    <div class="text-center">
                    
                    <img src="assets/img/ftu.png" alt="Circle Image" class="img-circle">


<h4>Project web application</h4>


<h3>ORDER FOOD SYSTEM</h3><br>

Present <br>
Mr.Anas Tawalbeh<br><br>

Submitted by<br>
582431014 Miss Afifah Chedeng<br>
592431013 Miss E-badiyah Chesenic<br>
          592431019 Miss. Raiyan Japakeeya<br><br>

IT2301-430 Web Programing<br>
Date 9/11/2018<br><br>

Department of Information Technology<br>
Faculty of Science and Technology<br>
Fatoni University<br>







                    </div>
                  
                </div>
        </div>
                
            </div>
            <div class="space-100"></div>
    
    </div>
</div>    
    



<div id="carousel">
    <!--    
            IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"     
            
    -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/bing.jpg" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/fast.jpg" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/juicee.jpg" alt="Awesome Image">
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>

</div> <!-- end carousel -->



</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  <script src="assets/js/gsdk-checkbox.js"></script>
  <script src="assets/js/gsdk-radio.js"></script>
  <script src="assets/js/gsdk-bootstrapswitch.js"></script>
  <script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
  });
  $( "#slider-default" ).slider({
      value: 70,
      orientation: "horizontal",
      range: "min",
      animate: true
  });
  $('.carousel').carousel({
      interval: 4000
    });
      
    
</script>




</html>
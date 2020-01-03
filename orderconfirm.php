<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ftucafe";
$name = $_SESSION['username_c'];
$id_c = $_SESSION['ID_C'];


$con = new mysqli($servername, $server_user, $server_pass, $dbname);

$total = 0;
  





?>

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Order Food</title>

	
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
                    <li><a href="profile_cus.php"><?php echo $name;?></a></li>
                    <li><a href="http://localhost/food/home.php" class="btn btn-round btn-default">Log out</a></li>



               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>MY ORDER</div>
        </div>
        <div class="img-src" style="background-image: url('assets/img/cover.jpg')"></div>
    </div>
    
</div> 



<div class="main">
    <div class="container tim-container">
        
        <div class="space-30"></div>
        <div id="images">
             <div class="tim-title">
                
            </div>
            <br>
            <div class="row">
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="text-center">
                    <h4>BINGSU</h4>
                    <img src="assets/img/Bingsu.jpg" alt="Circle Image" class="img-circle">
                   </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="text-center">
                    <h4>FAST-FOOD</h4>
                    <img src="assets/img/fastfood.jpg" alt="Circle Image" class="img-circle">
                   </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="text-center">
                    <h4>JUICE</h4>
                    <img src="assets/img/juice.jpg" alt="Circle Image" class="img-circle">
                   </div>
                </div>
            </div>
            
        </div>  
    <!--   end images -->
        
        
        
    </div>
</div>    
    










<div class="main">
    <div class="container tim-container">
       <div class="space-100"></div>
       
     
<div class="space-100"></div>
              <div class="tim-title text-center">
                    <h3>Your Ordered</h3>
                </div>
          
          <!--editableTable-->

<div class="row tim-row">
<div>
<ul >
<?php
            $arr = '';
            $total = 0;
            for ($i=0; $i < count($_SESSION['orderListID']); $i++) {
                $key_order = $_SESSION['orderListID'][$i];
                $stmt = $con->prepare("SELECT * FROM `items` where `id` = ?");
                $stmt->bind_param("s",$key_order);
                $stmt->execute();
                $result = $stmt->get_result();
                while($rs=$result->fetch_object()){
                    $total = $total+($_SESSION['qty'][$i] * $rs->price);
                    array_push($_SESSION['price'], $_SESSION['qty'][$i] * $rs->price);
                    echo '<div class="row">
                        <div class="col-md-4 col-sm-6">
                            <p><strong>'.$rs->name.'</strong></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <span>'.$rs->price.'.฿</span>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <span>Quantity = '.$_SESSION['qty'][$i].'</span>
                        </div>
                    </div>';
                }
            }
        ?>
        <h4><span>Your Total =
                <?php echo $total; ?>.฿</span></h4>

</ul>
<div class="space-30"></div>
       <div class="tim-title text-center">
        
              <h3>Enjoy your meal ^^</h3>
              <h3>Please pay at counter thank you</h3>
              </div>

<div class="space-100"></div>

                </div>
        </div>
                </div>
              </div>
            </div>
            
        </div>
        <!--end container-->








 
         
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
<div class="main">
    <div class="container tim-container">
          
    </div>
<!-- end container -->
<div class="space-30"></div>
</div>


<!-- end main -->



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
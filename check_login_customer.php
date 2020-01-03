<?php
  session_start();
  $servername = "localhost";
  $server_user = "root";
  $server_pass = "";
  $dbname = "ftucafe";
  $con = new mysqli($servername, $server_user, $server_pass, $dbname);

  $strSQL = "SELECT * FROM customer WHERE username_c = '".mysqli_real_escape_string($con, $_POST['username'])."' 
  and password_c = '".mysqli_real_escape_string($con, $_POST['password'])."'";
  $objQuery = mysqli_query($con, $strSQL);
  $objResult = mysqli_fetch_array($objQuery);
  if(!$objResult)
  {
      header("location:wrong_login_cus.php");
  }
  else
  {
      $_SESSION["username_c"] = $objResult["username_c"];
      $_SESSION["password_c"] = $objResult["password_c"];
      $_SESSION["ID_C"] = $objResult["ID_C"];

      session_write_close();
      
      
        header("location:orderfood.php");
      
      
  }
  mysqli_close();
?>
<?php
  session_start();
  $servername = "localhost";
  $server_user = "root";
  $server_pass = "";
  $dbname = "ftucafe";
  $con = new mysqli($servername, $server_user, $server_pass, $dbname);

  $strSQL = "SELECT * FROM seller WHERE username_s = '".mysqli_real_escape_string($con, $_POST['s_username'])."' 
  and password_s = '".mysqli_real_escape_string($con, $_POST['s_password'])."'";
  $objQuery = mysqli_query($con, $strSQL);
  $objResult = mysqli_fetch_array($objQuery);
  if(!$objResult)
  {
      header("location:wrong_login_seller.php");
  }
  else
  {
      $_SESSION["username"] = $objResult["username"];
      $_SESSION["password"] = $objResult["password"];

      session_write_close();
      
      
        header("location:editmenu.php");
      
      
  }
  mysql_close();
?>
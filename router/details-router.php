<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ftucafe";

$con = new mysqli($servername, $server_user, $server_pass, $dbname);

$id_c = $_SESSION['ID_C'];


$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$username = htmlspecialchars($_POST['username']);
$password =  htmlspecialchars($_POST['password']);

$sql = "UPDATE customer SET name_c = '$fullname', email_c='$email', username_c = '$username', password_c ='$password'  WHERE ID_C = $id_c;";
if($con->query($sql)==true){
	$_SESSION['username_c'] = $name;
	
}
header("location: ../profile_cus.php");
?>
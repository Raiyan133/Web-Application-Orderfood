<?php
  session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ftucafe";
$name = $_SESSION['username_c'];
$cus_id = $_SESSION['ID_C'];


$con = new mysqli($servername, $server_user, $server_pass, $dbname);
  
    $table = $_POST['t'];
    
    for ($i=0; $i < count($_SESSION['orderListID']); $i++) {
        $id = $_SESSION['orderListID'][$i];
        $qty = $_SESSION['qty'][$i];
        $price = $_SESSION['price'][$i];
        $stmt = $con->prepare("INSERT INTO `orderfood`(`item_id`, `qt`, `price`, `cus`, `numtable`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$id,$qty,$price,$name,$table);
        $stmt->execute();
    }
    






  
  
    
    header("location:orderconfirm.php");
    




  mysql_close();
?>




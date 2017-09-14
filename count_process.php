<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "healthy_corner");

$sql = "SELECT * FROM product_mother";
$result = mysqli_query($connect, $sql);

$val = $_POST['btn'];
$amount = $_POST["amount"];
if($_POST["amount"] != 0 && $_POST["amount"] > 0){
if($val == 'Add'){


$newquery = "UPDATE product_mother SET employee_count ='$amount' WHERE ID='$_POST[id]'";

mysqli_query($connect, $newquery);
	


        }
	
	


$connect->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
  

?>
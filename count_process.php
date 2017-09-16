<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "HNH");

$sql = "SELECT * FROM product_mother";
$result = mysqli_query($connect, $sql);
$val = $_POST['btn'];
$amount = $_POST["amount"];
$product = $_POST["ingr"];
if($_POST["amount"] != 0 && $_POST["amount"] > 0){

if($val == 'Add'){

$empquery = "INSERT INTO `consumed_logs` (`id`, `product`, `date`,`amount`, `employee_name`) VALUES (null, '$product', current_timestamp,'$amount' ,0);";
$newquery = "UPDATE product_mother SET employee_count ='$amount' WHERE ID='$_POST[id]'";
$newquery = "UPDATE `employee_count` SET `count` = '$amount' WHERE `employee_count`.`id` = $_POST[id]";
mysqli_query($connect, $newquery);
mysqli_query($connect, $empquery);


	}



}
$connect->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);


?>

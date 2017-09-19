<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "HNH");
$conn = new mysqli("localhost", "root", "", 'HNH');

$sql = "SELECT * FROM product_mother";
$res = mysqli_query($connect, $sql);

// while($row = mysqli_fetch_array($res)){
// if($row["name"] == $meat){
// 	$_SESSION["quantity"] = $row["sales_count"] + 1;
// }
// $quantity = $_SESSION["quantity"];
//
// $sql2 = "UPDATE `product_mother` SET `sales_count`= '".$quantity."' WHERE `name` = '".$meat."'";
// mysqli_query($connect, $sql2);
// $sql3 = "UPDATE `product_mother` SET `sales_count`= '".$quantity."' WHERE `name` = '".$veg."'";
// mysqli_query($connect, $sql3);
// $sql4 = "UPDATE `product_mother` SET `sales_count`= '".$quantity."' WHERE `name` = '".$rice."'";
// mysqli_query($connect, $sql4);
// }


	$sql2 = "SELECT * FROM temp";
	$result2=mysqli_query($connect, $sql2);
	while($row = $result2->fetch_assoc()){

		$sql3 = "INSERT INTO `transaction` (`transact_id`, `date`, `1`, `2`, `3`, `total`, `type`) VALUES (NULL, CURRENT_TIMESTAMP, '".$row['item1']."', '".$row['item2']."', '".$row['item3']."', '".$_SESSION['total']."', '".$row['type']."')";
		$conn->query($sql3);
		$insert = "UPDATE `product_mother` SET `current` = (`current`- 1) WHERE `name` = '".$row['item1']."'";
		$conn->query($insert);
		$insert = "UPDATE0 `product_mother` SET `current` = (`current`- 1) WHERE `name` = '".$row['item2']."'";
		$conn->query($insert);
		$insert = "UPDATE `product_mother` SET `current` = (`current`- 1) WHERE `name` = '".$row['item3']."'";
		$conn->query($insert);


	}


$truncate = "TRUNCATE temp";
mysqli_query($connect, $truncate);

 Session_destroy();
 header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

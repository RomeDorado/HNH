<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "healthy_corner");
$conn = new mysqli("localhost", "root", "", 'healthy_corner');


	// foreach($_SESSION["shopping_cart"] as $keys => $values){
	//
  //   $sql1 = "SELECT * FROM product_mother";
  // 	$result=mysqli_query($connect, $sql1);
  // 	    while($row = $result->fetch_assoc()){
  //         if ($row['id'] == $values['product_id']){
	// 	$count = $row["sales_count"];
  //       $quantity = $count + $values['product_quantity'];
	//
  //       $sql2 = "UPDATE product_mother SET sales_count=$quantity where id = ".$values["product_id"].";";
	// 	mysqli_query($connect, $sql2);
	//
  //         }
  //     }
	//
	//
	// 			// if($values['product_size'] == "12oz"){
	// 			// 	$sql1 = "SELECT * FROM tbl_prod_ingr ORDER BY `tbl_prod_ingr`.`id` ASC";
	// 			// 	$result=mysqli_query($connect, $sql1);
	//
	// 			// 	while($row = $result->fetch_assoc()){
	// 			// 		if($row['id'] == $values['product_id']){
	// 			// 			$min_array = array(
	// 			// 			'product_id'				=>	$row['prod_id'],
	// 			// 			'product_quantity'			=>  $values['product_quantity'],
	// 			// 			'product_size'				=>  $values['product_size'],
	// 			// 			'product_ingr1'				=>  $row['ingr1_id'],
	// 			// 			'product_ingr2'				=>  $row['ingr2_id'],
	// 			// 			'product_ingr3'				=>	$row['ingr3_id'],
	// 			// 			'product_ingr4'				=>	$row['ingr4_id'],
	// 			// 			'product_ingr5'				=>	$row['ingr5_id'],
	// 			// 			'product_ingr6'				=>	$row['ingr6_id'],
	// 			// 			'product_ingr7'				=>	$row['ingr7_id'],
	// 			// 			'product_ingr8'				=>	$row['ingr8_id'],
	// 			// 			'product_ingr9'				=>	$row['ingr9_id'],
	// 			// 			'product_ingr10'			=>	$row['ingr10_id'],
	// 			// 			'product_ingr11'			=>	$row['ingr11_id'],
	// 			// 			'product_ingr12'			=>	$row['ingr12_id'],
	// 			// 			'product_ingrm1'			=>  $row["ingrm1"],
	// 			// 			'product_ingrm2'			=>  $row["ingrm2"],
	// 			// 			'product_ingrm3'			=>	$row["ingrm3"],
	// 			// 			'product_ingrm4'			=>	$row["ingrm4"],
	// 			// 			'product_ingrm5'			=>	$row["ingrm5"],
	// 			// 			'product_ingrm6'			=>	$row["ingrm6"],
	// 			// 			'product_ingrm7'			=>	$row["ingrm7"],
	// 			// 			'product_ingrm8'			=>	$row["ingrm8"],
	// 			// 			'product_ingrm9'			=>	$row["ingrm9"],
	// 			// 			'product_ingrm10'			=>	$row["ingrm10"],
	// 			// 			'product_ingrm11'			=>	$row["ingrm11"],
	// 			// 			'product_ingrm12'			=>	$row["ingrm12"],
	// 			// 		);
	// 			// 		$_SESSION["cart"][] = $min_array;
	// 			// 		}
	//
	// 			// 	}
	//
	// 			// }
	// }

	$sql2 = "SELECT * FROM temp";
	$result2=mysqli_query($connect, $sql2);
	while($row = $result2->fetch_assoc()){
		$sql3 = "INSERT INTO `sales` (`id`, `datetime`, `meat`, `veggies`, `carbs`, `type`, `total`) VALUES (NULL, CURRENT_TIMESTAMP, '".$row['meat']."', '".$row['veggies']."', '".$row['carbs']."', '".$row['type']."','123123123'	)";
		$conn->query($sql3);
	}


// 	if(isset($_SESSION["cart"])){
// 	$sql1 = "SELECT * FROM tbl_ingredients";
//  	$result=mysqli_query($connect, $sql1);
//  	while($row = $result->fetch_assoc()){
// 		$size = $row["size"];
// 		$ctr = 0;
// 	foreach($_SESSION["cart"] as $keys => $values){
// 			if($values["product_ingr1"] == $row["id"] && $values["product_size"] == "12oz"){
// 				$ctr++;
// 				$tomin = $values["product_ingrm1"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr1"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm1"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr2"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm2"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr2"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm2"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr3"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm3"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr3"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm3"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr4"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm4"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr4"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm4"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr5"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm5"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr5"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm5"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr6"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm6"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr6"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm6"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr7"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm7"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr7"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm7"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr8"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm8"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr8"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm8"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr9"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm7"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr9"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm9"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr10"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm10"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr10"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm10"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr11"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm11"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr11"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm11"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr12"] == $row["id"]){
// 				$ctr++;
// 				$tomin = $values["product_ingrm12"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			elseif($values["product_ingr12"] == $row["id"] && $values["product_size"] == "16oz"){

// 				$ctr++;
// 				$tomin = $values["product_ingrm12"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 		}
// 	}
// }
// 	if(isset($_SESSION["cart2"])){
// 		$sql1 = "SELECT * FROM tbl_ingredients";
//  	$result=mysqli_query($connect, $sql1);
//  	while($row = $result->fetch_assoc()){
// 		$size = $row["size"];
// 		$ctr2 = 0;
// 	foreach($_SESSION["cart2"] as $keys => $values){
// 			if($values["product_ingr1"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm1"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr2"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm2"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr3"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm3"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr4"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm4"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr5"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm5"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr6"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm6"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}

// 			if($values["product_ingr7"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm7"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr8"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm8"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr9"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm9"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr10"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm10"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr11"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingrm11"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 			if($values["product_ingr12"] == $row["id"]){
// 				$ctr2++;
// 				$tomin = $values["product_ingr12"] * $values["product_quantity"];
// 				$tominfinal = $tomin * $ctr2;
// 				$total = $size - $tominfinal;
// 				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
// 				mysqli_query($connect, $sql2);
// 			}
// 		}
// 	}
// 	}


// 	// foreach($_SESSION["shopping_cart"] as $keys => $value){
// 	// 	$name = $value["product_name"];
// 	// 	$price = $value["product_price"];
// 	// 	$date = date("Y-m-d");

// 	// 	$sql = "INSERT INTO `tbl_report` (`id`, `trans_no`, `prods`, `date`, `Amount`) VALUES ('$increment', '$increment', '$name', '$date', $price);";
// 	// 		mysqli_query($connect, $sql);

// 	// }

//  	// $sql1 = "SELECT * FROM tbl_product";
//  	// $result=mysqli_query($connect, $sql1);

// // 		foreach ($_SESSION["cart"] as $keys => $value) {

// // 				foreach($_SESSION["shopping_cart"] as $keys => $values){
// // 					if( $value['product_id'] == $values['product_id']){

// // 				}
// // 			}
// // 			echo $value["product_quantity"]."<br>";
// // 			echo $value["product_ingr1"]."<br>";
// // 			echo $value["product_ingr2"]."<br>";
// // 			echo $value["product_ingr3"]."<br>";
// // 			echo $value["product_ingr4"]."<br>";
// // 			echo $value["product_ingr5"]."<br>";
// // 			echo $value["product_ingr6"]."<br>";
// // 			echo $value["product_ingr7"]."<br>";

// // }

// foreach($_SESSION["shopping_cart"] as $keys => $value){
// 		$name = $value["product_name"];
// 		$price = $value["product_price"];
// 		$date = date("Y-m-d");
// 		$size = $value["product_size"];
// 		if($size == '18oz'){
// 			$size = '';
// 		}
// 		$sql = "INSERT INTO `tbl_report` (`id`, `trans_no`, `prods`,`size`, `date`, `Amount`) VALUES ('$increment', '$increment', '$name','$size' ,'$date', $price);";
// 			mysqli_query($connect, $sql);

// 	}
// 	$emp = $_SESSION['employee'];
// 	$total=$_SESSION["total"];
// 	$sql1 = "INSERT INTO `tbl_report_total` (`id`, `trans_no`, `date`, `total`, `user`, `user_temp`) VALUES (NULL, '$increment', '$date', '$total','$emp','')";
// 	mysqli_query($connect, $sql1);
$truncate = "TRUNCATE temp";
mysqli_query($connect, $truncate);

 Session_destroy();
 header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
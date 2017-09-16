<?php
    session_start();
    $connect = mysqli_connect("localhost","root","","healthy_corner");
	if($_POST["action"] == "remove"){
		$q = "SELECT * FROM temp";
		$resu = mysqli_query($connect, $q);

	  while($row = mysqli_fetch_array($resu)){
			if($row["id"] == $_POST["id"]){

				$q2 = "DELETE FROM `temp` WHERE `id` = '".$_POST["id"]."'";
				mysqli_query($connect, $q2);

			}

	  }

	}else if($_POST["action"] == "removeAll"){

		$truncate = "TRUNCATE temp";
		mysqli_query($connect, $truncate);

	}else{


		$meat = $_POST["var1"];
		$veg = $_POST["var2"];
		$rice = $_POST["var3"];
		$type = $_POST["type"];
		$_SESSION["quantity"] = 0;
		$price = 0;
		if($type=="MCV"){
		  $price = 109;
		}
		if($type=="MC"){
		  $price = 89;
		}
		if($type=="MV"){
		  $price = 99;
		}
		echo '<script>console.log($meat)</script>';
		$query = "INSERT INTO `temp` (`id`, `1`, `2`, `3`, `Type`, `Price`) VALUES (NULL, '".$meat."', '".$veg."', '".$rice."', '".$type."', '".$price."')";
		if (mysqli_query($connect, $query)) {
		  echo "<script>alert('New record created successfully');</script>";
	  }
	  else{
		  echo "<script>alert('tae');</script>";
	  }

	  $sql = "SELECT * FROM product_mother";
	  $res = mysqli_query($connect, $sql);

	  while($row = mysqli_fetch_array($res)){
		if($row["name"] == $meat){
			$_SESSION["quantity"] = $row["sales_count"] + 1;
		}
		$quantity = $_SESSION["quantity"];

		$sql2 = "UPDATE `product_mother` SET `sales_count`= '".$quantity."' WHERE `name` = '".$meat."'";
		mysqli_query($connect, $sql2);
		$sql3 = "UPDATE `product_mother` SET `sales_count`= '".$quantity."' WHERE `name` = '".$veg."'";
		mysqli_query($connect, $sql3);
		$sql4 = "UPDATE `product_mother` SET `sales_count`= '".$quantity."' WHERE `name` = '".$rice."'";
		mysqli_query($connect, $sql4);
	  }


}
		  //$quantity = 1;







?>

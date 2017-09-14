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


		$meat = $_POST["meat"];
		$veg = $_POST["veg"];
		$rice = $_POST["rice"];
		$type = $_POST["type"];
		$_SESSION["quantity"] = 0;
		$price = 0;
		if($type==""){
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




}
		  //$quantity = 1;







?>

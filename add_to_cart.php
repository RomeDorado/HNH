
<?php
    session_start();
    $connect = mysqli_connect("localhost","root","","HNH");
	if($_POST["action"] == "remove"){
    echo "<script> alert('pasok');</script>";
		$q = "SELECT * FROM temp";
		$resu = mysqli_query($connect, $q);

	  while($row = mysqli_fetch_array($resu)){
			if($row["id"] == $_POST["id"]){

				$q2 = "DELETE FROM `temp` WHERE `id` = '".$_POST["id"]."'";
				if(mysqli_query($connect, $q2)){
         echo "<script> alert('tangina gumana na');</script>";
        }
        else{
          echo "<script>alert('tanigna paasa');</script>";
        }

			}

	  }

	}else if($_POST["action"] == "removeAll"){

		$truncate = "TRUNCATE temp";
		mysqli_query($connect, $truncate);

	}else if($_POST['action'] == "add"){


		$meat = $_POST["var1"];
		$veg = $_POST["var2"];
		$rice = $_POST["var3"];
		$type = $_POST["type"];
    echo $meat;
    echo $veg;
    echo $rice;
    echo $type;
		$_SESSION["quantity"] = 0;
		$price = 0;
		if($type=="duo"){
		  $price = 89;
		}
		elseif($type=="trio"){
		  $price = 99;
		}
		elseif($type == "ac"){	
			if($meat != null){
				$result = mysqli_query($connect,"SELECT product_mother.alacarte FROM `product_mother` WHERE name = '$meat'"); 
				$row = mysqli_fetch_assoc($result);
				$price = $row['alacarte'];
			}
			if($veg != null){
				$result = mysqli_query($connect,"SELECT product_mother.alacarte FROM `product_mother` WHERE name = '$veg'"); 
				$row = mysqli_fetch_assoc($result);
				$price = $row['alacarte'];
			}
			if($rice != null){
				$result = mysqli_query($connect,"SELECT product_mother.alacarte FROM `product_mother` WHERE name = '$rice'"); 
				$row = mysqli_fetch_assoc($result);
				$price = $row['alacarte'];
			}


		}
		echo '<script>console.log($meat)</script>';
		$query = "INSERT INTO `temp` (`id`, `item1`, `item2`, `item3`, `type`, `price`) VALUES (NULL, '".$meat."', '".$veg."', '".$rice."', '".$type."', '".$price."')";
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

	  }


}
		  //$quantity = 1;







?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/icon.png">

	<title>Restock</title>
	<script src="css3.css"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/custom.css">
	<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-success navbar-inverse">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="images/icon.png" width="40" height="40"  class="d-inline-block align-top">
			Happy N' Healthy
		</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0">
				<li class="nav-item">
					<a class="nav-link" href="employee_admin.php">Stocks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="employee_logs.php">Reports</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Account Management</a>
				</li>
				<li class="nav-item active">
					<span class="nav-link" href="restock.php">Products <span class="sr-only">(current)</span></span>
				</li>
			</ul>

			<span class="navbar-text">
				<a class=" nav-item btn btn-danger btn-sm" href="logout.php">Logout</a>
			</span>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col mt-3">
				<h1 class="display-4">Restock</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<table class="table table-bordered table-striped">
					<thead class="thead-inverse">
						<tr>
							<th class="text-center">INGREDIENT</th>
							<th class="text-center">MAX QUANTITY</th>
							<th class="text-center">CURRENT QUANTITY</th>
							<th class="text-center" colspan="2">ACTION</th>
						</tr>
					</thead>

					<tbody class="text-center">
						<?php								
						$connect = mysqli_connect("localhost", "root", "", "hnh");

						$sql = "SELECT * FROM product_mother";
						$result = mysqli_query($connect, $sql);


						if ($result->num_rows > 0) {									
							while($row = $result->fetch_assoc()) {										
								$id = $row["id"];
								$size = $row['MaxSize'];
								?>
								<tr>
									<th scope='row' class="text-center">
										<?php echo $row ["name"]; ?>
									</th>
									<td><?php echo $row['MaxSize']; ?> </td>
										<?php
										echo "<form action = 'restock_process.php' method=post class='form-inline'>";
										echo "<td class='text-center'>";
										echo $row ['size'];															
										echo "</td>";
										echo "<td>";
										echo "<input type=number step='.01' min=0 name=amount placeholder='Quantity' class='form-control'/> ";
										echo "<input type=hidden name=id value='" . $row ['id'] . "'/>";
										echo "<input type=hidden name=currentsize value='" . $row ['size'] . "'/>";
										echo "<input type=hidden name=beforesize value='" . $row ['temp'] . "'/>";
										echo "<input type=hidden name=maxsize value='" . $row ['MaxSize'] . "'/>";
										echo "<input type=hidden name=ingr value='" . $row ['name'] . "'/>";////////////////
										echo "</td>"?>
										<td>
											<button type=submit name=btn value=Restock onClick = "return confirm('Are you sure you want to restock?')" class='btn btn-md btn-outline-success form-control'>
												<i class="fa fa-check-square-o pr-1" aria-hidden="true"></i>Restock
											</button>																													

										<?php
										echo "</td>";
										echo "</form>";
										?>
								</tr>
						<?php
							}
						} else {
							echo "0 results";
						}
						$connect->close();
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="CSS/bootstrap.min.js"></script>	
</body>
</html>
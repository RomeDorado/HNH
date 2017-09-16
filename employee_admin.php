<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin View</title>
	<script src="css3.css"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Happy N' Healthy</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0">
				<li class="nav-item active">
					<span class="nav-link">Stocks <span class="sr-only">(current)</span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Report</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Prices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Account Management</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Add Products</a>
				</li>
			</ul>

			<span class="navbar-text">
				<a class=" nav-item btn btn-danger btn-sm" href="#">Logout</a>
			</span>
		</div>
	</nav>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col">
				<table class="table table-reflow table-striped table-bordered">
					<thead class="thead-inverse">
						<tr>
							<th>Ingredient</th>
							<th>Consumed</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>

					<tbody>
						<?php
								//session_start();
								$connect = mysqli_connect("localhost", "root", "", "HNH");

								$sql = "SELECT product_mother.*, employee_count.count from product_mother
	join employee_count
    	on employee_count.prod_fk = product_mother.id
where 1";
								$result = mysqli_query($connect, $sql);


								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										//$counts = $row["size"];
										$id = $row["id"];
										$count = $row['count'];
							?>

										<tr>
											<th scope="row" class="text-center">
												<?php echo $row ["name"]; ?>
											</th>
											<td><?php echo $count; ?> </td>
												<?php
													echo "<form action = 'count_process.php' method=post class='form-inline'>";
													echo "<td>";
													echo "<input type=number step='.01' min=0 name=amount placeholder='Quantity' class='form-control'/></td> ";
													echo "<input type=hidden name=id value='" . $row ['id'] . "'/>";
													// echo "<input type=hidden name=currentsize value='" . $row ['size'] . "'/>";
													// echo "<input type=hidden name=beforesize value='" . $row ['temp'] . "'/>";
													// echo "<input type=hidden name=maxsize value='" . $row ['MaxSize'] . "'/>";
													echo "<input type=hidden name=ingr value='" . $row ['name'] . "'/>";////////////////?>
													 <td><button type=submit name=btn onClick="return confirm('Are you sure you want to enter consumed value?')" class='btn btn-md btn-outline-success form-control'>
													 	<i class='fa fa-plus-circle' aria-hidden='true'></i> Add</button>


													<?php
													echo "</form>";
													echo "</td>";
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
	<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>

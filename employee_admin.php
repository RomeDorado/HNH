<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Admin View</title>
		<script src="css3.css"></script>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="CSS/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-1 col-sm-offset-11">
					<form action = "logout.php" method= "post">
					<input type="submit" name="zerotemp" value ="Logout" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to logout?');"></button>
					</form>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12" style="margin-top: -1%"><h1 class="header"><img src="images/header.png"></h1></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-left">
				<li class="active"><a data-toggle="tab" href="#stocks">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li><a href="admprices.php">Prices</a></li>
				<li><a href="admacc.php">Account Management</a></li>
				<li><a href="addprodingr.php">Add Products</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active" style="height: 500px; overflow-y: scroll;">
					<div class="row center-block">
						<div class="col-sm-12">

							<table
								class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
								<thead>
									<tr class="default">
										<td class="col-sm-4" style="vertical-align: middle !important;"><b>Ingredient</b></td>
										<td class="col-sm-1" style="vertical-align: middle !important;"><b>Consumed</b></td>
										<td class="col-sm-4" style="vertical-align: middle !important;"><b>Action</b></td>
									</tr>
								</thead>
							</table>

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

										<table class="table-responsive table-bordered table-condensed custom-table" width=100%>
											<tbody>
												<tr>
													<td class="col-sm-4">
														<?php
															echo "<b>" . $row ["name"] . "</b>";

														?>
													</td>
													<td class="col-sm-1"><?php echo $count; ?> </td>
														<?php
															echo "<form action = 'count_process.php' method=post>";
															echo "<td class='col-sm-5'>";
															echo "<input type=number step='.01' min=0 name=amount placeholder='Quantity'/> ";
															echo "<input type=hidden name=id value='" . $row ['id'] . "'/>";
															// echo "<input type=hidden name=currentsize value='" . $row ['size'] . "'/>";
															// echo "<input type=hidden name=beforesize value='" . $row ['temp'] . "'/>";
															// echo "<input type=hidden name=maxsize value='" . $row ['MaxSize'] . "'/>";
															echo "<input type=hidden name=ingr value='" . $row ['name'] . "'/>";////////////////?>
															 <input type=submit name=btn value=Add onClick = "return confirm('Are you sure you want to enter consumed value?')" class='btn btn-sm btn-success'/>


															<?php
															echo "</form>";
															echo "</td>";
														?>
												</tr>
											</tbody>
										</table>
							<?php
									}
								} else {
									echo "0 results";
								}
								$connect->close();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="CSS/bootstrap.min.js"></script>
	</body>
</html>

<?php
	session_start();
    $connect = mysqli_connect("localhost", "root", "", "HNH");
?>

<!DOCTYPE html>
	<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/icon.png">

	<title>Reports</title>
	<script src="css3.css"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/custom.css">
	<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-success navbar-inverse">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="images/icon.png" width="40" height="40" class="d-inline-block align-top">
			Happy N' Healthy
		</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0">
				<li class="nav-item active">
					<span class="nav-link">Stocks <span class="sr-only">(current)</span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="employee_logs.php">Reports</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Account Management</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="restock.php">Products</a>
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
				<h1 class="display-4">View Sales</h1>
			</div>
		</div>

		<div class="mt-3">
			<div class="row">
				<div class="col">
					<table class="table table-reflow table-striped table-bordered">
						<thead class="thead-inverse">
							<tr>
								<th class="text-center">PRODUCT NAME</th>
								<th class="text-center">ACTUAL CONSUMED</th>
								<th colspan="2" class="text-center">EMPLOYEE CONSUMED</th>
							</tr>
						</thead>

						<tbody>
							<?php
								//session_start();
							  $sql1 = "SELECT product_mother.*, employee_count.count from product_mother join employee_count on employee_count.prod_fk = product_mother.id where 1";
                                    $result=mysqli_query($connect, $sql1);
                                        while($row = $result->fetch_assoc()){
									?>

									<tr>
										<th scope="row" class="text-center">
											<?php echo $row ["name"]; ?>
										</th>
										<td class="text-center"><?php echo $sales_count; ?> </td>
										<td class="text-center"><?php echo $count; ?> </td>
										 <?php
                                        }
                                    ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="CSS/bootstrap.min.js"></script>



		<form action = "restock.php" method="GET">
			<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header bg-warning">
						<h4 class="modal-title"><b/>Restock</h4>
					</div>
					<div class="modal-body p-b-0">


			<input type="number" required="required" placeholder="Enter Amount" id="amount" name="amount" style="height:50px;"/>
			<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">



			<p id="error"/>
					</div>
					<div class="modal-footer">
			<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">Cancel</span>
						</button> -->
			<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" id="submitbutton" />
			<input type="submit" class="btn btn-warning pull-lg-left" class="fa fa-unlock-alt" value="Cancel" formnovalidate/>
			</div>
				</div>
			</div>
		</div>

	<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
							<div class="modal-header bg-warning">

									<h4 class="modal-title">Summary of Order</h4>
							</div>
							<div class="modal-body">
									<div class="fetched-data">

									</div>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
					</div>
			</div>
	</div>

		</body>
		<script>
					$(document).ready(function(){
			$('#myModal').on('show.bs.modal', function (e) {
					var rowid = $(e.relatedTarget).data('id');
					$.ajax({
							type : 'post',
							url : 'fetch_record.php', //Here you will fetch records
							data :  'rowid='+ rowid, //Pass $id
							success : function(data){
							$('.fetched-data').html(data);//Show fetched data from database
							}
					});
			});
	});
			</script>
	</html>

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

	<title>Reports</title>
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
				<li class="nav-item active">
					<span class="nav-link">Reports <span class="sr-only">(current)</span></span>
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
				<h1 class="display-4">View Transactions</h1>
			</div>
		</div>

		<!-- SEARCH FORM -->
		<div class="mt-3" style="background-color:;">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<form action="employee_logs.php" method="GET">
						<div class="form-group row">
							<label for="startdate" class="col-md-3 form-control-label">Pick start date: </label>
							<div class="col-md-9">
								<input type="date" name="startdate" class="form-control" required />
							</div>
						</div>

						<div class="form-group row">
							<label for="startdate" class="col-md-3 control-label">Pick end date: </label>
							<div class="col-md-9">
								<input type="date" name="enddate" class="form-control" required />
							</div>
						</div>

						<div class="form-group row mt-4 justify-content-center">
							<button type="submit" class="btn col-md-8 mx-sm-5 btn-md btn-success">
								<i class="fa fa-search pr-1" aria-hidden="true"></i>Search
							</button>
						</div>

					</form> 
				</div>          
			</div>
		</div>

		<!-- LOG TABLE -->
		<div class="mt-4" style="background-color:;">
			<div class="row justify-content-center">
				<div class="col">
					<table class="table table-striped table-bordered">
						<thead class="thead-inverse">
							<tr>
								<th>PRODUCT</th>
								<th>TIMESTAMP</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$connect = mysqli_connect("localhost", "root", "", "hnh");
							if(isset($_GET["startdate"]) && isset($_GET["enddate"])){
								$a=$_GET["startdate"];
								$b=$_GET["enddate"];

								$sql = "SELECT * FROM consumed_logs WHERE date BETWEEN '$a' AND '$b'";
								$result= mysqli_query($connect,$sql);
								while($row = $result->fetch_assoc()){?>
								<tr>                                        
									<th scope="row"><?php echo $row["product"]?></td>
										<td><?php echo $row["date"]?></td>
									</tr>
									<?php
								}
							}
							else{
								$today = date("Y-m-d");
								$_GET["startdate"] = $today;
								$_GET["enddate"] = $today;
								$a=$_GET["startdate"];
								$b=$_GET["enddate"];

								$sql = "SELECT * FROM consumed_logs WHERE date BETWEEN '$a' AND '$b'";
								$result= mysqli_query($connect,$sql);
								while($row = $result->fetch_assoc()){?>

								<?php
							}
						}
						?>
					</tbody>
				</table>
			</div>          
		</div>
	</div>
</div>

<!-- MODAL
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
 
	<form action="employee_logs.php" method="GET">
		<div class="col-6" style="background-color: red;">
			<div class="form-group row justify-content-center">
				<label for="startdate" class="col control-label">Pick start date: </label>
				<div class="col">
					<input type="date" name="startdate" class="form-control" required />
				</div>
			</div>

			<div class="form-group col-md-5">
				<label for="startdate" class="col-md-5 control-label">Pick end date: </label>
				<div class="col-md-7">
					<input type="date" name="enddate" class="form-control" required />
				</div>
			</div>
			<div class="col-md-2"><input type="submit" value="Search" class="btn btn-sm btn-success" style="margin-left: -8em;"></div>
		</div>
	</form>
-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
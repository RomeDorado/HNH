<?php $connect = mysqli_connect("localhost","root","","HNH");
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/icon.png">

	<title>Order Page</title>
	<!-- <script src="css3.css"></script> -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/custom.css">
	<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
</head>
<style>
	//paayos nalang ng mga kulay tsaka sizes and shit
	body {
		padding: 1rem;
		color: hsla(215, 5%, 50%, 1);
	}
	h1 {
		color: hsla(215, 5%, 10%, 1);
		margin-bottom: 2rem;
	}
	section {
		display: flex;
		flex-flow: row wrap;
	}
	section > div {
		flex: 1;
		padding: 0.5rem;
	}
	input[type="radio"] {
		display: none;
		&:not(:disabled) ~ label {
			cursor: pointer;
		}
		&:disabled ~ label {
			color: hsla(150, 5%, 75%, 1);
			border-color: hsla(150, 5%, 75%, 1);
			box-shadow: none;
			cursor: not-allowed;
		}
	}
	label {
		height: 100%;
		display: block;
		background: white;
		border: 2px solid hsla(150, 75%, 50%, 1);
		border-radius: 20px;
		padding: 1rem;
		margin-bottom: 1rem;
		//margin: 1rem;
		text-align: center;
		box-shadow: 0px 3px 10px -2px hsla(150, 5%, 65%, 0.5);
		position: relative;
	}
	input[type="radio"]:checked + label {
		background: hsla(150, 75%, 50%, 1);
		color: hsla(215, 0%, 100%, 1);
		box-shadow: 0px 0px 20px hsla(150, 100%, 50%, 0.75);
		&::after {
			color: hsla(215, 5%, 25%, 1);
			font-family: FontAwesome;
			border: 2px solid hsla(150, 75%, 45%, 1);
			content: "\f00c";
			font-size: 24px;
			position: absolute;
			top: -25px;
			left: 50%;
			transform: translateX(-50%);
			height: 50px;
			width: 50px;
			line-height: 50px;
			text-align: center;
			border-radius: 50%;
			background: white;
			box-shadow: 0px 2px 5px -2px hsla(0, 0%, 0%, 0.25);
		}
	}
	input[type="radio"]#control_05:checked + label {
		background: red;
		border-color: red;
	}
	p {
		font-weight: 900;
	}
	.bg-nav{
		background-color:red;
	}


	@media only screen and (max-width: 700px) {
		section {
			flex-direction: column;
		}
	}
</style>

<body>
	<!-- Navbar -->
	<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-success navbar-inverse">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
            <img src="images/icon.png" width="40" height="40" class="d-inline-block align-top">
			Happy N' Healthy
        </a>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav flex-wrap mr-auto">
				<li class="nav-item active">
					<span class="nav-link">Order <span class="sr-only">(current)</span></span>
				</li>
			</ul>
			<span class="navbar-text">
				<a class=" nav-item btn btn-danger btn-sm" href="logout.php">Logout</a>
			</span>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<!-- MENU column -->
			<div class="col mt-2">

				<ul class="nav nav-tabs mt-4" role="tablist">
					<li class="nav-item">
						<a class="nav-link text-success active" data-toggle="tab" href="#cashierTally" role="tab"><h6>Input tally</h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success" data-toggle="tab" href="#grossRepEmp" role="tab"><h6>Gross Report from Employee</h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success" data-toggle="tab" href="#totalExpense" role="tab"><h6>Total Expense</h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success" data-toggle="tab" href="#stallTally" role="tab"><h6>Stall Tally</h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success" data-toggle="tab" href="#waterIceExp" role="tab"><h6>Water Ice Expense</h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success" data-toggle="tab" href="#stallInv" role="tab"><h6>Stall Inventory Expense</h6></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">

					<!-- cashierTally -->
					<div class="tab-pane active" id="cashierTally" role="tabpanel">
						<!-- <h1 class="mt-3 mb-2">Happy</h1> -->

						<form>
							<div class="row">
								<!-- MEAT -->
								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th>Meat</th>
												<th>Qty</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Beef</td>
												<td><input type="text" class="form-control" placeholder="45"></td>
											</tr>
											<tr>
												<td>Chicken</td>
												<td><input type="text" class="form-control" placeholder="68"></td>
											</tr>
											<tr>
												<td>Tuna</td>
												<td><input type="text" class="form-control" placeholder="39"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- CARBS  -->
								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th>Carbs</th>
												<th>Qty</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Brown Rice</td>
												<td><input type="text" class="form-control" placeholder="90"></td>
											</tr>
											<tr>
												<td>Black Rice</td>
												<td><input type="text" class="form-control" placeholder="32"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- VEGGIES  -->
								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th>Veggies</th>
												<th>Qty</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Broccoli</td>
												<td><input type="text" class="form-control" placeholder="43"></td>
											</tr>
											<tr>
												<td>Corn</td>
												<td><input type="text" class="form-control" placeholder="27"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="row mb-5 text-center">
								<div class="col mx-auto">
									<button type="button" name="button" class="btn btn-md btn-success add_to_cart px-5 mt-4">
										<i class="fa fa-cart-plus pr-2" aria-hidden="true"></i>Submit
									</button>
								</div>
							</div>
						</form>
					</div>

					<!-- grossRepEmp -->
					<div class="tab-pane" id="grossRepEmp" role="tabpanel">
						<form>
							<div class="row">
								<div class="col">
									<table class="table table-sm table-bordered">
										<tbody>
												<tr>
													<th scope="row" >Date</th>
													<td colspan="2">September 11</td>
												</tr>
												<tr>
													<th scope="row" >Employee in charge</th>
													<td colspan="2">September 11</td>
												</tr>
												<tr>
													<th scope="row" >Sales and consumption report</th>
													<th scope="row" >Stall</th>
													<td>stalllllll</stall>
												</tr>
											</tbody>
									</table>
								</div>
								<div class="col">
									<table class="table table-sm table-bordered">
										<!-- <tbody> -->
												<tr>
													<th scope="row" >Gross report from cashier</th>
													<td><input type="text" class="form-control" placeholder="2107" disabled></td>
												</tr>
											<!-- </tbody> -->
									</table>
								</div>
							</div>

							<div class="row">
								<!-- BEVERAGES -->
								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th></th>
												<th>Price</th>
												<th>Qty</th>
												<th>Total</th>
											</tr>
										</thead>

										<thead class="thead-inverse">
											<th colspan="4">Beverages</th>
										</thead>
										<tbody>
											<tr>
												<td>Muscle Shake</td>
												<td>129</td>
												<td><input type="text" class="form-control" placeholder="10"></td>
												<td>1290</td>
											</tr>
										</tbody>

										<thead class="thead-inverse">
											<th colspan="4">Set Meals</th>
										</thead>
										<tbody>
											<tr>
												<td>Meat + Carbs + Veg</td>
												<td>129</td>
												<td><input type="text" class="form-control" placeholder="10"></td>
												<td>1290</td>
											</tr>
											<tr>
												<td>Meat + Carbs</td>
												<td>129</td>
												<td><input type="text" class="form-control" placeholder="10"></td>
												<td>1290</td>
											</tr>
											<tr>
												<td>Meat + Veg</td>
												<td>129</td>
												<td><input type="text" class="form-control" placeholder="10"></td>
												<td>1290</td>
											</tr>
										</tbody>

										<thead class="thead-inverse">
											<th colspan="4">Ala Carte</th>
										</thead>
										<tbody>
											<tr>
												<td>Ala Carte Meat</td>
												<td>129</td>
												<td><input type="text" class="form-control" placeholder="10"></td>
												<td>1290</td>
											</tr>
										</tbody>
									</table>
								</div>

									<!-- ADDONS -->
								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th></th>
												<th>Price</th>
												<th>Qty</th>
												<th>Total</th>
											</tr>
										</thead>

										<thead class="thead-inverse">
											<th colspan="4">Addons</th>
										</thead>
										<tbody>
											<tr>
												<td>Black Rice</td>
												<td>10</td>
												<td><input type="text" class="form-control" placeholder="32"></td>
												<td>320</td>
											</tr>
										</tbody>

										<thead class="thead-inverse">
											<th colspan="4">Premium</th>
										</thead>
										<tbody>
											<tr>
												<td>Grilled Lab Meal</td>
												<td>10</td>
												<td><input type="text" class="form-control" placeholder="32"></td>
												<td>320</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="row mb-5 text-center">
								<div class="col mx-auto">
									<button type="button" name="button" class="btn btn-md btn-success add_to_cart px-5 mt-4">
										<i class="fa fa-cart-plus pr-2" aria-hidden="true"></i>Submit
									</button>
								</div>
							</div>
						</form>
					</div>

					<!-- totalExpense -->
					<div class="tab-pane" id="totalExpense" role="tabpanel">
						<form>
							<div class="row justify-content-center">
								<!-- BEVERAGES -->
								<div class="col-6">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th colspan="2">Summary Report</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Total Saes from Beverages</td>
												<td>129</td>
											</tr>
											<tr>
												<td>Total Saes from Set Meals</td>
												<td>129</td>
											</tr>
											<tr>
												<td>Total Saes from ala Carte</td>
												<td>129</td>
											</tr>
											<tr>
												<td>Total Addons</td>
												<td>129</td>
											</tr>
											<tr>
												<td>Total Saes from Premium</td>
												<td>129</td>
											</tr>
										</tbody>

										<thead class="thead-inverse">
											<tr>
												<th colspan="2">Ttotal gross sales</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Less: Total Cost of Goods Sold</td>
												<td>129</td>
											</tr>
										</tbody>

										<thead class="thead-inverse">
											<tr>
												<th>gross margin</th>
												<th>###</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Less: Total Expense</td>
												<td>129</td>
											</tr>
										</tbody>

										<thead class="thead-inverse">
											<tr>
												<th>net income</th>
												<th>11738</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>% prfit margin</td>
												<td>0.602</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>

					<!-- stallTally -->
					<div class="tab-pane" id="stallTally" role="tabpanel">
						<!-- <h1 class="mb-2">Healthy</h1> -->
						<table class="table table-sm table-reflow table-bordered">
							<thead class="thead-inverse">
								<tr>
									<th>Category</th>
									<th colspan="3">Choices</th>
								</tr>
							</thead>

							<tbody>
								<!-- GO -->
								<tr>
									<th scope="row">Go</td>
									<section>
										<?php
										$result = mysqli_query($connect,
											"SELECT healthy.*,  product_mother.* from healthy join product_mother on healthy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

										while($row = mysqli_fetch_array($result)){
											if($row["section"] == "1"){
												?>
												<td>
													<div>
														<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
														<input type="radio" name="var1" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
														<label for="<?php echo $row['id']?>">
															<h9><?php echo $row["name"]?></h9>
														</label>
													</div>
												</td>
												<?php
											}
										}?>
										<td></td>

									</tr>

									<!-- GROW -->
									<tr>
										<th scope="row">Grow</td>

										<?php
										$result = mysqli_query($connect,
											"SELECT healthy.*,  product_mother.* from healthy join product_mother on healthy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

										while($row = mysqli_fetch_array($result)){

											if($row["section"] == "2"){
												?>
												<td><div>
													<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
													<input type="radio" name="var2" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
													<label for="<?php echo $row['id']?>">
														<h9><?php echo $row["name"]?></h9>
													</label>
												</div></td>
												<?php
											}
										}?>
									</tr>

									<!-- GLOW -->
									<tr>
										<th scope="row">Glow</td>
										<?php
										$result = mysqli_query($connect,
											"SELECT healthy.*,  product_mother.* from healthy join product_mother on healthy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

										while($row = mysqli_fetch_array($result)){
											if($row["section"] == "3"){
												?>
												<td><div>
													<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
													<input type="radio" name="var3" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
													<label for="<?php echo $row['id']?>">
														<h9><?php echo $row["name"]?></h9>
													</label>
												</div></td>
												<?php
											}
										}?>
									</section>
								</tr>

								<!-- ADD TO CART button -->
								<tr>
									<td></td>
									<td colspan="3">
										<button type="button" name="button" class="btn btn-md btn-success add_to_cart float-right">
											<i class="fa fa-cart-plus pr-2" aria-hidden="true"></i>Add to Cart
										</button>
									</td>
								</tr>
							</tbody>
						</table>

						<section>
							<?php
							$query = "SELECT * FROM `product_mother` WHERE 1";
							$results = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($results)){
								if($row["section"] == "premium"){
									?>
									<div>
										<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
										<input type="radio" name="rice" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
										<label for="<?php echo $row['id']?>">
											<h9><?php echo $row["name"]?></h9>
										</label>
									</div>
									<?php
								}
							}
							?>
						</section>
					</div>

					<!-- waterIceExp -->
					<div class="tab-pane" id="waterIceExp" role="tabpanel">
						<form>
							<div class="row justify-content-center">
								<!-- BEVERAGES -->
								<div class="col-6">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<th colspan="2">Input</th>
										</thead>
										<tbody>
											<tr>
												<td>Water*</td>
												<td><input type="text" class="form-control" placeholder="45"></td>
											</tr>
											<tr>
												<td>Ice*</td>
												<td><input type="text" class="form-control" placeholder="45"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>

					<!-- stallInv -->
					<div class="tab-pane" id="stallInv" role="tabpanel">
						<form>
							<div class="row justify-content-center">
								<!-- BEVERAGES -->
								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th>Delivered</th>
												<th></th>
												<th>Unit</th>
											</tr>
										</thead>
										<thead>
											<tr>
												<th colspan="3">Meat</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Chicken</td>
												<td width="30%"><input type="text" class="form-control" placeholder="6750"></td>
												<td>g</td>
											</tr>
										</tbody>

										<thead>
											<tr>
												<th colspan="3">Vegetables</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Broccoli</td>
												<td width="30%"><input type="text" class="form-control" placeholder="6750"></td>
												<td>g</td>
											</tr>
										</tbody>

										<thead>
											<tr>
												<th colspan="3">Groceries</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Whey</td>
												<td width="30%"><input type="text" class="form-control" placeholder="6750"></td>
												<td>g</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="col">
									<table class="table table-sm table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th>Left</th>
												<th></th>
												<th>Unit</th>
											</tr>
										</thead>
										<thead>
											<tr>
												<th colspan="3">Meat</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Chicken</td>
												<td width="30%"><input type="text" class="form-control" placeholder="6750"></td>
												<td>g</td>
											</tr>
										</tbody>

										<thead>
											<tr>
												<th colspan="3">Vegetables</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Broccoli</td>
												<td width="30%"><input type="text" class="form-control" placeholder="6750"></td>
												<td>g</td>
											</tr>
										</tbody>

										<thead>
											<tr>
												<th colspan="3">Groceries</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Whey</td>
												<td width="30%"><input type="text" class="form-control" placeholder="6750"></td>
												<td>g</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<script src="dist/js/tether.min.js"></script>
	<script src="dist/js/jquery-3.2.1.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>

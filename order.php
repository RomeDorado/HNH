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
	<script src="css3.css"></script>

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
			<ul class="navbar-nav mr-auto">
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
				<h5>Type</h5>
				<div class="row">
					<div class="col">
						<section>
							<div>
								<input type="radio" id="control_02" name="type" value="duo">
								<label for="control_02">
									<h9>DUO</h9>
								</label>
							</div>
							<div>
								<input type="radio" id="control_03" name="type" value="trio">
								<label for="control_03">
									<h9>TRIO</h9>
								</label>
							</div>
							<div>
								<input type="radio" id="control_04" name="type" value="ac">
								<label for="control_04">
									<h9>AC</h9>
								</label>
							</div>
						</section>
					</div>
				</div>

				<ul class="nav nav-tabs mt-4" role="tablist">
					<li class="nav-item">
						<a class="nav-link text-success active" data-toggle="tab" href="#happy" role="tab"><h6>Happy</h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success" data-toggle="tab" href="#healthy" role="tab"><h6>Healthy</h6></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<!-- HAPPY -->
					<div class="tab-pane active" id="happy" role="tabpanel">
						<!-- <h1 class="mt-3 mb-2">Happy</h1> -->
						<table class="table table-sm table-reflow table-bordered">
							<thead class="thead-inverse">
								<tr>
									<th>Category</th>
									<th style="width: 80%" colspan="3">Choices</th>
								</tr>
							</thead>

							<tbody>
								<!-- PIZZA -->
								<tr>
									<th scope="row">Pizza</td>
									<section>
										<?php

										$result = mysqli_query($connect,
											"SELECT happy.*,  product_mother.* from happy join product_mother on happy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

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
									</tr>

									<!-- PASTA -->
									<tr>
										<th scope="row">Pasta</td>

										<?php
										$result = mysqli_query($connect,
											"SELECT healthy.*,  product_mother.* from healthy join product_mother on healthy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

										$result = mysqli_query($connect,
											"SELECT happy.*,  product_mother.* from happy join product_mother on happy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

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

									<!-- POTATO -->
									<tr>
										<th scope="row">Potato</td>

										<?php

										$result = mysqli_query($connect,
											"SELECT happy.*,  product_mother.* from happy join product_mother on happy.prod_fk = product_mother.id where 1") or die("Query fail: " . mysqli_error());

										while($row = mysqli_fetch_array($result)){

											if($row["section"] == "3"){
												?>
												<td colspan="3"><div>
													<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
													<input type="radio" name="var3" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
													<label for="<?php echo $row['id']?>">
														<h9><?php echo $row["name"]?></h9>
													</label>
												</div>
											</td>
											<?php
										}
									}
									?>
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
				</div>

				<!-- HEALTHY -->
				<div class="tab-pane" id="healthy" role="tabpanel">
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
			</div>
		</div>

		<!-- TRANSACTION TABLE column-->
		<div class="col mt-2">
			<table class="table table-sm table-reflow table-bordered text-center">
				<thead class="thead-inverse">
					<tr>
						<th colspan="5" class="text-center">TRANSACTION</th>
						<th>
							<button name="remButton" class="btn btn-danger btn-sm deleteAll custom-button" id="<?php echo $row["id"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove All</button>
						</th>
					</tr>
					<tr>
						<th class="text-center">Meat</th>
						<th class="text-center">Veg</th>
						<th class="text-center">Carbs</th>
						<th class="text-center">Type</th>
						<th class="text-center">Price</th>
						<th class="text-center" width="10%">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$query = "SELECT * FROM `temp` WHERE 1";
					$results = mysqli_query($connect, $query);

					while($row = mysqli_fetch_array($results)){
						?>
						<tr>
							<td><?php echo $row["1"] ?></td>
							<td><?php echo $row["2"] ?></td>
							<td><?php echo $row["3"] ?></td>
							<td><?php echo $row["type"] ?></td>
							<td><?php echo $row["price"] ?></td>
							<td><button name="remButton" class="btn btn-outline-danger btn-sm delete custom-button" id="<?php echo $row["id"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button></td>
						</tr>
						<?php
					}
					?>
					<tr>
						<td colspan="5"></td>
						<td align="center">
							<form class="form-text" action="submit_process.php" method="post">
								<button type="submit" class="btn btn-success btn-md form-control">Submit</button>
							</form>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
	var allRadios = document.getElementsByName('var3');
	var booRadio;
	var x = 0;
	for(x = 0; x < allRadios.length; x++){

		allRadios[x].onclick = function(){

			if(booRadio == this){
				this.checked = false;
				booRadio = null;
			}else{
				booRadio = this;
			}
		};

	}
</script>
<script type="text/javascript">
	var allRadios = document.getElementsByName('var2');
	var booRadio;
	var x = 0;
	for(x = 0; x < allRadios.length; x++){

		allRadios[x].onclick = function(){

			if(booRadio == this){
				this.checked = false;
				booRadio = null;
			}else{
				booRadio = this;
			}
		};

	}
</script>
<script type="text/javascript">
	var allRadios = document.getElementsByName('var1');
	var booRadio;
	var x = 0;
	for(x = 0; x < allRadios.length; x++){

		allRadios[x].onclick = function(){

			if(booRadio == this){
				this.checked = false;
				booRadio = null;
			}else{
				booRadio = this;
			}
		};

	}
</script>
<script type="text/javascript">
	var allRadios = document.getElementsByName('type');
	var booRadio;
	var x = 0;
	for(x = 0; x < allRadios.length; x++){

		allRadios[x].onclick = function(){

			if(booRadio == this){
				this.checked = false;
				booRadio = null;
			}else{
				booRadio = this;
			}
		};

	}
</script>
<script type="text/javascript">
	$(document).ready(function(data){
		$('.add_to_cart').click(function(){

			location.reload(true);
			var var1 = $("input[name=var1]:radio:checked").val();
			var var2 = $("input[name=var2]:radio:checked").val();
			var var3 = $("input[name=var3]:radio:checked").val();
			var type= $("input[name=type]:radio:checked").val();
			var action = "add";

			$.ajax({
				url:"add_to_cart.php",
				method:"POST",
				dataType:"json",
				data:{
					var1:var1,
					var2:var2,
					var3:var3,
					type:type,
					action:action
				},
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(data){
		$(document).on('click', '.delete', function(){
			location.reload(true);
			var id = $(this).attr("id");
			var action = "remove";
			if(confirm("Are you sure you want to remove the item?")){
				$.ajax({
					url:"add_to_cart.php",
					method:"POST",
					dataType:"json",
					data:{
						id:id,
						action:action
					},
					error: function(xhr, status, error) {
						return error;
					},
				});
			}

		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(data){
		$(document).on('click', '.deleteAll', function(){
			location.reload(true);
			var id = $(this).attr("id");
			var action = "removeAll";
			if(confirm("Are you sure you want to clear the cart?")){
				$.ajax({
					url:"add_to_cart.php",
					method:"POST",
					dataType:"json",
					data:{
						id:id,
						action:action
					},
				});
			}

		});
	});
</script>
</body>
</html>
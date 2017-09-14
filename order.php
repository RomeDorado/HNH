<?php $connect = mysqli_connect("localhost","root","","healthy_corner");
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>TITLE</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css1/CSS.css" type="text/css" />

	<script src="css1/jquery.min.js"></script>
	<script src="css1/bootstrap.min.js"></script>

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


@media only screen and (max-width: 700px) {
  section {
    flex-direction: column;
  }
}

</style>

<body>
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-sm-12"><h1 class="header">HEALTHY CORNER</h1></div>
			<div class="clearfix"></div>
		</div>

		<div class="row">
			<!-- MENU -->
			<div class="col-lg-7">
				<div class="card">
					<h5 class="card-title"><u>Type</u></h5>
					<div class="row justify-content-center ">
						<div class="row">
							<section>
							<div>
							  <input type="radio" id="control_01" name="type" value="MCV">
							  <label for="control_01">
							    <h9>MCV</h9>
							  </label>
							</div>
							<div>
							  <input type="radio" id="control_02" name="type" value="MC">
							  <label for="control_02">
							    <h9>MC</h9>
							  </label>
							</div>
							<div>
							  <input type="radio" id="control_03" name="type" value="MV">
							  <label for="control_03">
							    <h9>MV</h9>
							  </label>
							</div>
							<div>
							  <input type="radio" id="control_04" name="type" value="AC">
							  <label for="control_04">
							    <h9>AC</h9>
							  </label>
							</div>
							</section>
						</div>
					</div>

					<h4 class="card-header">Menu</h4>
					<div class="card-block">
						<h5 class="card-title"><u>Meat</u></h5>
						<div class="row justify-content-center ">
							<div class="row">
								<section>
								<?php

						      $query = "SELECT * FROM `product_mother` WHERE 1";
						      $results = mysqli_query($connect, $query);

						      while($row = mysqli_fetch_array($results)){
						          if($row["section"] == "MEAT"){
						          ?>
											<div>
												<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
												<input type="radio" name="meat" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
											  <label for="<?php echo $row['id']?>">
											    <h9><?php echo $row["name"]?></h9>
											  </label>
											</div>
						          <?php
						        }
						      }
						      ?>
								</section>
								<!-- <div class="col-lg"><a href="#" class="btn btn-primary">Chicken</a></div>
								<div class="col-lg"><a href="#" class="btn btn-primary">Beef</a></div>
								<div class="col-lg"><a href="#" class="btn btn-primary">????</a></div>
								<div class="col-lg"><a href="#" class="btn btn-primary">Etc.</a></div> -->
							</div>
						</div>


						<br><br><br>
						<h5 class="card-title"><u>Vegetable</u></h5>
						<div class="row justify-content-center ">
							<div class="row">
								<section>
								<?php

						      $query = "SELECT * FROM `product_mother` WHERE 1";
						      $results = mysqli_query($connect, $query);

						      while($row = mysqli_fetch_array($results)){
						          if($row["section"] == "VEG"){
						          ?>
											<div>
												<input type="hidden" name="name" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
												<input type="radio" name="veg" id="<?php echo $row['id']?>" value="<?php echo $row['name']?>">
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

						<br><br><br>
						<h5 class="card-title"><u>Rice</u></h5>
						<div class="row justify-content-center ">
							<div class="row">
								<section>
								<?php
						      $query = "SELECT * FROM `product_mother` WHERE 1";
						      $results = mysqli_query($connect, $query);

						      while($row = mysqli_fetch_array($results)){
						          if($row["section"] == "RICE"){
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
						<br><br><br>

					</div>
				</div>
			</div>

<button type="button" name="button" class="add_to_cart">Add to Cart</button>

			<!-- TRANSACTION TABLE -->
			<div class="col-lg-7">
				<div class="card">
					<h4 class="card-header">Transaction <button name="remButton" class="btn btn-danger btn-xs deleteAll custom-button" id="<?php echo $row["id"]; ?>">Remove All</button></h4>
					<div class="card-block">
						<table>
							<tr>
								<th>Meat</th>
								<th>Veg</th>
								<th>Carbs</th>
								<th>Type</th>
								<th>Price</th>
								<th>Action</th>
							</tr>

								<?php
						      $query = "SELECT * FROM `temp` WHERE 1";
						      $results = mysqli_query($connect, $query);

						      while($row = mysqli_fetch_array($results)){
						          ?>
											<tr>
											<td><?php echo $row["meat"] ?></td>
											<td><?php echo $row["veggies"] ?></td>
											<td><?php echo $row["carbs"] ?></td>
											<td><?php echo $row["type"] ?></td>
											<td><?php echo $row["price"] ?></td>
											<td><button name="remButton" class="btn btn-danger btn-xs delete custom-button" id="<?php echo $row["id"]; ?>">Remove</button></td>
											</tr>
						          <?php
						      }
						      ?>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form class="" action="submit_process.php" method="post">
		<input type="submit" name="" value="submit">
	</form>
</body>
<script type="text/javascript">
var allRadios = document.getElementsByName('rice');
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
var allRadios = document.getElementsByName('veg');
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
var allRadios = document.getElementsByName('meat');
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
		var meat = $("input[name=meat]:radio:checked").val();
		var veg = $("input[name=veg]:radio:checked").val();
		var rice = $("input[name=rice]:radio:checked").val();
		var type= $("input[name=type]:radio:checked").val();
		var action = "add";
			$.ajax({
				url:"add_to_cart.php",
				method:"POST",
				dataType:"json",
				data:{
					meat:meat,
					veg:veg,
					rice:rice,
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

</html>

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

	<title>Register</title>
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
				<li class="nav-item active">
					<span class="nav-link" href="restock.php">Register Account <span class="sr-only">(current)</span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="employee_logs.php">Products</a>
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
				<h1 class="display-4">Register</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col">
				<form action="" method="post" class="form-horizontal" role="form">
					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);														
					$_SESSION['message'] = '';
					$dbhandle = mysql_connect('localhost', 'root', '');

					$selected = mysql_select_db("healthy_corner", $dbhandle);

					if(isset($_POST['username']) && isset($_POST['password'])){
						if($_POST['password']==$_POST['confirmpassword']){
							$user = $_POST['username'];
							$pass = $_POST['password'];														
							$query = mysql_query("SELECT * FROM table_login WHERE username ='$user'");
							if(mysql_num_rows($query) > 0){
								$_SESSION['message'] = "There is already a user with that username";
								echo "<div class='alert alert-danger'>";
								echo "<p>". $_SESSION['message'] . "</p>";
								echo "</div>";
							}
							else{		                                                                
								$password = password_hash($pass, PASSWORD_DEFAULT, ['cost => 12']);														
								mysql_query("INSERT INTO table_login (id, username, password) VALUES (null, '$user', '$password')");
								$_SESSION['message'] = "New account created";
								echo "<div class='alert alert-success'>";
								echo "<p>". $_SESSION['message'] . "</p>";
								echo "</div>";																	
							}
						}else{
							$_SESSION['message'] = "Passwords did not match";
							echo "<div class='alert alert-danger'>";
							echo "<p>". $_SESSION['message'] . "</p>";
							echo "</div>";
						}
					}
					mysql_close($dbhandle);
					?>

					<div class="form-group">
						<label for="username" class="col-md-3 control-label">Username:</label>
						<div class="col-md-9">
							<input type="text" placeholder="User Name" name="username" class="form-control" required />
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-md-3 control-label">Password:</label>
						<div class="col-md-9">
							<input type="password" id="txtNewPassword" onChange="checkPasswordMatch();" placeholder="Password" name="password" class="form-control" required />
						</div>														
					</div>
					<div class="registrationFormAlert" id="divCheckPasswordMatch">
				<!--call id -->
					</div>

					<div class="form-group">
						<label for="confirmpassword" class="col-md-3 control-label">Confirm Password:</label>
						<div class="col-md-9">
							<input type="password" id="txtConfirmPassword" onChange="checkPasswMatch();" placeholder="Confirm Password" class="form-control" name="confirmpassword" required />
						</div>
					</div>
					<div class="registrationFormAlert" id="divCheckPasswMatch">

					</div>																									

					<input type="submit" id="btnsub" onClick="a()" value="Register" name="register" class='btn btn-md btn-success' onClick="return confirm('Are you sure you want to register new account?');"/><br><br>	

				</form>	
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="CSS/bootstrap.min.js"></script>

</body>
</html>

<script>
	$(document).ready(function() {
		if (location.hash) {
			$("a[href='" + location.hash + "']").tab("show");
		}
		$(document.body).on("click", "a[data-toggle]", function(event) {
			location.hash = this.getAttribute("href");
		});
		
		
	});

	$(window).on("popstate", function() {
		var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
		$("a[href='" + anchor + "']").tab("show");
	});
	

	$(function() {
    // Load all the dropdowns
    $('[id^=select]').html($('.template').html());
    // This array Holds the Objects
    var arr = ['select1', 'select2'];
    // Declare a array where you store the selections
    var arrSelect = {
    	'select1': '0',
    	'select2': '0',        
    };

    $('select').on('change', function() {
    	var currID = $(this).prop('id');
        // Set the Current selection
        arrSelect[currID] = $(this).val();
        // Iterate Thru each dropdown 
        $.each(arr, function(i) {
        	var temp = arrSelect[arr[i]];
            // Clone the template
            var $clone = $('.template').clone();
            // Remove Questions from template based on selected
            // values in other select's
            $.each(arrSelect, function(index, value) {
            	if (value != 0 && value != temp) {
            		$clone.find('option[value=' + value + ']').remove();
            	}
            });
            // If not Current select rewrite its 
            // contents of the select
            if (arr[i] != currID) {
                //console.log('#' + arr[i] + ' :: ' + $clone.html());
                $('#' + arr[i]).html('').html($clone.html());
                $('#' + arr[i]).val(temp);
            }
        });			

        var first = $("#select1 :selected").text(); 
        var second = $("#select2 :selected").text(); 
        $('#se1').append(first);
        $('#se2').append(second);

    });


});

	function a(){
		var e = document.getElementById("select1");
		var f = document.getElementById("select2");
		var strUser = e.options[e.selectedIndex].text;
		var strUser1 = f.options[e.selectedIndex].text;
		document.getElementById('se1').value = strUser;
		document.getElementById('se2').value = strUser1;
	}

	function checkPasswordMatch() {
		var password = $("#txtNewPassword").val();
		var confirmPassword = $("#txtConfirmPassword").val();
		var pass = password.length;
		if (pass > 8){
        //$("#divCheckPasswordMatch").html("Password is too short!");

        if(password.match(/\d/) && password.match(/[a-zA-Z]/) && password.match(/\W/)){
        	$("#divCheckPasswordMatch").html("<i>Strong password</i></font>");

        } else

        $("#divCheckPasswordMatch").html("<strong>Password must contain 1 special character and 1 number</strong>");

    }
    else
    	$("#divCheckPasswordMatch").html("<strong>Password is too short!</Strong>");
}

function checkPasswMatch(){
	
	var password = $("#txtNewPassword").val();
	var confirmPassword = $("#txtConfirmPassword").val();

	if (password != confirmPassword)
		$("#divCheckPasswMatch").html("<strong>Passwords do not match!</strong>");
	else
		$("#divCheckPasswMatch").html("<i>Passwords match.</i>");
	
}

$(document).ready(function () {
	$("#txtNewPassword").keyup(checkPasswordMatch);
	$("#txtConfirmPassword").keyup(checkPasswMatch);
});




</script>
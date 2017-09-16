<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Admin View</title>
		<script src="css3.css"></script>

		<link href="CSS/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/home.css" >
	</head>
	<body>
		<div class="container-fluid" style="padding-top: 10px;">
			<div class="row">
				<div class="col-sm-2 text-left">
				</div>
				<div class="col-sm-1 col-sm-offset-9">
					<form action="logout.php">
						<button name="" class="btn btn-danger btn-xs"
							onClick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="row" style="margin-top: 10px;">
				<div class="col-sm-12">
					<div class="col-sm-12" style="margin-top: -1%"><h1 class="header"><img src="images/header.png"></h1></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-left">
				<li><a href="adm.php">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li><a href="admprices.php">Prices</a></li>
				<li class="active"><a href="admacc.php">Account Management</a></li>
				<li><a href="addprodingr.php">Products</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active" style="height: 480px; overflow-y: auto; margin:0 0 0 15px; ">

					<ul class="nav nav-pills nav-stacked col-md-2 affix">
						<li class="active"><a data-toggle="tab" href="#create">Create New
								Account</a></li>
					</ul>

					<div class="tab-content white-bg col-md-10 col-md-offset-2">
						<div id="create" class="tab-pane fade in active">
							<div class="row center-block" style="width: 100%;">
								<div class="col-sm-11" style="margin: 0 auto; float: none;">
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">Create New Account</div>
										</div>

										<div class="panel-body">
											<div class="col-md-10 center-block form-group" style="background-color:white; width:100%;">
												<form action="" method="post" class="form-horizontal" role="form">
													<?php
														// error_reporting(E_ALL ^ E_DEPRECATED);
														$_SESSION['message'] = '';
														$dbhandle = mysql_connect('localhost', 'root', '' , 'HNH');
														$selected = mysql_select_db("HNH", $dbhandle);

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
														</div>

													<div class="form-group">
														<label for="confirmpassword" class="col-md-3 control-label">Confirm Password:</label>
														<div class="col-md-9">
															<input type="password" id="txtConfirmPassword" onChange="checkPasswMatch();" placeholder="Confirm Password" class="form-control" name="confirmpassword" required />
														</div>
													</div>
													<div class="registrationFormAlert" id="divCheckPasswMatch">
													</div>

													<input type="submit" id="btnsub" onClick="a()" value="Register" name="register" class='btn btn-md btn-success' onClick="return confirm('Are you sure you want to register new account?');"/>

														</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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
         $("#divCheckPasswordMatch").html("Strong password");

         } else

         $("#divCheckPasswordMatch").html("Password must contain 1 special character and 1 number");

    }
    else
        $("#divCheckPasswordMatch").html("Password is too short!");
}

function checkPasswMatch(){

	var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswMatch").html("Passwords match.");

}

$(document).ready(function () {
   $("#txtNewPassword").keyup(checkPasswordMatch);
   $("#txtConfirmPassword").keyup(checkPasswMatch);
});




</script>

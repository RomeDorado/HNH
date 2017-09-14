<?php

//connection
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"healthy_corner");

//initializations
$username = strip_tags(htmlentities(mysqli_escape_string($connection, $_POST['username'])));
$password = strip_tags(htmlentities(mysqli_escape_string($connection, $_POST['password'])));

//uncomment this to create a hashed password
//echo password_hash('testuserpass', PASSWORD_DEFAULT, ['cost => 12']);

//queries
$sql = "select * from table_login where username = '$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);

//validation
 $verify = password_verify($password, $row['password']);

 if( $verify == 1 && $username == 'admin' ){

    header("Location: Admin_page.php");
 }
else if ($verify == 1){

    header("Location: menu_page.php");

}
   
  else {

     echo "<center><font color='red'>Incorrect username/password!</font></center>";
	 include('Login_Module.php');

 }

?>

<!DOCTYPE html>
<!-- DI KO MAAYOS YUNG FOOTER PAG MALIIT NA SIZE -->
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link href="bootstrap.min.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">
        <title>Login Page</title>

    </head>

    <!-- script imports -->

    <script src="css/jquery.min.js"></script>
    <script src="css/bootstrap.min.js"></script>

    <body>

        <hr class="featurette-divider">
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-6">
                    <h2 class="featurette-heading">Happy N Healthy. <span class="text-muted">   Point of Sale System</span></h2>
                    <img class="img-responsive center-block" src="BOTTOM.png" alt="HNH Logo">
                </div>
                <div class="col-md-5">

                    <form action="Login_Process_Module.php" class="form-signin" method="post" id="formid">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="text" id="user" name="username"    class="form-control" placeholder="username"onkeypress="capLock(event)"  required autofocus>
                        <input type="password" id="pass" name = "password" class="form-control" placeholder="password" onkeypress="capLock(event)" required autofocus>
                        <div id="divMayus" style="visibility:hidden">Caps Lock is ON.</div>
                        <a href="register.php">Sign up</a><br/><a href="forgotpass.php">Forgot password?</a><br/>
                        <button class="button btn-block" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Copyright &copy; 2017 Happy N Healthy</p>
            </div>
        </footer>

    </body>


    <!-- javascripts -->
<script language="Javascript">
function capLock(e){
 kc = e.keyCode?e.keyCode:e.which;
 sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
  document.getElementById('divMayus').style.visibility = 'visible';
 else
  document.getElementById('divMayus').style.visibility = 'hidden';
}
</script>

</html>

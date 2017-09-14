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
                    <h2 class="featurette-heading">The Healthy Corner. <span class="text-muted">   Point of Sale System</span></h2>
                    <img class="img-responsive center-block" src="THC.png" alt="THC Logo">
                </div>
                <div class="col-md-5">

                    <form action="Login_Process_Module.php" class="form-signin" method="post" id="formid">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="text" id="user" name="username"    class="form-control" placeholder="username" required autofocus>
                        <input type="password" id="pass" name = "password" class="form-control" placeholder="password" required autofocus>
                        <div id="capslockdiv">
                            Caps lock is on
                        </div>
                        <a href="register.php">Sign up</a><br/><a href="forgotpass.php">Forgot password?</a><br/>
                        <button class="button btn-block" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Place sticky footer content here.</p>
            </div>
        </footer>

    </body>


    <!-- javascripts -->

    <script>
        $(document).ready(
                function () {
                    check_capslock_form($('#formid')); //applies the capslock check to all input tags
                }
        );

        document.onkeydown = function (e) { //check if capslock key was pressed in the whole window
            e = e || event;
            if (typeof (window.lastpress) === 'undefined') {
                window.lastpress = e.timeStamp;
            }
            if (typeof (window.capsLockEnabled) !== 'undefined') {
                if (e.keyCode == 20 && e.timeStamp > window.lastpress + 50) {
                    window.capsLockEnabled = !window.capsLockEnabled;
                    $('#capslockdiv').toggle();
                }
                window.lastpress = e.timeStamp;
                //sometimes this function is called twice when pressing capslock once, so I use the timeStamp to fix the problem
            }

        };

        function check_capslock(e) { //check what key was pressed in the form
            var s = String.fromCharCode(e.keyCode);
            if (s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey) {
                window.capsLockEnabled = true;
                $('#capslockdiv').show();
            } else {
                window.capsLockEnabled = false;
                $('#capslockdiv').hide();
            }
        }

        function check_capslock_form(where) {
            if (!where) {
                where = $(document);
            }
            where.find('input,select').each(function () {
                if (this.type != "hidden") {
                    $(this).keypress(check_capslock);
                }
            });
        }
    </script>

</html>

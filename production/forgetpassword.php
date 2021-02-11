<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ATM Portal | Forget Password</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">xyz</h1>

            </div>
			<hr />
            <h3>Forget Password to ATM Portal</h3>
            <hr />
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="yes">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="yes">
                </div>
             
                <button type="submit" class="btn btn-primary block full-width m-b">Reset My Password</button>

                <a class="btn btn-sm btn-white btn-block" href="login">Login</a>
            </form>
            <p class="m-t"> <small>©2020 All Rights Reserved. Developed by Zulfikar Ali. <br />Privacy and Terms</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>

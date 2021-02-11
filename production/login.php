<!DOCTYPE html>
<html>

<?php
	include_once ('includes/db_config.php');
	
	$db = new db_config();
    $conn = $db->dbCon();
	
	session_start();
	
	$error1 = "Invalid Username or Password !";
	$error2 = " You are de-activated to login into the system. <br /> &nbsp;&nbsp;&nbsp;&nbsp; 
				Please contact system administrator!";
	
	$error3 = "You aren't registered into the system. <br /> &nbsp;&nbsp;&nbsp;&nbsp; 
				Please contact system administrator!";
	$error4 = "Bad Attempt: &nbsp;&nbsp; You have been terminated from the system. <br /> 
			   So no longer you're allowed to login into the system!";
			   
	$sign = 1;
	
	$uname = $pass = $userActive = "";
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Username and Password sent from Form

		$username = mysqli_real_escape_string($conn, $_POST['txtUser']);
		$password = mysqli_real_escape_string($conn, $_POST['txtPass']);
		$password = md5($password);
		
		$sql = "SELECT * FROM `useraccount` WHERE `username` = '$username' AND password = '$password'";
		
		$query = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($query))
		{
			$uname = $row['username'];
			$pass = $row['password'];
			$user_id_logged = $row['useracc_id'];
			$user_employerId = $row['emp_id'];			
			$privileges = $row['privileges'];
			$userActive = $row['user_active'];
			
			$_SESSION['user'] = $uname;
			$_SESSION['level'] = $privileges;
			$_SESSION['userid'] = $user_id_logged;  
			
			$sql_emp = "SELECT * FROM employer WHERE emp_id ='$user_employerId'";
				$result_emp = mysqli_query($conn, $sql_emp);
				
			while($row_emp = mysqli_fetch_assoc($result_emp))
			{
				$employerActive = $row_emp['emp_active'];
			}

			if($employerActive == 1)
			{
				if($username == $uname && $password == $pass)
				{
					//If result match $username and $password Table row must be 1 row
					
					if($userActive == 1){
						header("Location: dashboard");
					}
					else if($userActive == 0)
						$sign = 2;
				}
				else
					$sign = 1;
			}
			else 
				$sign = 4;
		}	
	}
	else{
		$sign = 0;
	}
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ATM Portal | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="16x16" href="img/atm_logo/atm_logo_white.png">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">MOti </h1>

            </div>
			<hr />  
            <h3><img alt="image" style="width: 36px;" src="img/atm_logo/atm_logo.png">Welcome to ATM Portal</h3>
            <hr />
			
			<?php
				if($sign == 0)
				{
					echo "<h4 class=\"font-weight-light\"><i>Sign in to start your session!</i></h4>";
				}
				
				if($sign == 1)
				{
					echo "
						<div style='background-color: #F2F5A9; padding: 8px 3px 8px 25px; border-radius: 10px; border: 1px solid #d98880;'>
							<i class='fa fa-exclamation-triangle'></i>
							<b style='font-size: 12px; color: #a93226;'>Alert: &nbsp;&nbsp; $error1 <hr /> $error3</b>
						</div>
					";
				}
				
				if($sign == 2)
				{
					echo "
						<div style='background-color: #fadbd8; padding: 8px 3px 8px 25px; border-radius: 10px; border: 1px solid #d98880;'>
							<i class='fa fa-exclamation-triangle'></i>
							<b style='font-size: 12px; color: #a93226;'>Alert: &nbsp;&nbsp; $error2 </b>
						</div>
					";
				}
				
				if($sign == 4)
				{
					echo "
						<div style='background-color: #fadbd8; padding: 8px 3px 8px 25px; border-radius: 10px; border: 1px solid #d98880;'>
							<i class='fa fa-exclamation-triangle'></i>
							<b style='font-size: 12px; color: #a93226;'> $error4 </b>
						</div>
					";
				}
			?>
			
            <form class="m-t" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="forgetpassword"><small>Forgot password?</small></a>
                
            </form>
            <p class="m-t"> <small>©2020 All Rights Reserved. Developed by Zulfikar Ali. <br />Privacy and Terms</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>

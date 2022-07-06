<?php
	$err = '';
	session_start();

    if (isset($_POST['login'])) {
		
        include ('include/connection.php');

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
		
		if(empty($username) || empty($password)){
			
			$err = "Username or password can't be empty";
			
		}else if($username == "SenitaI" & $password == "09121998"){
            header("Location: loginAdmin.php");
        } else{
			
			$sql = "SELECT * FROM users WHERE username='$username' AND password ='$password'";
			$result = mysqli_query($conn, $sql);
			//$resultCheck = mysqli_num_rows($result);
			
			$row = mysqli_fetch_assoc($result);

			
			if(isset($row)){
				header("Location: loggedIn/index.html");
				
			} else {
				$err = "Username or password incorrect!";
			}
			
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/stylelogin.css"> 
    <title>Coffe Station</title>
    <link rel="shortcut icon" href="images/coffeeStationLogo.png" type="image/x-icon">


</head>
<body style="background-image: url('images/coffeBackground.jpg');">
    <div class="login-form">
       
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"  style="background-color:#CDA174;">
            <h2 align="center">Login</h2>
			<p class="error"><?php echo $err; ?></p>
            <div class="form-group">
                <label>Username</label><input type="text" name="username" style="background-color: #EADECE;" />
            </div>
            <div class="form-group">
                <label>Password</label><input type="password" name="password" style="background-color: #EADECE;" />
            </div>
            <div class="form-group>">
                <input type="submit" name="login" class="login-button" value="Login" style="background-color:#EADECE; border: 1px solid black; background-color: #45423D;">
                <br>
                <p style="margin-left: 175px; text-color: #EADECE; "><a href="notLoggedIn/index.html" style ="color: #45423D; ">Login as a guest</a></p>
            </div>
            <p>Don't have account? <a href="register.php" style ="color: #45423D; ">Register now</a></p>
        </form>
    </div>
</body>
</html>
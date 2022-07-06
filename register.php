<?php
		$letter_err = $username_exi = $pwd_err = $empty_err = $success = $username_exi = $pwd_err = '';
		
	if(isset($_POST['register'])){
		
		include ('include/connection.php');
		
		//mysqli_real_escape_string pomaze pri sprijecavanju SQL injection-a
		
		$firstname = mysqli_real_escape_string($conn, $_POST['name']);
        $lastname = mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
		
		if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
			
			$empty_err = "All fields are required";
			
		}elseif(strlen($password) <= 5){
			
			$pwd_err = "Password must be higher than 5 characters";
			
		}elseif(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)){
			
			$letter_err = "Name or surname only have to contain letters!";
			
		}else{
			
			$sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
			
			if($resultCheck > 0){
				
				$username_exi = "Username already exists";
				
			}else{
				//Hashing the password
				//$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				
				//Insert User into the db
				$sql = "INSERT INTO users (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

				$result = mysqli_query($conn, $sql);
				
				$success = "Account successfully created";
				header("refresh:3; url=loggedIn/index.html");
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
    <link type="text/css" rel="stylesheet" href="css/stylelogin.css" />
    <title>Coffe Station</title>
    <link rel="shortcut icon" href="images/coffeeStationLogo.png" type="image/x-icon">
</head>
<body style="background-image: url('images/coffeBackground.jpg');">
<div class="login-form">

        <form action="" method="POST" style="background-color:#CDA174;">
			<p class="error"><?php echo $empty_err .' '. $pwd_err .''.$letter_err .''. $username_exi; ?></p>
            <h2 align="center">Register</h2>
			<p class="success"><?php echo $success; ?></p>
            <div class="form-group">
                <label>Name</label><input type="text" name="name" style="background-color: #EADECE;"/>
            </div>
            <div class="form-group">
                <label>Surname</label><input type="text" name="surname" style="background-color: #EADECE;" />
            </div>
            <div class="form-group">
                <label>Email</label><input type="email" name="email" style="background-color: #EADECE;"/>
            </div>
            <div class="form-group">
                <label>Username</label><input type="text" name="username" style="background-color: #EADECE;">
            </div>
            <div class="form-group">
                <label>Password</label><input type="password" name="password" style="background-color: #EADECE;"/>
            </div>
            <div class="form-group>">
                <input type="submit" name="register" class="login-button" value="Register" style="border: 1px solid black; background-color: #45423D;">
            </div>
            <p>Already have account? <a href="index.php" style ="color: #45423D; " >Login</a></p>
        </form>
    </div>
</body>
</html>
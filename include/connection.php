<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'coffeStation';

    $conn = mysqli_connect($servername, $username, $password, $database);
	
	if($conn != true){
		echo "DB ERROR";
	}

?>
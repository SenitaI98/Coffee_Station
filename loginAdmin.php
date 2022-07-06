<?php 
    include ('include/connection.php');
    $sql = "SELECT * FROM users WHERE ID =12;";
    $result = mysqli_query($conn, $sql);
    
    $users = mysqli_fetch_all($result);

    print_r($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Station</title>
    <link rel="shortcut icon" href="images/coffeeStationLogo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>         //admin

    
<body>
    <header class="header">
        <a class="logo">
            <img src="images/coffeeStationLogo.png">
        </a>
        <nav class="navbar">
            <a href="#users">Table of users</a>
        </nav>
        <div class="navbar">
            <a href="logout.php">Logout</a>
        </div>

    </header>

    <section class="info">
    <div class="table"><!--  table-responsive Begin  -->
    
    <table class="tab"><!--  table table-bordered table-hover Begin  -->
        
        <thead class ="navtab"><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> ID: </th>
                <th> FIRSTNAME: </th>
                <th> LASTNAME: </th>
                <th> EMAIL: </th>
                <th> USERNAME: </th>
                <th> OPERATION: </th>
                
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
           
           <?php 
            
            //$customer_session = $_SESSION['email'];
            
            $get_customer = "select * from users";
            
            $run_customer = mysqli_query($conn,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            //$customer_id = $row_customer['id'];
            
        
            
            $i = 0;
            
            while($row_customer = mysqli_fetch_array($run_customer)) {
                
                $id = $row_customer['id'];
                
                $firstname = $row_customer['firstname'];
                
                $lastname = $row_customer['lastname'];
                
                $email = $row_customer['email'];
                
                $username = $row_customer['username'];
                
                

                
                //$order_status = $row_orders['order_status'];
                
                $i++;
                ?>
                
                <tr><!--  tr Begin  -->
                
                <td> <?php echo $id; ?> </td>
                <td> <?php echo $firstname; ?> </td>
                <td> <?php echo $lastname; ?> </td>
                <td> <?php echo $email; ?> </td>
                <td> <?php echo $username; ?> </td>
                <td class= "but"><form method = "post"><input type="submit" name="Yes" value="Delete" class="btn"></form></td>

                
                </tr><!--  tr Finish  -->
                <?php } 
                if(isset($_POST['Yes'])){
                    $delete_user = "delete from users where email='$email'";
        
                    $run_delete_user = mysqli_query($conn,$delete_user);
                    
                    if($run_delete_user){
                        
                        session_destroy();
                        
                        echo "<script>alert('Successfully delete account!')</script>";
                        header('Refresh: 2;');
                        
                        //echo "<script>loginAdmin.php.reload();</script>";
                        
                    }
                }
 
                ?>
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
    
</div><!--  table-responsive Finish  -->

</body>
</html>

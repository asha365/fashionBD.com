<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Asset/css/style.css">
    <title>Login</title>
    <style>
        
/*------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/
/*--------------------------login area start----------------------------------------------------------------*/
/*----------------------------------------------------------------------------*/
/*------------------------------------------------------------------------*/
/*--------------------------------------------------------------------*/
/*----------------------------------------------------------*/


.full-area{
    margin-top: 120px;
}


.login-area{
    padding: 40px;
    border-radius: 10px;
    box-shadow: 5px 5px 10px gray;
}



/*------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/
/*--------------------------Login area end----------------------------------------------------------------*/
/*----------------------------------------------------------------------------*/
/*------------------------------------------------------------------------*/
/*--------------------------------------------------------------------*/
/*----------------------------------------------------------*/
    </style>
</head>
<body>
<div class="container">
<div class="col-md-12 row">
    <div class="col-md-2"></div>
    <div class="col-md-8 full-area">
        <div id="login-area">
            
        <h1 class="text-center">Welcome to Fashion BD</h1>
        <h4>Login</h4>
        <?php
                require('db.php');

                if(isset($_POST['username']) && isset($_POST['password'])){
                 $username = $_POST['username'];
                $password = $_POST['password'];

                if(!empty($username) && !empty($password)){
                    $sql = "SELECT id FROM users WHERE username = '$username' and password='$password'";
                    $sql_query = mysqli_query($con, $sql);

                    $mysqli_num_rows = mysqli_num_rows($sql_query);

                    if($mysqli_num_rows){
                        header('location:login.php');
                       // echo "login successful";
                    }
                    else{
                        echo 'invalid username or password';
                    }


                }else{
                    echo "fil up all fields";
                }

                }
            
            ?>
            <form action="login.php" method="POST">
                    username: <input type="text" name="username" class="form-control" placeholder="Username">
                    <br>
                    password: <input type="password" name="password" class="form-control" placeholder="Password" >
                    <br>
                    <button id="btn" type="submit" value="Login" class="btn btn-success">Login</button>
            </form>
        </div>

    </div>
    <div class="col-md-2"></div>
</div>
  
   
</body>


</html>
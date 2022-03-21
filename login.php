<?php 
//registration form
	session_start();
	$db = new mysqli("localhost","root","","sign_up");

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$query = "INSERT INTO user_info(username, password, email) VALUES ('$username' , '$password', '$email')";
		$run = mysqli_query($db, $query);

		if($run){
			echo "Registration successful.!";
           
		}else{
			echo "error".mysql_error($db); 
		}
	}

	if(isset($_POST['login'])){
		$username = $_POST['lusername'];
		$password = $_POST['lpassword'];

		$mysqli = new mysqli("localhost","root", "", "sign_up");
		$result = $mysqli->query("SELECT * FROM user_info WHERE username = '$username' AND password='$password' ");
		$row = $result->fetch_assoc();

		if($row['username'] == $username && $row['password'] == $password){
			$message = "Login successful.!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
			$message1 = "Login Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/background-image.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
    color: orange;
}

.login-page{
    width: 360px;
    padding: 10% 0 0;
    margin: auto;
} 
.form{
    position: relative;
    z-index: 1;
    background: #ADADAD;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
}




.form input{
    font-family: 'Roboto', 'sans-serif';
    outline: 1;
    background-color: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    cursor: pointer;
}
.form .message{
    margin: 15px 0 0;
    color: #333333;
    font-size: 18px;
}
.form .message a{
    color: blue;
    text-decoration: none;
}
.form .register-form{
    display: none;
}
    </style>
    </head>
<body>
    <div class="login-page">
        <div class="form">
               <form action="login.php" method="post" class="register-form">
                   <input type="text" name="username" id="" placeholder="user name">
                   <input type="password" name="password" id="" placeholder="password">
                   <input type="text" name="email" id="" placeholder="email">
                   <button name="submit" class="btn btn-success">Create</button>
                    <p class="message">Already registered? <a href="#" >Login</a></p>
               </form>

               <form action="login.php" method="post" class="login-form">
                    <input type="text" name="lusername" id="" placeholder="user name">
                    <input type="password" name="lpassword" id="" placeholder="password">
                    <button name="login" class="btn btn-success">Login</button>
                    <p class="message">Not registered? <a href="#">Register</a></p>
               </form>
        </div>
    </div>

<!---js link--->
    <script src='http://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstarp.min.js"></script>
	<script src="js/custom.js"></script>

    <script>
        $('.message a').click(function(){
            $('form').animate({hight: "toggle",opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>
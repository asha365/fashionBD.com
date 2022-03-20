<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "ecommerce_website";

    $conn = mysqli_connect($host,$user,$password,$db);

?>



<?php

     $hostname = 'localhost';
     $username = 'root';
     $userpass = '';
     $dbname = 'users-login';

     $con = mysqli_connect($hostname,$username,$userpass) or die('database connection error');
     mysqli_select_db($con,$dbname);

?>
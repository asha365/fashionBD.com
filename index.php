<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fashionBD.com</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/gif/png" href="images/logo/icon.png">
    <style>
        *{
            font-family: Verdana;   
        }
        
    
        .main{
        background-color: #333333;
        width: 80%;
        margin-left: 90px;
        height: 35px;
     
            }
        .menu a{ 
        color: #fff;
        text-decoration: none;
        padding:0px 40px; 
        font-size:13px;	 
        font-weight:bold;
             }
        .logo,  img{
            height: 35px;
            width: 50px;
            margin-left: -80px;
        }

        .menu a:hover{
        color: orange;
         }
         .body-section{
             width: 280px;
             height: 415px;
             border: 1px solid #BDC3BF;
             float: left;
             margin-left: 15px;
             margin-top: 15px;
         }
         .body-section img{
            width: 200px;
            height: 230px;
            margin-left:50px;
            
         }
          #product-head, p{
            background-color: #FE649E;
            color: #fff;
            text-align: center;
            font-weight: bold;
            font-size:18px;
            padding: 5px;
         }
         .price, h6{
             margin-left: 50px;
             color: #1E1E1E;
             margin-top: 5px;
             font-size: 17px;
         }
         #quantity{
             width: 160px;
             margin-left: 50px;
             border-radius: 7px;
             padding: 5px;
             border: 1px solid black;
         }
         #submit{
             margin-top: 5px;
         }
         #button{
             width: 120px;
             height: 30px;
             margin-top: 10px;
            margin-left: 10px;
         }
         #button{
           background-color: #007ACC;
           border: 1px solid #007ACC;
           color: white;
           outline: none;
           text-align: center;
         }
         #button:hover{
             background-color: #FE649E;
         }
         


    </style>
</head>
<body>
    <div class="main container">
    <ul class="menu">
            <a href="#">
                <img class="logo" src="images/logo/icon.png" alt="n/a">
            </a>
            <a href="#home.html">Home</a>
            <a href="#product.html">Product</a>
            <a href="#about.html">About Us</a>
            <a href="#Details.html">Details</a>
            <a href="#contact.html">Contact</a>
           
    </ul>
    </div>

    <div class="container body-content">
    <?php
            include 'db.php';
            $sql = "SELECT * from products";
            $query = mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($query)){
        ?>

        <div class="body-section">
            <p id="product-head"><?php echo $info['product_name'] ?></p>
            <img src="images/products/<?php echo $info['product_image']; ?>" alt="n/a">
            <h6 class="price">Price: <?php echo $info['product_price']; ?></h6>
            <form class="" action="index.php" method="post"> 
                <input id="quantity" type="number" name="quantity" value="" placeholder="Enter Quantity" required>
                
                <input  id="button" type="submit" value="Add to Cart" name="add_to_cart">
                <input id="button" type="buy_now" value="Buy Now" name="buy_now">
        </div>

        <?php

            }
        ?>
    </div>

    </div>
</body>
</html>
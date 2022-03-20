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
</head>
<body>
    <div class="insert-form">
        
        <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label class="product" for="">Insert Product Name</label><br>
        <input id="product_name" type="text" name="product_name" value="" placeholder="Insert product name" required>
        <br><br>

        <label class="product_price product" for="">Insert Product price</label><br>
        <input id="product_price" type="text" name="product_price" value="" placeholder="Insert product price" required>
        <br><br>

        <label class="product" for="">Insert product details</label><br>
        <textarea name="product_details" id="product_details" cols="80" rows="20" placeholder="Insert product details" required></textarea>
        <br><br>
        <label class="product"  for="">Insert product image</label><br>  
        <input type="file" id="product_image" name="product_image" value="" required>
        <br><br>
        <input id="insert" class="btn btn-success" type="submit" name="insert" value="Insert">  
    </form>

    <?php 
        include 'db.php';
        if(isset($_POST['insert'])){
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_details = $_POST['product_details'];
            $image_name = $_FILES['product_image']['name'];
            $image_size = $_FILES['product_image']['size'];
            $image_type = $_FILES['product_image']['type'];
            $image_temp_loc = $_FILES['product_image']['tmp_name'];
            $image_store = "images/products/".$image_name;
            move_uploaded_file($image_temp_loc, $image_store);

            $sql = "INSERT INTO products(product_name, product_price, product_details, product_image) values('$product_name', '$product_price', '$product_details', '$image_name')";
            $query = mysqli_query($conn,$sql);
        }

    ?>
    </div>
</body>
</html>
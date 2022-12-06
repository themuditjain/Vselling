<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best products in the market</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

   <section class="products" id="products">
        <h1 class="heading">latest <span>products</span></h1>
        <?php
          include('C:\xampp\htdocs\Project\Vselling website 2.0\includes\db.php');
          $select_query = "select * from `products` order by rand()";
          $result_query = mysqli_query($con,$select_query);

          while($row = mysqli_fetch_assoc($result_query)){
            $product_id=$row['prod_id'];
            $product_name=$row['product_name'];
            $description = $row['description'];
            $category = $row['category'];
            $price = $row['price'];
            $pic = $row['pic'];
          echo "  <div class='box-container'>
          <div class='box'>
              <span class='discount'>$category</span>
              <div class='image'>
                  <img src='../product_images/$pic' alt='' />
                  <div class='icons'>
                      <a href='../php/product_details.php?product_id=$product_id' class='cart-btn'>buy now</a>
                  </div>
              </div>
              <div class='content'>
                  <h3>$product_name</h3>
                  <h2 style='color:#666;'>$description</h2>
                  <div class='price'>Rs.$price  </div>
              </div>
          </div>
          "  ;
        }
           ?>
    </section>
</body>
</html>

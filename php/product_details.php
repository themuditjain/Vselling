<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
        <?php
          include('C:\xampp\htdocs\Project\Vselling website 2.0\includes\db.php');
          if(isset($_GET['product_id'])){
            $product_id=$_GET['product_id'];
          $select_query = "select * from `products` where prod_id =$product_id";
          $result_query = mysqli_query($con,$select_query);

        $row = mysqli_fetch_assoc($result_query);


            $product_name=$row['product_name'];
            $description = $row['description'];
            $category = $row['category'];
            $price = $row['price'];
            $pic = $row['pic'];
            $sname = $row['sname'];
            $num = $row['num'];
            $mail = $row['mail'];
            $room = $row['room'];
          echo "   <section class='about' id='about'>
               <h1 class='heading'><span> Product </span> Details</h1>
               <div class='row'>
                       <img src='../product_images/$pic' alt='' />
                   <div class='content'>
                      <h3>$product_name</h3>
                       <h3>Description</h3>
                       <p>
                          $description
                       </p>
                       <br><br>
                           <h3>Seller Details</h3>
                       <p>
                    Seller Name: $sname <br>
                    Seller Phone number: $num <br>
                    Seller email ID : $mail
                       </p>
                                   <a href='../PaytmKit/gateway.php?product_id=$product_id' class='btn'>Payment: $price</a>
                   </div>
               </div>
           </section>
          "  ;
         }
           ?>
           <hr>
           <section class="footer" style = "background: linear-gradient(#4FA095, white);">

               <div class="box-container">

                   <div class="box">
                       <h3>locations</h3>
                       <a href="#">vellore</a>
                       <a href="#">chennai</a>
                       <a href="#">bhopal</a>
                       <a href="#">amravati</a>
                   </div>

                   <div class="box">
                       <h3>contact info</h3>
                       <a href="#">+91-9667080750</a>
                       <a href="#">aniket.aggarwal2020@vitstudent.ac.in | mudit.jain2020@vitstudent.ac.in</a>
                       <a href="#">Vellore,India - 632014</a>
                       <img src="../images/payment.png" alt="" />
                   </div>
               </div>

               <div class="credit">
                   created by <span>  Mudit Jain | Aniket Aggarwal </span> | all rights reserved © VIT, vellore
               </div>
           </section>
     </body>
     </html>

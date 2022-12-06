<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vselling-A blessing from a Vitian to a Vitian</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<section class="contact" id="contact">
     <h1 class="heading"><span> Payment</span> Gateway</h1>

     <div class="row">
          <?php
include('../PaytmKit/TxnTest.php');
           ?>

        <div class="image">
             <img src="../images/Paytm.png" alt="Paytm" />
         </div>
     </div>
 </section>
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
             <a href="#">aniket.aggarwal2020@vitstudent.ac.in</a>
             <a href="#">Vellore,India - 632014</a>
             <img src="../images/payment.png" alt="" />
         </div>
     </div>

     <div class="credit">
         created by <span>  Aniket Aggarwal </span> | all rights reserved © VIT, vellore
     </div>
 </section>
 </body>
 </html>

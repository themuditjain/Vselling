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
    <!-- header section starts  -->

    <header>
        <input type="checkbox" name="" id="toggler" />
        <label for="toggler" class="fas fa-bars"></label>

        <a href="../index.php" class="logo"> <img src="../images/logo.jpg" alt="logo" width="60px" height="60px"></a>


        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="../php/dsiplay.php">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>


        <?php
          include('C:\xampp\htdocs\Project\Vselling website 2.0\includes\db.php');
          if(isset($_GET['buyer_id'])){
            $buyer_id=$_GET['buyer_id'];
          $select_query = "select buyer_name from `buyerregistration` where buyer_id=$buyer_id";
          $result_query = mysqli_query($con,$select_query);

          $row = mysqli_fetch_assoc($result_query);
            $buyer_name=$row['buyer_name'];
          echo " <div class='icons'>
          <a href='#' class='btn2'>Hi! $buyer_name</a>


          <span>
           <a href='../auth/logout.php' class='btn'>Logout</a>
           </span>
       </div>
          "  ;
}
           ?>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <h3 class="heads">Vselling</h3>
            <span> A blessing from a Vitian <br>to Vitian </span>
            <p>
                Joining the students with a place to buy <br>& a chance to sell
            </p>
            <a href="../php/dsiplay.php" class="btn" >buy now</a> <a href="../php/sell2.php" class="btn" >sell now</a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
        <h1 class="heading"><span> about </span> us</h1>

        <div class="row">
            <div class="video-container">
                <video src="../images/about-vid.mp4" loop autoplay muted></video>
                <h3>best place to resell</h3>
            </div>

            <div class="content">
                <h3>introduction</h3>
                <p>
                    We have created this platform for the benefit of all the students and people associated with VIT.It provides a place where people can list ads of their 2nd hand products and others can buy products at a reasonable price
                </p>
                <br><br>
                    <h3>how we can help?</h3>
                <p>
                    Our core vision is to help the freshers and final years in the college.Final years leaving just have to list their ad of the product and the rest(product verification, delivery, consent exchange, money transfer) handeled by us, the freshers need all the basic essentials while entering the college, one can buy these essentials according to the condition on a reasonable price on choice.Afterwards we are hoping to extend the help to staff and other people associated to the college
                </p>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">
        <div class="icons">
            <img src="../images/icon-1.png" alt="" />
            <div class="info">
                <h3>quality assured</h3>
                <span>authenticated products only</span>
            </div>
        </div>

        <div class="icons">
            <img src="../images/icon-2.png" alt="" />
            <div class="info">
                <h3>Best Prices</h3>
                <span>Economical for student life</span>
            </div>
        </div>
        <div class="icons">
            <img src="../images/icon-4.png" alt="" />
            <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paytm</span>
            </div>
        </div>
    </section>

    <!-- icons section ends -->


    <!-- review section starts  -->

    <section class="review" id="review">
        <h1 class="heading">customer's <span>review</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                    The site helped me out getting all the essentials in my fresher year
                    at the most economical price one can ask for. All the products were
                    authenticate, in good condition and still working.
                    The communication, payment and product handing over with the seller was
                    smooth and quick.
                </p>
                <div class="user">

                    <div class="user-info">
                        <h3>Shreyans gupta</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                  Vselling helped me sell out all my stuff i used and took care during the 4 year of my graduation.
                  Thanks to this site i could sell it at a good price and help other students.The posting of my product
                  and payment recieving was super chill while i was busy with my placement preparation.
                </p>
                <div class="user">
                    <div class="user-info">
                      <h3>Shruti Jain</h3>
                      <span>happy Seller</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                  I was really confused about the where to buy all the essential stuff for college.
                  All the things were in good condition and costed me a fraction of what it will cost
                  me in the market.It saved me hell lot of money and is promoting reusing for the betterment of environment.
                </p>
                <div class="user">
                    <div class="user-info">
                        <h3>Anmol Das</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>
    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
        <h1 class="heading"><span> contact </span> us</h1>

        <div class="row">
              <?php
 include('../php/contact.php');
              ?>

            <div class="image">
                <img src="../images/contact-img.webp" alt="" />
            </div>
        </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">
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

    <!-- footer section ends -->
</body>

</html>

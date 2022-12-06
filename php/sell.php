<?php
include('C:\xampp\htdocs\Project\Vselling website 2.0\includes\db.php');
if(isset($_POST['sell'])){
  $product_name=$_POST['product_name'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $pic = $_FILES['pic']['name'];
 $temp_pic = $_FILES['pic']['tmp_name'];
  $sname = $_POST['sname'];
  $num = $_POST['num'];
  $mail = $_POST['mail'];
  $room = $_POST['room'];

  //move_uploaded_file($temp_pic,"./product_images/$pic");
//insert QUERY
  $insert_products = "insert into `products` (product_name,description,category,price,pic,sname,num,mail,room)
  values('$product_name','$description','$category','  $price','$pic','$sname','$num','$mail','$room')";
  $result_query = mysqli_query($con,$insert_products);
  if($result_query)
  {
    echo "<script>alert('Succesfully inserted the product')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
      line-height: 1.5;
      color: #333;
      background-color: #fff;}
  </style>
  <body>

<center>

      <div class="container">
        <div class="title"> Post Your Product        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <!-- Post Your ad start -->
          <fieldset>

            <div class="row">

              <div class="input-box">
                <h6 class="details">Title Of Product:</h6>
                <input type="text" name="product_name" placeholder="Enter Product name here" required>
              </div>
              <div class="input-box">
                <h6 class="details">Description:</h6>
                <input type="text" name="description"
                  placeholder="Write details about your product" required/>
              </div>
              <div class="input-box">
                <h6 class="details">Select Ad Category:</h6>
                <select name="category">
                  <option value="-1">Choose</option>
                  <option value="1">Mattress</option>
                  <option value="2">Pillows</option>
                  <option value="3">Basketball</option>
                  <option value="4">Bucket</option>
                  <option value="5">Electric Kettle</option>
                  <option value="6">Blanket</option>
                  <option value="7">Football</option>
                  <option value="8">Mugs</option>
                  <option value="9">Iron</option>
                  <option value="10">Racket</option>
                </select>
                    </div>
                  <div class="input-box">
                  <h6 class="details">Item Price (Rs INR):</h6>
                      <input type="text" name="price" placeholder="Price"/>
                    </div>

                <div class="input-box">
                  <label class="details">file-upload <br>
                    <span>Drop files anywhere to upload</span>
                    <span>or</span>
                    <span >Select files</span>
                    <span >Maximum upload file size: 500 KB</span>
                    <input type="file" name="pic" />
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
          <!-- Post Your ad end -->

          <!-- seller-information start -->
          <fieldset class="border px-3 px-md-4 py-4 my-5 seller-information bg-gray">
            <div class="row">
              <div class="col-lg-12">
                <h3>Seller Information</h3>
              </div>
              <div class="col-lg-6">
                <h6 class="font-weight-bold pt-4 pb-1">Name:</h6>
                <input type="text" name="sname"placeholder="Contact name" class="form-control bg-white" required>
                <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
                <input type="text" name="num" placeholder="Contact Number" class="form-control bg-white" required>
              </div>
              <div class="col-lg-6">
                <h6 class="font-weight-bold pt-4 pb-1">E-mail:</h6>
                <input type="email" name="mail" placeholder="name@yourmail.com" class="form-control bg-white" required>
                <h6 class="font-weight-bold pt-4 pb-1">Hostel Block-Room number:</h6>
                <input type="text" name="room"placeholder="Your address" class="form-control bg-white" required>
              </div>
            </div>
          </fieldset>
          <!-- seller-information end-->

          <!-- ad-feature start -->

          <!-- ad-feature start -->

          <!-- submit button -->
          <div class="checkbox d-inline-flex">
            <input type="checkbox" id="terms-&-condition" class="mt-1">
            <label for="terms-&-condition" class="ml-2">By click you must agree with our
              <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting
                  Rules.</a></span>
            </label>
          </div>
          <button type="submit" name="sell" class="btn btn-primary d-block mt-2">Post Your Ad</button>
        </form>
      </div>
    </section>

  </center>

  </body>
</html>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../styles/buyer_reg.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	<title>Sell your Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
	<style>
	@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


    .aligncenter {
        text-align: center;
    }
    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }
    body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background: url(../auth/bag.jpg) no-repeat;
        background-size: 100%;
		width:100%;
    }

    .my-form, .login-form
    {
        font-family:  sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    </style>
</head>

<body>

	<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
					<div class="card-header" style="background: linear-gradient(#4FA095, #0D4C92);"><h4 style="font-style:bold;color:white">Post you product</h4></div>
						<div class="card-body border border-dark">
							<form name="my-form" action="sell2.php" method="post" enctype="multipart/form-data">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>Title of Product</b></label>
									<div class="col-md-6">
										<input type="text" id="full_name" class="form-control border border-dark" name="product_name" placeholder="Enter Product name here" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>Description</b></label>
									<div class="col-md-6">
										<textarea type="text" id="present_address" class="form-control border border-dark" rows="4" name="description" placeholder="Write details about your product" required></textarea>
									</div>
								</div>

								<div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>Age of your product</b></label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control border border-dark" name="category" placeholder="How old is your product?" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>Item price (Rs INR)</b></label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control border border-dark" name="price" placeholder="Item price" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>File upload:</b></label>
									<div class="col-md-6">
										<input type="file" id="account2" class="form-control border border-dark" name="pic" placeholder="upload file" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="user_name" class="col-md-4 col-form-label text-md-right"><i class="fas fa-user mr-2"></i><b>Seller Name</b></label>
									<div class="col-md-6">
										<input type="text" id="user_name" class="form-control border border-dark" name="sname" placeholder="name of the seller" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right "><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control w-100 border border-dark" style="width:100% ! important;" name="num" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="email_address" class="col-md-4 col-form-label text-md-right"><i class="far fa-envelope mr-2"></i><b>E-Mail Address</b></label>
									<div class="col-md-6">
										<input type="email" id="email_address" class="form-control border border-dark" name="mail" placeholder="E-Mail ID" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right "><i class="fas fa-home mr-2"></i><b>Hostel block & room number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control w-100 border border-dark" style="width:100% ! important;" name="room" placeholder="Hostel Address" required>
									</div>
								</div>



								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary"  style="background-color:#4FA095;color:white" name="sell">
									Post your Ad
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

</body>

</html>

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

  move_uploaded_file($temp_pic,"../product_images/$pic");
//insert QUERY
  $insert_products = "insert into `products` (product_name,description,category,price,pic,sname,num,mail,room)
  values('$product_name','$description','$category','  $price','$pic','$sname','$num','$mail','$room')";
  $result_query = mysqli_query($con,$insert_products);
  if($result_query)
  {
    echo "<script>alert('Succesfully inserted the product')</script>";
		echo "<script>window.open('dsiplay.php','_self')</script>";
  }
}
?>

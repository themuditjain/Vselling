<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
        h3 {
            background-color: transparent;
            font-family:  sans-serif;
            text-align: center;
            cursor: pointer;
            color:black;
        }

        .box {
            color: rgb(6, 36, 7);
            width: 370px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-color:#4FA095;
        }

        body {
            background: url(bag.jpg) no-repeat;
            background-size: 100%;
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 20px;
            background-color: rgb(247, 248, 247);

        }

        .inp {
            padding: 5px;
            margin: 10px;
            border-color:black;
            display: inline-block;

            width:80%;
            text-align: center;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 17px;
         padding-left:5%;
         padding-right:5%;
            font-weight: bold;
            color: white;
            background-color:#4FA095;
            border-radius: 10px;
            border-color:white;
            width: auto;
        }

    .aligncenter {
        text-align: center;
    }

    </style>
</head>

<body>


    <div class="box">
        <form action="forgotpassword.php" method="post">
            <h3>FORGOT PASSWORD</h3>

            <br>
            <input type="phonenumber"  class="inp" name="phonenumber" placeholder="Phone Number" required><br>
            <input type="text" class="inp" name="pan" placeholder="Registration Number" required><br>

            <input type="password" class="inp" name="password" placeholder="Password" required><br>
            <input type="password" class="inp" name="confirmpassword" placeholder="Confirm Password" required><br><br>
            <span style=" display:block;  margin-bottom: .75em; "></span>
        <br>
            <input type="submit" name="register" value="Update Password">
        </form>
    </div>

</body>

</html>

<?php
include("../includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$encryption'
                                    where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('login.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>

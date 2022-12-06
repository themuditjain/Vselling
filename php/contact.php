<?php
  include('C:\xampp\htdocs\Project\Vselling website 2.0\includes\db.php');
            if (isset($_POST['sendmessage'])) {

	            $name = $_POST['name'];
	            $email = $_POST['email'];
	            $number = $_POST['number'];
	           $msg=$_POST['msg'];

		        $query = "insert into `contact` (name,email,number,msg)
		        values ('$name','$email','$number','$msg')";

		        $result = mysqli_query($con, $query);
            if($result)
		        {echo "<script>alert('SucessFully Inserted');</script>";
		         }
           }
?>
<form action="" method="POST">
    <input type="text" placeholder="name" class="box" name="name" required/>
    <input type="email" placeholder="email" class="box" name="email" required/>
    <input type="tel" placeholder="number" class="box" name="number" required/>
    <input type="text" class="box" placeholder="message" name="msg" required/>
    <input type="submit" name="sendmessage" value="send message" class="btn">
</form>

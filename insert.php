<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cpass=$_POST['pass'];

	if($pass===$cpass)
	{	
		if(!empty($name)||!empty($email)||!empty($pass)||!empty($cpass))
		{
			$con = mysqli_connect('localhost','root','','hacko');
			$query="INSERT INTO `signup`(`fname`, `lname`, `Email`, `pass`, `cpass`) VALUES ('$fname','$lname','$email','$pass','$cpass')";
			$query1="INSERT INTO `profile`(`fname`,`lname`, `email`, `pass`) VALUES ('$fname','$lname','$email','$pass')";
			$run=mysqli_query($con,$query);
			$run1=mysqli_query($con,$query1);
			if($run==TRUE)
				header("Location: profile.php");
			else
				echo "Error404";
			if($run1!=TRUE)
				echo "<br>Error808";
		}
		else
		{
			echo "Not Connected";
			die();
		}
	}	
	else
	{
		die("Password does not match");
	}
	
?>
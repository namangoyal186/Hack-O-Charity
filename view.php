<?php
	$con=mysqli_connect('localhost','root','','hacko');
	function checkdata()
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		global $con;
		$query="SELECT * FROM `signup`";
		$run=mysqli_query($con,$query);
		if($run==TRUE)
		{
			while($data=mysqli_fetch_assoc($run))
			{
				if($email==$data['Email'] && $pass==$data['pass'])
				{
				 	header("Location: index.php");
				 	exit();
				 	
				}
			}
				header("Location: login1.php");
		}
		else
			echo "Error";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Check data</title>
</head>
<body>
	<?php checkdata(); ?>
</body>
</html>
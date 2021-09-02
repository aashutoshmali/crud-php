<html>
<head>
	<title>Register</title>

</head>

<body class="body">
<?php
include_once("config.php");
#$imagename = '';
if(isset($_POST['Submit'])) {

	$username =$_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	#$password = md5($password);
	$files = $_FILES['file'];
	$filename= $files['name'];
	$fileerror= $files['error'];
	$filetemp=$files['tmp_name'];
	$destinationfile ='upload/'.$filename;
	move_uploaded_file($filetemp, $destinationfile);



	
	if(empty($username) || empty($email) || empty($phone) || empty($password) ) {
				
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
			if(empty($phone)) {
			echo "<font color='red'>phone field is empty.</font><br/>";
		}
			if(empty($passwords)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		if(empty($imagename)) {
			echo "<font color='red'>image field is empty.</font><br/>";
		}
		
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 
	$result = mysqli_query($mysqli, "INSERT INTO account(username,email,phone,password,image) VALUES('$username','$email','$phone','$password','$destinationfile')");
		
		echo "<font color='green'>Register successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>

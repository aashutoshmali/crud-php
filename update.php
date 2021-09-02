<?php
include_once("config.php");
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);	
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	if(empty($username) || empty($email)|| empty($phone) || empty($password)){	
			
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if(empty($phone)) {
			echo "<font color='red'>phone field is empty.</font><br/>";

		}
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE account SET username='$username',email='$email', phone='$phone', password='$password' WHERE id=$id ");

		header("Location: index.php");
	}
}

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM account WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$email = $res['email'];
	$phone = $res['phone'];
	$password= $res['password'];

}
?>
<html>

<head>	
	<title>Update Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="form" method="post" action="update.php">
		<table align="center">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>phone</td>
				<td><input type="phone" name="phone" value="<?php echo $phone;?>"></td>
			</tr>
			<tr> 
				<td>password</td>
				<td><input type="password" name="password" value="<?php echo $password;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>

	</form>
</body>
</html>

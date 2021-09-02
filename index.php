<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM account ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel= "stylesheet" type= "text/css" href= "{{ url_for('static',filename='style.css') }}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style>
	 .tabel{
	 	background: gray;
	 	align-content: center;
	 	align-items: center;
	 	height: auto;
	 	width: 70%;
	     margin-left: auto;
 		margin-right: auto;
 			margin-top: auto;
		margin-bottom: auto;


	 }
	</style>
</head>

<body class="body">
<a href="register.html">Register  </a><br/><br/>

	<table class="tabel">

	<tr bgcolor="yellow">
		<td>Name</td>
		<td>Email</td>
		<td>Phone </td>
		<td>Password</td>
		<td>Image</td>
		<td>Update</td>
		<td>Delete</td>

	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['password']."</td>";
		echo "<td><img hight=50 width= 50 src=".$res['image']. "></td>";

      
		echo "<td><a href=\"update.php?id=$res[id]\">Update</a><td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></td>";		
	}
	?>
	</table>

</body>
</html>

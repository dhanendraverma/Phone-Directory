<?php

	include('conn.php');

	if ( isset($_POST['submit']) ) {

		 $name = $_POST['name'];
		 $email = $_POST['email'];
		 $phone = $_POST['phone'];

		 $query = "INSERT INTO `contacts` (name, email, phone)
					VALUES ('$name','$email','$phone');";

		if (mysqli_query($conn, $query)) {
			echo '<strong style="color: green">Contact Has been added</strong>';
		}


	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>
</head>
<body>


	<h1>Contacts</h1>
	<hr>

	<!-- Create Contacts Form -->

	<fieldset>
		<legend>Contacts</legend>

		<form method="POST" action="sa.php">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" name="phone" required></td>
				</tr>
				<tr>
					<td colspan="2">
						<hr>
						<button type="submit" name="submit"> Create Contact </button>
					</td>
				</tr>
			</table>
		</form>

	</fieldset>
	

	<!--Contact List-->
	<h1>Contacts List</h1>
	<hr>
	<fieldset>
	<legend>Contact List</legend>
		<table border="1" width="50%">
			<tr>
				<th>#ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		<table>
	</fieldset>
	
</body>
</html>
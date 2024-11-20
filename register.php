<?php
include 'config.php'; // Include the database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$medical_history = $_POST["medical_history"];

	$sql = "INSERT INTO patients (name, age, gender, phone, email, address, medical_history)
            VALUES ('$name', '$age', '$gender', '$phone', '$email', '$address', '$medical_history')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Patient registered successfully'); window.location.href='index.php';</script>";
	} else {
		echo "Error: " . $conn->error;
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-4">
		<h2>Patient Registration</h2>
		<form method="POST" action="">
			<label for="name">Full Name</label>
			<input type="text" name="name" required class="form-control">
			<label for="age">Age</label>
			<input type="number" name="age" required class="form-control">
			<label for="gender">Gender</label>
			<select name="gender" required class="form-control">
				<option value="">Select...</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select>
			<label for="phone">Phone Number</label>
			<input type="text" name="phone" required class="form-control">
			<label for="email">Email</label>
			<input type="email" name="email" required class="form-control">
			<label for="address">Address</label>
			<textarea name="address" class="form-control"></textarea>
			<label for="medical_history">Medical History</label>
			<textarea name="medical_history" class="form-control"></textarea>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
</body>

</html>
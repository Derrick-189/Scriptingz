<?php
include 'config.php'; // Include the database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$patient_name = $_POST["patient_name"];
	$doctor = $_POST["doctor"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$phone = $_POST["phone"];
	$comments = $_POST["comments"];

	$patient_query = "SELECT id FROM patients WHERE name='$patient_name' AND phone='$phone'";
	$result = $conn->query($patient_query);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$patient_id = $row['id'];

		$sql = "INSERT INTO appointments (patient_id, doctor, date, time, phone, comments)
                VALUES ('$patient_id', '$doctor', '$date', '$time', '$phone', '$comments')";

		if ($conn->query($sql) === TRUE) {
			echo "<script>alert('Appointment booked successfully'); window.location.href='index.php';</script>";
		} else {
			echo "Error: " . $conn->error;
		}
	} else {
		echo "Patient not found.";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Appointment</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-4">
		<h2>Book an Appointment</h2>
		<form method="POST" action="">
			<label for="patient_name">Patient Name</label>
			<input type="text" name="patient_name" required class="form-control">
			<label for="doctor">Select Doctor</label>
			<select name="doctor" required class="form-control">
				<option value="">Choose a doctor...</option>
				<option value="Dr. Smith">Dr. Smith</option>
				<option value="Dr. Johnson">Dr. Johnson</option>
				<option value="Dr. Williams">Dr. Williams</option>
				<option value="Dr. Brown">Dr. Brown</option>
			</select>
			<label for="date">Appointment Date</label>
			<input type="date" name="date" required class="form-control">
			<label for="time">Appointment Time</label>
			<input type="time" name="time" required class="form-control">
			<label for="phone">Phone Number</label>
			<input type="text" name="phone" required class="form-control">
			<label for="comments">Additional Comments</label>
			<textarea name="comments" class="form-control"></textarea>
			<button type="submit" class="btn btn-primary">Book Appointment</button>
		</form>
	</div>
</body>

</html>
<?php
include 'config.php'; // Include the database configuration file

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Patients</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-4">
		<h2>Patient Records</h2>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($result->num_rows > 0): ?>
					<?php while ($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["age"]; ?></td>
							<td><?php echo $row["gender"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["phone"]; ?></td>
						</tr>
					<?php endwhile; ?>
				<?php else: ?>
					<tr>
						<td colspan="6">No records found</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</body>

</html>
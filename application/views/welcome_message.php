<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>cars list</h2>
		<p>The .table-bordered class adds borders to a table:</p>            
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Color</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($cars as $key => $value) {
						echo "<tr>";
						echo "<td>".$value->name."</td>";
						echo "<td>".$value->color."</td>";
						echo "<td>".$value->date."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="container">
		<form action="<?php echo $bace_url ?>/welcome/store" method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" id="name">
			</div>
			<div class="form-group">
				<label for="color">Color:</label>
				<input type="text" class="form-control" id="color">
			</div>
			<div class="form-group">
				<label for="color">Color:</label>
				<input type="date" class="form-control" name="date">
			</div>
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea name="description" class="form-control" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>
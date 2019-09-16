<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background:url('images/h10.jpg') no-repeat;background-size: cover; height: 300px;" ></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color: #3498d8; color: #ffffff;">Patients</a>
				<a href="" class="list-group-item">Patient Details</a>
				<a href="" class="list-group-item">Add New Patient</a>
				<a href="" class="list-group-item">Payment/checkout</a>
				</div>
				<hr>
				<div class="list-group">
				<a href="" class="list-group-item active"  style="background-color: #3498d8; color: #ffffff;">Staff</a>
				<a href="" class="list-group-item">Staff Details</a>
				<a href="" class="list-group-item">Add New Staff</a>
				<a href="" class="list-group-item">Remove Staff Member</a>
				</div>
			</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-baby" style="background-color: #3498d8; color: #ffffff;">
					<h3>Book and Appoinment</h3></div>
					<div class="card-body">
						<form class="form-group" action="func.php" method="POST">
							<label>First Name:</label>
							<input type="text" name=" fname" class="form-control"><br>
							<label>Last Name:</label>
							<input type="text" name=" lname" class="form-control"><br>
							<label>Email Id:</label>
							<input type="text" name=" email" class="form-control"><br>
							<label>Contact:</label>
							<input type="text" name=" contact" class="form-control"><br>
							<label>Doctor Appoinment:</label>
							<select class="form-control">
							<option value="Dr Sharma Form 6pm to 8pm">Dr Sharma Form 6pm to 8pm</option>
							<option value="Dr Sharma Form 6pm to 8pm">Dr Shetty Form 4pm to 6pm</option></select><br>
							<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appoinment">
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
		
	
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
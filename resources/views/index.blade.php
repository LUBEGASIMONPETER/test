<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appointments | AWAD Clinic</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<section>

		<div class="right">
			<h2>Book An Appointment</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>

			<form action="{{route('racheal.store')}}" method="POST">
				@csrf
				<input type="text" placeholder="Full Name" name="full_name">
				<input type="date" name="date">
				<input type="text" placeholder="Location" name="location">
				<input type="tel" placeholder="Phone Number" name="phone_number">
				<button>Make Appointment</button>
			</form>
		</div>

		<div class="left">
			<img src="images/img5.jpg">
		</div>
	</section>
</body>
</html>
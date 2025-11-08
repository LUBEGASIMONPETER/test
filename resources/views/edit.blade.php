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

			<form action="{{route('racheal.update',$item->id)}}" method="POST">
				@csrf
                @method('PATCH')
				<input type="text" value="{{$item->full_name}}" name="full_name">
				<input type="date" name="date" value="{{$item->date}}">
				<input type="text" value="{{$item->location}}" name="location">
				<input type="tel" value="{{$item->phone_number}}" name="phone_number">
				<button>UPDATE</button>
			</form>
		</div>

		<div class="left">
			<img src="images/img5.jpg">
		</div>
	</section>
</body>
</html>
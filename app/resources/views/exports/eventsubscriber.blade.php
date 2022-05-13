<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Subscribers</title>
  <link rel="stylesheet" href="{{ asset('css/exports.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
          	<table id="eventsubscriber">
				<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail address</th>
					<th>Location</th>
				</tr>
				<tbody>
					@foreach ($eventsubscribers as $eventsubscriber)
					<tr>
						<td>{{ $eventsubscriber->id }}</td>
						<td>{{ $eventsubscriber->firstname }}</td>
						<td>{{ $eventsubscriber->lastname }}</td>
						<td>{{ $eventsubscriber->email }}</td>
						<td>{{ $eventsubscriber->location }}</td>
					</tr>
					@endforeach
					</tbody>
				</thead>
			</table>      

  <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>
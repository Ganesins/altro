<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employ list</title>
	<style>
		table,th,td{border-collapse: collapse;}
	</style>
</head>
<body>
	<h1>Employ list</h1>
	<table border="2">
		<tr>
			<td>employ id</td>
			<td>name</td>
			<td>age</td>
			<td>phone</td>
			<td>email</td>
			<td>Date of birth</td>
			<td>address</td>
			<td>qulification</td>
			<td>edit</td>
			<td>delete</td>

		</tr>
		
			@foreach($employ as $employ)
			<tr>
			<td>{{ $employ->id }}</td>
			<td>{{ $employ->name}}</td>
			<td>{{ $employ->age }}</td>
			<td>{{ $employ->phone }}</td>
			<td>{{ $employ->email }}</td>
			<td>{{ $employ->address }}</td>
			<td>{{ $employ->dob }}</td>
			<td>{{$employ->qulification}}</td>
			<td><a href="edit/{{$employ->id}}">edit</a></td>
			<td><a href="delete/{{$employ->id}}">delete</a></td>




		</tr>
		  @endforeach
	</table><br>
	<a href="/">Add new employ</a>


</body>
</html>
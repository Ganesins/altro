<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit employ</title>
</head>
<body>
	<h1>Edit page</h1>
	<form action="{{ url('update/'.$employ->id) }}" method="post">
		@csrf
		<label>name</label>
		<input type="text" name="name" value="{{ $employ->name  }}"><br><br>
		<label>age</label>
		<input type="text" name="age"  value="{{ $employ->age  }}"><br><br>
		<label>phone</label>
		<input type="text" name="phone" value="{{ $employ->phone  }}"><br><br>
		<label>email</label>
		<input type="email" name="email" value="{{ $employ->email  }}"><br><br>
		<label>address</label>
		<input type="address" name="address" value="{{ $employ->address  }}"><br><br>
		<label>date of birth</label>
		<input type="date" name="dob" value="{{ $employ->dob  }}"><br><br>
		<label>qualification</label>
		<input type="text" name="qulification" value="{{ $employ->qulification  }}"><br><br>

		<input type="submit" name="" value="update">
	</form>
	<a href="/list">watch list</a>

</body>
</html>
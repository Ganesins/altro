<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>new employ</title>
</head>
<body>
	<form action="store" method="post">
		@csrf
		<h1>New Employ</h1>
		<label>name</label>
		<input type="text" name="name"><br><br>
		<label>age</label>
		<input type="text" name="age"><br><br>
		<label>phone</label>
		<input type="text" name="phone"><br><br>
		<label>email</label>
		<input type="email" name="email"><br><br>
		<label>address</label>
		<input type="address" name="address"><br><br>
		<label>date of birth</label>
		<input type="date" name="dob"><br><br>
		<label>qualification</label>
		<input type="text" name="qulification"><br><br>
		<label>Resume</label>
		<input type="file" name=""><br>

		<input type="submit" name="" value="save">
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit employ</title>
</head>
<body>
	<h1>Edit page</h1>
	<form action="<?php echo e(url('update/'.$employ->id)); ?>" method="post">
		<?php echo csrf_field(); ?>
		<label>name</label>
		<input type="text" name="name" value="<?php echo e($employ->name); ?>"><br><br>
		<label>age</label>
		<input type="text" name="age"  value="<?php echo e($employ->age); ?>"><br><br>
		<label>phone</label>
		<input type="text" name="phone" value="<?php echo e($employ->phone); ?>"><br><br>
		<label>email</label>
		<input type="email" name="email" value="<?php echo e($employ->email); ?>"><br><br>
		<label>address</label>
		<input type="address" name="address" value="<?php echo e($employ->address); ?>"><br><br>
		<label>date of birth</label>
		<input type="date" name="dob" value="<?php echo e($employ->dob); ?>"><br><br>
		<label>qualification</label>
		<input type="text" name="qulification" value="<?php echo e($employ->qulification); ?>"><br><br>

		<input type="submit" name="" value="update">
	</form>
	<a href="/list">watch list</a>

</body>
</html><?php /**PATH /home/ganesan/altro/resources/views/edit_employ.blade.php ENDPATH**/ ?>
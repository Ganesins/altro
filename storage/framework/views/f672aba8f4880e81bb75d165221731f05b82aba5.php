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
		
			<?php $__currentLoopData = $employ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
			<td><?php echo e($employ->id); ?></td>
			<td><?php echo e($employ->name); ?></td>
			<td><?php echo e($employ->age); ?></td>
			<td><?php echo e($employ->phone); ?></td>
			<td><?php echo e($employ->email); ?></td>
			<td><?php echo e($employ->address); ?></td>
			<td><?php echo e($employ->dob); ?></td>
			<td><?php echo e($employ->qulification); ?></td>
			<td><a href="edit/<?php echo e($employ->id); ?>">edit</a></td>
			<td><a href="delete/<?php echo e($employ->id); ?>">delete</a></td>




		</tr>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table><br>
	<a href="/">Add new employ</a>


</body>
</html><?php /**PATH /home/ganesan/altro/resources/views/employ_list.blade.php ENDPATH**/ ?>
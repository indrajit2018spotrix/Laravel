<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo $user['first_name'] . " " . $user['last_name'] . " - <b>" . $user['location'] . "</b>"; ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
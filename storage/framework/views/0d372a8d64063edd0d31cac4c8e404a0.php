<!DOCTYPE html>
    <html>
      <head>
        <title><?php echo e($title); ?></title>
      </head>
      <body>
<h3><?php echo e($title); ?></h3>
<table border="1">
	<tr><th>No</th><th>Nama</th><th>Asal</th></tr>
  <?php $no = 1; ?>
	<?php $__currentLoopData = $daf_mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
    <td><?php echo e($no++); ?></td>
	  <td><?php echo e($mhs['nama']); ?></td>
	  <td><?php echo e($mhs['asal']); ?></td>
  </tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
      </body>
    </html><?php /**PATH C:\xampp\htdocs\CLO-2_ABP\resources\views/v_latihan2.blade.php ENDPATH**/ ?>
<html>
<head>
<?php echo e(HTML::style('css/bootstrap.min.css')); ?>

<?php echo e(HTML::style('css/bootstrap-theme.min.css')); ?>

</head>
<body>
	<style>
  table, th, td {
    border: 1px solid black;
    padding: 10px;
  }
</style>
<div id="content">
	<div class="panel panel-primary">
	<div class="panel-heading ">
		<div class="container-fluid">
			<div class="row less-gutter">
				<div class="col-md-8">
					<span class="glyphicon glyphicon-user"></span>
					TEST TYPE TURNAROUND TIME
				</div>
			</div>
		</div>
	</div>
  	<table class="table table-bordered"  width="100%">
		<tbody align="left">
			<<tr>
					    	<th><?php echo e(Lang::choice('messages.test-type',1)); ?></th>
					    	<th><?php echo e(trans('messages.total-specimen')); ?></th>
					    	<th>Expected TAT</th>
					    	<th>Actual TAT</th>
					    	<th>Within TAT</th>
					    	<th>Beyond TAT</th>
					    	<th><?php echo e(trans('messages.tat-rates-label')); ?> Within</th>
					    	<th><?php echo e(trans('messages.tat-rates-label')); ?> Beyond</th>
					    </tr>
					    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					    <tr>
					    	<td><?php echo e($datum->name); ?></td>
			  				<td><?php echo e($datum->total); ?></td>
			  				<td><?php echo e($datum->ETAT); ?></td>
			  				<td><?php echo e($datum->avgtime); ?></td>
			  				<td><?php echo e($datum->Within); ?></td>
			  				<td><?php echo e($datum->Beyond); ?></td>
			  				<td><?php echo e(round($datum->Within / $datum->total * 100, 2)); ?></td>
			  				<td><?php echo e(round($datum->Beyond / $datum->total * 100, 2)); ?></td>
					    </tr>
						    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					    <tr>
					    	<td colspan="5"><?php echo e(trans('messages.no-records-found')); ?></td>
					    </tr>
					    <?php endif; ?>
		</tbody>
	</table>
</div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/reports/tat/exportTAT.blade.php ENDPATH**/ ?>
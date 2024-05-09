<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active">Test Name Mappings</li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-adjust"></span>
		List of Test Name Mappings
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testnamemapping/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				Add Test Name Mapping
			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Site Name</th>
					<th>Standard Name</th>
					<th>Facility Name</th>
					<!-- <th>System name</th> -->
					<!-- <th></th> -->
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $testNameMappings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testNameMapping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($testNameMapping->standard_name); ?></td>
					<td><?php echo e(($testNameMapping->testType!='')?$testNameMapping->testType->name:''); ?></td>
					<!-- <td><?php echo e($testNameMapping->system_name); ?></td> -->
					<td>
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("testnamemapping/" . $testNameMapping->id)); ?>">
							<span class="glyphicon glyphicon-edit"></span>
							Test Measures
						</a>
					<!-- edit this testNameMapping (uses edit method found at GET /testNameMapping/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testnamemapping/" . $testNameMapping->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
					<!-- delete this testNameMapping (uses delete method found at GET /testNameMapping/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("testnamemapping/" . $testNameMapping->id . "/delete")); ?>'>
							<span class="glyphicon glyphicon-trash"></span>
							<?php echo e(trans('messages.delete')); ?>

						</button>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo e(Session::put('SOURCE_URL', URL::full())); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testnamemapping/index.blade.php ENDPATH**/ ?>
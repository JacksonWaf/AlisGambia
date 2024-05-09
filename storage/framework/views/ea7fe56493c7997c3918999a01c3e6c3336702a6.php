<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li class="active"><a href="<?php echo e(route('testnamemapping.index')); ?>">Test Name Mappings</a></li>
	  <li class="active">Measure Name Mappings</li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-adjust"></span>
		List of Measure Name Mappings
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("measurenamemapping/create/".$testNameMapping->id)); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				Add Measure Name Mapping
			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Site Name</th>
					<th>Standard Name</th>
					<th>System Name</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $testNameMapping->measureNameMappings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $measureNameMapping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e(($measureNameMapping->measure!='')?$measureNameMapping->measure->name:''); ?></td>
					<td><?php echo e($measureNameMapping->standard_name); ?></td>
					<td><?php echo e($measureNameMapping->system_name); ?></td>
					<td>
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("measurenamemapping/" . $measureNameMapping->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("measurenamemapping/" . $measureNameMapping->id . "/delete")); ?>'>
							<span class="glyphicon glyphicon-trash"></span>
							<?php echo e(trans('messages.delete')); ?>

						</button>
						<?php if($measureNameMapping->measure!=''): ?>
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("measureranges/" . $measureNameMapping->measure->id . "/ranges")); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							Measure Ranges
						</a>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo e(Session::put('SOURCE_URL', URL::full())); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testnamemapping/measurenamemapping/index.blade.php ENDPATH**/ ?>
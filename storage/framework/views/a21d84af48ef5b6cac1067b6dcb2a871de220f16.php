<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.test-type',1)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		<?php echo e(trans('messages.list-test-types')); ?>

		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testtype/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.new-test-type')); ?>

			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e(Lang::choice('messages.name',1)); ?></th>
					<th>Standard Name</th>
					<th><?php echo e(trans('messages.description')); ?></th>
					<th><?php echo e(trans('messages.target-turnaround-time')); ?></th>
					<th><?php echo e(trans('messages.prevalence-threshold')); ?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $testtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activetesttype')): ?>
                            <?php echo e((Session::get('activetesttype') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >
					<td><?php echo e($value->name); ?></td>
					<td><?php echo e(!is_null($value->parentId) ? $value->standardnamemapping->standard_name:''); ?></td>
					<td><?php echo e($value->description); ?></td>
					<td><?php echo e($value->targetTAT); ?> <?php echo e($value->targetTAT_unit); ?></td>
					<td><?php echo e($value->prevalence_threshold); ?></td>
					<td>
						<!-- show the testtype (uses the show method found at GET /testtype/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("testtype/" . $value->id)); ?>">
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>

						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testtype/" . $value->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
						<!-- delete this testtype (uses the delete method found at GET /testtype/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("testtype/" . $value->id . "/delete")); ?>'>
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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testtype/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(trans('messages.specimen-rejection')); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.specimen-rejection')); ?>

		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("specimenrejection/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.add-rejection-reason')); ?>

			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e(trans('messages.rejection-reason')); ?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $rejection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr   <?php if(Session::has('activerejection')): ?>
                            <?php echo e((Session::get('activerejection') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >

					<td><?php echo e($value->reason); ?></td>

					<td>

					<!-- edit this specimenrejection (uses the edit method found at GET /specimenrejection/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("specimenrejection/" . $value->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
					<!-- delete this specimenrejection (uses delete method found at GET /specimenrejection/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(route("specimenrejection.delete", array($value->id))); ?>'>
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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/specimenrejection/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.request', 2)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(Lang::choice('messages.request', 2)); ?>

		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(route('request.create')); ?>">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.add').' '.Lang::choice('messages.request', 1)); ?>

			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e(Lang::choice('messages.item', 1)); ?></th>
					<th><?php echo e(trans('messages.quantity-remaining')); ?></th>
					<th><?php echo e(Lang::choice('messages.test-category', 1)); ?></th>
					<th><?php echo e(trans('messages.tests-done')); ?></th>
					<th><?php echo e(trans('messages.order-quantity')); ?></th>
					<th><?php echo e(trans('messages.status')); ?></th>
					<th><?php echo e(trans('messages.ordered-by')); ?></th>
					<th><?php echo e(trans('messages.remarks')); ?></th>
					<th><?php echo e(trans('messages.actions')); ?></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activerequest')): ?>
                            <?php echo e((Session::get('activerequest') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                    >
                 	<td><?php echo e($value->item->name); ?></td>
                 	<td><?php echo e($value->quantity_remaining); ?></td>
                 	<td><?php echo e($value->testCategory->name); ?></td>
                 	<td><?php echo e($value->tests_done); ?></td>
                 	<td><?php echo e($value->quantity_ordered); ?></td>
                 	<td><?php if(!$value->usage->first()): ?><span class="label label-default"><?php echo e(trans('messages.not-issued')); ?></span><?php else: ?> <button class="btn btn-success btn-sm" type="button"> <?php echo e(trans('messages.issued')); ?> <span class="badge"><?php echo e($value->issued()); ?></span></button> <?php endif; ?></td>
                 	<td><?php echo e($value->user->name); ?></td>
                 	<td><?php echo e($value->remarks); ?></td>

					<td>
					<!-- show the request (uses the show method found at GET /request/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("request/" . $value->id)); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>
					<!-- edit this commodity (uses the edit method found at GET /inventory/{id}/edit -->
					<a class="btn btn-sm btn-info" href="<?php echo e(route('request.edit', array($value->id))); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

					</a>

					<!-- Update dtock button -->
				    <a class="btn btn-sm btn-sun-flower" style="display:none;" href="<?php echo e(URL::to("stock/" . $value->id."/usage")); ?>" >
						<span class="glyphicon glyphicon-info-sign"></span>
						<?php echo e(trans('messages.update-stock')); ?>

					</a>
						<!-- delete this commodity (uses the delete method found at GET /inventory/{id}/delete -->
					<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id="<?php echo e(route('request.delete', array($value->id))); ?>">
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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/inventory/request/index.blade.php ENDPATH**/ ?>
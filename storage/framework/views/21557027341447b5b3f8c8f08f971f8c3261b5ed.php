<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.test-category',1)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-adjust"></span>
		<?php echo e(Lang::choice('messages.test-category',1)); ?>

		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testcategory/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.create-test-category')); ?>

			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e(Lang::choice('messages.name',1)); ?></th>
					<th><?php echo e(trans('messages.description')); ?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $testcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activetestcategory')): ?>
                            <?php echo e((Session::get('activetestcategory') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >

					<td><?php echo e($value->name); ?></td>
					<td><?php echo e($value->description); ?></td>

					<td>

					<!-- show the test category (uses the show method found at GET /testcategory/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("testcategory/" . $value->id)); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>

					<!-- edit this test category (uses edit method found at GET /testcategory/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testcategory/" . $value->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>

					<!-- delete this test category (uses delete method found at GET /testcategory/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("testcategory/" . $value->id . "/delete")); ?>'>
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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testcategory/index.blade.php ENDPATH**/ ?>
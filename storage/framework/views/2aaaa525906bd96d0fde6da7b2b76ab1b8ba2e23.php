<?php $__env->startSection("content"); ?>

<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>

	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('testcategory.index')); ?>"><?php echo e(Lang::choice('messages.test-category',1)); ?></a></li>
		  <li class="active"><?php echo e(trans('messages.test-category-details')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary ">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-adjust"></span>
			<?php echo e(trans('messages.test-category-details')); ?>

			<div class="panel-btn">
				<a class="btn btn-sm btn-info" href="<?php echo e(route('testcategory.edit', array($testcategory->id))); ?>">
					<span class="glyphicon glyphicon-edit"></span>
					<?php echo e(trans('messages.edit')); ?>

				</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="display-details">
				<h3 class="view"><strong><?php echo e(Lang::choice('messages.name',1)); ?>:</strong><?php echo e($testcategory->name); ?> </h3>
				<p class="view-striped"><strong><?php echo e(trans('messages.description')); ?>:</strong>
					<?php echo e($testcategory->description); ?></p>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testcategory/show.blade.php ENDPATH**/ ?>
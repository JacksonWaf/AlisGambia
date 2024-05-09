<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('specimentype.index')); ?>"><?php echo e(Lang::choice('messages.specimen-type',2)); ?></a></li>
		  <li class="active"><?php echo e(trans('messages.specimen-type-details')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary specimentype-create">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-user"></span>
			<?php echo e(trans('messages.specimen-type-details')); ?>

			<div class="panel-btn">
				<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("specimentype/". $specimentype->id ."/edit")); ?>">
					<span class="glyphicon glyphicon-edit"></span>
					<?php echo e(trans('messages.edit')); ?>

				</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="display-details">
				<h3 class="view"><strong><?php echo e(Lang::choice('messages.name',1)); ?></strong><?php echo e($specimentype->name); ?> </h3>
				<p class="view-striped"><strong><?php echo e(trans('messages.description')); ?></strong>
					<?php echo e($specimentype->description); ?></p>
				<p class="view"><strong><?php echo e(trans('messages.date-created')); ?></strong><?php echo e($specimentype->created_at); ?></p>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/specimentype/show.blade.php ENDPATH**/ ?>
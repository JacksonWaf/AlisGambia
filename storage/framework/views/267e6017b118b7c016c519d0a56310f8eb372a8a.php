<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('user.index')); ?>"><?php echo e(Lang::choice('messages.user', 2)); ?></a></li>
		  <li class="active"><?php echo e(trans('messages.user-details')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-user"></span>
			<?php echo e(trans('messages.user-details')); ?>

			<div class="panel-btn">
				<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("user/". $user->id ."/edit")); ?>">
					<span class="glyphicon glyphicon-edit"></span>
					<?php echo e(trans('messages.edit')); ?>

				</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="display-details">
							<h3><strong><?php echo e(trans('messages.full-name')); ?></strong><?php echo e($user->name); ?> </h3>
							<p><strong><?php echo e(trans('messages.username')); ?></strong><?php echo e($user->username); ?></p>
							<p><strong><?php echo e(trans('messages.email-address')); ?></strong><?php echo e($user->email); ?></p>
							<p><strong><?php echo e(trans('messages.designation')); ?></strong><?php echo e($user->designation); ?></p>
							<p><strong><?php echo e(trans('messages.gender')); ?></strong><?php echo e(($user->gender==0?"Male":"Female")); ?></p>
							<p><strong><?php echo e(trans('messages.date-created')); ?></strong><?php echo e($user->created_at); ?></p>
						</div>
					</div	
					<?php if(is_null($user->image)): ?>
					<div class="form-group">
						<img class="img-responsive img-thumbnail user-image" src="" alt="<?php echo e(trans('messages.image-alternative')); ?>"></img>
					</div>
					<?php else: ?>>
					<div class="col-md-6">
						<img class="img-responsive img-thumbnail user-image" src="<?php echo e($user->image); ?>"
							alt="<?php echo e(trans('messages.image-alternative')); ?>"></img>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/user/show.blade.php ENDPATH**/ ?>
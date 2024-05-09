<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.user',1)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		List Users
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("user/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.new-user')); ?>

			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e(trans('messages.username')); ?></th>
					<th><?php echo e(Lang::choice('messages.name',1)); ?></th>
					<th><?php echo e(trans('messages.email')); ?></th>
					<th><?php echo e(trans('messages.gender')); ?></th>
					<th><?php echo e(trans('messages.designation')); ?></th>
					<th><?php echo e(trans('messages.actions')); ?></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activeuser')): ?>
                            <?php echo e((Session::get('activeuser') == $user->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >

					<td><?php echo e($user->username); ?></td>
					<td><?php echo e($user->name); ?></td>
					<td><?php echo e($user->email); ?></td>
					<td><?php echo e(($user->gender == 0) ? "Male":"Female"); ?></td>
					<td><?php echo e($user->designation); ?></td>

					<td>

						<!-- show the user (uses the show method found at GET /user/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("user/" . $user->id)); ?>">
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>

						<!-- edit this user (uses the edit method found at GET /user/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("user/" . $user->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
						<!-- delete this user (uses the delete method found at GET /user/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link <?php echo e(($user == App\Models\User::getAdminUser()) ? 'disabled': ''); ?>"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("user/" . $user->id . "/delete")); ?>'>
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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/user/index.blade.php ENDPATH**/ ?>
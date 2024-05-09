<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('user.index')); ?>"><?php echo e(Lang::choice('messages.user', 1)); ?></a></li>
		  <li class="active"><?php echo e(trans('messages.create-user')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-user"></span>
			<?php echo e(trans('messages.create-user')); ?>

		</div>
		<div class="panel-body">
		<!-- if there are creation errors, they will show here -->

			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>

			<?php echo e(Form::open(array('route' => array('user.index'), 'id' => 'form-create-user', 'files' => true))); ?>


				<div class="form-group">
					<?php echo e(Form::label('username', trans('messages.username'))); ?>

					<?php echo e(Form::text('username', old('username'), ['class' => 'form-control'])); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('password', Lang::choice('messages.password',1))); ?>

					<?php echo e(Form::password('password', ['class' => 'form-control'])); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('password_confirmation', trans('messages.repeat-password'))); ?>

					<?php echo e(Form::password('password_confirmation', ['class' => 'form-control'])); ?>


				<div class="form-group">
					<?php echo e(Form::label('full_name', trans('messages.full-name'))); ?>

					<?php echo e(Form::text('full_name', old('full_name'), ['class' => 'form-control'])); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('email', trans('messages.email-address'))); ?>

					<?php echo e(Form::email('email', old('email'), ['class' => 'form-control'])); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('phone_contact', 'Phone Contact')); ?>

					<?php echo e(Form::text('phone_contact', old('phone_contact'), ['class' => 'form-control'])); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('designation', trans('messages.designation'))); ?>

					<?php echo e(Form::text('designation', old('designation'), ['class' => 'form-control'])); ?>

				</div>
                <div class="form-group">
                    <?php echo e(Form::label('gender', trans('messages.gender'))); ?>

                    <div><?php echo e(Form::radio('gender', App\Models\UnhlsPatient::MALE, true)); ?>

                    	<span class='input-tag'><?php echo e(trans('messages.male')); ?></span></div>
                    <div><?php echo e(Form::radio("gender", App\Models\UnhlsPatient::FEMALE, false)); ?>

                    	<span class='input-tag'><?php echo e(trans('messages.female')); ?></span></div>
                </div>
                <div class="form-group">
                	<?php echo e(Form::label('image', trans('messages.photo'))); ?>

                    <?php echo e(Form::file("image")); ?>

                </div>
				<div class="form-group actions-row">
					<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
						['class' => 'btn btn-primary', 'onclick' => 'submit()']
					)); ?>

				</div>

			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/user/create.blade.php ENDPATH**/ ?>
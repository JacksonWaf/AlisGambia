<?php $__env->startSection("content"); ?>

	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li>
		  	<a href="<?php echo e(route('testcategory.index')); ?>"><?php echo e(Lang::choice('messages.test-category',1)); ?></a>
		  </li>
		  <li class="active"><?php echo e(trans('messages.create-test-category')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-adjust"></span>
			<?php echo e(trans('messages.create-test-category')); ?>

		</div>
		<div class="panel-body">
		<!-- if there are creation errors, they will show here -->
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>

			<?php echo e(Form::open(array('route' => 'testcategory.store', 'id' => 'form-create-testcategory'))); ?>


				<div class="form-group">
					<?php echo e(Form::label('name', Lang::choice('messages.name',1))); ?>

					<?php echo e(Form::text('name', old('name'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('description', trans("messages.description"))); ?></label>
					<?php echo e(Form::textarea('description', old('description'),
						array('class' => 'form-control', 'rows' => '2'))); ?>

				</div>
				<div class="form-group actions-row">
					<?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save'),
						array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

				</div>

			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testcategory/create.blade.php ENDPATH**/ ?>
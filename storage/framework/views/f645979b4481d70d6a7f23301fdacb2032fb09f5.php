<?php $__env->startSection("content"); ?>

	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li class="active"><a href="<?php echo e(route('testnamemapping.index')); ?>">Test Name Mappings</a></li>
		  <li class="active">Edit Test Name Mapping</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-adjust"></span>
			Edit Test Name Mapping
		</div>
		<div class="panel-body">
		<!-- if there are creation errors, they will show here -->
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>

			<?php echo e(Form::model($testNameMapping, array('route' => ['testnamemapping.update', $testNameMapping->id],
				'method' => 'PUT', 'id' => 'form-add-testnamemapping'))); ?>

				<div class="form-group">
					<?php echo e(Form::label('test_type_id', 'Test Type')); ?>

					<?php echo e(Form::select('test_type_id', $testTypes,
						old('test_type_id'), array('class' => 'form-control'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('standard_name', 'Standard Name')); ?>

					<?php echo e(Form::text('standard_name', old('standard_name'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('system_name', 'System Name')); ?>

					<?php echo e(Form::text('system_name', old('system_name'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group actions-row">
					<?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save'),
						array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

				</div>

			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testnamemapping/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li><a href="<?php echo e(route('testtype.index')); ?>"><?php echo e(Lang::choice('messages.test-type',1)); ?></a><li class="active"><?php echo e(trans('messages.create-test-type')); ?></li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		<?php echo e(trans('messages.create-test-type')); ?>

	</div>
	<?php echo e(Form::open(array('route' => array('testtype.index'), 'id' => 'form-create-testtype'))); ?>

	<div class="panel-body">
	<!-- if there are creation errors, they will show here -->

		<?php if($errors->all()): ?>
			<div class="alert alert-danger">
				<?php echo e(HTML::ul($errors->all())); ?>

			</div>
		<?php endif; ?>

			<div class="form-group">
				<?php echo e(Form::label('name', Lang::choice('messages.name',1))); ?>

				<?php echo e(Form::text('name', old('name'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('name')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('parentId','Standard name')); ?>

				<?php echo e(Form::select('parentId', array(0 => '')+$standardnames->pluck('standard_name', 'id')->toArray(), old('parentId'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('parentId')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('parentId')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('description', trans('messages.description'))); ?>

				<?php echo e(Form::textarea('description', old('description'),
					array('class' => 'form-control', 'rows' => '2'))); ?>

			</div>
			<div class="form-group">
				<?php echo e(Form::label('test_category_id', Lang::choice('messages.test-category',1))); ?>

				<?php echo e(Form::select('test_category_id', array(0 => '')+$testcategory->pluck('name', 'id')->toArray(),
					old('test_category_id'),	array('class' => 'form-control'))); ?>

			</div>
			<div class="form-group">
				<?php echo e(Form::label('specimen_types', trans('messages.select-specimen-types'))); ?>

				<div class="form-pane panel panel-default">
					<div class="container-fluid">
						<?php $__currentLoopData = $specimentypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-3">
								<label  class="checkbox">
									<input type="checkbox" name="specimentypes[]" value="<?php echo e($value->id); ?>" /><?php echo e($value->name); ?>

								</label>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('measures', Lang::choice('messages.measure',2))); ?>

				<div class="form-pane panel panel-default">
					<div class="container-fluid measure-container">
					</div>
		        	<a class="btn btn-default add-another-measure" href="javascript:void(0);" data-new-measure="1">
		         		<span class="glyphicon glyphicon-plus-sign"></span><?php echo e(trans('messages.add-new-measure')); ?></a>
				</div>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('targetTAT', trans('messages.target-turnaround-time'),array('class' => 'required'))); ?>

				<?php echo e(Form::text('targetTAT', old('targetTAT'), array('class' => 'form-control','required' => 'required'))); ?>

				<?php echo e(Form::select('targetTAT_unit', array('','minutes' => 'Minutes', 'hours' => 'Hours','days'=>'Days'),
						old('targetTAT_unit'),array('class' => 'form-control','required' => 'required'))); ?>


			</div>
		<div class="panel-footer">
			<div class="form-group actions-row">
				<?php echo e(Form::button(
					'<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
					['class' => 'btn btn-primary', 'onclick' => 'submit()']
				)); ?>

				<?php echo e(Form::button(trans('messages.cancel'),
					['class' => 'btn btn-default', 'onclick' => 'javascript:history.go(-1)']
				)); ?>

			</div>
		</div>
	<?php echo e(Form::close()); ?>

</div>
<?php echo $__env->make("measure.measureinput", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/testtype/create.blade.php ENDPATH**/ ?>
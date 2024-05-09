<?php echo e(Form::label('test-list', trans("messages.select-tests"))); ?>

<div class="form-pane panel panel-default">
	<div class="container-fluid">
		<?php $__currentLoopData = $testTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4">
			<label  class="checkbox">
				<input class="test-type id-<?php echo e($value->id); ?>"
					type="checkbox"
					data-test-type-name="<?php echo e($value->name); ?>"
					name="testtypes[]"
					value="<?php echo e($value->id); ?>"/><?php echo e($value->name); ?>

			</label>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div><?php /**PATH /var/www/alis_gambia/resources/views/unhls_test/testTypeList.blade.php ENDPATH**/ ?>
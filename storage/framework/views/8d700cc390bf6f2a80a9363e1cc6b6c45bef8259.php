<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li><a href="<?php echo e(route('bloodbank.index')); ?>"><?php echo e(Lang::choice('messages.blood-bank',1)); ?></a><li class="active"><?php echo e(trans('messages.create-blood-unit')); ?></li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		<?php echo e(trans('messages.create-blood-unit')); ?>

	</div>
	<?php echo e(Form::open(array('route' => array('bloodbank.index'), 'id' => 'form-create-bloodbank'))); ?>

	<div class="panel-body">
	<!-- if there are creation errors, they will show here -->

		<?php if($errors->all()): ?>
			<div class="alert alert-danger">
				<?php echo e(HTML::ul($errors->all())); ?>

			</div>
		<?php endif; ?>

			<div class="form-group">
				<?php echo e(Form::label('unit_no', 'Unit Number')); ?>

				<?php echo e(Form::text('unit_no', old('unit_no'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('unit_no')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('unit_no')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('group', 'Blood group')); ?>

				<?php echo e(Form::select('group',array('','A+' => 'A+','A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'), old('group'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('group')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('group')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<!-- <div class="form-group">
				<?php echo e(Form::label('rhs', 'Rhesus')); ?>

				<?php echo e(Form::text('rhs', old('rhs'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('rhs')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('rhs')); ?></strong>
                        </span>
				<?php endif; ?>
			</div> -->
			<div class="form-group">
				<?php echo e(Form::label('blood_component', 'Blood component')); ?>

				<?php echo e(Form::select('blood_component', array('','Packed cells' => 'Packed cells','Whole blood' => 'Whole blood', 'FFP' => 'Fresh frozen plasma','CRYO' => 'CRYO Precipitates','platelets'=>'platelets'),old('blood_component'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('blood_component')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('blood_component')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('amount', 'Amount')); ?>

				<?php echo e(Form::number('amount', old('amount'), array('class' => 'form-control'))); ?>

				<?php if($errors->has('amount')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('amount')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('donation_date', 'Donation date')); ?>

				<?php echo e(Form::text('donation_date', old('donation_date'), array('class' => 'form-control standard-datepicker'))); ?>

				<?php if($errors->has('donation_date')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('donation_date')); ?></strong>
                        </span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo e(Form::label('expiry_date', 'Expiry date')); ?>

				<?php echo e(Form::text('expiry_date', old('expiry_date'), array('class' => 'form-control standard-datepicker'))); ?>

				<?php if($errors->has('expiry_date')): ?>
					<span class="text-danger">
                            <strong><?php echo e($errors->first('expiry_date')); ?></strong>
                        </span>
				<?php endif; ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/bloodbank/create.blade.php ENDPATH**/ ?>
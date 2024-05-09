<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		<li><a href="<?php echo e(route('unhls_patient.index')); ?>"><?php echo e(Lang::choice('messages.patient',2)); ?></a></li>
		<li class="active"><?php echo e(trans('messages.create-patient')); ?></li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.create-patient')); ?>

	</div>
	<div class="panel-body">
		<!-- if there are creation errors, they will show here -->

		<?php if($errors->all()): ?>
		<div class="alert alert-danger">
			<?php echo e(HTML::ul($errors->all())); ?>

		</div>
		<?php endif; ?>

		<?php echo e(Form::open(array('url' => 'unhls_patient', 'id' => 'form-create-patient'))); ?>

		<div class="form-group">
			<?php echo e(Form::label('patient_number', trans('messages.patient-number'))); ?>

			<?php echo e(Form::text('patient_number', old('patient_number'),
						array('class' => 'form-control'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('ulin', trans('messages.ulin'), array('class' => 'required'))); ?>

			<?php if($ulinFormat == 'Manual'): ?>
			<?php echo e(Form::text('ulin', old('ulin'),array('class' => 'form-control'))); ?>

			<?php else: ?>
			<?php echo e(Form::text('ulin', '',
						array('class' => 'form-control', 'readonly' =>'true', 'placeholder' => 'Auto generated upon succesfull save!'))); ?>

			<?php endif; ?>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('nin', trans('messages.national-id'))); ?>

			<?php echo e(Form::text('nin', old('nin'), array('class' => 'form-control'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('name', trans('messages.names'), array('class' => 'required'))); ?>

			<?php echo e(Form::text('name', old('name'), array('class' => 'form-control'))); ?>

			<?php if($errors->has('name')): ?>
			<span class="text-danger">
				<strong><?php echo e($errors->first('name')); ?></strong>
			</span>
			<?php endif; ?>
		</div>
		<div class="form-group">
			<label class='required' for="dob">Date Of Birth</label>
			<input type="text" name="dob" id="dob" class="form-control input-sm" size="11">
		</div>
		<div class="form-group">
			<label for="age">Age</label>
			<input type="text" name="age" id="age" class="form-control input-sm" maxlength="50%" size="4">
			<select name="age_units" id="id_age_units" class="form-control input-sm">
				<option value="Y">Years</option>
				<option value="M">Months</option>
				<option value="D">Days</option>
			</select>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('gender', trans('messages.sex'), array('class' => 'required'))); ?>

			<div><?php echo e(Form::radio('gender', '0', true)); ?>

				<span class="input-tag"><?php echo e(trans('messages.male')); ?></span>
			</div>
			<div><?php echo e(Form::radio("gender", '1', false)); ?>

				<span class="input-tag"><?php echo e(trans('messages.female')); ?></span>
			</div>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('nationality', trans('Nationality'))); ?>

			<?php echo e(Form::select('nationality', [' ' => '--- Select Nationality ---',
					'0' => trans('Gambian'),'1' => trans('Senegalese'),'2' => trans('Guinean'),'3' => trans('Other')], null,
						array('class' => 'form-control'))); ?>

			<?php if($errors->has('nationality')): ?>
			<span class="text-danger">
				<strong><?php echo e($errors->first('nationality')); ?></strong>
			</span>
			<?php endif; ?>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('village_residence', trans('messages.residence-village'),array('class' => 'required'))); ?>

			<?php echo e(Form::text('village_residence', old('village_residence'), array('class' => 'form-control',
					'required' => 'required'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('village_workplace', trans('messages.workplace-village'))); ?>

			<?php echo e(Form::text('village_workplace', old('village_workplace'), array('class'=>'form-control'))); ?>

			<?php if($errors->has('village_workplace')): ?>
			<span class="text-danger">
				<strong><?php echo e($errors->first('village_workplace')); ?></strong>
			</span>
			<?php endif; ?>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('address', trans('messages.physical-address'))); ?>

			<?php echo e(Form::text('address', old('address'), array('class' => 'form-control'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('occupation', trans('messages.occupation'))); ?>

			<?php echo e(Form::text('occupation', old('occupation'), array('class' => 'form-control'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('phone_number', trans('messages.phone-number'))); ?>

			<?php echo e(Form::text('phone_number', old('phone_number'), array('class' => 'form-control'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('email', trans('messages.email-address'))); ?>

			<?php echo e(Form::email('email', old('email'), array('class' => 'form-control'))); ?>

		</div>
		<div class="margin-right:20px;">
			<?php echo e(Form::submit('Request Test', array('class' => 'btn btn-info', 'name' => 'submitbutton'))); ?>


			<?php echo e(Form::submit('Save', array('class' => 'btn btn-success', 'name' => 'submitbutton'))); ?>

		</div>

		<?php echo e(Form::close()); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_patient/create.blade.php ENDPATH**/ ?>
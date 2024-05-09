<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('unhls_patient.index')); ?>"><?php echo e(Lang::choice('messages.patient',2)); ?></a></li>
		  <li class="active"><?php echo e(trans('messages.edit-patient')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-edit"></span>
			<?php echo e(trans('messages.edit-patient-details')); ?>

		</div>
		<div class="panel-body">
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>
			<?php echo e(Form::model($patient, array('route' => array('unhls_patient.update', $patient->id), 'method' => 'PUT',
				'id' => 'form-edit-patient'))); ?>


				<div class="form-group">
					<?php echo e(Form::label('patient_number', trans('messages.patient-number'))); ?>

					<?php echo e(Form::text('patient_number', old('patient_number'),
						array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('nin', trans('messages.national-id'))); ?>

					<?php echo e(Form::text('nin', old('nin'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('ulin', trans('messages.ulin'), array('class' => 'required'))); ?>

					<?php echo e(Form::text('ulin', $patient->ulin,	array('class' => 'form-control', 'readonly' =>'true'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('name', Lang::choice('messages.name',1))); ?>

					<?php echo e(Form::text('name', old('name'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('dob', trans('messages.date-of-birth'), ['class' => 'required'])); ?>

					<?php echo e(Form::text('dob', old('dob'), array('class' => 'form-control  input-sm', 'size' => '11'))); ?>

				</div>
				<div class="form-group">
					<label class='required' for="age">Age</label>
					<input type="text" name="age" id="age" class="form-control input-sm" size="11">
					<select name="age_units" id="id_age_units" class="form-control input-sm">
						<option value="Y">Years</option>
						<option value="M">Months</option>
						<option value="D">Days</option>
					</select>
				</div>


                <div class="form-group">
					<?php echo e(Form::label('gender', trans('messages.sex'), array('class' => 'required'))); ?>

					<div><?php echo e(Form::radio('gender', '0', true)); ?>

					<span class="input-tag"><?php echo e(trans('messages.male')); ?></span></div>
					<div><?php echo e(Form::radio("gender", '1', false)); ?>

					<span class="input-tag"><?php echo e(trans('messages.female')); ?></span></div>
				</div>
				<div class="form-group">
					<?php echo e(Form::label('nationality', trans('Nationality'))); ?>

					<?php echo e(Form::select('nationality', [' ' => '--- Select Nationality ---',
					'0' => trans('Gambian'),'1' => trans('Senegalese'),'2' => trans('Guinean'), '3' => trans('Other')], null,
						array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('village_residence', trans('messages.residence-village'), array('class' => 'required'))); ?>

					<?php echo e(Form::text('village_residence', old('village_residence'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('village_workplace', trans('messages.workplace-village'))); ?>

					<?php echo e(Form::text('village_workplace', old('village_workplace'), array('class'=>'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('address', trans('messages.physical-address'))); ?>

					<?php echo e(Form::text('address', old('address'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('occupation', trans('messages.occupation'))); ?>

					<?php echo e(Form::text('occupation', old('occupation'), array('class' => 'form-control'))); ?>

				<div class="form-group">
					<?php echo e(Form::label('phone_number', trans('messages.phone-number'), array('class' => 'required'))); ?>

					<?php echo e(Form::text('phone_number', old('phone_number'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('email', trans('messages.email-address'))); ?>

					<?php echo e(Form::email('email', old('email'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group actions-row">
					<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.save-request'),
						['class' => 'btn btn-primary', 'onclick' => 'submit()'])); ?>

				</div>

			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_patient/edit.blade.php ENDPATH**/ ?>
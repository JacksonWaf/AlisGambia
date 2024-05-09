<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		<li><a href="<?php echo e(route('equipmentsupplier.index')); ?>"><?php echo e(trans('messages.equipment-breakdown-list')); ?></a></li>
		<li class="active"><?php echo e(Lang::choice('messages.equipment-breakdown',2)); ?></li>
	</ol>

</div>
<?php if(Session::has('message')): ?>
<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<?php if($errors->all()): ?>
<div class="alert alert-danger">
	<?php echo e(HTML::ul($errors->all())); ?>

</div>
<?php endif; ?>


<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="ion-gear-a"></span>
		<?php echo e(Lang::choice('messages.equipment-breakdown',2)); ?>

	</div>
	<div class="panel-body">


		<?php echo e(Form::open(array('url' => 'equipmentbreakdown/store', 'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator'))); ?>


		<fieldset>
			<h1 class="panel-title" style="text-align:center"><?php echo e(HTML::image(Config::get('kblis.organization-logo'),  Config::get('kblis.country') . trans('messages.court-of-arms'), array('width' => '150px'))); ?>

				<br>
				<strong><?php echo e(strtoupper(Config::get('constants.FACILITY_REQUEST_FORM_HEADER'))); ?></strong>
			</h1>
			<br>
			<br>
			1. Facility Information
			<div class="panel panel-warning">
				<div class="form-group">
					<?php echo e(Form::label('facility_id', 'Facility Name', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('facility_id',Auth::user()->facility->name,['class' => 'form-control','rows'=>'5','readonly'])); ?>


					<?php echo e(Form::label('facility_code', 'Facility Code:', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('facility_code',Auth::user()->facility->code,['class' => 'form-control','rows'=>'5','readonly'])); ?>


					<?php echo e(Form::label('facility_level', 'Facility Level:', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('facility_level',Auth::user()->facility->level->level,['class' => 'form-control col-sm-4','rows'=>'5','readonly'])); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('district_id', 'District Name:', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('district_id',Auth::user()->facility->district->name,['class' => 'form-control col-sm-4','rows'=>'5','readonly'])); ?>



					<?php echo e(Form::label('report_date', 'Date Of Report', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('report_date', old('report_date'), array('class' => 'form-control col-sm-4 standard-datepicker', 'id' => 'report_date','required'=>'required'))); ?>

				</div>
			</div>

			2. Equipment Information
			<div class="panel panel-warning">

				<div class="form-group">
					<?php echo e(Form::label('equipment_code', 'Equipment Code:',['class'=>'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('equipment_code',old('equipment_id'), array('class' => 'form-control col-sm-4'))); ?>



					<?php echo e(Form::label('equipment_type', 'Equipment Type', array('class'=>'col-lg-2'))); ?>

					<?php echo e(Form::select('equipment_type', array(null => 'Select')+App\Models\UNHLSEquipmentInventory::pluck('name','id')->toArray(), old('equipment_id'), array('class' => 'form-control col-sm-4', 'id' => 'equipment_id', 'required'=>'required'))); ?>


					<?php echo e(Form::label('equipment_id', 'Equipment Name', array('class'=>'col-lg-2'))); ?>

					<?php echo e(Form::select('equipment_id', array(null => 'Select')+App\Models\UNHLSEquipmentInventory::pluck('name','id')->toArray(), old('equipment_id'), array('class' => 'form-control col-sm-4', 'id' => 'equipment_id', 'required'=>'required'))); ?>




					<?php if($errors->has('equipment_id')): ?>
					<span class="text-danger">
						<strong><?php echo e($errors->first('equipment_id')); ?></strong>
					</span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<?php echo e(Form::label('problem', 'Description of Problem:',['class'=>' col-lg-2 control-label'])); ?>

					<?php echo e(Form::textarea('problem',old('problem'), array('class' => 'form-control col-sm-4','rows'=>'2'))); ?>

				</div>
				<br>
				<div class="form-inline">
					Reason for equipment failure<small><i>(select all that apply):</i></small>
					<br>
					<br>
					<div class="form-group">
						<div class="radio-inline"><?php echo e(Form::radio('equipment_failure[]', 'Equipment is overdue for service', false)); ?> <span class="input-tag">Equipment is overdue for service</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("equipment_failure[]", 'Accident Occured', false)); ?> <span class="input-tag">Accident Occured</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("equipment_failure[]", 'Missed Service Schedule', false)); ?> <span class="input-tag">Missed Service Schedule</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("equipment_failure[]", 'Too old equipment', false)); ?> <span class="input-tag">Too old equipment</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("equipment_failure[]", 'Poor maintained', false)); ?> <span class="input-tag">Poor maintained</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("equipment_failure[]", 'Unkown reason for failure', false)); ?> <span class="input-tag">Unkown reason for failure</span></div>
					</div>
				</div>
				<br>
				<br>

				<div class="form-group">
					<?php echo e(Form::label('action_taken', 'Actions taken at facility lab:', ['class'=>' col-lg-2 control-label'])); ?>

					<?php echo e(Form::textarea('action_taken',old('action_taken'), array('class' => 'form-control col-sm-4','rows'=>'2'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('reporting_office', 'Name of reporting Officer:',['class'=>' col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('reporting_officer',old('reporting_officer'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('reporting_officer_contact', 'Mobile Telephone:',['class'=>' col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('reporting_officer_contact',old('reporting_officer_contact'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('reporting_officer_email', 'Email Contact:',['class'=>' col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('reporting_officer_email',old('reporting_officer_email'), array('class' => 'form-control col-sm-4'))); ?>


				</div>
			</div>

			3. Information on Intervention from higher levels <small><i>(to be filled by intervening authority)</i></small>
			<div class="panel panel-warning">

				Specify Intervening Authority and date of intervention:
				<br>
				<br>
				<div class="form-inline">
					<br>

					<div class="form-group">
						<?php echo e(Form::label('intervention_authority', 'Specify intervening authority and date of intervention:', array('class' =>'col-sm-2 required'))); ?>

						<div class="radio-inline"><?php echo e(Form::radio('intervention_authority', 'Biomedical Engineer', false)); ?> <span class="input-tag">Biomedical Engineer</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("intervention_authority", 'Supplier', false)); ?> <span class="input-tag">Supplier</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("intervention_authority", 'Regional Workshop', false)); ?> <span class="input-tag">Regional Workshop</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("intervention_authority", 'NPHL', false)); ?> <span class="input-tag">NPHL</span></div>
					</div>
					<br>

					<div class="form-group">
						<?php echo e(Form::label('action_taken', 'Actions Taken:', ['class' => 'col-lg-2 control-label'])); ?>

						<?php echo e(Form::textarea('action_taken',old('action_taken'), array('class' => 'form-control col-sm-4','rows'=>'2'))); ?>


						<?php echo e(Form::label('conclusion', 'Conclusion / Reccomendations:', ['class' => 'col-lg-2 control-label'])); ?>

						<?php echo e(Form::textarea('conclusion',old('conclusion'), array('class' => 'form-control col-sm-4','rows'=>'2'))); ?>


					</div>
				</div>
			</div>

			4. Facility Verification Information <small><i>(to be filled by facility after equipment breakdown incident is rectified)</i></small>
			<div class="panel panel-warning">

				<div class="form-group">
					<br>

					<?php echo e(Form::label('verified_by', 'Verified By:', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('verified_by',null,['class' => 'form-control','rows'=>'5'])); ?>


					<?php echo e(Form::label('verification_date', 'Verification Date:', ['class' => 'col-lg-2 control-label'])); ?>

					<?php echo e(Form::text('verification_date', old('verification_date'), array('class' => 'form-control standard-datepicker','required'=>'required'))); ?>

				</div>

			</div>


			<div class="form-group">
				<div class="col-lg-7 col-lg-offset-2">
					<a href="<?php echo e(url('/equipmentbreakdown')); ?>" class="btn btn-default">Cancel</a>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
	</div>

	</fieldset>

	<?php echo e(Form::close()); ?>


	<?php
	Session::put('SOURCE_URL', URL::full()); ?>
</div>

</div>
<script>
	$(".standard-datepicker").datepicker({
		maxDate: 0
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/equipment/breakdown/create.blade.php ENDPATH**/ ?>
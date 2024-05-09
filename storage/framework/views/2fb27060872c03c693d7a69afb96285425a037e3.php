	
<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('bbincidence.index')); ?>">BB Incidents</a></li>
		  <li class="active">Updating BB Incident Clinical Intervention</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-edit"></span>
			Updating Clinical Intervention for <?php echo e($bbincidence->serial_no); ?>

		</div>
		<div class="panel-body">
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>
<?php echo e(Form::model($bbincidence, array('route' => array('bbincidence.clinicalupdate', $bbincidence->id), 'method' => 'PUT',
				'id' => 'form-edit-bbincidence'))); ?>


	<div class="panel panel-info">
			<!--<div class="panel-heading"><strong>Bio-safety and Bio-security Incident/Occurrence Details (<i>to be completed by the person affected or his/her supervisor</i>)</strong></div>
			--><div class="panel-body">

				<div class="row view-striped">
					<div class="col-sm-2"><strong>ID #</strong></div>
					<div class="col-sm-4" style="color:red;"><strong><?php echo e($bbincidence->serial_no); ?></strong></div>

					<div class="col-sm-2"><strong>Facility</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->facility->code); ?> - <?php echo e($bbincidence->facility->name); ?></div>
				</div>

				<div class="row">
					<div class="col-sm-2"><strong>Occurrence Time</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->occurrence_date); ?> <?php echo e($bbincidence->occurrence_time); ?></div>

					<div class="col-sm-2"><strong>Description</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->description); ?></div>
				</div>

				<div class="row view-striped">
					<div class="col-sm-2"><strong>Laboratory Section</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->lab_section); ?></div>

					<div class="col-sm-2"><strong>First Aid / Immediate Actions</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->firstaid); ?></div>
				</div>

				<div class="row">
					<div class="col-sm-2"><strong>Nature of Incident/Occurrence</strong></div>
					<div class="col-sm-4">
						<?php $__currentLoopData = $bbincidence->bbnature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($nature->name); ?> (<?php echo e($nature->priority); ?>/<?php echo e($nature->class); ?>)<br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>

					<div class="col-sm-2"><strong>Completion Status</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->status); ?></div>
				</div>

				<div class="row">
					<div class="col-sm-12" style="text-align:right;"><b>**Record created by <?php echo e($bbincidence->user->name); ?> at <?php echo e($bbincidence->created_at); ?></b></div>
				</div>

			</div>
			</div>

<div class="panel panel-info"> <!-- Clinical Intervention -->
	<div class="panel-heading"><strong>Clinical Intervention if applicable (<i>to be filled by the clinician</i>)</strong></div>
	<div class="panel-body">
				<div class="form-group">
					<?php echo e(Form::label('extent', 'Extent/Magnitude of injury', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('extent', old('extent'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('intervention', 'Clinical Intervention', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::textarea('intervention', old('intervention'), array('size' => '10x2', 'class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('intervention_date', 'Date of Intervention', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('intervention_date', old('intervention_date'), array('class' => 'form-control standard-datepicker col-sm-4'))); ?>


					<?php echo e(Form::label('intervention_time', 'Time of Intervention', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('intervention_time', old('intervention_time'), array('class' => 'form-control col-sm-4',
					'placeholder' => 'hh:mm (24hr Format)'))); ?>

					<div class='input-group date' id='intervention_time'>
						<script type="text/javascript">
							$(function () {
								$('#intervention_time').datetimepicker({format:'LT'});
							});
						</script>
					</div>
				</div>

				<span style="font-weight: bold;">Medical Officer</span>
				<div class="form-group">
					<?php echo e(Form::label('mo_fname', 'First Name', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('mo_fname', old('mo_fname'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('mo_lname', 'Last Name', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('mo_lname', old('mo_lname'), array('class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('mo_designation', 'Designation', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('mo_designation', old('mo_designation'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('mo_telephone', 'Telephone', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('mo_telephone', old('mo_telephone'), array('class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('intervention_followup', 'Intervention Followup', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::textarea('intervention_followup', old('intervention_followup'), array('size' => '10x2', 'class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('', '', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
						array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

				</div>
	</div>
</div>


<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/bbincidence/clinicaledit.blade.php ENDPATH**/ ?>
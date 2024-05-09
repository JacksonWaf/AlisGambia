	
<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('bbincidence.index')); ?>">BB Incidents</a></li>
		  <li class="active">Updating Major Incident Response</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-edit"></span>
			Updating Major Incident Response for <?php echo e($bbincidence->serial_no); ?>

		</div>
		<div class="panel-body">
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>
<?php echo e(Form::model($bbincidence, array('route' => array('bbincidence.responseupdate', $bbincidence->id), 'method' => 'PUT',
				'id' => 'form-edit-bbincidence'))); ?>


	<div class="panel panel-info">
			<!--<div class="panel-heading"><strong>Bio-safety and Bio-security Incident/Occurrence Details (<i>to be completed by the person affected or his/her supervisor</i>)</strong></div>
			--><div class="panel-body">

				<div class="row view-striped">
					<div class="col-sm-2"><strong>ID #</strong></div>
					<div class="col-sm-4" style="color:red;"><strong><?php echo e($bbincidence->serial_no); ?></strong></div>

					<div class="col-sm-2"><strong>Facility</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->facility->name); ?></div>
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
					<!--<div class="col-sm-4"><?php echo e($bbincidence->occurrence); ?> </div>-->
					<div class="col-sm-4">
						<?php $__currentLoopData = $bbincidence->bbnature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($nature->name); ?> (<?php echo e($nature->priority); ?>/<?php echo e($nature->class); ?>)<br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>

					<div class="col-sm-2"><strong>Completion Status</strong></div>
					<div class="col-sm-4"><?php echo e($bbincidence->status); ?></div>
				</div>

			</div>
			</div>


<div class="panel panel-info"> <!-- Major Incident Response -->
	<div class="panel-heading"><strong>Major Incident Response (<i>to be filled by National Bio Risk Management Office</i>)</strong></div>
	<div class="panel-body">
				<div class="form-group">
					<?php echo e(Form::label('findings', 'Investigation Findings', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::textarea('findings', old('findings'), array('size' => '10x1', 'class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('improvement_plan', 'Improvement Plan', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::textarea('improvement_plan', old('improvement_plan'), array('size' => '10x1', 'class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('response_date', 'Response Date', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('response_date', old('response_date'), array('class' => 'form-control standard-datepicker col-sm-4'))); ?>


					<?php echo e(Form::label('response_time', 'Response Time', array('class' => 'col-sm-2', 'placeholder' => 'hh:mm (24hr Format)'))); ?>

					<?php echo e(Form::text('response_time', old('response_time'), array('class' => 'form-control col-sm-4',
					'placeholder' => 'hh:mm (24hr Format)'))); ?>

				</div>

				<span style="font-weight: bold;">BRM representative</span>
				<div class="form-group">
					<?php echo e(Form::label('brm_fname', 'First Name', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('brm_fname', old('brm_fname'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('brm_lname', 'Last Name', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('brm_lname', old('brm_lname'), array('class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('brm_designation', 'Designation', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('brm_designation', old('brm_designation'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('brm_telephone', 'Telephone', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('brm_telephone', old('brm_telephone'), array('class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group actions-row">
					<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.'SAVE',
						['class' => 'btn btn-primary', 'onclick' => 'submit()'])); ?>

				</div>
	</div>
</div>


<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/bbincidence/responseedit.blade.php ENDPATH**/ ?>
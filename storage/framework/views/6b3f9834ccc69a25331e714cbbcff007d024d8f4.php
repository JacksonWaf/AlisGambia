	
<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('bbincidence.index')); ?>">BB Incidents</a></li>
		  <li class="active">Updating BB Incident Analysis</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-edit"></span>
			Updating Incident Analysis for <?php echo e($bbincidence->serial_no); ?>

		</div>
		<div class="panel-body">
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>
<?php echo e(Form::model($bbincidence, array('route' => array('bbincidence.analysisupdate', $bbincidence->id), 'method' => 'PUT',
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


<div class="panel panel-info"> <!-- Incident Analysis -->
	<div class="panel-heading"><strong>Incident Analysis (<i>to be completed by facility bio-safety officer</i>)</strong></div>
	<div class="panel-body">
				<div class="form-group">
					<?php echo e(Form::label('cause', 'Cause of Incident', array('class' => 'col-sm-2'))); ?>


				<div class="form-pane panel panel-default">
					<div class="container-fluid">
						<?php
							$cnt = 0;
							$zebra = "";
						?>
						<?php $__currentLoopData = $causes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<!-- <?php echo e(($cnt%4==0)?"<div class='row $zebra'>":""); ?>

							<?php
								$cnt++;
								$zebra = (((int)$cnt/4)%2==1?"row-striped":"");
							?> -->
							<div class="col-md-3">
								<label  class="checkbox">
								<input type="checkbox" name="cause[]" value="<?php echo e($value->id); ?>" title=""
								<?php echo e(in_array($value->id, $bbincidence->bbcause->pluck('id')->toArray())?"checked":""); ?> />
								<?php echo e($value->causename); ?>

								</label>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>

				</div>



				<div class="form-group">
					<?php echo e(Form::label('corrective_action', 'Corrective Action', array('class' => 'col-sm-2'))); ?>


				<div class="form-pane panel panel-default">
					<div class="container-fluid">
						<?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-3">
								<label  class="checkbox">
								<input type="checkbox" name="corrective_action[]" value="<?php echo e($value->id); ?>" title=""
								<?php echo e(in_array($value->id, $bbincidence->bbaction->pluck('id')->toArray())?"checked":""); ?> />
								<?php echo e($value->actionname); ?>

								</label>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('referral_status', 'Referral Status', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::select('referral_status', [
					'' => '--- select ---',
					'Ressolved and not referred' => 'Ressolved and not referred',
					'Referred to District Level' => 'Referred to District Level',
					'Referred to Regional Level' => 'Referred to Regional Level',
					'Referred to National Level' => 'Referred to National Level'],
					old('referral_status'), array('class' => 'form-control'))); ?>


					<?php echo e(Form::label('status', 'Completion Status', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::select('status', [
					'Ongoing' => 'Ongoing',
					'Completed' => 'Completed'],
					old('status'), array('class' => 'form-control'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('analysis_date', 'Analysis Date', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('analysis_date', old('analysis_date'), array('class' => 'form-control standard-datepicker col-sm-4'))); ?>


					<?php echo e(Form::label('analysis_time', 'Analysis Time', array('class' => 'col-sm-2', 'placeholder' => 'hh:mm (24hr Format)'))); ?>

					<?php echo e(Form::text('analysis_time', old('analysis_time'), array('class' => 'form-control col-sm-4',
					'placeholder' => 'hh:mm (24hr Format)'))); ?>

				</div>

				<span style="font-weight: bold;">Bio-Safety Officer</span>
				<div class="form-group">
					<?php echo e(Form::label('bo_fname', 'First Name', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('bo_fname', old('bo_fname'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('bo_lname', 'Last Name', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('bo_lname', old('bo_lname'), array('class' => 'form-control col-sm-4'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('bo_designation', 'Designation', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('bo_designation', old('bo_designation'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('bo_telephone', 'Telephone', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('bo_telephone', old('bo_telephone'), array('class' => 'form-control col-sm-4'))); ?>

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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/bbincidence/analysisedit.blade.php ENDPATH**/ ?>
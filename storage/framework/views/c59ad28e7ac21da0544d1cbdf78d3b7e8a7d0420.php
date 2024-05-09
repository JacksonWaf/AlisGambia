<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.report',2)); ?></li>
	  <li class="active"><?php echo e(trans('messages.user-statistics-report')); ?></li>
	</ol>
</div>

<?php echo e(Form::open(array('route' => array('reports.aggregate.userStatistics'), 'class' => 'form-inline', 'role' => 'form'))); ?>


<div class='container-fluid'>
	<div class="row">
		<div class="col-md-4"><!-- From Datepicker-->
	    	<div class="row">
				<div class="col-md-2">
					<?php echo e(Form::label('start', trans("messages.from"))); ?>

				</div>
				<div class="col-md-10">
					<?php echo e(Form::text('start', isset($input['start'])?$input['start']:date('Y-m-d'),
				        array('class' => 'form-control standard-datepicker'))); ?>

			    </div>
	    	</div><!-- /.row -->
	    </div>
	    <div class="col-md-4"><!-- To Datepicker-->
	    	<div class="row">
				<div class="col-md-4">
			    	<?php echo e(Form::label('end', trans("messages.to"))); ?>

			    </div>
				<div class="col-md-8">
				    <?php echo e(Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
				        array('class' => 'form-control standard-datepicker'))); ?>

		        </div>
	    	</div><!-- /.row -->
	    </div>
    </div><!-- /.row -->
    <br />
	<div class="row">
       <div class="col-md-4">
	    	<div class="row">
		        <div class="col-md-2">
		        	<?php echo e(Form::label('user', Lang::choice('messages.user',1))); ?>

		        </div>
		        <div class="col-md-10">
		            <?php echo e(Form::select('user', array(0 => '-- All --')+ App\Models\User::all()->sortBy('name')->pluck('name','id')->toArray(),
		            	isset($input['user'])?$input['user']:0, array('class' => 'form-control'))); ?>

		        </div>
	        </div>
        </div>
        <div class="col-md-4">
	    	<div class="row">
		        <div class="col-md-4">
		        	<?php echo e(Form::label('report_type', Lang::choice('messages.report-type',1))); ?>

		        </div>
		        <div class="col-md-8">
		            <?php echo e(Form::select('report_type', $reportTypes,
		            	isset($input['report_type'])?$input['report_type']:0, array('class' => 'form-control'))); ?>

		        </div>
	        </div>
	    </div>
	    <div class="col-md-1">
		    <?php echo e(Form::button("<span class='glyphicon glyphicon-filter'></span> ".trans('messages.view'),
		        array('class' => 'btn btn-info', 'id' => 'filter', 'type' => 'submit'))); ?>

        </div>
         <div class="col-sm-1">
					<?php echo e(Form::submit(trans('messages.export-to-word'), 
			    		array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))); ?>

				</div>
	</div><!-- /.row -->
</div><!-- /.container-fluid -->

<?php echo e(Form::close()); ?>


<br />

<div class="panel panel-primary">

	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.user-statistics-report')); ?>

	</div>

	<div class="panel-body">
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
		<?php endif; ?>

		<div class="table-responsive">

			<div><strong><?php echo e($reportTitle); ?></strong></div><br />

			<table class="table table-striped table-hover table-condensed search-table">
				<?php if($selectedReport==0): ?> <!-- Summary Report-->
					<thead>
						<tr>
							<th></th>
							<th><?php echo e(Lang::choice('messages.name',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.received-tests',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.accepted-specimen',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.rejected-specimen',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.performed-tests',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.verified-tests',1)); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;?>
						<?php $__empty_1 = true; $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<tr>
								<td><?php echo e($i++); ?></td>
								<td><?php echo e($row->name); ?></td>
								<td><?php echo e($row->created); ?></td>
								<td><?php echo e($row->specimen_registered); ?></td>
								<td><?php echo e($row->specimen_rejected); ?></td>
								<td><?php echo e($row->tested); ?></td>
								<td><?php echo e($row->verified); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<tr>
								<td><?php echo e(Lang::choice('messages.no-data-found',1)); ?></td>
							</tr>
						<?php endif; ?>
					</tbody>

				<?php elseif($selectedReport == 1): ?> <!-- Patients Registry Report-->
					<thead>
						<tr>
							<th></th>
							<th><?php echo e(Lang::choice('messages.patient-number',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.name',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.gender',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.age',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.registration-date',1)); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;?>
						<?php $__empty_1 = true; $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<?php $patient = App\Models\UnhlsPatient::find($row->id);?>
							<tr>
								<td><?php echo e($i++); ?></td>
								<td><?php echo e($patient->patient_number); ?></td>
								<td><?php echo e($patient->name); ?></td>
								<td><?php echo e($patient->getGender(false)); ?></td>
								<td><?php echo e($patient->getAge()); ?></td>
								<td><?php echo e($patient->created_at); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<tr>
								<td colspan='6'><?php echo e(Lang::choice('messages.no-data-found',1)); ?></td>
							</tr>
						<?php endif; ?>
					</tbody>

				<?php elseif($selectedReport == 2): ?> <!-- Specimens Registry Report-->
					<thead>
						<tr>
							<th><?php echo e(Lang::choice('messages.specimen-number',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.specimen-type',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.patient-number',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.patient',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.registration-date',1)); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__empty_1 = true; $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<?php $specimen = App\Models\UnhlsSpecimen::find($row->id);?>
							<tr>
								<td><?php echo e($specimen->id); ?></td>
								<td><?php echo e($specimen->specimenType->name); ?></td>
								<td><?php echo e($specimen->test->visit->patient->patient_number); ?></td>
								<td><?php echo e($specimen->test->visit->patient->name); ?></td>
								<td><?php echo e($specimen->time_accepted); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<tr>
								<td colspan='6'><?php echo e(Lang::choice('messages.no-data-found',1)); ?></td>
							</tr>
						<?php endif; ?>
					</tbody>

				<?php elseif($selectedReport == 3 || $selectedReport == 4): ?> <!-- Tests Registry Report-->
					<thead>
						<tr>
							<th><?php echo e(Lang::choice('messages.test-id',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.test-type',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.patient-number',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.patient',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.specimen-id',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.registration-date',1)); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__empty_1 = true; $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<?php $test = App\Models\UnhlsTest::find($row->id);?>
							<tr>
								<td><?php echo e($test->id); ?></td>
								<td><?php echo e($test->testType->name); ?></td>
								<td><?php echo e($test->visit->patient->patient_number); ?></td>
								<td><?php echo e($test->visit->patient->name); ?></td>
								<td><?php echo e($test->specimen->id); ?></td>
								<td><?php echo e($test->time_completed); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<tr>
								<td colspan='6'><?php echo e(Lang::choice('messages.no-data-found',1)); ?></td>
							</tr>
						<?php endif; ?>
					</tbody>

				<?php endif; ?>

			</table>
		</div><!--/.table-responsive -->
	</div>
</div><!--/.panel -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/userstatistics/index.blade.php ENDPATH**/ ?>
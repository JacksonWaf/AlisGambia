<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><a href="<?php echo e(route('reports.patient.index')); ?>"><?php echo e(Lang::choice('messages.report', 2)); ?></a></li>
	  <li class="active"><?php echo e(trans('messages.daily-log')); ?></li>
	</ol>
</div>
<div class='container-fluid'>
    <?php echo e(Form::open(array('route' => array('reports.daily.log'), 'class' => 'form-inline'))); ?>

    <div class='row'>
    	<div class="col-sm-4">
	    	<div class="row">
				<div class="col-sm-2">
				    <?php echo e(Form::label('start', trans('messages.from'))); ?>

				</div>
				<div class="col-sm-2">
				    <?php echo e(Form::text('start', isset($input['start'])?$input['start']:date('Y-m-d'),
			                array('class' => 'form-control standard-datepicker'))); ?>

		        </div>
			</div>
		</div>
		<div class="col-sm-4">
	    	<div class="row">
				<div class="col-sm-2">
				    <?php echo e(Form::label('end', trans('messages.to'))); ?>

				</div>
				<div class="col-sm-2">
				    <?php echo e(Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
			                array('class' => 'form-control standard-datepicker'))); ?>

		        </div>
			</div>
		</div>
		<div class="col-sm-4">
	    	<div class="row">
				<div class="col-sm-3">
				  	<?php echo e(Form::button("<span class='glyphicon glyphicon-filter'></span> ".trans('messages.view'),
		                array('class' => 'btn btn-info', 'id' => 'filter', 'type' => 'submit'))); ?>

		        </div>
		        <div class="col-sm-1">
					<?php echo e(Form::submit(trans('messages.export-to-word'),
			    		array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))); ?>

				</div>
			</div>
		</div>
	</div>
	<div class='row spacer'>
		<div class="col-sm-12">
	    	<div class="row">
				<div class="col-sm-2">
				  	<label class="radio-inline">
						<?php echo e(Form::radio('records', 'tests', true, array('data-toggle' => 'radio',
						  'id' => 'tests'))); ?> <?php echo e(trans('messages.test-records')); ?>

					</label>
				</div>
				<div class="col-sm-2">
				    <label class="radio-inline">
						<?php echo e(Form::radio('records', 'patients', false, array('data-toggle' => 'radio',
						  'id' => 'patients'))); ?> <?php echo e(trans('messages.patient-records')); ?>

					</label>
				</div>
				<div class="col-sm-2">
				    <label class="radio-inline">
						<?php echo e(Form::radio('records', 'rejections', false, array('data-toggle' => 'radio',
						  'id' => 'specimens'))); ?> <?php echo e(trans('messages.rejected-specimen')); ?>

					</label>
				</div>
				<div class="col-sm-2">
					<label class="radio-inline">
			    		<?php echo e(Form::radio('pending_or_all', 'pending', ($pendingOrAll=='pending')?true:false, array('data-toggle' => 'radio',
						'id' => 'pending'))); ?> <?php echo e(trans('messages.pending-tests')); ?>

					</label>
				</div>
				<div class="col-sm-2">
					<label class="radio-inline">
						<?php echo e(Form::radio('pending_or_all', 'complete', ($pendingOrAll=='complete')?true:false, array('data-toggle' => 'radio',
						'id' => 'pending'))); ?> <?php echo e(trans('messages.complete-tests')); ?>

					</label>
				</div>
				<div class="col-sm-2">
				    <label class="radio-inline">
				    	<?php echo e(Form::radio('pending_or_all', 'all', ($pendingOrAll=='all')?true:false, array('data-toggle' => 'radio',
						  'id' => 'all'))); ?> <?php echo e(trans('messages.all-tests')); ?>

					</label>
				</div>
		  	</div>
	  	</div>
  	</div>
  	<div class='row spacer'>
	  	<div class="col-sm-6">
	    	<div class="row">
				<div class="col-sm-3">
				  	<?php echo e(Form::label('description',  Lang::choice('messages.test-category', 2))); ?>

				 </div>
			  	<div class="col-sm-3">
				  	<?php echo e(Form::select('section_id', array(''=>trans('messages.select-lab-section'))+$labSections,
							    		Request::old('testCategory') ? Request::old('testCategory') : $testCategory,
											array('class' => 'form-control', 'id' => 'section_id'))); ?>

				</div>
			</div>
		</div>
		<div class="col-sm-6">
	    	<div class="row">
				<div class="col-sm-3">
					<?php echo e(Form::label('description', Lang::choice('messages.test-type', 1))); ?>

				</div>
				<div class="col-sm-3">
					<?php echo e(Form::select('test_type', array('' => trans('messages.select-test-type'))+$testTypes,
							    		Request::old('testType') ? Request::old('testType') : $testType,
											array('class' => 'form-control', 'id' => 'test_type'))); ?>

				</div>
			</div>
		</div>
	</div>
	<?php echo e(Form::close()); ?>

</div>
<br />
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span> <?php echo e(trans('messages.daily-log')); ?> - <?php echo e(trans('messages.test-records')); ?>

	</div>

	<div class="panel-body">
	<!-- if there are search errors, they will show here -->
		<?php if($error!=''): ?>
			<div class="alert alert-info"><?php echo e($error); ?></div>
		<?php else: ?>
		<div id="test_records_div">
			<?php echo $__env->make("reportHeader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<strong>
				<p>
					<?php echo e(trans('messages.test-records')); ?>


					<?php if($pendingOrAll == 'pending'): ?>
						<?php echo e(' - '.trans('messages.pending-only')); ?>

					<?php elseif($pendingOrAll == 'all'): ?>
						<?php echo e(' - '.trans('messages.all-tests')); ?>

					<?php else: ?>
						<?php echo e(' - '.trans('messages.complete-tests')); ?>

					<?php endif; ?>

					<?php if($testCategory): ?>
						<?php echo e(' - '.App\Models\TestCategory::find($testCategory)->name); ?>

					<?php endif; ?>

					<?php if($testType): ?>
						<?php echo e(' ('.App\Models\TestType::find($testType)->name.') '); ?>

					<?php endif; ?>
					<?php echo e(Lang::choice('messages.total',1).' '.$counts .'<br>'); ?>

					<?php $from = isset($input['start'])?$input['start']:date('d-m-Y');?>
					<?php $to = isset($input['end'])?$input['end']:date('d-m-Y');?>
					<?php if($from!=$to): ?>
						<?php echo e(trans('messages.from').' '.$from.' '.trans('messages.to').' '.$to); ?>

					<?php else: ?>
						<?php echo e(trans('messages.for').' '.date('d-m-Y')); ?>

					<?php endif; ?>
				</p>
			</strong>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<th><?php echo e(trans('messages.visit-number')); ?></th>
						<th><?php echo e(trans('messages.patient-name')); ?></th>
						<th><?php echo e(trans('Gender')); ?></th>
						<th><?php echo e(trans('messages.specimen-number-title')); ?></th>
						<th><?php echo e(trans('messages.specimen')); ?></th>
						<th><?php echo e(trans('messages.lab-receipt-date')); ?></th>
						<th><?php echo e(Lang::choice('messages.test', 2)); ?></th>
						<th><?php echo e(trans('messages.tested-by')); ?></th>
						<th><?php echo e(trans('messages.test-results')); ?></th>
						<th><?php echo e(trans('messages.test-remarks')); ?></th>
						<th><?php echo e(trans('messages.results-entry-date')); ?></th>
						<th><?php echo e(trans('messages.verified-by')); ?></th>
					</tr>
					<?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<tr>
						<td><?php echo e(isset($test->visit->visit_number)?$test->visit->visit_number:$test->visit->id); ?></td>
						<td><?php echo e($test->visit->patient->name); ?></td>
						<td><?php echo e(($test->visit->patient->getGender(true))); ?></td>
						<td><?php echo e($test->getSpecimenId()); ?></td>
						<td><?php echo e($test->specimen->specimentype->name); ?></td>
						<td><?php echo e($test->specimen->time_accepted); ?></td>
						<td><?php echo e($test->testType->name); ?></td>
						<td><?php if($test->tested_by !=0): ?>
							<?php echo e($test->testedBy->name); ?>

							<?php else: ?>
							<?php echo e(trans('messages.pending')); ?>

							<?php endif; ?></td>
						<td>
							<?php $__currentLoopData = $test->testResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<p><?php echo e(App\Models\Measure::find($result->measure_id)->name); ?>: <?php echo e($result->result); ?></p>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</td>
						<td><?php echo e($test->interpretation); ?></td>
						<td><?php echo e($test->time_completed); ?></td>
						<td><?php if($test->verified_by !=0): ?>
							<?php echo e($test->verifiedBy->name); ?>

							<?php else: ?>
							<?php echo e(trans('messages.verification-pending')); ?>

							<?php endif; ?>
						</td>

					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<tr><td colspan="12"><?php echo e(trans('messages.no-records-found')); ?></td></tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/reports/daily/test.blade.php ENDPATH**/ ?>
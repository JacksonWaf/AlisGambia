<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.report',2)); ?></li>
	  <li class="active"><?php echo e(trans('messages.infection-report')); ?></li>
	</ol>
</div>
<?php echo e(Form::open(array('route' => array('reports.aggregate.infection'), 'class' => 'form-inline', 'role' => 'form'))); ?>

<!-- <div class='container-fluid'> -->
	<div class="row">
		<div class="col-md-3">
	    	<div class="row">
				<div class="col-md-2">
					<?php echo e(Form::label('start', trans("messages.from"))); ?>

				</div>
				<div class="col-md-10">
					<?php echo e(Form::text('start', isset($input['start'])?$input['start']:date('Y-m-d'),
				        array('class' => 'form-control standard-datepicker'))); ?>

			    </div>
	    	</div>
	    </div>
	    <div class="col-md-3">
	    	<div class="row">
				<div class="col-md-2">
			    	<?php echo e(Form::label('end', trans("messages.to"))); ?>

			    </div>
				<div class="col-md-10">
				    <?php echo e(Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
				        array('class' => 'form-control standard-datepicker'))); ?>

		        </div>
	    	</div>
	    </div>
        <div class="col-md-4">
	        <div class="col-md-4">
	        	<?php echo e(Form::label('test_type', Lang::choice('messages.test-category',1))); ?>

	        </div>
	        <div class="col-md-8">
	            <?php echo e(Form::select('test_category', array(0 => '-- All --')+ App\Models\TestCategory::all()->sortBy('name')->pluck('name','id')->toArray(),
	            	isset($input['test_category'])?$input['test_category']:0, array('class' => 'form-control'))); ?>

	        </div>
        </div>
	    <div class="col-md-2">
		    <?php echo e(Form::button("<span class='glyphicon glyphicon-filter'></span> ".trans('messages.view'),
		        array('class' => 'btn btn-info', 'id' => 'filter', 'type' => 'submit'))); ?>

	    </div>
	</div>
<!-- </div> -->
<?php echo e(Form::close()); ?>

<br />
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.infection-report')); ?>

	</div>
	<div class="panel-body">
	<?php if(Session::has('message')): ?>
		<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
	<?php endif; ?>
	<strong>
		<p> <?php echo e(trans('messages.infection-report')); ?> -
			<?php $from = isset($input['start'])?$input['start']:date('01-m-Y');?>
			<?php $to = isset($input['end'])?$input['end']:date('d-m-Y');?>
			<?php if($from!=$to): ?>
				<?php echo e(trans('messages.from').' '.$from.' '.trans('messages.to').' '.$to); ?>

			<?php else: ?>
				<?php echo e(trans('messages.for').' '.date('d-m-Y')); ?>

			<?php endif; ?>
		</p>
	</strong>
		<div class="table-responsive">
			<table class="table table-condensed report-table-border">
				<thead>
					<tr>
						<th rowspan="2"><?php echo e(Lang::choice('messages.test',1)); ?></th>
						<th rowspan="2"><?php echo e(Lang::choice('messages.measure',1)); ?></th>
						<th rowspan="2"><?php echo e(trans('messages.test-results')); ?></th>
						<th rowspan="2"><?php echo e(trans('messages.gender')); ?></th>
						<th colspan="<?php echo e(count($ageRanges)); ?>"><?php echo e(trans('messages.measure-age-range')); ?></th>
						<th rowspan="2"><?php echo e(trans('messages.mf-total')); ?></th>
						<th rowspan="2"><?php echo e(Lang::choice('messages.total',1)); ?></th>
						<th rowspan="2"><?php echo e(trans('messages.total-tests')); ?></th>
					</tr>
					<tr>
						<?php $__currentLoopData = $ageRanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ageRange => $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<th title='<?php echo e($description); ?>'><?php echo e($ageRange); ?></th>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tr>
				</thead>
				<tbody>
					<?php
						$testRow = '';

						$currentTest = '';
						$currentMeasure = '';
						$currentResult = '';

						$testCount = 0;
						$measureCount = 0;
						$resultCount = 0;

						$testTotal = 0;
						$resultTotal = 0;
					?>
					<?php $__empty_1 = true; $__currentLoopData = $infectionData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<?php
						$testCount++;
						$measureCount++;
						$resultCount++;

						if(strcmp($currentTest, $inf->test_name) == 0){
							$testRow.='<tr>';

							if(strcmp($currentMeasure, $inf->measure_name) != 0){
								$testRow = str_replace('NEW_MEASURE', $measureCount, $testRow);
								$testRow = str_replace('NEW_RESULT', $resultCount, $testRow);
								$testRow = str_replace('RESULT_TOTAL', $resultTotal, $testRow);

								$measureCount=0;
								$resultCount=0;
								$resultTotal = 0;

								$currentMeasure = $inf->measure_name;
								$currentResult = $inf->result;

								$testRow.='<td rowspan="NEW_MEASURE">'.$inf->measure_name.'</td>';
								$testRow.='<td rowspan="NEW_RESULT">'.$inf->result.'</td>';
							}else{
								if(strcmp($currentResult, $inf->result) != 0){
									$testRow = str_replace('NEW_RESULT', $resultCount, $testRow);
									$testRow = str_replace('RESULT_TOTAL', $resultTotal, $testRow);

									$resultCount=0;
									$resultTotal = 0;

									$currentResult = $inf->result;
									$testRow.='<td rowspan="NEW_RESULT">'.$inf->result.'</td>';
								}
							}
						}else{
							$testRow = str_replace('NEW_TEST', $testCount, $testRow);
							$testRow = str_replace('NEW_MEASURE', $measureCount, $testRow);
							$testRow = str_replace('NEW_RESULT', $resultCount, $testRow);

							$testRow = str_replace('RESULT_TOTAL', $resultTotal, $testRow);
							$testRow = str_replace('TEST_TOTAL', $testTotal, $testRow);

							echo $testRow;

							$testCount=0;
							$measureCount=0;
							$resultCount=0;

							$testTotal = 0;
							$resultTotal = 0;

							$currentTest = $inf->test_name;
							$currentMeasure = $inf->measure_name;
							$currentResult = $inf->result;

							$testRow='<tr>';
							$testRow.='<td rowspan="NEW_TEST">'.$inf->test_name.'</td>';
							$testRow.='<td rowspan="NEW_MEASURE">'.$inf->measure_name.'</td>';
							$testRow.='<td rowspan="NEW_RESULT">'.$inf->result.'</td>';
						}

						$testRow.='<td>'.$inf->gender.'</td>';
						$testRow.='<td>'.$inf->RC_U_5.'</td>';
						$testRow.='<td>'.$inf->RC_5_15.'</td>';
						$testRow.='<td>'.$inf->RC_A_15.'</td>';
						$testRow.='<td>'.($inf->RC_U_5 + $inf->RC_5_15 + $inf->RC_A_15).'</td><!-- Male|Female Total-->';

						$resultTotal += $inf->RC_U_5 + $inf->RC_5_15 + $inf->RC_A_15;

						if(strcmp($currentResult, $inf->result) == 0 && $resultCount == 0){
							$testRow.='<td rowspan="NEW_RESULT">RESULT_TOTAL</td>';
						}

						if($measureCount == 0)
							$testTotal = $inf->RC_U_5 + $inf->RC_5_15 + $inf->RC_A_15;
						else
							$testTotal += $inf->RC_U_5 + $inf->RC_5_15 + $inf->RC_A_15;

						if(strcmp($currentTest, $inf->test_name) == 0 && $testCount == 0){
							$testRow.='<td rowspan="NEW_TEST">TEST_TOTAL</td>';
						}

						$testRow.='</tr>';
						?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<tr>
							<td colspan="9">
								<?php echo e(trans('messages.no-records-found')); ?>

							</td>
						</tr>
					<?php
						$testRow = str_replace('NEW_TEST', ++$testCount, $testRow);
						$testRow = str_replace('NEW_MEASURE', ++$measureCount, $testRow);
						$testRow = str_replace('NEW_RESULT', ++$resultCount, $testRow);
						$testRow = str_replace('RESULT_TOTAL', $resultTotal, $testRow);
						$testRow = str_replace('TEST_TOTAL', $testTotal, $testRow);
					?>
					<?php echo e($testRow); ?>

					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/infection/index.blade.php ENDPATH**/ ?>
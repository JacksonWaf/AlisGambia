<style type="text/css">
	TD,
	TH {
		font-size: 8pt;
		font-variant: normal;
		font-family: DejaVu Serif;
	}

	@page  {
		margin: 100px 25px;
		margin-left: 40px;
		margin-top: 180px;
		margin-right: 25px;
	}

	header {
		position: fixed;
		top: -150px;
		left: 0px;
		right: 0px;
		height: 150px;
	}

	footer {
		position: fixed;
		bottom: -60px;
		left: 0px;
		right: 0px;
		text-align: right;
		height: 15px;
		page-break-after: always;
	}

	.pagenum:before {
		font-size: 12px;
		font-style: italic;
		content: "Page " counter(page);
	}
</style>

<body>
	<header>
		<table style="text-align:center;" border="0" width="100%">
			<tr>
				<td colspan="12" style="text-align:center;">
					<?php echo e(@HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px'))); ?>

				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					<?php echo e(strtoupper(Auth::user()->facility->name)); ?>

				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					<?php echo e(config('kblis.address-info')); ?>

				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					<?php echo e(config('kblis.telephone-number')); ?>

				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					<?php echo e(config('kblis.email-address')); ?>

				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					<?php if(isset($tests)): ?>
					<?php if(!empty($tests->first()->approved_by)): ?>
					<b> <?php echo e(config('kblis.request-form')); ?></b>
					<?php else: ?>
					<b> <?php echo e(config('kblis.request-form')); ?> </b>
					<?php endif; ?>
					<?php endif; ?>
				</td>
			</tr>
		</table>
	</header>
	<br>
	<br>
	<table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
		<tr>
			<td width="20%"><b>Patient ID</b></td>
			<td width="30%"><?php echo e($patient->ulin); ?></td>
			<td width="20%"><b><?php echo e(trans('messages.report-date')); ?></b></td>
			<td width="30%"><?php echo e(date('d-m-Y')); ?></td>
		</tr>
		<tr>
			<td width="20%"><b>Patient Name</b></td>
			<td width="30%"><?php echo e($patient->name); ?></td>
			<td width="20%"><b><?php echo e(trans('messages.gender')); ?> & <?php echo e(trans('messages.age')); ?></b></td>
			<td width="30%"><?php echo e($patient->getGender(false)); ?> | <?php echo e($patient->getAge()); ?></td>
		</tr>
		<tr>
			<td><b><?php echo e(trans('messages.patient-contact')); ?></b></td>
			<td><?php echo e($patient->phone_number); ?></td>
			<td><b>Facility/Dept</b></td>
			<td><?php if(isset($tests)): ?>
				<?php if(!is_null($tests->first())): ?>
				<?php echo e(is_null($tests->first()->visit->ward) ? '':$tests->first()->visit->ward->name); ?>

				<?php else: ?>
				<?php echo e(is_null($tests->first()->visit->facility) ? '':$tests->first()->visit->facility->name); ?>

				<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td width="20%"><b>Requesting Officer</b></td>
			<td width="30%"><?php if(isset($tests)): ?>
				<?php if(!empty($tests->first())): ?>
				<?php if(!empty($tests->first()->requested_by)): ?>
				<?php echo e($tests->first()->clinician->name); ?>

				<?php elseif(!empty($tests->first()->clinician_id)): ?>
				<?php echo e($tests->first()->clinicians->name); ?>

				<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
			</td>
			<td width="20%"><b>Officer's Contact</b></td>
			<td width="30%"><?php if(isset($tests)): ?>
				<?php if(!empty($tests->first())): ?>
				<?php if(!empty($tests->first()->therapy->contact)): ?>
				<?php echo e($tests->first()->therapy->contact); ?>

				<?php elseif(!empty($tests->first()->clinician_id)): ?>
				<?php echo e($tests->first()->clinicians->phone); ?>

				<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>
	</table>
	<br>
	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%; font-family: 'Courier New',Courier;">
		<tr align="left">
			<td width="15%"><strong>Clinical Information</strong>:</td>
			<td width="45%"><?php if(isset($tests)): ?>
				<?php if(!empty($tests->first())): ?>
				<?php if(!empty($tests->first()->therapy->clinical_notes)): ?>
				<?php echo e($tests->first()->therapy->clinical_notes); ?>

				<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
			</td>

		</tr>
		<br />
	</table>
	<br>
	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<thead>
			<tr>
				<td colspan="2"><b>Examination Requested</b></td>
			</tr>
			<tr align="left">
				<th width="20%"><strong>Tests</strong></th>
				<th width="20%"><strong>Sample Type</strong></th>
				<th width="20%"><strong><?php echo e(Lang::choice('messages.test-category', 1)); ?></strong></th>
				<th width="20%"><strong>Date Collected</strong></th>
				<th width="20%"><strong>Date Received</strong></th>

			</tr>
		</thead>
		<tbody>
			<?php if(isset($tests)): ?>
			<?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td width="20%"><?php echo e(isset($test->testType->name)?$test->testType->name:''); ?></td>
				<td width="20%"><?php echo e(isset($test->specimen->id)? $test->specimen->specimenType->name : ''); ?></td>
				<td width="20%"><?php echo e(isset($test->testType->id)?$test->testType->testCategory->name:''); ?></td>

				<?php if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED): ?>

				<td width="20%"><?php echo e(trans('messages.specimen-not-collected')); ?></td>
				<td width="20%">not received</td>
				<?php elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED): ?>
				<td width="20%"><?php echo e(($test->specimen->time_collected)?date_format(date_create($test->specimen->time_collected), 'd-M-Y H:i:s'):''); ?></td>
				<td width="20%"><?php echo e(($test->time_started)?date_format(date_create($test->time_started), 'd-M-Y H:i:s'):''); ?></td>

				<?php elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED): ?>
				<td width="20%"><?php echo e(trans('messages.specimen-not-collected')); ?></td>
				<td width="20%"><?php echo e(isset($test->specimen->time_rejected)?date_format(date_create($test->specimen->time_rejected), 'd-M-Y H:i:s'):''); ?></td>

				<?php endif; ?>

			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<tr>
				<td colspan="5"><?php echo e(trans("messages.no-records-found")); ?></td>
			</tr>
			<?php endif; ?>
			<?php endif; ?>
		</tbody>

	</table>

	<br>
	<br>

	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<?php if(isset($tests)): ?>

		<tr>
			<td width="30%"><b>Type of Request</b></td>
			<td width="30%">
				<?php if($tests->first()->urgency_id == 1): ?>
				<b><i>Emergency</i></b>
				<?php else: ?>
				<span><i>Normal</i></span>
				<?php endif; ?>
			</td>
			<!-- <td>
			<span>Mob:: </span>
		</td> -->
		</tr>
		<?php endif; ?>
	</table>

	<br>
	<br>
	<!-- <table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
	<thead>
		<tr>
		<td colspan="2"><b>Test Requested By</b></td>
		</tr>
	    <tr align="left">
	            <th width="30%"><strong>Name</strong></th>
	            <th width="30%"><strong>Cadre</strong></th>
	            <th width="30%"><strong>Mob:</strong></th>

	        </tr>
	</thead>
	<tbody>
	    <?php if(isset($tests)): ?>
	        <?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                <tr>
	                    <td width="30%"><?php if(isset($tests)): ?>
                <?php if(!empty($tests->first()->requested_by)): ?>
                    <?php echo e($tests->first()->clinician->name); ?>


                <?php elseif($tests->first()->therapy->clinician_id !== 0): ?>
                    <?php echo e(''); ?>

                <?php else: ?>
                    N/A
                    <?php endif; ?>
             <?php endif; ?></td>
	                    <td width="30%"></td>
	                    <td width="30%"></td>


	                </tr>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	            <tr>
	                <td colspan="5"><?php echo e(trans("messages.no-records-found")); ?></td>
	            </tr>
	        <?php endif; ?>
	    <?php endif; ?>
	</tbody>

</table>
 -->
	<br>

	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<thead>
			<tr>
				<td colspan="2"><b>Sample Collected By</b></td>
			</tr>
			<tr align="left">
				<th width="20%"><strong>Name</strong></th>
				<th width="20%"><strong>Cadre</strong></th>
				<th width="20%"><strong><?php echo e(Lang::choice('messages.test-category', 1)); ?></strong></th>
				<th width="20%"><strong>Date Collected</strong></th>
				<th width="20%"><strong>Time Collected</strong></th>

			</tr>
		</thead>
		<tbody>
			<?php if(isset($tests)): ?>
			<!--  <?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> -->
			<tr>
				<td width="20%"><?php echo e(isset($test->specimen->accepted_by)?$test->specimen->acceptedBy->name :''); ?></td>
				<td width="20%"><?php echo e(isset($test->specimen->accepted_by)?$test->specimen->acceptedBy->designation :''); ?></td>
				<td width="20%"><?php echo e(isset($test->testType->id)?$test->testType->testCategory->name:''); ?></td>

				<?php if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED): ?>

				<td width="20%"><?php echo e(trans('messages.specimen-not-collected')); ?></td>
				<td width="20%">not received</td>
				<?php elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED): ?>
				<td width="20%"><?php echo e(($test->specimen->time_collected)?date_format(date_create($test->specimen->time_collected), 'd-M-Y'):''); ?></td>
				<td width="20%"><?php echo e(isset($test->specimen->time_collected)?date_format(date_create($test->specimen->time_collected), 'H:i:s'): ''); ?></td>

				<?php elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED): ?>
				<td width="20%"><?php echo e(trans('messages.specimen-not-collected')); ?></td>
				<td width="20%"><?php echo e(isset($test->specimen->time_rejected)?date_format(date_create($test->specimen->time_rejected), 'd-M-Y H:i:s'):''); ?></td>

				<?php endif; ?>

			</tr>
			<!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	            <tr>
	                <td colspan="5"><?php echo e(trans("messages.no-records-found")); ?></td>
	            </tr>
	        <?php endif; ?> -->
			<?php endif; ?>
		</tbody>

	</table>

	<br>

	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<thead>
			<tr>
				<td colspan="2"><b>Sample Received By</b></td>
			</tr>
			<tr align="left">
				<th width="20%"><strong>Lab Section</strong></th>
				<th width="15%"><strong>Date Received</strong></th>
				<th width="15%"><strong>Time Received</strong></th>
				<th width="20%"><strong>Sample Suitability</strong></th>
				<th width="20%"><strong>Name</strong></th>
				<th width="10%"><strong>Number</strong></th>

			</tr>
		</thead>
		<tbody>
			<?php if(isset($tests)): ?>
			<?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td width="20%"><?php echo e(isset($test->testType->id)?$test->testType->testCategory->name:''); ?></td>

				<?php if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED): ?>

				<td width="15%"><?php echo e(trans('messages.specimen-not-collected')); ?></td>
				<td width="15%">not received</td>
				<?php elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED): ?>
				<td width="15%"><?php echo e(($test->time_started)?date_format(date_create($test->time_started), 'd-M-Y'):''); ?></td>
				<td width="15%"><?php echo e(($test->time_started)?date_format(date_create($test->time_started), 'H:i:s'):''); ?></td>

				<?php elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED): ?>
				<td width="15%"><?php echo e(trans('messages.specimen-not-collected')); ?></td>
				<td width="15%"><?php echo e(isset($test->specimen->time_rejected)?date_format(date_create($test->specimen->time_rejected), 'd-M-Y H:i:s'):''); ?></td>

				<?php endif; ?>
				<td width="20%">
					<?php if($test->test_status_id == 6): ?>
					Rejected
					<?php else: ?>
					<?php echo e(trans('messages.'.$test->specimen->specimenStatus->name)); ?>

					<?php endif; ?>
				</td>
				<td width="20%"><?php if($test->tested_by !=0): ?> <?php echo e(isset($test->tested_by)?$test->testedBy->name :''); ?> <?php endif; ?></td>
				<td width="10%"></td>

			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<tr>
				<td colspan="5"><?php echo e(trans("messages.no-records-found")); ?></td>
			</tr>
			<?php endif; ?>
			<?php endif; ?>
		</tbody>

	</table>

	<br>

	<?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<?php if( $test->testStatus->name == 'approved' || $test->testStatus->name == 'verified'): ?>
	<table>
		<tr>
			<td width="15%" style="display:none;"><?php echo e($test->testType->name); ?></td>
			<td width="85%">

			</td>


		</tr>

	</table>

	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<table>
		<tr>
			<td colspan="6"><?php echo e(trans("messages.no-records-found")); ?></td>
		</tr>
	</table>
	<?php endif; ?>

	<script type="text/php">
		if (isset($pdf)) {
        $x = 250;
        $y = 820;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $texts = "<?php echo e(config('kblis.certificate-info')); ?>";
        $font = null;
        $size = 8;
        $size2 = 6;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        $pdf->page_text(250, 800, $texts, $font, $size2, $color, $word_space, $char_space, $angle);
    }
</script>
</body>

</html><?php /**PATH /var/www/alis_gambia/resources/views/reports/patient/request_form.blade.php ENDPATH**/ ?>
<html>

<head>
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
</head>

<body>
  <header>
    <table style="text-align:center;" border="0" width="100%">
      <tr>
        <td colspan="12" style="text-align:center;">
          <!-- <?php echo e(@HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px'))); ?> -->
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
          <b> <?php echo e(config('kblis.report-name')); ?></b>
          <?php else: ?>
          <b> <?php echo e(config('kblis.report-name')); ?> </b>
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
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <thead>
      <tr align="left">
        <th width="20%"><strong>Sample Type</strong></th>
        <th width="20%"><strong>Date Collected</strong></th>

        <th width="20%"><strong>Date Received</strong></th>

        <th width="20%"><strong><?php echo e(Lang::choice('messages.test-category', 1)); ?></strong></th>
        <th width="20%"><strong>Tests Requested</strong></th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($tests)): ?>
      <?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e(getSpecimenName($test->specimen->id)); ?></td>

        <?php if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED): ?>

        <td><?php echo e(trans('messages.specimen-not-collected')); ?></td>
        <td>not received</td>
        <?php elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED): ?>
        <td><?php echo e(($test->specimen->time_collected)?$test->specimen->time_collected:''); ?></td>
        <td><?php echo e(isset($test->specimen->time_accepted)?$test->specimen->time_accepted : ''); ?></td>

        <?php elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED): ?>
        <td><?php echo e(trans('messages.specimen-not-collected')); ?></td>
        <td><?php echo e(isset($test->specimen->time_rejected)?$test->specimen->time_rejected:''); ?></td>

        <?php endif; ?>

        <td><?php echo e(getLabSection($test->testType->id)); ?></td>
        <td><?php echo e(isset($test->testType->name)?$test->testType->name:''); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td colspan="5"><?php echo e(trans("messages.no-records-found")); ?></td>
      </tr>
      <?php endif; ?>
      <?php endif; ?>
    </tbody>
  </table>


  <table width="100%">
    <thead>
      <tr>
        <th width="20%"><strong>Test Status :</strong></th>
        <td width="30%"><u><?php echo e(trans('messages.specimen-rejected')); ?></u></td>
      </tr>
    </thead>
  </table>

  <br>
  <br>
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <tr>


      <td colspan="5" align="left"><b>REJECTION REASONS</b></td>

    </tr>
  </table>
  <?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <?php if($test->specimenIsRejected()): ?>
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <tr>
      <td>
        <table style="padding: 1px;">

          <tr>
            <td width="100%">
              <ul>
                <?php $__currentLoopData = getRejectionReasons($test->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($reason->reason); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </td>

          </tr>
        </table>
      </td>
    </tr>
  </table>
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <tr>
      <td><b>Rejected By:</b></td>
      <td colspan="3">
        <?php echo e($test->analyticSpecimenRejections->rejectedBy->name); ?>

      </td>
    </tr>
    <tr>
      <td>
        <b>Rejected Date & Time</b>:
      <td colspan="3"><?php echo e($test->analyticSpecimenRejections->time_rejected); ?>

      </td>
      </td>
    </tr>
  </table>


  <?php elseif($test->testType->isCulture()): ?>
  <!-- Culture and Sensitivity analysis -->
  <?php if(count($test->isolated_organisms)>0): ?><!-- if there are any isolated organisms -->
  <table style="border-bottom: 1px solid #cecfd5; font-size:9px;font-family: 'Courier New',Courier;">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td colspan="6">Antimicrobial Susceptibility Testing(AST)</td>
    </tr>
    <tr>
      <th><b>Organism(s)</b></th>
      <th><b>Antibiotic(s)</b></th>
      <th><b>Result(s)</b></th>
    </tr>
  </table>
  <?php $__currentLoopData = $test->isolated_organisms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isolated_organism): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <table style="border-bottom: 1px solid #cecfd5;">
    <tr>
      <td rowspan="<?php echo e($isolated_organism->drug_susceptibilities->count()); ?>" class="organism"><i><b><?php echo e($isolated_organism->organism->name); ?></b></i></td>
      <?php $i = 1; ?>
      <?php if($isolated_organism->drug_susceptibilities->count() == 0): ?>
    </tr>
    <?php else: ?>
    <?php $__currentLoopData = $isolated_organism->drug_susceptibilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug_susceptibility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i > 1): ?>
    <tr>
      <?php endif; ?>
      <?php $i++; ?>
      <td style="font-size:10px;" class="antibiotic"><?php echo e($drug_susceptibility->drug->name); ?></td>
      <td style="font-size:10px;" class="result"><?php echo e($drug_susceptibility->drug_susceptibility_measure->symbol); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

  </table>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <table style="border-bottom: 1px solid #cecfd5; font-size:10px;font-family: 'Courier New',Courier;">
    <tr>
      <td><b>Comment(s)</b></td>
      <td colspan="2">
        <?php echo e($test->interpretation); ?>

      </td>
    </tr>
    <tr>
      <td width="50%" style="font-size:9px">
        <b>Results Entry Date</b>:<?php echo e($test->time_completed); ?>

      </td>
    </tr>
  </table>

  <table style="border-bottom: 1px solid #cecfd5; font-size:10px;font-family: 'Courier New',Courier;">
    <tr>
      <td colspan="2"><b>Analysis Performed by:</b></td>
      <td colspan="4"><?php echo e($test->testedBy->name); ?></td>
      <!-- <td><b>Verified by:</b></td>
              <td><?php echo e($test->isVerified()?$test->verifiedBy->name:'Pending'); ?></td> -->
    </tr>
  </table>

  <table style="border-bottom: 1px solid #cecfd5; font-size:10px;font-family: Bookman Old Style;">
    <tr>
      <td colspan="2"><b>Results Guide</b></td>
      <td colspan="4"><b>S-Sensitive | R-Resistant | I-Intermediate</b></td>
    </tr>
  </table>
  <?php else: ?><!-- if there are no isolated organisms -->
  <?php if($test->culture_observation): ?><!-- if there are comments -->
  <table>
    <tr>
      <td><?php echo e($test->culture_observation->observation); ?></td>
    </tr>
  </table>
  <?php endif; ?><!--./ if there are comments -->
  <?php endif; ?><!--./ if there are no isolated organisms -->
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <table style="border-bottom: 1px solid #cecfd5;">
    <tr>
      <td colspan="6"><?php echo e(trans("messages.no-records-found")); ?></td>
    </tr>
  </table>
  <?php endif; ?>

  <hr>

  <table>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td>
        <strong>Approved By :

          <?php if(isset($tests)): ?>
          <?php if(!empty($tests->first())): ?>
          <?php if(!empty($tests->first()->isApproved())): ?>

          <?php echo e($tests->first()->approvedBy->name); ?>

          <?php else: ?>

          <?php endif; ?>

          <?php endif; ?>
          <?php endif; ?>
        </strong>
      </td>
    </tr>
    <!-- <tr><td><u><strong></strong></u></td></tr> -->
  </table>

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

</html><?php /**PATH /var/www/alis_gambia/resources/views/reports/patient/rejectionReport.blade.php ENDPATH**/ ?>
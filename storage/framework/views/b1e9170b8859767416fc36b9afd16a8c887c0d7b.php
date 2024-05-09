<html>

<head>
  <style type="text/css">
    TD {
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
      top: -170px;
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
  <?php
  $testedBy = '';
  ?>
</head>

<body>
  <header>
    <table style="text-align:center;" border="0" width="100%">
      <tr>
        <td colspan="12" style="text-align:center;">
          <img src="i/Coat_of_arms_of_The_Gambia.png" height="90" ; width="75" ;>
          <!-- <?php echo e(@HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px'))); ?> -->
        </td>
      </tr>
      <tr>
        <td colspan="12" style="text-align:center;">
          <?php echo e($facilityname); ?>

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
      <!--       <tr>
        <td colspan="12" style="text-align:center;">
          <?php echo e(config('kblis.email-address')); ?>

        </td>
      </tr>   -->
      <tr>
        <td colspan="12" style="text-align:center;">
          <?php if(isset($tests)): ?>
          <?php if(!empty($tests->first()->revised_by)): ?>
          <b><?php echo e(trans('REVISED REPORT')); ?></b>
          <?php elseif(!empty($tests->first()->approved_by)): ?>
          <b> <?php echo e(config('kblis.final-report-name')); ?></b>
          <?php else: ?>
          <b> <?php echo e(config('kblis.interim-report-name')); ?> </b>
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
      <td width="20%"><b>Patient ID/ULIN</b></td>
      <td width="30%"><?php echo e(!is_null($patient->patient_number) ? $patient->patient_number : ''); ?> / <?php echo e($patient->ulin); ?></td>
      <td width="20%"><b><?php echo e(trans('messages.report-date')); ?></b></td>
      <td width="30%"><?php echo e(date('d-m-Y')); ?></td>
    </tr>
    <tr>
      <td width="20%"><b>Patient Name</b></td>
      <td width="30%"><?php echo e($patient->name); ?></td>
      <td width="20%"><b><?php echo e(trans('messages.gender')); ?> & DOB/<?php echo e(trans('messages.age')); ?></b></td>
      <td width="30%"><?php echo e($patient->getGender(false)); ?> | <?php echo e($patient->dob); ?>/(<?php echo e($patient->getAge()); ?>)</td>
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
  <table style="border-bottom: 1px solid #cecfd5; font-size:9px; font-family: Bookman Old Style;" width="100%">
    <thead>
      <tr>
        <td width="20%"><strong>Sample Type</strong></td>
        <td width="20%"><strong>Date Collected</strong></td>
        <td width="20%"><strong>Date Received</strong></td>
        <td width="20%"><strong><?php echo e(Lang::choice('messages.test-category', 1)); ?></strong></td>
        <td width="20%"><strong>Tests Requested</strong></td>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($tests)): ?>
      <?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e(isset($test->specimen->specimen_type_id)?$test->specimen->specimenType->name:''); ?></td>

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

        <td><?php echo e(isset($test->testType->test_category_id)?$test->testType->testCategory->name:''); ?></td>
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
  <table style="border-bottom: 1px solid #cecfd5; font-size:7px;font-family: Bookman Old Style;" width="100%">
    <tr>
      <td colspan="5" align="center"><b>TEST RESULTS</b></td>
    </tr>
  </table>
  <?php $__empty_1 = true; $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <?php if(!$test->testType->isCulture() && ( $test->testStatus->name == 'approved' || $test->testStatus->name == 'verified')): ?>
  <table id="results_content_id" style="border-bottom: 1px solid #cecfd5; font-size:9px;font-family: Bookman Old Style;" width="100%">
    <tr>
      <td>
        <table style="padding: 1px;" id="<?php echo e(generateSlug($test->testType->name)); ?>" width="100%">
          <thead>
            <tr>
              <td width="18%"><b>Test</b></td>
              <td width="20%"><b>Parameter</b></td>
              <td width="27%"><b>Result</b></td>
              <td width="10%"><b>Flag</b></td> <!-- Diagnostic Flag column for results -->
              <td width="16%"><b>Reference </b></td>
              <td width="9%"><b>SI units</b></td>
            </tr>
          </thead>
          <tbody>
            <?php $counter = 0 ?>
            <?php $__currentLoopData = $test->testResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $counter++ ?>
            <!-- show only parameters with values -->
            <?php if($result->result != ''): ?>
            <tr>
              <?php if ($counter == 1) { ?>
                <td rowspan="<?php echo e(count($test->testResults)); ?>"><?php echo e($test->testType->name); ?></td>
              <?php } ?>
              <td>
                <?php if($test->testType->measures->count() > 0): ?>
                <?php echo e(App\Models\Measure::find($result->measure_id)->name); ?>:
                <?php endif; ?>
              </td>
              <?php if($result->free_text_interpretation == NULL): ?>
              <td>
                <?php if($result->revised_result!=null): ?>
                <?php echo e(htmlspecialchars($result->revised_result)); ?>

                <?php else: ?>
                <?php echo e(htmlspecialchars($result->result)); ?>

                <?php endif; ?>
              </td>
              <?php else: ?>
              <td>
                <?php echo e(htmlspecialchars($result->free_text_interpretation)); ?> <?php echo e(htmlspecialchars($result->result)); ?>

              </td>
              <?php endif; ?>
              <td>
                <?php if(!is_null(App\Models\Measure::getRange($test->visit->patient, $result->measure_id))): ?>
                <?php echo e(App\Models\Measure::measureFlag($test->visit->patient, $result->measure_id, $result->result)); ?>

                <?php endif; ?>
              </td><!-- Diagnostic Flag column for results-->
              <td>
                <?php echo e(App\Models\Measure::getRange($test->visit->patient, $result->measure_id)); ?>

              </td>
              <td>
                <?php echo e(App\Models\Measure::find($result->measure_id)->unit); ?>

              </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--  Test results ends here  -->
            <?php if($test->testType->name == 'HIV'): ?>
            <tr>
              <td><b>Interpretation:</b></td>
              <td><?php echo e($test->interpreteHIVResults()); ?></td>
            </tr>
            <?php else: ?>
            <?php if($test->getEquipement == ''): ?>
            <tr>
              <td></td>
            </tr>
            <?php else: ?>
            <tr>
              <td>
                <b>Equipment Used</b>:<?php echo e($test->getEquipement->name); ?>

              </td>
            </tr>
            <?php endif; ?>

            <?php endif; ?>
          </tbody>
        </table>
        <table width="100%">
          <tr>
            <td style="font-family: 'Courier New',Courier; font-size:11px;"><b>Comment (s) :</b>
              <?php if($test->interpretation == '' && $test->testType->description == ''): ?>
              <?php echo e('N/A'); ?>

              <?php elseif( !$test->interpretation == '' && $test->testType->description == ''): ?>
              <?php echo e($test->interpretation); ?>

              <?php elseif( $test->interpretation == '' && !$test->testType->description == ''): ?>
              <?php echo e(htmlspecialchars($test->testType->description)); ?>

              <?php endif; ?>
              <!-- <?php echo e($test->testType->description == '' ? 'N/A' : htmlspecialchars($test->testType->description)); ?> -->

            </td>
          </tr>
          <tr>
            <td width="100%">
              <b>Equipment/Technique used:</b>
              <?php if(is_null($test->instrument_id) || $test->instrument_id == '0'): ?>
              <?php echo e($test->method_used); ?>

              <?php elseif(is_null($test->method_used)): ?>
              <?php echo e($test->equipment->name); ?>

              <?php else: ?>
              <?php endif; ?>
            </td>

          </tr>
        </table>
        <table width="100%">
          <tr>
            <td width="20%">
              <b><?php echo e(trans('messages.tested-by')); ?></b>:
            </td>
            <td width="30%">
              <?php echo e($test->testedBy->name); ?>

            </td>
            <?php if($test->time_revised!=null): ?>
            <td width="20%">
              <b>Results Revision Date</b>:
            </td>
            <td width="30%">
              <?php echo e($test->time_revised); ?>

            </td>
            <?php else: ?>
            <td width="20%">
              <b>Results Entry Date</b>:
            </td>
            <td width="30%">
              <?php echo e($test->time_completed); ?>

            </td>
            <?php endif; ?>
          </tr>
          <tr>
            <td width="15%"><b>Reviewed by </b>:</td>
            <td width="15%"> <?php echo e($test->verifiedBy->name); ?> </td>
            <td width="35%"> <b>Date Reviewed</b>:</td>
            <td width="35%"> <?php echo e($test->time_verified); ?></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <?php elseif($test->testType->isCulture()): ?>
  <!-- Culture and Sensitivity analysis -->
  <?php if(count($test->isolatedOrganisms)>0): ?><!-- if there are any isolated organisms -->
  <table style="border-bottom: 1px solid #cecfd5;" border="0" width="100%">
    <tr>
      <td colspan="3">Culture and Sensitivity Results</td>
    </tr>
    <tr>
      <td style="font-size:.70em; margin-top:40px;" width="40%"><b>Organism(s) Isolated</b></td>
      <td style="font-size:.70em; margin-top:40px;" width="30%"><b>Antibiotic(s)</b></td>
      <td style="font-size:.70em; margin-top:40px;" width="30%"><b>Result(s)</b></td>
    </tr>
  </table>
  <?php $__currentLoopData = $test->isolatedOrganisms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isolated_organism): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <table style="border-bottom: 1px solid #cecfd5;" width="100%">
    <tr>
      <td rowspan="<?php echo e($isolated_organism->drugSusceptibilities->count()); ?>" class="organism" width="40%"><i><b><?php echo e($isolated_organism->organism->name); ?></i></b></td>
      <?php $i = 1; ?>
      <?php if($isolated_organism->drugSusceptibilities->count() == 0): ?>
    </tr>
    <?php else: ?>
    <?php $__currentLoopData = $isolated_organism->drugSusceptibilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug_susceptibility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i > 1): ?>
    <tr>
      <?php endif; ?>
      <?php $i++; ?>
      <td class="antibiotic" width="30%"><?php echo e($drug_susceptibility->drug->name); ?></td>
      <td class="result" width="30%"><?php echo e($drug_susceptibility->drugSusceptibilityMeasure->symbol); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </table>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td width="20%">Comment(s)</td>
      <td style="font-family: 'Courier New',Courier; font-size:11px;" width="80%">
        <?php echo e($test->interpretation); ?>

      </td>
    </tr>
  </table>

  </hr>
  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td colspan="2">Result Guide</td>
      <td colspan="4" style="text-align:left;">S-Sensitive | R-Resistant | I-Intermediate</td>
    </tr>
  </table>
  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td width="20%"><b>Analysis Performed by:</b></td>
      <td width="60%"><?php echo e(isset($test->tested_by)?$test->testedBy->name:''); ?></td>
    </tr>
  </table>

  <?php else: ?><!-- if there are no isolated organisms -->
  <?php if($test->culture_observation): ?><!-- if there are comments -->
  <table style="width: 100%;">
    <tr>
      <td><?php echo e($test->culture_observation->observation); ?></td>
    </tr>
  </table>
  <?php endif; ?><!--./ if there are comments -->
  <?php endif; ?><!--./ if there are no isolated organisms -->
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td colspan="6"><?php echo e(trans("messages.no-records-found")); ?></td>
    </tr>
  </table>
  <?php endif; ?>

  <table style="border-bottom: 0px solid #cecfd5; font-size:8px;font-family: 'Courier New',Courier;">
    <tr>
      <td></td>
    </tr>
    <tr>
      <td>
        <strong>Approved By : <?php echo e(isset($tests->first()->approvedBy->name)? $tests->first()->approvedBy->name:''); ?></strong>

      </td>
    </tr>
    <!-- <tr><td><u><strong></strong></u></td></tr> -->
  </table>
  <!-- <table style="width: 100%;">
    <tr>
      <td style="text-align: right;">
        <img src="<?php echo e(public_path('/i/lab_23.png')); ?>" class="manager" style="margin-top:10px; padding-right: 20px;">
        <div class="stamp-date" style="margin-top:-100px; padding-right: 150px;">Date</div>
        <span class='date-released' style="font-size:8px;color:#000; font-weight: lighter; ">DATE RELEASED</span>
      </td>
    </tr>
  </table> -->
  <script type="text/php">
    if (isset($pdf)) {
        $x = 250;
        $y = 820;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $texts = "<?php echo e(config('kblis.certificate-info')); ?>";
        $pagelabel = "PRINTED BY <?php echo e(!is_null(Auth::user()) ? Auth::user()->name : ''); ?> <?php echo e(now()); ?>";
        $printdate = "<?php echo e(now()); ?>";
        $font = null;
        $size = 8;
        $size2 = 6;
        $color = array(0,0,0);
        $color2 = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        $pdf->page_text(250, 800, $texts, $font, $size2, $color, $word_space, $char_space, $angle);
        $pdf->page_text(10, 820, $pagelabel, $font, $size2, $color2, $word_space, $char_space, $angle);

    }
</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/reports/patient/standard.blade.php ENDPATH**/ ?>
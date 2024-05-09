<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo e(HTML::style('css/bootstrap.min.css')); ?>

  <?php echo e(HTML::style('css/bootstrap-theme.min.css')); ?>

  <style type="text/css">
    #report_content table,
    #report_content th,
    #report_content td {
      /*border: 1px solid black;*/
      font-size: 12px;
    }

    #report_content p {
      font-size: 12px;
    }
  </style>
</head>

<body>

  <table width="100%" style="font-size:12px;">
    <thead>
      <tr>
        <td><?php echo e(HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px'))); ?></td>
        <td colspan="3" style="text-align:center;">
          <strong>
            <p> <?php echo e(strtoupper(Auth::user()->facility->name)); ?><br>
              <?php echo e(strtoupper(config('kblis.address-info'))); ?>

            </p>
            <p>Biosaftey and Biosecurity Incidence Report<br>
        </td>
        <td>
          <?php echo e(HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px'))); ?>

        </td>
      </tr>
    </thead>
  </table>


  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>ID #</th>
        <td><?php echo e($bbincidence->serial_no); ?></td>

        <th>Facility</th>
        <td><?php echo e($bbincidence->facility->code); ?> - <?php echo e($bbincidence->facility->name); ?></td>
      </tr>

      <tr>
        <th>Occurrence Date & Time</th>
        <td><?php echo e(date('d M Y', strtotime($bbincidence->occurrence_date))); ?> <?php echo e($bbincidence->occurrence_time); ?></td>

        <th>Description</th>
        <td><?php echo e($bbincidence->description); ?></td>
      </tr>

      <tr>
        <th>Location</th>
        <td><?php echo e($bbincidence->lab_section); ?></td>

        <th>First Aid / Immediate Actions</th>
        <td><?php echo e($bbincidence->firstaid); ?></td>
      </tr>

      <tr>
        <th>Nature of Incident/Occurrence</th>
        <td>
          <?php $__currentLoopData = $bbincidence->bbnature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($nature->name); ?> (<?php echo e($nature->priority); ?>/<?php echo e($nature->class); ?>)<br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>

        <th>Completion Status</th>
        <td><?php echo e($bbincidence->status); ?></td>
      </tr>

    </tbody>
  </table>

  <table class="table table-bordered">
    <tbody>

      <tr>
        <th>Victim ID</th>
        <td><?php echo e($bbincidence->personnel_id); ?></td>

        <th>Gender</th>
        <td><?php echo e($bbincidence->personnel_gender); ?></td>
      </tr>

      <tr>
        <th>Name</th>
        <td><?php echo e($bbincidence->personnel_surname); ?> <?php echo e($bbincidence->personnel_othername); ?></td>

        <th>DOB / Age</th>
        <td><?php echo e($bbincidence->personnel_dob); ?> / <?php echo e($bbincidence->personnel_age); ?></td>
      </tr>

      <tr>
        <th>Category</th>
        <td><?php echo e($bbincidence->personnel_category); ?></td>

        <th>Telephone</th>
        <td><?php echo e($bbincidence->personnel_telephone); ?></td>
      </tr>

      <tr>
        <th>Email</th>
        <td><?php echo e($bbincidence->personnel_email); ?></td>

        <th>Next Of Kin Email</th>
        <td><?php echo e($bbincidence->nok_email); ?></td>
      </tr>

      <tr>
        <th>Next Of Kin Name</th>
        <td><?php echo e($bbincidence->nok_name); ?></td>

        <th>Next Of Kin Telephone</th>
        <td><?php echo e($bbincidence->nok_telephone); ?></td>
      </tr>
    </tbody>
  </table>



  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Activity being performed</th>
        <td><?php echo e($bbincidence->task); ?></td>

        <th>VHF Patient ULIN</th>
        <td><?php echo e($bbincidence->ulin); ?></td>
      </tr>

      <tr>
        <th>Equipment Code</th>
        <td><?php echo e($bbincidence->equip_code); ?></td>

        <th>Equipment Name</th>
        <td><?php echo e($bbincidence->equip_name); ?></td>
      </tr>

      <tr>
        <th>Reporting Officer</th>
        <td><?php echo e($bbincidence->officer_fname); ?> <?php echo e($bbincidence->officer_lname); ?></td>

        <th>Designation</th>
        <td><?php echo e($bbincidence->officer_cadre); ?></td>
      </tr>

      <tr>
        <th>Telephone</th>
        <td><?php echo e($bbincidence->officer_telephone); ?></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>



  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Extent/Magnitude of injury</th>
        <td><?php echo e($bbincidence->extent); ?></td>

        <th>Clinical Intervention</th>
        <td><?php echo e($bbincidence->intervention); ?></td>
      </tr>

      <tr>
        <th>Date/Time of Intervention</th>
        <td><?php echo e($bbincidence->intervention_date); ?> <?php echo e($bbincidence->intervention_time); ?></td>

        <th>Intervention Followup</th>
        <td><?php echo e($bbincidence->intervention_followup); ?></td>
      </tr>

      <tr>
        <th>Medical Officer</th>
        <td><?php echo e($bbincidence->mo_fname); ?> <?php echo e($bbincidence->mo_lname); ?></td>

        <th>Telephone</th>
        <td><?php echo e($bbincidence->mo_telephone); ?></td>
      </tr>

      <tr>
        <th>Designation</th>
        <td><?php echo e($bbincidence->mo_designation); ?></td>

        <th></th>
        <td></td>
      </tr>
    </tbody>
  </table>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Cause of Incident</th>
        <td>
          <?php $__currentLoopData = $bbincidence->bbcause; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cause): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($cause->causename); ?><br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>

        <th>Corrective Action</th>
        <td>
          <?php $__currentLoopData = $bbincidence->bbaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($action->actionname); ?><br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tr>

      <tr>
        <th>Referral Status</th>
        <td><?php echo e($bbincidence->referral_status); ?></td>

        <th>Analysis Date/Time</th>
        <td><?php echo e($bbincidence->analysis_date); ?> <?php echo e($bbincidence->analysis_time); ?></td>
      </tr>

      <tr>
        <th>Bio-Safety Officer</th>
        <td><?php echo e($bbincidence->bo_fname); ?> <?php echo e($bbincidence->bo_lname); ?></td>

        <th>Telephone</th>
        <td><?php echo e($bbincidence->bo_telephone); ?></td>
      </tr>

      <tr>
        <th>Designation</th>
        <td><?php echo e($bbincidence->bo_designation); ?></td>

        <th></th>
        <td></td>
      </tr>
    </tbody>
  </table>




  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Investigation Findings</th>
        <td><?php echo e($bbincidence->findings); ?></td>

        <th>Improvement Plan</th>
        <td><?php echo e($bbincidence->improvement_plan); ?></td>
      </tr>

      <tr>
        <th>Response Date/Time</th>
        <td><?php echo e($bbincidence->response_date); ?> <?php echo e($bbincidence->response_time); ?></td>

        <th>BRM representative</th>
        <td><?php echo e($bbincidence->brm_fname); ?> <?php echo e($bbincidence->brm_lname); ?></td>
      </tr>

      <tr>
        <th>Designation</th>
        <td><?php echo e($bbincidence->brm_designation); ?></td>

        <th>Telephone</th>
        <td><?php echo e($bbincidence->brm_telephone); ?></td>
      </tr>
      <tr>
        <th colspan="4">**Record created by <?php echo e($bbincidence->user->name); ?> at <?php echo e($bbincidence->created_at); ?></th>
      </tr>
    </tbody>
  </table>





</body>

</html><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/bbincidence/show.blade.php ENDPATH**/ ?>
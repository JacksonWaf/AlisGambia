<?php $__env->startSection("content"); ?>
<div>
  <ol class="breadcrumb">
    <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
    <li><a href="<?php echo e(route('bbincidence.create')); ?>">Register Incident</a></li>
    <li><a href="<?php echo e(route('bbincidence.index')); ?>">BB summary</a></li>
    <li class="active">Facility Report</li>
  </ol>
</div>
<div class=''>
  <?php echo e(Form::open(array('route' => array('bbincidence.bbfacilityreport'), 'class'=>'form-inline',
  'role'=>'form', 'method'=>'GET'))); ?>

  <div class="form-group">
    <?php echo e(Form::label('datefrom', "Date From")); ?>


    <?php echo e(Form::text('datefrom', old('datefrom'), array('class' => 'form-control test-search standard-datepicker', 'required' => 'required'))); ?>

  </div>
  <div class="form-group">
    <?php echo e(Form::label('dateto', "Date To")); ?>


    <?php echo e(Form::text('dateto', old('dateto'), array('class' => 'form-control test-search standard-datepicker', 'required' => 'required'))); ?>

  </div>
  <div class="form-group">
    <?php echo e(Form::button("<span class='glyphicon glyphicon-search'></span> ".trans('messages.filter'),
    array('class' => 'btn btn-primary', 'type' => 'submit'))); ?>

  </div>
  <?php echo e(Form::close()); ?>

</div>
<br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <span class="glyphicon glyphicon-stats"></span>
    Facility BB Incident Report
    <?php if(isset($_GET['datefrom']) and isset($_GET['datefrom'])): ?>
    (Filtered) - <?php echo e($_GET['datefrom']); ?> to <?php echo e($_GET['dateto']); ?>

    <?php else: ?> <?php endif; ?>
    <a class="btn btn-sm btn-info" href="javascript:printSpecial('Facility BB Incident Report')">
      <span class="glyphicon glyphicon-print"></span> PRINT
    </a>
  </div>

  <div class="panel-body row"> <div id="printReady">

    <div class="display-details col-sm-6">
      <h4>SUMMARY OF FACILITY BB INCIDENTS</h4>
      <table class="table table-stripped table-hover">
        <thead>
          <?php $__currentLoopData = $bbincidentnatureclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th style="color:red;" ><?php echo e($value->class); ?></th>
            <tr>
              <td>
                <table class="table table-bordered table-hover">
                  <?php
                  $bbincidentnaturecount = App\Models\Bbincidence::countbbincidentcategories($value->class);
                  ?>
                  <?php $__currentLoopData = $bbincidentnaturecount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bbincident => $bbincidents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($bbincidents->name); ?></td>
                    <td><?php echo e($bbincidents->total); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <th>Total</th>
                  <td>  <?php
                  $bbnaturecount = App\Models\BbincidenceNatureIntermediate::select('bbincidence_id', 'nature_id');
                  $sum = $bbnaturecount->groupBy('bbincidence_id', 'nature_id')->count('nature_id');
                  ?>
                  <?php echo e($sum); ?></td>

                </table>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>


        <div class="display-details col-sm-6">

          <h4>FACILITY INCIDENT MANAGEMENT SUMMARY</h4> <br><br>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th> Referral Status</th>
                <th> Number</th>
              </tr>
            </thead>

            <?php $__currentLoopData = $countbbincidentreferralstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($value->referral_status==''): ?>
            <td style="color:blue">UNKNOWN</td>
            <?php else: ?>

            <td style="color:green"><?php echo e($value->referral_status); ?></td>
            <?php endif; ?>

            <td><?php echo e($value->total); ?></td>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
          <tbody>
            <th>Completion Status</th>

            <?php
            $countbbincidentcompletionstatus = App\Models\Bbincidence::countbbincidentcompletionstatus();
            ?>

            <?php $__currentLoopData = $countbbincidentcompletionstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th style="color:orange"><?php echo e($value->status); ?></th>
              <td><?php echo e($value->total); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

      <div class="display-details col-sm-6">
        <div>
          <h4>SUMMARY ON INCIDENT PREVALENCE AMONG PERSONNEL & OTHER FACILITY CLIENTS</h4>
          <table class="table table-bordered table-hover">
            <thead>
            <?php
            $bbincidentprevalencecount = App\Models\Bbincidence::countbbincidentprevalence();
            ?>

            <?php $__currentLoopData = $bbincidentprevalencecount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php if($v->personnel_category==''): ?> -- <?php else: ?> <?php echo e($v->personnel_category); ?> <?php endif; ?></td><td><?php echo e($v->total); ?></td></tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>

        <br>

        <div>
          <h4>SUMMARY ON SPECIFIC CAUSES OF INCIDENTS</h4>
          <table class="table table-bordered table-hover">
            <thead>
            <?php $bbincidentcausecount = App\Models\Bbincidence::countbbincidentcauses(); ?>
            <?php $__currentLoopData = $bbincidentcausecount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php echo e($v->causename); ?></td><td><?php echo e($v->total); ?></td></tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>

        <br>

        <div>
          <h4>SUMMARY ON CORRECTIVE ACTIONS TAKEN TO MANAGE INCIDENTS <i>(depending on cause of incident)</i></h4>
          <table class="table table-bordered table-hover">
            <thead>
            <?php $bbincidentactioncount = App\Models\Bbincidence::countbbincidentactions(); ?>
            <?php $__currentLoopData = $bbincidentactioncount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php echo e($v->actionname); ?></td><td><?php echo e($v->total); ?></td></tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>



      </div></div>

    </div>

  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/bbincidence/bbfacilityreport.blade.php ENDPATH**/ ?>
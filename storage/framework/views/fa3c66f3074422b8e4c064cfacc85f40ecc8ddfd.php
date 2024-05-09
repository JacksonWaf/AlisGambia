<?php $__env->startSection("content"); ?>
    <div>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
          <li><a href="<?php echo e(route('unhls_patient.index')); ?>"><?php echo e(Lang::choice('messages.patient',2)); ?></a></li>
          <li class="active"><?php echo e(trans('messages.patient-details')); ?></li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-user"></span>
            <?php echo e(trans('messages.patient-details')); ?>

            <div class="panel-btn">
                <a class="btn btn-sm btn-info" href="<?php echo e(route('unhls_patient.edit', array($patient->id))); ?>">
                    <span class="glyphicon glyphicon-edit"></span>
                    <?php echo e(trans('messages.edit')); ?>

                </a>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('request_test')): ?>
                <a class="btn btn-sm btn-info"
                    href="<?php echo e(route('unhls_test.create', array('patient_id' => $patient->id))); ?>">
                    <span class="glyphicon glyphicon-edit"></span>
                    <?php echo e(trans('messages.new-test')); ?>

                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="panel-body">
            <div class="display-details">
                <h3 class="view"><strong><?php echo e(Lang::choice('messages.name',1)); ?></strong><?php echo e($patient->name); ?> </h3>
                <p class="view-striped"><strong><?php echo e(trans('messages.patient-number')); ?></strong>
                    <?php echo e($patient->patient_number); ?></p>
                <p class="view-striped"><strong>NIN</strong>
                    <?php echo e($patient->nin); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.ulin')); ?></strong>
                    <?php echo e($patient->ulin); ?></p>
                <p class="view"><strong><?php echo e(trans('messages.external-patient-number')); ?></strong>
                    <?php echo e($patient->external_patient_number); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.date-of-birth')); ?></strong>
                    <?php echo e($patient->dob); ?></p>
                <p class="view"><strong><?php echo e(trans('messages.gender')); ?></strong>
                    <?php echo e(($patient->gender==0?trans('messages.male'):trans('messages.female'))); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.physical-address')); ?></strong>
                    <?php echo e($patient->address); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.residence-village')); ?></strong>
                    <?php echo e($patient->village_residence); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.workplace-village')); ?></strong>
                    <?php echo e($patient->village_workplace); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.occupation')); ?></strong>
                    <?php echo e($patient->occupation); ?></p>
                <p class="view"><strong><?php echo e(trans('messages.phone-number')); ?></strong>
                    <?php echo e($patient->phone_number); ?></p>
                <p class="view-striped"><strong><?php echo e(trans('messages.email-address')); ?></strong>
                    <?php echo e($patient->email); ?></p>
                <p class="view"><strong><?php echo e(trans('messages.date-created')); ?></strong>
                    <?php echo e($patient->created_at); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_patient/show.blade.php ENDPATH**/ ?>
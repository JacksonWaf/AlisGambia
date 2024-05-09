<?php $__env->startSection("content"); ?>
<div>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
        <li class="active"><?php echo e(Lang::choice('messages.patient',2)); ?></li>
    </ol>
</div>

<div class='container-fluid'>
    <div class='row'>
        <div class='col-md-12'>
            <?php echo e(Form::open(array('route' => array('unhls_patient.index'), 'class'=>'form-inline',
                    'role'=>'form', 'method'=>'GET'))); ?>

            <div class="form-group">
                <?php echo e(Form::label('search', "search", array('class' => 'sr-only'))); ?>

                <?php echo e(Form::text('search', Illuminate\Support\Facades\Request::input('search'), array('class' => 'form-control test-search'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::button("<span class='glyphicon glyphicon-search'></span> ".trans('messages.search'),
                        array('class' => 'btn btn-primary', 'type' => 'submit'))); ?>

            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>

<br>

<?php if(Session::has('message')): ?>
<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>

<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-user"></span>
        <?php echo e(trans('messages.list-patients')); ?>

        <div class="panel-btn">
            <a class="btn btn-sm btn-info" href="<?php echo e(route('unhls_patient.create')); ?>">
                <span class="glyphicon glyphicon-plus-sign"></span>
                <?php echo e(trans('messages.new-patient')); ?>

            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th><?php echo e(trans('messages.patient-number')); ?></th>
                    <th><?php echo e(trans('messages.ulin')); ?></th>
                    <th><?php echo e(Lang::choice('messages.name',1)); ?></th>
                    <th><?php echo e(trans('messages.gender')); ?></th>
                    <th><?php echo e(trans('messages.age')); ?></th>
                    <th><?php echo e(trans('messages.residence-village')); ?></th>
                    <!-- <th><?php echo e('National Id No'); ?></th> -->
                    <th><?php echo e(trans('messages.actions')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr <?php if(Session::has('activepatient')): ?> <?php echo e((Session::get('activepatient') == $patient->id)?"class='info'":""); ?> <?php endif; ?>>
                    <td><?php echo e($patient->patient_number); ?></td>
                    <td><?php echo e($patient->ulin); ?></td>
                    <td><?php echo e($patient->name); ?></td>
                    <td><?php echo e(($patient->gender==0?trans('messages.male'):trans('messages.female'))); ?></td>
                    <td><?php echo e($patient->getAge()); ?></td>
                    <td><?php echo e($patient->village_residence); ?></td>
                    <!-- <td><?php echo e($patient->nin); ?></td> -->
                    <td>
                        <!-- can create visit -->
                        <a class="btn btn-sm btn-info" href="<?php echo e(route('unhls_test.create', array('patient_id' => $patient->id))); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.new-test')); ?>

                        </a>
                        <!-- show the patient (uses the show method found at GET /patient/{id} -->
                        <a class="btn btn-sm btn-success" href="<?php echo e(route('unhls_patient.show', array($patient->id))); ?>">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('messages.view')); ?>

                        </a>
                        <?php if($patient->isMicro()): ?>
                        <!-- edit this patient (uses the edit method found at GET /patient/{id}/edit -->
                        <a class="btn btn-sm btn-info" href="<?php echo e(route('microbio.edit', array($patient->id))); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit')); ?>

                        </a>
                        <?php elseif($patient->isNotMicro()): ?>
                        <!-- edit this patient (uses the edit method found at GET /patient/{id}/edit -->
                        <a class="btn btn-sm btn-info" href="<?php echo e(route('unhls_patient.edit', array($patient->id))); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit')); ?>

                        </a>
                        <?php endif; ?>

                        <!-- can delete patient -->
                        <!-- 	<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id="<?php echo e(route('unhls_patient.delete', array($patient->id))); ?>">
							<span class="glyphicon glyphicon-trash"></span>
							<?php echo e(trans('messages.delete')); ?>

                            </button> -->

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $patients->links();
        Session::put('SOURCE_URL', URL::full()); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_patient/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
    <div>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
            <li><a href="<?php echo e(route('unhls_test.index')); ?>"><?php echo e(Lang::choice('messages.test', 2)); ?></a></li>
            <li class="active"><?php echo e(trans('messages.referrals')); ?></li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <div class="container-fluid">
                <div class="row less-gutter">
                    <div class="col-md-11">
                        <span class="glyphicon glyphicon-filter"></span> <?php echo e(trans('messages.referrals')); ?>

                    </div>
                    <div class="col-md-1">
                        <a class="btn btn-sm btn-primary pull-right" href="#" onclick="window.history.back();return false;"
                           alt="<?php echo e(trans('messages.back')); ?>" title="<?php echo e(trans('messages.back')); ?>">
                            <span class="glyphicon glyphicon-backward"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <!-- if there are creation errors, they will show here -->
            <?php if($errors->all()): ?>
                <div class="alert alert-danger">
                    <?php echo e(HTML::ul($errors->all())); ?>

                </div>
            <?php endif; ?>
            <?php echo e(Form::open(array('route' => 'refer_action'))); ?>

            <?php echo e(Form::hidden('specimen_id', $test->specimen->id)); ?>

            <?php echo e(Form::hidden('test_id', $test->id)); ?>

            <div class="panel-body">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo e(trans("messages.specimen-information")); ?></h3>
                    </div>
                    <div class="panel-body inline-display-details">
                        <span><strong><?php echo e(trans("messages.national-id")); ?></strong> </span>
                        <span><strong><?php echo e(trans("messages.ulin")); ?></strong><?php echo e($test->visit->patient->ulin); ?> </span>
                        <span><strong><?php echo e(trans("messages.specimen-id")); ?></strong> <?php echo e($test->specimen->id); ?></span>
                        <span><strong><?php echo e(trans("messages.specimen-type-title")); ?></strong> <?php echo e($test->specimen->specimenType->name); ?></span>
                        <span><strong><?php echo e(Lang::choice('messages.date-specimen-collected',1)); ?></strong> </span>

                        <span><strong><?php echo e(trans("messages.time-specimen-collected")); ?></strong>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo e(Form::label('person', trans("messages.referring-health-worker"))); ?>

                    <?php echo e(Form::text('person', old('person'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('sample_obtainer', 'Sample Collected by')); ?>

                    <?php echo e(Form::text('sample-obtainer', old('sample_obtainer'), array('class' => 'form-control'))); ?>

                    <?php echo e(Form::label('cadre-obtainer', 'Cadre')); ?>

                    <?php echo e(Form::text('cadre-obtainer', old('cadre_obtainer'), array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('sample-date', 'Date sample recieved in Lab')); ?>

                    <?php echo e(Form::text('sample-date', old('sample_date'), array('class' => 'form-control standard-datepicker'))); ?>

                    <?php echo e(Form::label('sample-time', 'Time Sample Recieved in Lab')); ?>

                    <?php echo e(Form::text('sample-time', old('sample_time'), array('class' => 'form-control', 'placeholder' => 'HH:MM'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('time-dispatch', trans('messages.time-dispatch'))); ?>

                    <?php echo e(Form::text('time-dispatch', old('time-dispatch'), array('class' => 'form-control', 'placeholder' => 'HH:MM'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('storage-condition', trans("messages.storage-condition"))); ?>

                    <?php echo e(Form::select('storage-condition', ['' => '--- Select storage type ---','1' => 'Cold Chain','2' => 'Room Temp', '3' => 'Other'])); ?>

                </div>
                <div class = "form-group" id ="other_storage" style="display:none"> <!--TODO avoid the inline css -->
                    <?php echo e(Form::text('storage-condition', old('storage_condition'), array('class' => 'form-control', 'placeholder' => 'Other (Specify)'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('transport-type', trans("messages.transport-type"))); ?>

                    <?php echo e(Form::select('transport-type', ['' => '--- Select storage type ---',
                    '1' => 'Hub System (hub rider and poster)' ,'2' => 'Private means', '3' => 'Arrangement with Public means', '4' => 'Other'])); ?>

                </div>
                <div class = "form-group" id ="other_transport" style="display:none"> <!--TODO avoid the inline css -->
                    <?php echo e(Form::text('transport-type', old('transport_type'), array('class' => 'form-control', 'placeholder' => 'Other (Specify)'))); ?>

                </div>
                <div class="display-details">
                    <p><strong><?php echo e(Lang::choice('messages.test-type',1)); ?></strong>
                        <?php echo e($test->testType->name); ?></p>

                </div>
                <br>
                <div class="form-group">
                    <?php echo e(Form::label('refer-reason', trans('messages.reasons-for-referral'))); ?>

                    <?php echo e(Form::select('referral-reason', array(0 => '')+$referralReason->pluck('reason', 'id')->toArray(),
                        old('referral-reason'), array('class' => 'form-control'))); ?>

                    <?php echo e(Form::label('priority-specimen', trans("messages.priority-of-specimen"))); ?>

                    <?php echo e(Form::text('priority-specimen', old('prioritySpecimen'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('facility', Lang::choice("messages.destination-facility",1))); ?>

                    <?php echo e(Form::select('facility_id', array(0 => '')+$facilities->pluck('name', 'id')->toArray(), old('facility_id'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('contacts', trans("messages.contacts"))); ?>

                    <?php echo e(Form::textarea('contacts', old('contacts'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group actions-row">
                    <?php echo e(Form::button("<span class='glyphicon glyphicon-thumbs-up'></span> ".trans('messages.refer'),
                        ['class' => 'btn btn-danger', 'onclick' => 'submit()'])); ?>

                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_test/refer.blade.php ENDPATH**/ ?>
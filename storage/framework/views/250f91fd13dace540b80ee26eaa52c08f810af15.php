<?php $__env->startSection("content"); ?>
    <div>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
          <li><a href="<?php echo e(route('unhls_test.index')); ?>"><?php echo e(Lang::choice('messages.test',2)); ?></a></li>
          <li class="active"><?php echo e(trans('messages.enter-test-results')); ?></li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <div class="container-fluid">
                <div class="row less-gutter">
                    <div class="col-md-11">
                        <span class="glyphicon glyphicon-user"></span> <?php echo e(trans('messages.test-results')); ?>


                        <?php if(count($test->testType->instruments) > 0): ?>
                        <div class="panel-btn">
                            <a class="btn btn-sm btn-info fetch-test-data" href="javascript:void(0)"
                                title="<?php echo e(trans('messages.fetch-test-data-title')); ?>"
                                data-test-type-id="<?php echo e($test->testType->id); ?>"
                                data-url="<?php echo e(route('instrument.getResult')); ?>"
                                data-instrument-count="<?php echo e($test->testType->instruments->count()); ?>">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                <?php echo e(trans('messages.fetch-test-data')); ?>

                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-1">
                        <a class="btn btn-sm btn-primary pull-right"  href="#" onclick="window.history.back();return false;"
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
            <?php if($test->testType->name == 'CBC'): ?>
             <div class="container-fluid">
                <div class="col-md-12">
                    <div class="panel panel-info">  <!-- Patient Details -->
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(trans("Upload CBC - XN-550 Results Files (CSV)")); ?></h3>
                        </div>
                        <?php echo e(Form::open(array('route' => array('unhls_test.upload',$test->id), 'method' => 'POST',
                            'files' => true))); ?>

                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <?php echo e(Form::label('results', trans('Upload Results File'))); ?>

                                    <?php echo e(Form::file('results', ['class' => 'form-control'])); ?>

                                </div>
                                <div class="form-group actions-row">
                                    <?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('Upload File'),
                                        ['class' => 'btn btn-primary', 'onclick' => 'submit()']
                                    )); ?>

                                </div>
                            </div>
                        </div> <!-- ./ panel-body -->
                        <?php echo e(Form::close()); ?>

                    </div> <!-- ./ panel -->
                </div>
            </div>
            <?php endif; ?>
            <div class="container-fluid">
                <div class="col-md-6">
                            <div class="panel panel-info">  <!-- Patient Details -->
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(trans("messages.patient-details")); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p><strong><?php echo e(Lang::choice('messages.name',1)); ?></strong></p></div>
                                            <div class="col-md-9">
                                                <?php echo e($test->visit->patient->name); ?></div></div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p><strong><?php echo e(trans("messages.age")); ?></strong></p></div>
                                            <div class="col-md-9">
                                                <?php echo e($test->visit->patient->getAge()); ?></div></div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p><strong><?php echo e(trans("messages.gender")); ?></strong></p></div>
                                            <div class="col-md-9">
                                                <?php echo e($test->visit->patient->gender==0?trans("messages.male"):trans("messages.female")); ?>

                                            </div></div>
                                    </div>
                                </div> <!-- ./ panel-body -->
                            </div> <!-- ./ panel -->
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info"> <!-- Specimen Details -->
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(trans("messages.specimen-details")); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(Lang::choice('messages.specimen-type',1)); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->specimenType->name or trans('messages.pending')); ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans('messages.specimen-number')); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->id or trans('messages.pending')); ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans('messages.specimen-status')); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e(trans('messages.'.$test->specimen->specimenStatus->name)); ?>

                                            </div>
                                        </div>
                                    <?php if($test->specimen->isRejected()): ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans('messages.rejection-reason-title')); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->rejectionReason->reason or trans('messages.pending')); ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans('messages.reject-explained-to')); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->reject_explained_to or trans('messages.pending')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($test->specimen->isReferred()): ?>
                                    <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans("messages.specimen-referred-label")); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php if($test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
                                                    <?php echo e(trans("messages.in")); ?>

                                                <?php elseif($test->specimen->referral->status == App\Models\Referral::REFERRED_OUT): ?>
                                                    <?php echo e(trans("messages.out")); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(Lang::choice("messages.facility", 1)); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->referral->getFacilityName()); ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans("messages.person-involved")); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->referral->person); ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans("messages.contacts")); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->referral->contacts); ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?php echo e(trans("messages.referred-by")); ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php echo e($test->specimen->referral->user->name); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div> <!-- ./ panel -->
                </div>
            </div> <!--ends container fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                    <?php echo e(Form::open(array('route' => array('unhls_test.saveResults',$test->id), 'method' => 'POST',
                        'id' => 'form-enter-results'))); ?>

                        <?php $__currentLoopData = $test->testType->measures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $measure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                                <?php
                                $ans = "";
                                foreach ($test->testResults as $res) {
                                    if($res->measure_id == $measure->id)$ans = $res->result;
                                }
                                $fieldName = "m_".$measure->id;
                                ?>
                                <?php if( $measure->isNumeric() ): ?>
                                    <?php echo e(Form::label($fieldName , $measure->name)); ?>

                                    <?php echo e(Form::text($fieldName, $ans, array(
                                        'class' => 'form-control result-interpretation-trigger',
                                        'data-url' => route('unhls_test.resultinterpretation'),
                                        'data-age' => $test->visit->patient->dob,
                                        'data-gender' => $test->visit->patient->gender,
                                        'data-measureid' => $measure->id
                                        ))); ?>

                                    <span class='units'>

                                        <?php echo e(App\Models\Measure::getRange($test->visit->patient, $measure->id)); ?>

                                        <?php echo e($measure->unit); ?>

                                    </span>
                                <?php elseif( $measure->isAlphanumeric() || $measure->isAutocomplete() ): ?>
                                    <?php
                                    $measure_values = array();
                                    $measure_values[] = '';
                                    foreach ($measure->measureRanges as $range) {
                                        $measure_values[$range->alphanumeric] = $range->alphanumeric;
                                    }
                                    ?>
                                    <?php echo e(Form::label($fieldName , $measure->name)); ?>

                                    <?php echo e(Form::select($fieldName, $measure_values, array_search($ans, $measure_values),
                                        array('class' => 'form-control result-interpretation-trigger',
                                        'data-url' => route('unhls_test.resultinterpretation'),
                                        'data-measureid' => $measure->id
                                        ))); ?>

                                <?php elseif( $measure->isFreeText() ): ?>
                                    <?php echo e(Form::label($fieldName, $measure->name)); ?>

                                    <?php
                                        $sense = '';
                                        if($measure->name=="Sensitivity"||$measure->name=="sensitivity")
                                            $sense = ' sense'.$test->id;
                                    ?>
                                    <?php echo e(Form::text($fieldName, $ans, array('class' => 'form-control'.$sense))); ?>

                                    <?php if($transfusion == true): ?>
                                    <div class="form-group">
                                    <br>
                                    <?php echo e(Form::hidden('patient_id', $test->visit->patient->id)); ?>

                                    <?php echo e(Form::hidden('visit_id', $test->visit_id)); ?>

                                    <?php echo e(Form::label($fieldName, 'Choose blood pack', array('class'=>'control-label'))); ?>

                                    <?php echo e(Form::select('blood_bank_id', $blood_units, old('blood_bank_id'),array('class' => 'form-control'))); ?>

                                    </div>
                                    <div class="form-group">
                                    <?php echo e(Form::label($fieldName, 'Amount given', array('class'=>'control-label'))); ?>

                                    <?php echo e(Form::text('units_given', old('units_given'),array('class' => 'form-control'))); ?>

                                    </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">
                            <?php echo e(Form::label('equipment_id', 'Equipment used', array('class'=>'control-label'))); ?>

                            <?php echo e(Form::select('equipment_id', $equipment_list, old('equipment_id'), array('class' => 'form-control', 'id' => 'equipment_id'))); ?>

                        </div>
                           <div class="form-group">
                            <?php echo e(Form::label('method_used', 'Method used', array('class'=>'control-label'))); ?>

                            <?php echo e(Form::text('method_used', old('method_used'), array('class' => 'form-control', 'id' => 'method_used'))); ?>

                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label('comment', trans('messages.comments'))); ?>

                            <?php echo e(Form::textarea('interpretation', $test->interpretation,
                                array('class' => 'form-control result-interpretation', 'rows' => '2'))); ?>

                        </div>
                        <div class="form-group actions-row">
                            <?php echo e(Form::button('<span class="glyphicon glyphicon-save">
                                </span> '.trans('messages.save-test-results'),
                                array('class' => 'btn btn-default', 'onclick' => 'submit()'))); ?>

                        </div>
                    <?php echo e(Form::close()); ?>


                        <div class="col-md-6">
                        <!--this was the original holder for Patient details, specimen details and test results -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_test/enterResults.blade.php ENDPATH**/ ?>
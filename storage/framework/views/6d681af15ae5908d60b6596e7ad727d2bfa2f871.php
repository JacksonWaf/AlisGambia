<?php $__env->startSection("content"); ?>
<div>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
        <li><a href="<?php echo e(route('unhls_test.index')); ?>"><?php echo e(Lang::choice('messages.test',2)); ?></a></li>
        <li class="active"><?php echo e(trans('messages.test-details')); ?></li>
    </ol>
</div>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-11">
                    <span class="glyphicon glyphicon-cog"></span><?php echo e(trans('messages.test-details')); ?>

                    <?php if($test->isCompletedVerifiedorApproved() && $test->specimen->isAccepted()): ?>
                    <div class="panel-btn">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_test_results')): ?>
                        <?php if(!empty($test->isApproved())): ?>
                        <a class="btn btn-sm btn-info" href="<?php echo e(URL::to('unhls_test/'.$test->id.'/revised')); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit-test-results')); ?>

                        </a>
                        <?php else: ?>
                        <a class="btn btn-sm btn-info" href="<?php echo e(URL::to('unhls_test/'.$test->id.'/edit')); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit-test-results')); ?>

                        </a>
                        <?php endif; ?>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('verify_test_results')): ?>
                        <?php if(!$test->isVerified() && !$test->isApproved()): ?>
                        <a class="btn btn-sm btn-success" href="<?php echo e(route('test.verify', array($test->id))); ?>">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <?php echo e(trans('messages.verify')); ?>

                        </a>
                        <?php endif; ?>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('approve_test_results')): ?>
                        <?php if($test->isVerified() && Auth::user()->id != $test->tested_by): ?>

                        <a class="btn btn-sm btn-success" href="<?php echo e(route('test.approve', array($test->id))); ?>">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <?php echo e(trans('messages.approve')); ?>

                        </a>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <div class="panel-btn">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_reports')): ?>
                        <?php if( $test->isVerified() || $test->specimenIsRejected()): ?>
                        <a class="btn btn-sm btn-default" href="<?php echo e(URL::to('patient_interim_report/'.$test->visit->patient->id.'/'.$test->visit->id )); ?>" target="_blank">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('messages.view-interim-report')); ?>

                        </a>
                        <?php elseif($test->isApproved() || $test->specimenIsRejected()): ?>
                        <a class="btn btn-sm btn-default" href="<?php echo e(URL::to('patient_final_report/'.$test->visit->patient->id.'/'.$test->visit->id )); ?>" target="_blank">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('messages.view-final-report')); ?>

                        </a>

                        <?php endif; ?>
                        <a class="btn btn-sm btn-default" href="<?php echo e(URL::to('patientrequestform/' . $test->visit->id)); ?>" target="_blank">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            Request Form
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="panel-btn">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('accept_test_specimen')): ?>
                        <?php if($test->isNotStarted): ?>
                        <a class="btn btn-sm btn-default" href="<?php echo e(URL::to('unhls_test/'.$test->id.'/collectsample')); ?>">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('Collect Sample')); ?>

                        </a>
                        <?php endif; ?>
                        <?php endif; ?>

                    </div>

                </div>
                <div class="col-md-1">
                    <a class="btn btn-sm btn-primary pull-right" href="#" onclick="window.history.back();return false;" alt="<?php echo e(trans('messages.back')); ?>" title="<?php echo e(trans('messages.back')); ?>">
                        <span class="glyphicon glyphicon-backward"></span></a>
                </div>
            </div>
        </div>
    </div> <!-- ./ panel-heading -->
    <div class="panel-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="display-details">
                        <h3 class="view"><strong><?php echo e(Lang::choice('messages.test-type',1)); ?></strong>
                            <?php echo e($test->testType->name); ?>

                        </h3>
                        <p class="view"><strong><?php echo e(trans('messages.visit-number')); ?></strong>
                            <?php echo e($test->visit->id); ?>

                        </p>
                        <p class="view"><strong><?php echo e(trans('messages.date-ordered')); ?></strong>
                            <?php echo e($test->isExternal()?$test->external()->request_date:$test->time_created); ?>

                        </p>
                        <p class="view"><strong><?php echo e(trans('messages.lab-receipt-date')); ?></strong>
                            <?php echo e($test->time_created); ?>

                        </p>
                        <p class="view"><strong><?php echo e(trans('messages.test-status')); ?></strong>
                            <?php echo e(trans('messages.'.$test->testStatus->name)); ?>

                        </p>
                        <p class="view-striped"><strong><?php echo e(trans('messages.physician')); ?></strong>
                            <?php if(!empty($test->clinician_id)): ?>
                            <?php echo e($test->clinician->name); ?>

                            <?php else: ?>
                            <?php echo e(trans('messages.unknown')); ?>

                            <?php endif; ?>
                        </p>
                        <?php if($test->testType->name = 'HIV' || $test->testType->name = 'H.I.V' ): ?>
                        <p class="view-striped"><strong><?php echo e(trans('messages.purpose')); ?></strong>
                            <?php echo e($test->purpose or trans('messages.unknown')); ?>

                        </p>
                        <?php endif; ?>
                        <p class="view-striped"><strong><?php echo e(trans('messages.request-origin')); ?></strong>
                            <?php if($test->specimen->isReferred() && $test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
                            <?php echo e(trans("messages.in")); ?>

                            <?php else: ?>
                            <?php echo e($test->visit->visit_type); ?>

                            <?php endif; ?>
                        </p>
                        <p class="view-striped"><strong><?php echo e(trans('messages.registered-by')); ?></strong>
                            <?php echo e($test->specimen->acceptedBy->name); ?>

                        </p>
                        <?php if($test->isCompleted()): ?>
                        <p class="view"><strong><?php echo e(trans('messages.tested-by')); ?></strong>
                            <?php echo e($test->testedBy->name); ?>

                        </p>
                        <?php endif; ?>
                        <?php if($test->isApproved()): ?>
                        <p class="view"><strong><?php echo e('Approved by'); ?></strong>
                            <?php echo e($test->approvedBy->name); ?>

                        </p>
                        <?php endif; ?>
                        <?php if($test->isVerified()): ?>
                        <p class="view"><strong><?php echo e(trans('messages.verified-by')); ?></strong>
                            <?php echo e($test->verifiedBy->name); ?>

                        </p>
                        <?php endif; ?>
                        <?php if((!$test->specimen->isRejected()) && ($test->isCompleted() || $test->isVerified())): ?>

                        <!-- Not Rejected and (Verified or Completed)-->
                        <p class="view-striped"><strong><?php echo e(trans('Reception TAT')); ?></strong>
                            <?php echo e($test->getFormattedTurnaroundTime()); ?>

                        </p>
                        <?php endif; ?>
                        <!-- Not Rejected and (Verified or Completed)-->
                        <p class="view-striped"><strong><?php echo e(trans('LAB TAT')); ?></strong>
                            <?php
                            $date1 = date_create($test->time_started);
                            $date2 = date_create($test->time_verified);
                            $date3 = new DateTime();
                            //difference between two dates
                            $diff = date_diff($date1, $date2);
                            $diff2 = date_diff($date1, $date3);

                            //count days
                            if ($test->time_verified != 'NULL') {
                                echo ' ' . $diff->format("%h") . " " . "Hours" . " " . $diff->format("%i") . " " . "Minutes" . " " . $diff->format("%s") . " " . "Seconds";
                            } else
                                echo ' ' . $diff2->format("%h") . " " . "Hours" . " " . $diff2->format("%i") . " " . "Minutes" . " " . $diff2->format("%s") . " " . "Seconds";
                            ?>
                            <!-- Previous therapy-->
                        <p class="view-striped"><strong>Previous Therapy</strong>
                            <?php if(!empty($test->therapy->previous_therapy)): ?>
                            <?php echo e($test->therapy->previous_therapy); ?>

                            <?php else: ?>
                            <?php endif; ?>
                        </p>
                        <!-- Current therapy-->
                        <p class="view-striped"><strong>Current Therapy</strong>

                            <?php if(!empty($test->therapy->current_therapy)): ?>
                            <?php echo e($test->therapy->current_therapy); ?>

                            <?php else: ?>

                            <?php endif; ?>
                        </p>

                        <!-- Clinical notes-->
                        <p class="view-striped"><strong>Clinical notes</strong>

                            <?php if(!empty($test->therapy->clinical_notes)): ?>
                            <?php echo e($test->therapy->clinical_notes); ?>

                            <?php else: ?>

                            <?php endif; ?>

                        </p>
                        <!-- Test Requested by -->
                        <p class="view-striped"><strong>Test requested by</strong>
                            <?php if(isset($test)): ?>
                            <?php echo e($test->createdBy->name); ?>

                            <?php endif; ?>
                        </p>
                        <!-- Requested by -->
                        <p class="view-striped"><strong>Phone contact of clinician</strong>

                            <?php if(!empty($test->therapy->clinician)): ?>
                            <?php echo e($test->therapy->contact); ?>

                            <?php elseif(!empty($test->clinician->phone)): ?>
                            <?php echo e($test->clinician->phone); ?>

                            <?php endif; ?>

                            <!--  -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info"> <!-- Patient Details -->
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(trans("messages.patient-details")); ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p><strong><?php echo e(trans("messages.patient-number")); ?></strong></p>
                                    </div>
                                    <div class="col-md-9">
                                        <?php echo e($test->visit->patient->patient_number); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p><strong><?php echo e(Lang::choice('messages.name',1)); ?></strong></p>
                                    </div>
                                    <div class="col-md-9">
                                        <?php echo e($test->visit->patient->name); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p><strong><?php echo e(trans("messages.age")); ?></strong></p>
                                    </div>
                                    <div class="col-md-9">
                                        <?php echo e($test->visit->exactAge('M')); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p><strong><?php echo e(trans("messages.gender")); ?></strong></p>
                                    </div>
                                    <div class="col-md-9">
                                        <?php echo e($test->visit->patient->gender==0?trans("messages.male"):trans("messages.female")); ?>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./ panel-body -->
                    </div> <!-- ./ panel -->
                    <div class="panel panel-info"> <!-- Specimen Details -->
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(trans("messages.specimen-details")); ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><strong>Specimen Type</strong></p>
                                    </div>
                                    <div class="col-md-8">
                                        <?php echo e($test->specimen->specimenType->name); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><strong><?php echo e(trans('messages.specimen-number')); ?></strong></p>
                                    </div>
                                    <div class="col-md-8">
                                        <?php echo e($test->getSpecimenId()); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><strong><?php echo e(trans('messages.specimen-status')); ?></strong></p>
                                    </div>
                                    <div class="col-md-8">
                                        <?php if($test->test_status_id == 6): ?>
                                        Rejected
                                        <?php else: ?>
                                        <?php echo e(trans('messages.'.$test->specimen->specimenStatus->name)); ?>

                                        <?php endif; ?>
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
                                        <?php echo e($test->specimen->referral->facility->name); ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><strong><?php if($test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
                                                <?php echo e(trans("messages.originating-from")); ?>

                                                <?php elseif($test->specimen->referral->status == App\Models\Referral::REFERRED_OUT): ?>
                                                <?php echo e(trans("messages.intended-reciepient")); ?>

                                                <?php endif; ?></strong></p>
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
                                        <p><strong><?php if($test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
                                                <?php echo e(trans("messages.recieved-by")); ?>

                                                <?php elseif($test->specimen->referral->status == App\Models\Referral::REFERRED_OUT): ?>
                                                <?php echo e(trans("messages.referred-by")); ?>

                                                <?php endif; ?></strong></p>
                                    </div>
                                    <div class="col-md-8">
                                        <?php echo e($test->specimen->referral->user->name); ?>

                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div> <!-- ./ panel -->
                    <div class="panel panel-info"> <!-- Test Results -->
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(trans("messages.test-results")); ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <?php $__currentLoopData = $test->testResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><strong><?php echo e(App\Models\Measure::find($result->measure_id)->name); ?></strong></p>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($result->revised_result!=null): ?>
                                        <?php echo e($result->revised_result); ?> (Revised result)
                                        <?php else: ?>
                                        <?php echo e($result->result); ?>

                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-5">

                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <p><strong><?php echo e(trans('messages.test-remarks')); ?></strong></p>
                                    </div>
                                    <div class="col-md-10">
                                        <?php echo e($test->interpretation); ?>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./ panel-body -->
                    </div> <!-- ./ panel -->
                </div>
            </div>
        </div> <!-- ./ container-fluid -->

    </div> <!-- ./ panel-body -->
</div> <!-- ./ panel -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_test/viewDetails.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>

<style>
    .highliht {
        color: red;
    }

    .highlightedGreen {
        color: green;
    }
</style>
<div>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
        <li class="active"><?php echo e(Lang::choice('messages.test',2)); ?></li>
    </ol>
</div>
<?php if(Session::has('message')): ?>
<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>

<div class='container-fluid'>
    <?php echo e(Form::open(array('route' => array('unhls_test.index')))); ?>

    <div class='row'>
        <div class='col-md-2'>
            <div class='col-md-2'>
                <?php echo e(Form::label('date_from', trans('messages.from'))); ?>

            </div>
            <div class='col-md-10'>
                <?php echo e(Form::text('date_from', $dateFrom,
                        array('class' => 'form-control standard-datepicker'))); ?>

            </div>
        </div>
        <div class='col-md-2'>
            <div class='col-md-2'>
                <?php echo e(Form::label('date_to', trans('messages.to'))); ?>

            </div>
            <div class='col-md-10'>
                <?php echo e(Form::text('date_to', $dateTo,
                        array('class' => 'form-control standard-datepicker'))); ?>

            </div>
        </div>
        <div class='col-md-2'>
            <div class='col-md-5'>
                <?php echo e(Form::label('test_status', trans('messages.test-status'))); ?>

            </div>
            <div class='col-md-7'>
                <?php echo e(Form::select('test_status', $testStatus,
                        Illuminate\Support\Facades\Request::get('test_status'), array('class' => 'form-control'))); ?>

            </div>
        </div>
        <div class='col-md-3'>
            <div class='col-md-5'>
                <?php echo e(Form::label('test_category', trans('messages.list-test-categories'))); ?>

            </div>
            <div class='col-md-7'>
                <?php echo e(Form::select('test_category', $testCategories,
                        Illuminate\Support\Facades\Request::get('test_category'), array('class' => 'form-control','id'=> $selectedTestCategoryId))); ?>

            </div>
        </div>
        <div class='col-md-2'>
            <?php echo e(Form::label('search', trans('messages.search'), array('class' => 'sr-only'))); ?>

            <?php echo e(Form::text('search', Illuminate\Support\Facades\Request::get('search'),
                    array('class' => 'form-control', 'placeholder' => 'Search'))); ?>

        </div>
        <div class='col-md-1'>
            <?php echo e(Form::submit(trans('messages.search'), array('class'=>'btn btn-primary'))); ?>

        </div>
    </div>
    <?php echo e(Form::close()); ?>

</div>
<div class='container-fluid'>

    <ul class="nav navbar-nav navbar-left">

        <li><a href="<?php echo e(route('unhls_test.pending')); ?>">
                <span class="ion-planet">
                    <font size="3"> Pending <span class="badge badge-danger"> <?php echo e(App\Models\UnhlsTest::pendingtestcounts()); ?></span></font>
                </span>
            </a>
        </li>

        <li><a href="<?php echo e(route('unhls_test.started')); ?>">
                <span class="ion-chatbubbles">
                    <font size="3"> Started Tests <span class="badge badge-success"> <?php echo e(App\Models\UnhlsTest::startedtestcounts()); ?></font>
                </span>
                </span>
            </a>
        </li>
        <li><a href="<?php echo e(route('unhls_test.completed')); ?>">
                <span class="ion-chatbubbles">
                    <font size="3"> Completed Tests <span class="badge badge-success"><?php echo e(App\Models\UnhlsTest::completedtestcounts()); ?></font>
                </span>
                </span>
            </a>
        </li>
        <li><a href="<?php echo e(route('unhls_test.verified')); ?>">
                <span class="ion-chatbubbles">
                    <font size="3">Reviewed<span class="badge badge-info"><?php echo e(App\Models\UnhlsTest::verifiedtestcounts()); ?></font>
                </span>
                </span>
            </a>
        </li>
        <li><a href="<?php echo e(route('unhls_test.approved')); ?>">
                <span class="ion-chatbubbles">
                    <font size="3">Approved<span class="badge badge-info"><?php echo e(App\Models\UnhlsTest::approvedtestcounts()); ?></font>
                </span>
                </span>
            </a>
        </li>
    </ul>

</div>



<div class="panel panel-primary tests-log">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-11">
                    <span class="glyphicon glyphicon-filter"></span><?php echo e(trans('messages.list-tests')); ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('request_test')): ?>
                    <div class="panel-btn">
                        <a class="btn btn-sm btn-info" href="javascript:void(0)" data-toggle="modal" data-target="#new-test-modal-unhls">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            <?php echo e(trans('messages.new-test')); ?>

                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-sm btn-primary pull-right" href="#" onclick="window.history.back();return false;" alt="<?php echo e(trans('messages.back')); ?>" title="<?php echo e(trans('messages.back')); ?>">
                        <span class="glyphicon glyphicon-backward"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th class="col-md-1"><?php echo e(trans('messages.date-ordered')); ?></th>
                    <th class="col-md-1"><?php echo e(trans('messages.patient-number')); ?></th>
                    <th>Lab Number</th>
                    <!-- <th><?php echo e(trans('messages.visit-number')); ?></th> -->
                    <th class="col-md-2"><?php echo e(trans('messages.patient-name')); ?></th>
                    <th class="col-md-1"><?php echo e(trans('messages.specimen-id')); ?></th>
                    <th class="col-md-2"><?php echo e(Lang::choice('messages.test',1)); ?></th>
                    <th class="col-md-1"><?php echo e(trans('messages.visit-type')); ?></th>
                    <th class="col-md-1">Unit</th>
                    <th class="col-md-3"><?php echo e(trans('messages.test-request-status')); ?></th>
                    <th class="col-md-3"><?php echo e(trans('messages.test-status')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $testSet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- todo: revise:for now excluding tests without specimens -->
                <?php if(!$test->isNotReceived()): ?>
                <tr <?php if(Session::has('activeTest')): ?> <?php echo e(in_array($test->id, Session::get('activeTest'))?"class='info'":""); ?> <?php endif; ?>>
                    <td><?php echo e(date('d-m-Y H:i', strtotime($test->time_created))); ?></td> <!--Date Ordered-->
                    <td><?php echo e(empty($test->visit->patient->external_patient_number)?
                                $test->visit->patient->patient_number:
                                $test->visit->patient->external_patient_number); ?></td> <!--Patient Number -->
                    <td><?php echo e($test->visit->patient->ulin); ?></td> <!--unhls terminology -->
                    <!-- issue: this is confusing people as they may mistake it as ULIN -->
                    <!-- <td>
                            <?php echo e(empty($test->visit->visit_number)?
                                $test->visit->id:
                                $test->visit->visit_number); ?></td> -->
                    <!--Visit Number -->
                    <td><?php echo e($test->visit->patient->name.' ('.($test->visit->patient->getGender(true)).',
                            '.$test->visit->exactAge('M'). ')'); ?></td> <!--Patient Name -->
                    <td><?php echo e($test->getSpecimenId()); ?></td><!--Specimen ID -->
                    <!-- <td><?php echo e($test->getSpecimenId()); ?></td>  --><!--Specimen ID -->
                    <td><?php echo e($test->testType->name); ?></td> <!--Test-->
                    <td class="<?php if ($test->visit->urgency == 1) echo 'highliht'; ?>"><?php echo e($test->visit->visit_type); ?></td> <!--Visit Type -->
                    <td><?php echo e(is_null($test->visit->ward) ? '':$test->visit->ward->name); ?></td> <!--Unit -->
                    <!-- ACTION BUTTONS -->
                    <td>
                        <a class="btn btn-sm btn-success" href="<?php echo e(route('unhls_test.viewDetails', $test->id)); ?>" id="view-details-<?php echo e($test->id); ?>-link" title="<?php echo e(trans('messages.view-details-title')); ?>">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('messages.view-details')); ?>

                        </a>
                        <?php if($test->specimen->isNotCollected()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('accept_test_specimen')): ?>
                        <a class="btn btn-sm btn-success" href="#collect-sample-modal" data-toggle="modal" data-url="<?php echo e(route('unhls_test.collectSampleModal')); ?>" data-sample-id="<?php echo e($test->specimen->id); ?>" data-target="#collect-sample-modal" title="Collect Sample">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('Collect Sample')); ?>

                        </a>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if($test->isNotReceived()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('accept_test_specimen')): ?>
                        <!-- todo: udate this to operate as that on the queue, if possible -->
                        <!--
                                <a class="btn btn-sm btn-default receive-test" href="javascript:void(0)"
                                    data-test-id="<?php echo e($test->id); ?>"
                                    title="<?php echo e(trans('messages.receive-test-title')); ?>">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                    <?php echo e(trans('messages.receive-test')); ?>

                                        </a> -->
                        <?php endif; ?>
                        <?php elseif($test->specimen->isNotCollected()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('accept_test_specimen')): ?>
                        <a class="btn btn-sm btn-info" href="#accept-specimen-modal" data-toggle="modal" data-url="<?php echo e(route('unhls_test.collectSpecimen')); ?>" data-specimen-id="<?php echo e($test->specimen->id); ?>" data-target="#accept-specimen-modal" title="<?php echo e(trans('messages.accept-specimen-title')); ?>">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <?php echo e(trans('messages.accept-specimen')); ?>

                        </a>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if(!$test->isNotReceived() && $test->specimen->isAccepted() && !($test->isVerified())): ?>
                        <?php if(Illuminate\Support\Facades\Auth::user()->can('reject_test_specimen') && !($test->specimen->isReferred())): ?>
                        <?php if(!($test->specimenIsRejected())): ?>
                        <!-- <a class="btn btn-sm btn-danger" id="reject-<?php echo e($test->id); ?>-link"
                                    href="<?php echo e(route('unhls_test.reject', array($test->id))); ?>"
                                    title="<?php echo e(trans('messages.reject-title')); ?>">
                                    <span class="glyphicon glyphicon-thumbs-down"></span>
                                    <?php echo e(trans('messages.reject')); ?>

                                            </a> -->
                        <?php endif; ?>
                        <a class="btn btn-sm btn-midnight-blue barcode-button" href="#" onclick="print_barcode(<?php echo e("'".$test->specimen->id."'".', '."'".$barcode->encoding_format."'".', '."'".$barcode->barcode_width."'".', '."'".$barcode->barcode_height."'".', '."'".$barcode->text_size."'"); ?>)" title="<?php echo e(trans('messages.barcode')); ?>">
                            <span class="glyphicon glyphicon-barcode"></span>
                            <?php echo e(trans('messages.barcode')); ?>

                        </a>
                        <?php endif; ?>
                        <?php if($test->isPending()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('start_test')): ?>
                        <a class="btn btn-sm btn-warning start-test" href="javascript:void(0)" data-test-id="<?php echo e($test->id); ?>" data-url="<?php echo e(route('unhls_test.start')); ?>" title="<?php echo e(trans('messages.start-test-title')); ?>">
                            <span class="glyphicon glyphicon-play"></span>
                            <?php echo e(trans('messages.start-test')); ?>

                        </a>
                        <a class="btn btn-sm btn-danger" id="reject-<?php echo e($test->id); ?>-link" href="<?php echo e(route('unhls_test.reject', array($test->id))); ?>" title="<?php echo e(trans('messages.reject-title')); ?>">
                            <span class="glyphicon glyphicon-thumbs-down"></span>
                            <?php echo e(trans('messages.reject')); ?>

                        </a>
                        <a class="btn btn-sm btn-midnight-blue barcode-button" onclick="print_barcode(<?php echo e("'".$test->specimen->id."'".', '."'".$barcode->encoding_format."'".', '."'".$barcode->barcode_width."'".', '."'".$barcode->barcode_height."'".', '."'".$barcode->text_size."'"); ?>)" title="<?php echo e(trans('messages.barcode')); ?>">
                            <span class="glyphicon glyphicon-barcode"></span>
                            <?php echo e(trans('messages.barcode')); ?>

                        </a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('refer_specimens')): ?>
                        <a class="btn btn-sm btn-info" href="<?php echo e(route('unhls_test.refer', array($test->id))); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.refer-sample')); ?>

                        </a>
                        <?php endif; ?>
                        <?php elseif($test->isStarted()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('enter_test_results')): ?>
                        <a class="btn btn-sm btn-info" id="enter-results-<?php echo e($test->id); ?>-link" href="<?php echo e(route('unhls_test.enterResults', array($test->id))); ?>" title="<?php echo e(trans('messages.enter-results-title')); ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <?php echo e(trans('messages.enter-results')); ?>

                        </a>
                        <?php endif; ?>
                        <?php elseif($test->isCompleted()): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_test_results')): ?>
                        <a class="btn btn-sm btn-info" id="edit-<?php echo e($test->id); ?>-link" href="<?php echo e(route('unhls_test.edit', array($test->id))); ?>" title="<?php echo e(trans('messages.edit-test-results')); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit')); ?>

                        </a>
                        <?php endif; ?>
                        <?php if(Illuminate\Support\Facades\Auth::user()->can('verify_test_results') && Illuminate\Support\Facades\Auth::user()->id != $test->tested_by): ?>
                        <a class="btn btn-sm btn-success" id="verify-<?php echo e($test->id); ?>-link" href="<?php echo e(route('unhls_test.viewDetails', array($test->id))); ?>" title="<?php echo e(trans('messages.verify-title')); ?>">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <?php echo e(trans('messages.verify')); ?>

                        </a>
                        <?php endif; ?>
                        <?php elseif($test->specimenIsRejected()): ?>
                        <a class="btn btn-sm btn-info" id="edit-<?php echo e($test->id); ?>-link" href="<?php echo e(URL::to('rejection/'.$test->visit->patient->id.'/'.$test->visit->id.'/'.$test->id )); ?>" title="<?php echo e(trans('Print Rejection Report')); ?>" target="blank">
                            <span class="glyphicon glyphicon-print"></span>
                            <?php echo e(trans('Rejection Report')); ?>

                        </a>

                        <?php endif; ?>
                        <?php endif; ?>
                    </td>

                    <td id="test-status-<?php echo e($test->id); ?>" class='test-status'>
                        <!-- Test Statuses -->
                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-md-12">
                                    <?php if($test->isNotReceived()): ?>
                                    <!--
                                        <span class='label label-default'>
                                            <?php echo e(trans('messages.not-received')); ?></span> -->
                                    <?php elseif($test->isPending()): ?>
                                    <span class='label label-info'>
                                        <?php echo e(trans('messages.pending')); ?></span>
                                    <?php elseif($test->isStarted()): ?>
                                    <span class='label label-warning'>
                                        <?php echo e(trans('messages.started')); ?></span>
                                    <?php elseif($test->isCompleted()): ?>
                                    <span class='label label-primary'>
                                        <?php echo e(trans('messages.completed')); ?></span>
                                    <?php elseif($test->isVerified()): ?>
                                    <span class='label label-success'>
                                        <?php echo e(trans('messages.verified')); ?></span>
                                    <?php elseif($test->isApproved()): ?>
                                    <span class='label label-default'>
                                        Approved</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Specimen statuses -->
                                    <?php if($test->isNotReceived()): ?>

                                    <span class='label label-default'>
                                        <?php echo e(trans('messages.specimen-not-received-label')); ?></span>
                                    <?php elseif($test->specimen->isReferred()): ?>
                                    <span class='label label-primary'>
                                        <?php echo e(trans('messages.specimen-referred-label')); ?>

                                        <?php if($test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
                                        <?php echo e(trans("messages.in")); ?>

                                        <?php elseif($test->specimen->referral->status == App\Models\Referral::REFERRED_OUT): ?>
                                        <?php echo e(trans("messages.out")); ?>

                                        <?php endif; ?>
                                    </span>
                                    <?php elseif($test->specimenIsRejected()): ?>
                                    <span class='label label-danger'>
                                        <?php echo e(trans('messages.specimen-rejected-label')); ?></span>
                                    <?php elseif($test->specimen->isAccepted()): ?>
                                    <span class='label label-success'>
                                        <?php echo e(trans('messages.specimen-accepted-label')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($testSet->links()); ?>

        <?php echo e(Session::put('SOURCE_URL', URL::full())); ?>

        <?php echo e(Session::put('TESTS_FILTER_INPUT', Illuminate\Support\Facades\Request::except('_token'))); ?>


    </div>
</div>

<!-- MODALS -->
<div class="modal fade" id="new-test-modal-unhls">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo e(Form::open(array('route' => 'unhls_test.create'))); ?>

            <input type="hidden" id="patient_id" name="patient_id" value="0" />
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"><?php echo e(trans('messages.close')); ?></span>
                </button>
                <h4 class="modal-title"><?php echo e(trans('messages.create-new-test')); ?></h4>
            </div>
            <div class="modal-body">
                <h4><?php echo e(trans('messages.first-select-patient')); ?></h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type="text" class="form-control search-text" placeholder="<?php echo e(trans('messages.search-patient-placeholder')); ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-default search-patient" type="button">
                                    <?php echo e(trans('messages.patient-search-button')); ?></button>
                            </span>
                        </div><!-- /input-group -->
                        <div class="patient-search-result form-group">
                            <table class="table table-condensed table-striped table-bordered table-hover hide">
                                <thead>
                                    <th> </th>
                                    <th><?php echo e(trans('messages.patient-id')); ?></th>
                                    <th><?php echo e(Lang::choice('messages.name',2)); ?></th>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php echo e(trans('messages.close')); ?></button>
                <button type="button" class="btn btn-primary next" onclick="submit();" disabled>
                    <?php echo e(trans('messages.next')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="accept-specimen-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo e(Form::open(array('route' => 'unhls_test.acceptSpecimen'))); ?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"><?php echo e(trans('messages.close')); ?></span>
                </button>
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                    <?php echo e(trans('messages.accept-specimen-title')); ?>

                </h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.submit'),
                        array('class' => 'btn btn-primary', 'data-dismiss' => 'modal', 'onclick' => 'submit()'))); ?>

                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php echo e(trans('messages.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal /#accept-specimen-modal-->

<div class="modal fade" id="collect-sample-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo e(Form::open(array('route' => 'unhls_test.collectSpecimenAction'))); ?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"><?php echo e(trans('messages.close')); ?></span>
                </button>
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                    <?php echo e('Collect Sample'); ?>

                </h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.submit'),
                        array('class' => 'btn btn-primary', 'data-dismiss' => 'modal', 'onclick' => 'submit()'))); ?>

                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php echo e(trans('messages.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal /#collect-specimen-modal-->

<!-- OTHER UI COMPONENTS -->
<div class="hidden pending-test-not-collected-specimen">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class='label label-info'>
                    <?php echo e(trans('messages.pending')); ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class='label label-default'>
                    <?php echo e(trans('messages.specimen-not-received-label')); ?></span>
            </div>
        </div>
    </div>
</div> <!-- /. pending-test-not-received-specimen -->

<div class="hidden pending-test-accepted-specimen">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class='label label-info'>
                    <?php echo e(trans('messages.pending')); ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class='label label-success'>
                    <?php echo e(trans('messages.specimen-accepted-label')); ?></span>
            </div>
        </div>
    </div>
</div> <!-- /. pending-test-accepted-specimen -->

<div class="hidden started-test-accepted-specimen">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class='label label-warning'>
                    <?php echo e(trans('messages.started')); ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class='label label-success'>
                    <?php echo e(trans('messages.specimen-accepted-label')); ?></span>
            </div>
        </div>
    </div>
</div> <!-- /. started-test-accepted-specimen -->

<div class=" hidden collect-specimen-button">
    <a class="btn btn-sm btn-info collect-specimen" href="javascript:void(0)" title="<?php echo e(trans('messages.collect-specimen-title')); ?>" data-url="<?php echo e(route('unhls_test.collectSpecimen')); ?>">
        <span class="glyphicon glyphicon-ambulance"></span>
        <?php echo e(trans('messages.collect-specimen')); ?>

    </a>
</div><!-- /. colllect-specimen button -->

<div class="hidden accept-button">
    <a class="btn btn-sm btn-info accept-specimen" href="javascript:void(0)" title="<?php echo e(trans('messages.accept-specimen-title')); ?>" data-url="<?php echo e(route('unhls_test.acceptSpecimen')); ?>">
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <?php echo e(trans('messages.accept-specimen')); ?>

    </a>
</div> <!-- /. accept-button -->

<div class="hidden reject-start-buttons">
    <a class="btn btn-sm btn-danger reject-specimen" href="#" title="<?php echo e(trans('messages.reject-title')); ?>">
        <span class="glyphicon glyphicon-thumbs-down"></span>
        <?php echo e(trans('messages.reject')); ?></a>
    <a class="btn btn-sm btn-warning start-test" href="javascript:void(0)" data-url="<?php echo e(route('unhls_test.start')); ?>" title="<?php echo e(trans('messages.start-test-title')); ?>">
        <span class="glyphicon glyphicon-play"></span>
        <?php echo e(trans('messages.start-test')); ?></a>
</div> <!-- /. reject-start-buttons -->

<div class="hidden enter-result-buttons">
    <a class="btn btn-sm btn-info enter-result">
        <span class="glyphicon glyphicon-pencil"></span>
        <?php echo e(trans('messages.enter-results')); ?></a>
</div> <!-- /. enter-result-buttons -->

<div class="hidden start-refer-button">
    <a class="btn btn-sm btn-info refer-button" href="#">
        <span class="glyphicon glyphicon-edit"></span>
        <?php echo e(trans('messages.refer-sample')); ?>

    </a>
</div> <!-- /. referral-button -->
<!-- Barcode begins -->

<div id="count" style='display:none;'>0</div>
<div id="barcodeList" style="display:none;"></div>

<!-- jQuery barcode script -->
<script type="text/javascript" src="<?php echo e(asset('js/barcode.js')); ?> "></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jax.DESKTOP-2NUFPOA\Downloads\alis_gambia\resources\views/unhls_test/index.blade.php ENDPATH**/ ?>
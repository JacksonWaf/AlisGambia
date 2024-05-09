<?php $__env->startSection("content"); ?>
<?php $__env->startSection("content"); ?>

<div class="well firstrow list">
    <div class="col-md-12">
        <?php echo e(Form::open(array('route' =>array('newdashboard.index')))); ?>

        <div class="col-md-3">
            <?php echo e(Form::text('date_from', $dateFrom, array('class' => 'form-control standard-datepicker') )); ?>

        </div>
        <div class="col-md-3">
            <?php echo e(Form::text('date_to', $dateTo, array('class' => 'form-control standard-datepicker') )); ?>

        </div>
        <div class="col-md-3">
            <?php echo e(Form::select("hubid", $hubs, Request::get('hubid'),['class'=>'form-control','id'=>'hub'])); ?>

        </div>
        <div class="col-md-3">
            <?php echo e(Form::button("<span class='glyphicon glyphicon-filter'> </span> ".trans('messages.view'), array('class' => 'btn btn-primary', 'id' => 'filter', 'type' => 'submit'))); ?>

        </div>
        <?php echo e(Form::close()); ?>

    </div>
</div>
<div class="panel">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default">
                <b>Patients and Tests</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-people"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($patientCount); ?></span>
                            <span class="stat_name">Number of patient Visits</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-flask"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($testCounts); ?></span>
                            <span class="stat_name">Tests completed</span>
                        </div>

                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-plane"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($testCounts_pending); ?></span>
                            <span class="stat_name">Tests Pending</span>
                        </div>

                    </div>
                </div>
            </div> <!--end of panel-->
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default"><b>Prevalences</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_b"><i class="ion-ios-personadd"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"> <?php echo e($hiv); ?> % </span>
                            <span class="stat_name">HIV Prevalence</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_b"><i class="ion-ios-personadd"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"> <?php echo e($malaria); ?>% </span>
                            <span class="stat_name">Malaria Prevalence</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_b"><i class="ion-ios-personadd"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($tb); ?>% </span>
                            <span class="stat_name">TB Prevalence</span>
                        </div>
                    </div>
                </div>
            </div> <!--end of panel-->
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default"><b>Samples</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-medkit"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($sampleCounts); ?></span>
                            <span class="stat_name">Collected at Lab</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_d"><i class="ion-ios-checkmark"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($stracker_samples); ?></span>
                            <span class="stat_name">Received Through SRN</span>
                        </div>
                    </div>
                    <!-- <div class="stat_box">
                                                <div class="stat_ico color_c"><i class="ion-ios-close"></i></div>
                                                <div class="stat_content">
                                                    <span class="stat_count"><?php echo e($samplesRejected); ?></span>
                                                    <span class="stat_name">Samples Rejected</span>
                                                </div>
                                            </div> -->
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-flask"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($tests_rejected); ?></span>
                            <span class="stat_name">Rejected</span>
                        </div>

                    </div>
                </div>
            </div><!--end of panel-->
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default"><b>Biosafety & Biosecurity Incidents</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_g"><i class="ion-nuclear"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"><?php echo e($countbbincidents_all); ?></span>
                            <span class="stat_name">Number of BB incidents</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_g"><i class="ion-nuclear"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">
                                <?php echo e($countbbincidents_major_dated); ?>

                                <?php if (($countbbincidents_all) > 0) { ?>
                                    (<?php echo e(round (($countbbincidents_major_dated/$countbbincidents_all*100),2)); ?> %)
                                <?php } ?>
                            </span>
                            <span class="stat_name">Major incidents</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_g"><i class="ion-nuclear"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">
                                <?php echo e($countbbincidents_minor_dated); ?>

                                <?php if (($countbbincidents_all) > 0) { ?>
                                    (<?php echo e(round (($countbbincidents_minor_dated/$countbbincidents_all*100),2)); ?> %)
                                <?php } ?>
                            </span>
                            <span class="stat_name">Minor incidents</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading ">
        <div class="row less-gutter">
            <div class="col-md-8">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo e(trans('messages.positivity-rates')); ?>

            </div>
            <div class="col-md-4">
                <a class="btn btn-info pull-right" id="reveal" href="#" onclick="return false;" alt="<?php echo e(trans('messages.show-hide')); ?>" title="<?php echo e(trans('messages.show-hide')); ?>">
                    <span class="glyphicon glyphicon-eye-open"></span> <?php echo e(trans('messages.show-hide')); ?></a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <div id="summary" class="hidden">
            <div class="table-responsive">
                <table class="table table-bordered" id="rates">
                    <tbody>
                        <tr>
                            <th><?php echo e(Lang::choice('messages.test-type',1)); ?></th>
                            <th><?php echo e(trans('messages.total-specimen')); ?></th>
                            <th><?php echo e(trans('messages.positive')); ?></th>
                            <th><?php echo e(trans('messages.negative')); ?></th>
                            <th><?php echo e(trans('messages.prevalence-rates-label')); ?></th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($datum->test); ?></td>
                            <td><?php echo e($datum->total); ?></td>
                            <td><?php echo e($datum->positive); ?></td>
                            <td><?php echo e($datum->negative); ?></td>
                            <td><?php echo e($datum->rate); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5"><?php echo e(trans('messages.no-records-found')); ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="highChart"></div>
</div>
<!-- Begin HighCharts scripts -->
<?php echo e(HTML::script('highcharts/highcharts.js')); ?>

<?php echo e(HTML::script('highcharts/exporting.js')); ?>

<!-- End HighCharts scripts -->
<script type="text/javascript">
    $(document).ready(function() {
        //	Load prevalence chart
        $('#highChart').highcharts(<?php echo $chart; ?>);
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("newdashboardlayout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jax.DESKTOP-2NUFPOA\Downloads\alis_gambia\resources\views/newdashboard/index.blade.php ENDPATH**/ ?>
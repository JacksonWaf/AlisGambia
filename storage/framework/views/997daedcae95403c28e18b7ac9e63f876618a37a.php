<?php $__env->startSection("content"); ?>

<style type="text/css">
    th,
    td {
        width: 18%;

    }
</style>
<div>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
        <li class="active"><a href="<?php echo e(route('reports.patient.index')); ?>"><?php echo e(Lang::choice('messages.report', 2)); ?></a></li>
        <li class="active"><?php echo e(trans('messages.turnaround-time')); ?></li>
    </ol>
</div>
<?php echo e(Form::open(array('route' => array('reports.aggregate.tat'), 'id' => 'prevalence_rates', 'method' => 'post'))); ?>

<div class="container-fluid">
    <div class="row report-filter">
        <div class="col-md-2">
            <div class="col-md-2">
                <?php echo e(Form::label('start', trans("messages.from"))); ?>

            </div>
            <div class="col-md-10">
                <?php echo e(Form::text('start', isset($input['start'])?$input['start']:date('Y-m-d'),
                        array('class' => 'form-control standard-datepicker'))); ?>

            </div>
        </div>
        <div class="col-md-2">
            <div class="col-md-2">
                <?php echo e(Form::label('to', trans("messages.to"))); ?>

            </div>
            <div class="col-md-10">
                <?php echo e(Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
                        array('class' => 'form-control standard-datepicker'))); ?>

            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-3">
                <?php echo e(Form::label('test_type', Lang::choice('messages.test-type',1))); ?>

            </div>
            <div class="col-md-9">
                <?php echo e(Form::select('test_type', array(0 => '-- All Tests --')+App\Models\TestType::supportTurnaoundCounts()->pluck('name','id')->toArray(),
                        isset($input['test_type'])?$input['test_type']:0, array('class' => 'form-control'))); ?>

            </div>
        </div>
        <div class="col-md-1">
            <?php echo e(Form::submit(trans('messages.view'),
                    array('class' => 'btn btn-info', 'id'=>'filter', 'name'=>'filter'))); ?>

        </div>
        <div class="col-sm-1">
            <?php echo e(Form::submit(trans('Export to Excel'), 
                    array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))); ?>

        </div>
        <div class="col-sm-1">
            <?php echo e(Form::submit(trans('Export beyond Data'), 
                    array('class' => 'btn btn-success', 'id'=>'beyond', 'name'=>'beyond'))); ?>

        </div>
    </div>
</div>
<?php echo e(Form::close()); ?>

<br />
<div class="panel panel-primary">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-8">
                    <span class="glyphicon glyphicon-user"></span>
                    <?php echo e(trans('Turn Around Time Stats (Click Export Buttons To View More TAT Statistics)')); ?>

                </div>
                <div class="col-md-4">
                    <a class="btn btn-info pull-right" id="reveal" href="#" onclick="return false;" alt="<?php echo e(trans('messages.show-hide')); ?>" title="<?php echo e(trans('messages.show-hide')); ?>">
                        <span class="glyphicon glyphicon-eye-open"></span> <?php echo e(trans('messages.show-hide')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <!-- if there are filter errors, they will show here -->
        <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
        <?php endif; ?>
        <div class="table-responsive">
            <div id="summary" class="hidden">
                <div class="table-responsive">
                    <!--  <div class="col-sm-1">
				<?php echo e(Form::submit(trans('messages.export-to-word'),
		    		array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))); ?>

                        </div> -->
                    <table class="table table-bordered" id="rates">
                        <tbody>
                            <tr>
                                <th><?php echo e(Lang::choice('messages.test-type',1)); ?></th>
                                <th><?php echo e(trans('messages.total-specimen')); ?></th>
                                <th>Expected TAT</th>
                                <th>Actual TAT</th>
                                <th>Within TAT</th>
                                <th>Beyond TAT</th>
                                <th><?php echo e(trans('messages.tat-rates-label')); ?> Within</th>
                                <th><?php echo e(trans('messages.tat-rates-label')); ?> Beyond</th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($datum->name); ?></td>
                                <td><?php echo e($datum->total); ?></td>
                                <td><?php echo e($datum->ETAT); ?></td>
                                <td><?php echo e($datum->avgtime); ?></td>
                                <td><?php echo e($datum->Within); ?></td>
                                <td><?php if($datum->Beyond != 0): ?><a id="reject-<?php echo e($datum->Beyond); ?>-link" href="#new-tat-beyond-modal" title="">
                                        <span><?php echo e($datum->Beyond); ?></span>
                                    </a><?php endif; ?></td>
                                <td><?php echo e(round($datum->Within / $datum->total * 100, 2)); ?></td>
                                <td><?php echo e(round($datum->Beyond / $datum->total * 100, 2)); ?></td>
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
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/tat/index.blade.php ENDPATH**/ ?>
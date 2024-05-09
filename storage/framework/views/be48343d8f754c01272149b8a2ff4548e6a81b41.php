<html>
<head>
<?php echo e(HTML::style('css/bootstrap.min.css')); ?>

<?php echo e(HTML::style('css/bootstrap-theme.min.css')); ?>

</head>
<body>
    <style>
  table, th, td {
    border: 1px solid black;
    padding: 10px;
  }
</style>
<div id="content">
    <div class="panel panel-primary">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-8">
                    <span class="glyphicon glyphicon-user"></span>
                    TEST TYPE TURNAROUND TIME
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered"  width="100%">
        <tbody align="left">
            <<tr>
                            <th><?php echo e(Lang::choice('Patient',1)); ?></th>
                            <th><?php echo e(Lang::choice('messages.test-type',1)); ?></th>
                            <th><?php echo e(Lang::choice('Time accepted',1)); ?></th>
                            <th><?php echo e(trans('Time completed')); ?></th>
                            <th>Actual TAT</th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $databeyond; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($datum->patient); ?></td>
                            <td><?php echo e($datum->name); ?></td>
                            <td><?php echo e($datum->time_accepted); ?></td>
                            <td><?php echo e($datum->time_completed); ?></td>
                            <td><?php echo e($datum->avgtime); ?></td>
                           
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
</body>
</html><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/reports/tat/exportBeyondTAT.blade.php ENDPATH**/ ?>
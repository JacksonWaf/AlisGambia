<?php $__env->startSection("content"); ?>

<div>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
        <li class="active">Alis Restrack Data Export</li>
    </ol>
</div>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-adjust"></span>
        Download Restrack Alis Report
    </div>
    <div class="panel-body">
        <!-- if there are creation errors, they will show here -->
        <?php if($errors->all()): ?>
        <div class="alert alert-danger">
            <?php echo e(HTML::ul($errors->all())); ?>

        </div>
        <?php endif; ?>

        <?php echo e(Form::open(array('route' => 'reports.alisrestrack.download', 'id' => 'form-create-testcategory'))); ?>


        <div class="form-group">
            <?php echo e(Form::label('date_from', trans('messages.from'))); ?>

            <?php echo e(Form::text('date_from', $dateFrom,
                        array('class' => 'form-control standard-datepicker'))); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('date_to', trans('messages.to'))); ?>

            <?php echo e(Form::text('date_to', $dateTo,
                        array('class' => 'form-control standard-datepicker'))); ?>

        </div>
        <div class="form-group actions-row">
            <?php echo e(Form::button("<span class='glyphicon glyphicon-download'></span> Download",
                        array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

        </div>

        <?php echo e(Form::close()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jax.DESKTOP-2NUFPOA\Downloads\alis_gambia\resources\views/reports/alis_restrack.blade.php ENDPATH**/ ?>
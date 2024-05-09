<?php $__env->startSection("content"); ?>
    <div>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
            <li><a href="<?php echo e(route('unhls_test.index')); ?>"><?php echo e(Lang::choice('messages.test',2)); ?></a></li>
            <li class="active"><?php echo e(trans('messages.reject-title')); ?></li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <div class="container-fluid">
                <div class="row less-gutter">
                    <div class="col-md-11">
                        <span class="glyphicon glyphicon-filter"></span><?php echo e(trans('messages.reject-title')); ?>

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
            <?php echo e(Form::open(array('route' => 'unhls_test.rejectAction'))); ?>

            <?php echo e(Form::hidden('specimen_id', $test->specimen->id)); ?>

            <?php echo e(Form::hidden('test_id', $test->id)); ?>

            <div class="panel-body">
                <div class="display-details">
                    <p><strong><?php echo e(Lang::choice('messages.test-type',1)); ?></strong>
                        <?php echo e($test->testType->name); ?></p>
                    <p><strong><?php echo e(trans('messages.specimen-type-title')); ?></strong>
                        <?php echo e($test->specimen->specimenType->name); ?></p>
                    <p>
                        <strong><?php echo e(trans('messages.specimen-number-title')); ?></strong>
                        <?php echo e($test->specimen->id); ?>

                    </p>
                </div>
                <div id="reject-reason">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <?php echo e(Form::label('rejectionReason', trans('messages.rejection-reason'))); ?>

                            <?php echo e(Form::select('rejectionReason[]', array(0 => '')+$rejectionReason->pluck('reason', 'id')->toArray(),
                                old('rejectionReason'), array('class' => 'form-control'))); ?>

                        </div>
                        <?php echo e(Form::button("<span class='glyphicon glyphicon-delete'></span> ".'Remove', ['class' => 'remove-reason btn-normal'])); ?>

                    </div>
                </div>
                <div>
                    <a href="#" id="add"><i>Add Rejection Reason if more than one</i></a></div>
                <div class="form-group">
                    <?php echo e(Form::label('rejecting_officer', trans("messages.rejecting-officer"))); ?>

                    <?php echo e(Form::text('rejecting-officer', Auth::user()->name, old('rejecting_officer'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('cadre-obtainer', 'Cadre of Rejecting officer')); ?>

                    <?php echo e(Form::text('cadre-obtainer',Auth::user()->designation, old('cadre_obtainer'), array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('contacts', trans("messages.contacts").' of Rejecting officer')); ?>

                    <?php echo e(Form::textarea('contacts', old('contacts'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('reject_explained_to', trans("messages.reject-explained-to"))); ?>

                    <?php echo e(Form::text('reject_explained_to', old('reject_explained_to'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group actions-row">
                    <?php echo e(Form::button("<span class='glyphicon glyphicon-thumbs-down'></span> ".trans('messages.reject'),
                        ['class' => 'btn btn-danger', 'onclick' => 'submit()'])); ?>

                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_test/reject.blade.php ENDPATH**/ ?>
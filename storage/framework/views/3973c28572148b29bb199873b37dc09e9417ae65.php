<?php $__env->startSection("content"); ?>

    <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
    <?php endif; ?>
    <div>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
          <li>
            <a href="<?php echo e(route('clinicians.index')); ?>">Clinicians</a>
          </li>
          <li class="active">Edit Clinician</li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <span class="glyphicon glyphicon-edit"></span>
            Edit Clinician
        </div>
        <div class="panel-body">
            <?php if($errors->all()): ?>
                <div class="alert alert-danger">
                    <?php echo e(HTML::ul($errors->all())); ?>

                </div>
            <?php endif; ?>
            <?php echo e(Form::model($clinician, array('route' => array('clinicians.update', $clinician->id),
                'method' => 'PUT', 'id' => 'form-edit-clinician'))); ?>

                <div class="form-group">
                    <?php echo e(Form::label('name', Lang::choice('messages.name',1))); ?>

                    <?php echo e(Form::text('name', old('name'), array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('cadre', "Cadre")); ?></label>
                    <?php echo e(Form::text('cadre', old('cadre'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('phone', "Phone")); ?></label>
                    <?php echo e(Form::text('phone', old('phone'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('email', "Email")); ?></label>
                    <?php echo e(Form::text('email', old('email'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('active', "Activate/Deactivate")); ?></label>
                   <div><?php echo e(Form::radio('active', '0', true)); ?>

                    <span class="input-tag">Activate</span></div>
                    <div><?php echo e(Form::radio("active", '1', false)); ?>

                    <span class="input-tag">Deactivate</span></div>
                </div>
                <div class="form-group actions-row">
                    <?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '. trans('messages.save'),
                        ['class' => 'btn btn-primary', 'onclick' => 'submit()'])); ?>

                </div>

            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/clinicians/edit.blade.php ENDPATH**/ ?>
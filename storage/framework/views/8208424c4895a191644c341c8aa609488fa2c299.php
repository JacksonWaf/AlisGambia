<?php $__env->startSection("content"); ?>

    <div>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
          <li>
            <a href="<?php echo e(route('clinicians.index')); ?>">Clinicians</a>
          </li>
          <li class="active">Create Clinician</li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <span class="glyphicon glyphicon-adjust"></span>
            Create Clinician
        </div>
        <div class="panel-body">
        <!-- if there are creation errors, they will show here -->
            <?php if($errors->all()): ?>
                <div class="alert alert-danger">
                    <?php echo e(HTML::ul($errors->all())); ?>

                </div>
            <?php endif; ?>

            <?php echo e(Form::open(array('route' => 'clinicians.store', 'id' => 'form-create-clinician'))); ?>


                <div class="form-group">
                    <?php echo e(Form::label('name', Lang::choice('messages.name',1))); ?>

                    <?php echo e(Form::text('name', old('name'), array('class' => 'form-control'))); ?>

                    <?php if($errors->has('name')): ?>
                        <span class="text-danger">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo e(Form::label('cadre', "Cadre"), array('class' => 'required')); ?></label>
                    <?php echo e(Form::text('cadre', old('cadre'),
                        array('class' => 'form-control', 'required' => 'required'))); ?>

                    <?php if($errors->has('cadre')): ?>
                        <span class="text-danger">
                            <strong><?php echo e($errors->first('cadre')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo e(Form::label('phone', "Phone")); ?></label>
                    <?php echo e(Form::text('phone', old('phone'),
                        array('class' => 'form-control'))); ?>

                    <?php if($errors->has('phone')): ?>
                        <span class="text-danger">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo e(Form::label('email', "Email")); ?></label>
                    <?php echo e(Form::text('email', old('email'),
                        array('class' => 'form-control'))); ?>

                </div>
                <div class="form-group actions-row">
                    <?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save'),
                        array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

                </div>

            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/clinicians/create.blade.php ENDPATH**/ ?>
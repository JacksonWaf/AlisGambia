<?php $__env->startSection("content"); ?>
<div>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
      <li class="active"><?php echo e(trans('messages.access-controls')); ?></li>
    </ol>
</div>
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
            <div class="panel-heading ">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo e(Lang::choice('messages.permission', 2)); ?>

                <div class="panel-btn">
                    <a class="btn btn-sm btn-info" href="<?php echo e(URL::to('role/create')); ?>">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                        <?php echo e(trans('messages.new-role')); ?>

                    </a>
                </div>
            </div>
            <div class="panel-body" >
            <?php echo e(Form::open(array('route'=>'permission.store'))); ?>

            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th><?php echo e(Lang::choice('messages.permission', 2)); ?></th>
                        <th colspan="<?php echo e(count($roles)); ?>"><?php echo e(Lang::choice('messages.role', 2)); ?></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <td><?php echo e($role->name); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td><?php echo e(trans('messages.no-roles-found')); ?></td>
                    <?php endif; ?>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionKey => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($permission->display_name); ?></td>
                        <?php $__empty_2 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleKey => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                        <td>
                            <?php if($role == App\Models\Role::getAdminRole()): ?>
                                <span class="glyphicon glyphicon-lock"></span>
                                <?php echo e(Form::checkbox('permissionRoles['.$permissionKey.']['.$roleKey.']', '1',
                                $permission->hasRole($role->name), array('style'=>'display:none') )); ?>

                            <?php else: ?>
                                <?php echo e(Form::checkbox('permissionRoles['.$permissionKey.']['.$roleKey.']', '1',
                                $permission->hasRole($role->name))); ?>

                            <?php endif; ?>

                        </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                            <td>[-]</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="2"><?php echo e(trans('messages.no-permissions-found')); ?></td></tr>
                <?php endif; ?>
                </tbody>
            </table>
            <div class="form-group actions-row">
                    <?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save'),
                        array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jax.DESKTOP-2NUFPOA\Downloads\alis_gambia\resources\views/permission/index.blade.php ENDPATH**/ ?>
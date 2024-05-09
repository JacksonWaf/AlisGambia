<?php $__env->startSection("content"); ?>
<div>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
      <li class="active"><?php echo e(Lang::choice('messages.role', 2)); ?></li>
    </ol>
</div>
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-user"></span>
        <?php echo e(Lang::choice('messages.role', 2)); ?>

        <div class="panel-btn">
            <a class="btn btn-sm btn-info" href="<?php echo e(URL::to("role/create")); ?>" >
                <span class="glyphicon glyphicon-plus-sign"></span>
                <?php echo e(trans('messages.new-role')); ?>

            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th><?php echo e(Lang::choice('messages.name', 1 )); ?></th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr <?php if(Session::has('activerole')): ?>
                            <?php echo e((Session::get('activerole') == $role->id)?"class='info'":""); ?>

                        <?php endif; ?>>
                    <td><?php echo e($role->name); ?></td>

                    <td>
                        <a class="btn btn-sm btn-info <?php echo e(($role == App\Models\User::getAdminRole()) ? 'disabled': ''); ?>"
                            href="<?php echo e(URL::to("role/" . $role->id . "/edit")); ?>" >
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit')); ?>

                        </a>
                        <button class="btn btn-sm btn-danger delete-item-link <?php echo e(($role == App\Models\User::getAdminRole()) ? 'disabled': ''); ?>"
                            data-toggle="modal" data-target=".confirm-delete-modal"
                            data-id='<?php echo e(URL::to("role/" . $role->id . "/delete")); ?>'>
                            <span class="glyphicon glyphicon-trash"></span>
                            <?php echo e(trans('messages.delete')); ?>

                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="2"><?php echo e(trans('messages.no-roles-found')); ?></td></tr>
            <?php endif; ?>
            </tbody>
        </table>
<!--        --><?php //echo $roles->links();
        Session::put('SOURCE_URL', URL::full());?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/role/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
<div>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
      <li class="active">Health Units</li>
    </ol>
</div>
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-adjust"></span>
        Health Units
        <div class="panel-btn">
            <a class="btn btn-sm btn-info" href="<?php echo e(URL::to("ward/create")); ?>" >
                <span class="glyphicon glyphicon-plus-sign"></span>
                Create Health Unit
            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover table-condensed search-table">
            <thead>
                <tr>
                    <th><?php echo e(Lang::choice('messages.name',1)); ?></th>
                    <th><?php echo e(trans('messages.description')); ?></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $ward; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->description); ?></td>

                    <td>

                    <!-- show the ward (uses the show method found at GET /ward/{id} -->
                        <a class="btn btn-sm btn-success" href="<?php echo e(URL::to("ward/" . $value->id)); ?>" >
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('messages.view')); ?>

                        </a>

                    <!-- edit this ward (uses edit method found at GET /ward/{id}/edit -->
                        <a class="btn btn-sm btn-info" href="<?php echo e(URL::to("ward/" . $value->id . "/edit")); ?>" >
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit')); ?>

                        </a>

                    <!-- delete this ward (uses delete method found at GET /ward/{id}/delete -->
                        <?php echo e(Form::open(['route' => ['ward.destroy', $value->id], 'method' => 'DELETE',
                            'style' => 'display: inline-block;'])); ?>

                        <button class="btn btn-sm btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                            <?php echo e(trans('messages.delete')); ?>

                        </button>
                        <?php echo e(Form::close()); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/ward/index.blade.php ENDPATH**/ ?>
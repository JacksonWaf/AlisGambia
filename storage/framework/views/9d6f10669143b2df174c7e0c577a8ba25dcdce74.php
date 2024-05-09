<?php $__env->startSection("content"); ?>
<div>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
      <li class="active">Clinicians</li>
    </ol>
</div>
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-adjust"></span>
        Clinicians
        <div class="panel-btn">
            <a class="btn btn-sm btn-info" href="<?php echo e(URL::to("clinicians/create")); ?>" >
                <span class="glyphicon glyphicon-plus-sign"></span>
                Create Clinician
            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover table-condensed search-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Cadre</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $clinicians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->cadre); ?></td>
                    <td><?php echo e($value->phone); ?></td>
                    <td><?php echo e($value->email); ?></td>
                    <td><?php if($value->active == 0): ?>
                    ON
                    <?php else: ?>
                    OFF
                    <?php endif; ?></td>
                    <td>

                    <!-- show the clinician (uses the show method found at GET /ward/{id} -->
                        <a class="btn btn-sm btn-success" href="<?php echo e(URL::to("clinicians/" . $value->id)); ?>" >
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <?php echo e(trans('messages.view')); ?>

                        </a>

                    <!-- edit this clinician (uses edit method found at GET /ward/{id}/edit -->
                        <a class="btn btn-sm btn-info" href="<?php echo e(URL::to("clinicians/" . $value->id . "/edit")); ?>" >
                            <span class="glyphicon glyphicon-edit"></span>
                            <?php echo e(trans('messages.edit')); ?>

                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/clinicians/index.blade.php ENDPATH**/ ?>
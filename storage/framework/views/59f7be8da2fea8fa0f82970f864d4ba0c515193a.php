<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>

	  <li class="active"><?php echo e(Lang::choice('messages.equipment-maintenance',2)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="ion-gear-a"></span>
		<?php echo e(trans('messages.equipment-maintenance')); ?>

		<div class="panel-btn">

			<a href="<?php echo e(route("equipmentmaintenance.create")); ?>" class="btn btn-sm btn-info">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                <?php echo e(trans('messages.add')); ?>

                            </a>

		</div>
	</div>


	<div class="panel-body">
	<div class="table-responsive">
  	<table class="table table-striped search-table small-font">
			<thead>
				<tr>
					<th>Date</th>
					<th>Name</th>
					<th>Last Service</th>
					<th>Next Service</th>
					<th>Serviced by</th>
					<th>Contact</th>
					<th>Supplier</th>
					<th>Comment</th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>  <?php echo e(date('d M Y', strtotime($item->created_at))); ?> </td>
					<td>  <?php echo e($item->equipment->name); ?></td>
					<td>  <?php echo e(date('d M Y', strtotime($item->last_service_date))); ?></td>
					<td>  <?php echo e(date('d M Y', strtotime($item->next_service_date))); ?></td>
					<td>  <?php echo e($item->serviced_by_name); ?></td>
					<td>  <?php echo e($item->serviced_by_contact); ?></td>
					<td>  <?php echo e($item->supplier->name); ?></td>
					<td>  <?php echo e($item->comment); ?></td>
					<td>  </td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
  </table>
</div>

		<?php Session::put('SOURCE_URL', URL::full());?>
	</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/equipment/maintenance/index.blade.php ENDPATH**/ ?>
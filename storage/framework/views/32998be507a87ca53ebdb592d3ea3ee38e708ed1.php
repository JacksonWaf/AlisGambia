<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>

	  <li class="active"><?php echo e(Lang::choice('messages.equipment-list',2)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="ion-gear-a"></span>
		<?php echo e(trans('messages.equipment-list')); ?>

		<div class="panel-btn">

			<a href="<?php echo e(route("equipmentinventory.create")); ?>" class="btn btn-sm btn-info">
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

					<th>Name</th>
					<th>Model</th>
					<th>Serial number</th>
					<th>Procurement type</th>
					<th>Purchase date</th>
					<th>Delivery date</th>
					<th>Verification date</th>
					<th>Installation date</th>
					<th>Spare parts</th>
					<th>Warranty period</th>
					<th>Lifetime</th>
					<th>Service frequency</th>
					<th>Service contract</th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>

				<td> <?php echo e($item->name); ?> </td>
				<td> <?php echo e($item->model); ?> </td>
				<td> <?php echo e($item->serial_number); ?>  </td>
				<td> <?php echo e($procurement_type[$item->procurement_type]); ?></td>

				<td>  <?php echo e(date('d M Y', strtotime($item->purchase_date))); ?></td>
				<td>  <?php echo e(date('d M Y', strtotime($item->delivery_date))); ?></td>
				<td>  <?php echo e(date('d M Y', strtotime($item->verification_date))); ?></td>
				<td>  <?php echo e(date('d M Y', strtotime($item->installation_date))); ?></td>

				<td class="text-center">  <?php echo e($yes_no[$item->spare_parts]); ?></td>
				<td>  <?php echo e($item->warranty. ' years'); ?></td>
				<td>  <?php echo e($item->life_span . ' years'); ?></td>
				<td>  <?php echo e($service_frequency[$item->service_frequency]); ?></td>
				<td class="text-center">  <?php echo e($yes_no[$item->service_contract]); ?></td>

				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
  		</table>
	</div>

		<?php Session::put('SOURCE_URL', URL::full());?>
	</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/equipment/inventory/index.blade.php ENDPATH**/ ?>
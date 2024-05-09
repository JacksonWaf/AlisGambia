<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>

	  <li class="active"><?php echo e(Lang::choice('messages.equipment-breakdown',2)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="ion-gear-a"></span>
		<?php echo e(trans('messages.equipment-breakdown')); ?>

		<div class="panel-btn">

			<a href="<?php echo e(route("equipmentbreakdown.create")); ?>" class="btn btn-sm btn-info">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                <?php echo e(trans('messages.add')); ?>

                            </a>

		</div>
	</div>


	<div class="panel-body">
	<div class="table-responsive">
  	<table class="table table-striped table-bordered search-table small-font">
			<thead>
				<tr>
					<th>Date</th>
					<th>Equipment Code</th>
					<th>Equipment Name</th>
					<th>Reason for failure or breakdown <br><small><i>(where possible:see codes below)</i></small></th>
					<th>Reported by</th>
					<th>Date when fault was reported</th>
					<th>Action taken on equipment <br><small><i>Actions taken at facility lab</i></small></th>
					<th>If equipment is referred for repair</th>
					<th>If equipment is repaired/restored <br><small><i>(restoration date)</i></small></th>
					<th>Equipment down time <br> <small><i>(time interval between reporting & restoration)</th>
						<th>Actions</th>

				</tr>
			</thead>
			<tbody>

			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
				<td  class="col-sm-1">  <?php echo e(date('d M Y', strtotime($item->created_at))); ?></td>
				<td  class="col-sm-2">  <?php echo e($item->equipment_code); ?></td>
				<td  class="col-sm-1">  <?php echo e($item->equipment->name); ?></td>
				<td class="col-sm-1">  <?php echo e($item->equipment_failure); ?></td>
				<td class="col-sm-1">  <?php echo e($item->reporting_officer); ?></td>
				<td class="col-sm-1">  <?php echo e((date('d M Y', strtotime($item->report_date)))); ?></td>
				<td  class="col-sm-2">  <?php echo e($item->action_taken); ?></td>
				<td class="col-sm-1">  <?php echo e($item->intervention_authority); ?></td>
				<td class="col-sm-1">  <?php echo e($item->intervention_date); ?></td>
				<td class="col-sm-1">   <?php echo e($item->report_date!=null?(date('d M Y', strtotime($item->report_date))):''); ?></td>
				<!-- <td class="col-sm-1">   <?php echo e($item->restore_date!=null?(date('d M Y', strtotime($item->restore_date))):''); ?></td> -->
				<!-- <td class="col-sm-1">  <?php echo e($item->restored_by!=null?($item->staff($item->restored_by)) :""); ?></td> -->
				<td>
				<?php if($item->restore_date==null): ?>
					<a class="btn btn-sm btn-info" href="<?php echo e(route('equipmentbreakdown.restore', array($item->id))); ?>" >
							<span class="glyphicon glyphicon-edit"></span>

					</a>
				<?php endif; ?>
                </td>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</tr>

			</tbody>
  </table>
</div>

		<?php Session::put('SOURCE_URL', URL::full());?>
	</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/equipment/breakdown/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active">Bloodbank</li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		List of Blood units
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("bloodbank/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				New entry
			</a>
		</div>
	</div>

	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="active">
        	<a  href="#1" data-toggle="tab">Available blood units(<?php echo e(count($bloodunits)); ?>)</a>
			</li>
			<li><a href="#2" data-toggle="tab">Used blood units(<?php echo e(count($bloodunits_used)); ?>)</a>
			</li>
			<li><a href="#3" data-toggle="tab">Transfered blood units(<?php echo e(count($bloodunits_transfered)); ?>)</a>
			</li>
		</ul>
		<div class="tab-content ">
			<div class="tab-pane active" id="1">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Unit Number</th>
					<th>Group</th>
					<th>Rhs</th>
					<th>Blood component</th>
					<th>Amount</th>
					<th>donation date</th>
					<th>Expiry date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $bloodunits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activetesttype')): ?>
                            <?php echo e((Session::get('activetesttype') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >
					<td><a href="<?php echo e(URL::to("bloodbank/". $value->id . "/transfer")); ?>" >
				<span></span><?php echo e($value->unit_no); ?></td>
					<td><?php echo e($value->group); ?></td>
					<td><?php echo e($value->rhs); ?></td>
					<td><?php echo e($value->blood_component); ?></td>
					<td><?php echo e($value->amount); ?></td>
					<td><?php echo e($value->donation_date); ?></td>
					<td><?php echo e($value->expiry_date); ?></td>
					<td>
						<!-- show the testtype (uses the show method found at GET /testtype/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("bloodbank/" . $value->id)); ?>">
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>

						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("bloodbank/" . $value->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							Edit
						</a>
						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-default" href="<?php echo e(URL::to("bloodbank/" . $value->id . "/transfer")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							Transfer
						</a>
						<!-- delete this testtype (uses the delete method found at GET /testtype/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("testtype/" . $value->id . "/delete")); ?>'>
							<span class="glyphicon glyphicon-trash"></span>
							<?php echo e(trans('messages.delete')); ?>

						</button>

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
			</table>
		  </div>
		</div>
			<div class="tab-pane" id="2">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Unit Number</th>
					<th>Group</th>
					<th>Blood component</th>
					<th>Patient</th>
					<th>Reason</th>
					<th>Amount</th>
					<th>donation date</th>
					<th>Expiry date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $bloodunits_used; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activetesttype')): ?>
                            <?php echo e((Session::get('activetesttype') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >
					<td><?php echo e($value->unit_no); ?></td>
					<td><?php echo e($value->group); ?></td>
					<td><?php echo e($value->blood_component); ?></td>
					<td><?php echo e($value->bloodTransfused->patient->name); ?></td>
					<td><?php echo e($value->bloodTransfused->reason); ?></td>
					<td><?php echo e($value->amount); ?></td>
					<td><?php echo e($value->donation_date); ?></td>
					<td><?php echo e($value->expiry_date); ?></td>
					<td>
						<!-- show the testtype (uses the show method found at GET /testtype/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("bloodbank/" . $value->id)); ?>">
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>

						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("bloodbank/" . $value->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
						<!-- delete this testtype (uses the delete method found at GET /testtype/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='<?php echo e(URL::to("testtype/" . $value->id . "/delete")); ?>'>
							<span class="glyphicon glyphicon-trash"></span>
							<?php echo e(trans('messages.delete')); ?>

						</button>

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
			</table>
		  </div>
		</div>
			<div class="tab-pane" id="3">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Unit Number</th>
					<th>Group</th>
					<th>Blood component</th>
					<th>Amount</th>
					<th>donation date</th>
					<th>Expiry date</th>
					<th>Destination</th>
					<th>Recorded By</th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $bloodunits_transfered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activetesttype')): ?>
                            <?php echo e((Session::get('activetesttype') == $value->id)?"class='info'":""); ?>

                        <?php endif; ?>
                        >
					<td><?php echo e($value->bloodBank->unit_no); ?></td>
					<td><?php echo e($value->bloodBank->group); ?></td>
					<td><?php echo e($value->bloodBank->blood_component); ?></td>
					<td><?php echo e($value->bloodBank->amount); ?></td>
					<td><?php echo e($value->bloodBank->donation_date); ?></td>
					<td><?php echo e($value->bloodBank->expiry_date); ?></td>
					<td><?php echo e($value->destination); ?></td>
					<td><?php echo e($value->recordedBy->name); ?>

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
			</table>
		</div>
		 
		
	</div>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/bloodbank/index.blade.php ENDPATH**/ ?>
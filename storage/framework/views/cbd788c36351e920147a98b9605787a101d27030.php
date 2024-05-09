<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.report',2)); ?></li>
	  <li class="active"><?php echo e(trans('messages.stock-level-report')); ?></li>
	</ol>
</div>

<?php echo e(Form::open(array('route' => array('reports.inventory'), 'class' => 'form-inline', 'role' => 'form'))); ?>


<div class='container-fluid'>
	<div class="row">
		<div class="col-md-4"><!-- From Datepicker-->
	    	<div class="row">
				<div class="col-md-2">
					<?php echo e(Form::label('start', trans("messages.from"))); ?>

				</div>
				<div class="col-md-10">
					<?php echo e(Form::text('start', isset($input['start'])?$input['start']:date('Y-m-d'),
				        array('class' => 'form-control standard-datepicker'))); ?>

			    </div>
	    	</div><!-- /.row -->
	    </div>
	    <div class="col-md-4"><!-- To Datepicker-->
	    	<div class="row">
				<div class="col-md-4">
			    	<?php echo e(Form::label('end', trans("messages.to"))); ?>

			    </div>
				<div class="col-md-8">
				    <?php echo e(Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
				        array('class' => 'form-control standard-datepicker'))); ?>

		        </div>
	    	</div><!-- /.row -->
	    </div>

    </div><!-- /.row -->
    <br />
	<div class="row">
          <div class="col-md-4">
	    	<div class="row">
		        <div class="col-md-4">
		        	<?php echo e(Form::label('report_type', Lang::choice('messages.report-type',1))); ?>

		        </div>
		        <div class="col-md-8">
		            <?php echo e(Form::select('report_type', $reportTypes,
		            	isset($input['report_type'])?$input['report_type']:0, array('class' => 'form-control'))); ?>

		        </div>
	        </div>
	    </div>
	    <div class="col-md-4">
	    <div class="row">
	    <div class="col-md-8">
		    <?php echo e(Form::button("<span class='glyphicon glyphicon-filter'></span> ".trans('messages.view'),
		        array('class' => 'btn btn-info', 'id' => 'filter', 'type' => 'submit'))); ?>

		        </div>
		        </div>
        </div>
	</div><!-- /.row -->
</div><!-- /.container-fluid -->

<?php echo e(Form::close()); ?>


<br />

<div class="panel panel-primary">

	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.stock-level-report')); ?>

	</div>

	<div class="panel-body">
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
		<?php endif; ?>

		<div class="table-responsive">
			<div><strong><?php echo e($reportTitle); ?></strong></div><br />
			<table class="table table-striped table-hover table-condensed search-table">
				<?php if($selectedReport==0): ?> <!-- monthly Report-->
					<thead>
						<tr>

							<th><?php echo e(Lang::choice('messages.commodity',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.supplier',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.batch-no',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.quantity',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.expiry-date',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.qty-issued',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.current-bal',1)); ?></th>
						</tr>
					</thead>
					<tbody>

						<?php $i = 1;?>
						<?php $__empty_1 = true; $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


							<tr>

								<td><?php echo e(App\Models\Commodity::find($row->commodity_id)->name); ?></td>
								<td><?php echo e($row->sourceOfStock($row->to_from_type,$row->to_from)->name); ?></td>
								<td><?php echo e($row->batch_number); ?></td>
								<td><?php echo e($row->quantity); ?></td>
								<td><?php echo e(date('d M Y', strtotime($row->expiry_date))); ?></td>
								<td></td>
								<td><?php echo e($row->balance); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>



						<?php endif; ?>

					</tbody>

				<?php elseif($selectedReport == 1): ?> <!-- quarterly Report-->
					<thead>
						<tr>

							<th><?php echo e(Lang::choice('messages.commodity',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.supplier',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.batch-no',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.quantity',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.expiry-date',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.qty-issued',1)); ?></th>
							<th><?php echo e(Lang::choice('messages.current-bal',1)); ?></th>
						</tr>
					</thead>
					<tbody>

						<?php $i = 1;?>
						<?php $__empty_1 = true; $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

							<tr>

								<td><?php echo e($row->balance); ?></td>
								<td><?php echo e($row->sourceOfStock($row->to_from_type,$row->to_from)->name); ?></td>
								<td><?php echo e($row->batch_number); ?></td>
								<td><?php echo e($row->quantity); ?></td>
								<td><?php echo e(date('d M Y', strtotime($row->expiry_date))); ?></td>
								<td></td>
								<td><?php echo e($row->balance); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>



						<?php endif; ?>
					</tbody>
				<?php endif; ?>

			</table>
		</div><!--/.table-responsive -->
	</div>
</div><!--/.panel -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/inventory/index.blade.php ENDPATH**/ ?>
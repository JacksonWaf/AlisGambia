<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.report',2)); ?></li>
	  <li class="active"><?php echo e(trans('messages.surveillance')); ?></li>
	</ol>
</div>
<div class='container-fluid'>
<?php echo e(Form::open(array('route' => array('reports.aggregate.surveillance'), 'class' => 'form-inline', 'role' => 'form'))); ?>

<div class="row">
		<div class="col-sm-4">
	    	<div class="row">
				<div class="col-sm-2">
					<?php echo e(Form::label('start', trans("messages.from"))); ?>

				</div>
				<div class="col-sm-3">
					<?php echo e(Form::text('start', isset($input['start'])?$input['start']:date('Y-m-01'),
				        array('class' => 'form-control standard-datepicker'))); ?>

	   			</div>
	    	</div>
	    </div>
	    <div class="col-sm-4">
	    	<div class="row">
				<div class="col-sm-2">
					<?php echo e(Form::label('end', trans("messages.to"))); ?>

				</div>
				<div class="col-sm-3">
					<?php echo e(Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
					    array('class' => 'form-control standard-datepicker'))); ?>

				</div>
	    	</div>
	    </div>
	    <div class="col-sm-4">
			<div class="col-sm-6">
			  	<?php echo e(Form::button("<span class='glyphicon glyphicon-filter'></span> ".trans('messages.view'),
	                array('class' => 'btn btn-info', 'id' => 'filter', 'type' => 'submit'))); ?>

	        </div>
	        <div class="col-sm-6">
				<?php echo e(Form::submit(trans('messages.export-to-word'),
		    		array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))); ?>

			</div>
	    </div>
	</div>
<?php echo e(Form::close()); ?>

</div>
<br />
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.surveillance')); ?>

	</div>
	<div class="panel-body">
	<?php if(Session::has('message')): ?>
		<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
	<?php endif; ?>
	<?php echo $__env->make("reportHeader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<strong>
		<p> <?php echo e(trans('messages.surveillance')); ?> -
			<?php $from = isset($input['start'])?$input['start']:date('01-m-Y');?>
			<?php $to = isset($input['end'])?$input['end']:date('d-m-Y');?>
			<?php if($from!=$to): ?>
				<?php echo e(trans('messages.from').' '.$from.' '.trans('messages.to').' '.$to); ?>

			<?php else: ?>
				<?php echo e(trans('messages.for').' '.date('d-m-Y')); ?>

			<?php endif; ?>
		</p>
	</strong>
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th rowspan="2"><?php echo e(trans('messages.laboratory')); ?></th>
						<th colspan="2"><?php echo e(trans('messages.less-five')); ?></th>
						<th colspan="2"><?php echo e(trans('messages.greater-five')); ?></th>
						<th colspan="2"><?php echo e(Lang::choice('messages.total',1)); ?></th>
					</tr>
					<tr>
						<th><?php echo e(trans('messages.tested')); ?></th>
						<th><?php echo e(trans('messages.positive')); ?></th>
						<th><?php echo e(trans('messages.tested')); ?></th>
						<th><?php echo e(trans('messages.positive')); ?></th>
						<th><?php echo e(trans('messages.tested')); ?></th>
						<th><?php echo e(trans('messages.positive')); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = App\Models\Disease::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(empty(count($disease->reportDiseases))) continue; ?>
						<tr>
							<td><?php echo e($disease->name); ?></td>
							<td><?php echo e($surveillance[$disease->id.
								'_less_five_total']); ?></td>
							<td><?php echo e($surveillance[$disease->id.
								'_less_five_positive']); ?></td>
							<td><?php echo e($surveillance[$disease->id.
								'_total'] - $surveillance[$disease->id.
								'_less_five_total']); ?></td>
							<td><?php echo e($surveillance[$disease->id.
								'_positive'] - $surveillance[$disease->id.
								'_less_five_positive']); ?></td>
							<td><?php echo e($surveillance[$disease->id.
								'_total']); ?></td>
							<td><?php echo e($surveillance[$disease->id.'_positive']); ?></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/surveillance/index.blade.php ENDPATH**/ ?>
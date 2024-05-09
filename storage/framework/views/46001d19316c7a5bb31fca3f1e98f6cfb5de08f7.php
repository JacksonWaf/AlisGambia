<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><a href="<?php echo e(route('reports.patient.index')); ?>"><?php echo e(Lang::choice('messages.report',2)); ?></a></li>
	  <li class="active"><?php echo e(trans('messages.counts')); ?></li>
	</ol>
</div>
<div class='container-fluid'>
<?php echo e(Form::open(array('route' => array('reports.aggregate.counts'), 'class' => 'form-inline', 'role' => 'form'))); ?>

<div class="row">
		<div class="col-sm-5">
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
	    <div class="col-sm-5">
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
	    <div class="col-sm-1">
		    <?php echo e(Form::button("<span class='glyphicon glyphicon-filter'></span> ".trans('messages.view'),
		        array('class' => 'btn btn-info', 'id' => 'filter', 'type' => 'submit'))); ?>

	    </div>
	    <div class="col-sm-1">
					<?php echo e(Form::submit(trans('messages.export-to-word'), 
			    		array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))); ?>

		</div>
	</div>
	<div class='row spacer'>
		<div class="col-sm-12">
	    	<div class="row">
				<div class="col-sm-3">
				  	<label class="radio-inline">
						<?php echo e(Form::radio('counts', trans('messages.ungrouped-test-counts'), true, array('data-toggle' => 'radio',
						  'id' => 'tests'))); ?> <?php echo e(trans('messages.ungrouped-test-counts')); ?>

					</label>
				</div>
				<div class="col-sm-3">
				    <label class="radio-inline">
						<?php echo e(Form::radio('counts', trans('messages.grouped-test-counts'), false, array('data-toggle' => 'radio',
						  'id' => 'patients'))); ?> <?php echo e(trans('messages.grouped-test-counts')); ?>

					</label>
				</div>
				<div class="col-sm-3">
				    <label class="radio-inline">
						<?php echo e(Form::radio('counts', trans('messages.ungrouped-specimen-counts'), false, array('data-toggle' => 'radio',
						  'id' => 'specimens'))); ?> <?php echo e(trans('messages.ungrouped-specimen-counts')); ?>

					</label>
				</div>
				<div class="col-sm-3">
					<label class="radio-inline">
			    		<?php echo e(Form::radio('counts', trans('messages.grouped-specimen-counts'), false, array('data-toggle' => 'radio',
						  'id' => 'specimens'))); ?> <?php echo e(trans('messages.grouped-specimen-counts')); ?>

					</label>
				</div>
		  	</div>
	  	</div>
  	</div>
<?php echo e(Form::close()); ?>

</div>
<br />
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.counts')); ?>

	</div>
	<div class="panel-body">
	<?php if(Session::has('message')): ?>
		<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
	<?php endif; ?>
	<strong>
		<p> <?php echo e(trans('messages.ungrouped-test-counts')); ?> -
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
		    <tbody>
			    <tr>
			    	<th><?php echo e(Lang::choice('messages.test-type',2)); ?></th>
			    	<th><?php echo e(trans('messages.pending-tests')); ?></th>
			    	<th><?php echo e(trans('Started Tests')); ?></th>
			    	<th><?php echo e(trans('messages.complete-tests')); ?></th>
			    	<th><?php echo e(trans('Verified Tests')); ?></th>
			    	<th><?php echo e(trans('Approved Tests')); ?></th>
			    </tr>
			    <?php $__empty_1 = true; $__currentLoopData = $ungroupedTests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

			    <tr>
			    	<td><?php echo e(App\Models\TestType::find($key)->name); ?></td>
			    	<td><?php echo e($value['pending']); ?></td>
			    	<td><?php echo e($value['started']); ?></td>
			    	<td><?php echo e($value['complete']); ?></td>
			    	<td><?php echo e($value['verified']); ?></td>
			    	<td><?php echo e($value['approved']); ?></td>
			    </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			    <tr>
			    	<td colspan="3"><?php echo e(trans('messages.no-records-found')); ?></td>
			    </tr>
			    <?php endif; ?>
		    </tbody>
		  </table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/reports/counts/ungroupedTestCount.blade.php ENDPATH**/ ?>
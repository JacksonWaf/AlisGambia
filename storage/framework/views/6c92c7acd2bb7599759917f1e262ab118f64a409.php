<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li class="active"><?php echo e(Lang::choice('messages.report', 2)); ?></li>
		</ol>
	</div>

	<?php echo e(Form::open(array('route' => array('reports.patient.merged'), 'class'=>'form-inline', 'role'=>'form', 'method'=>'POST'))); ?>

		<div class="form-group">

		    <?php echo e(Form::label('search', "search", array('class' => 'sr-only'))); ?>

            <?php echo e(Form::text('search', \Illuminate\Support\Facades\Request::get('search'), array('class' => 'form-control test-search'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::button("<span class='glyphicon glyphicon-search'></span> ".trans('messages.search'),
		        array('class' => 'btn btn-primary', 'id' => 'filter', 'type' => 'submit'))); ?>

		</div>
	<?php echo e(Form::close()); ?>

	<br>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(trans('messages.patient-report')); ?>

	</div>
	<div class="panel-body">

	    <?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
		<?php endif; ?>
	    <table class="table table-striped table-hover table-condensed">
			<thead>
				<tr>
					<th><?php echo e(trans('messages.patient-id')); ?></th>
					<th><?php echo e(trans('messages.patient-number')); ?></th>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_names')): ?>
						<th><?php echo e(trans('messages.full-name')); ?></th>
					<?php endif; ?>
					<th><?php echo e(trans('messages.gender')); ?></th>
					<th><?php echo e(trans('messages.age')); ?></th>
					<th><?php echo e(trans('messages.actions')); ?></th>
				</tr>
			</thead>
			<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<tr>
					<td><?php echo e($patient->patient_number); ?></td>
					<td><?php echo e($patient->external_patient_number); ?></td>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_names')): ?>
						<td><?php echo e($patient->name); ?></td>
					<?php endif; ?>

					<td><?php echo e(($patient->gender==0?trans('messages.male'):trans('messages.female'))); ?></td>
					<td><?php echo e($patient_helper->newAge($patient->dob)); ?></td>
					<td>
					<!-- show the patient report(uses the show method found at GET /patient/{id} -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to('patientvisits/' . $patient->id)); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view-visits')); ?>

						</a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<tr>
					<td colspan="5"><?php echo e(trans('messages.no-records-found')); ?></td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
		<?php echo e($patients->links()); ?>

	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/patient/index.blade.php ENDPATH**/ ?>
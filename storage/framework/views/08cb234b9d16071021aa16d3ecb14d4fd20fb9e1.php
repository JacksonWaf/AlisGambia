<?php $__env->startSection("content"); ?>
<style>

    .highlight{
   color: red;

}
.highlightedGreen{
    color: green;
}
/*
.hide{
   display: none;
}*/
</style>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li class="active"><?php echo e(Lang::choice('messages.report', 2)); ?></li>
		</ol>
	</div>
	<?php echo e(Form::open(array('route' => array('reports.patient.merged'), 'class'=>'form-inline', 'role'=>'form', 'method'=>'POST'))); ?>

		<div class="form-group">

		    <?php echo e(Form::label('search', "search", array('class' => 'sr-only'))); ?>

            <?php echo e(Form::text('search', Illuminate\Support\Facades\Request::get('search'), array('class' => 'form-control test-search'))); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::button("<span class='glyphicon glyphicon-search'></span> ".trans('messages.search'),
		        array('class' => 'btn btn-primary', 'id' => 'filter', 'type' => 'submit'))); ?>

		</div>
	<?php echo e(Form::close()); ?>

	<br>
<div class="panel panel-primary visit-log">
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
					<th class="hide">#</th>
					<th>Date of visit</th>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_names')): ?>
						<th><?php echo e(trans('messages.full-name')); ?></th>
					<?php endif; ?>
					<th>Tests requested</th>
					<th>Test status</th>
					<th><?php echo e(trans('messages.gender')); ?></th>
					<th><?php echo e(trans('messages.age')); ?></th>
					<th><?php echo e(trans('messages.actions')); ?></th>
					<th>Form</th>
					<th>Printed by</th>
				</tr>
			</thead>
			<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<tr class="<?php if($visit->is_printed == 1) echo 'highlightedGreen';?>">
					<td class="hide"><?php echo e($visit->id); ?></td>
					<td><?php echo e(date_format(date_create($visit->created_at), 'd-m-Y H:i:s')); ?></td>
					<td><?php echo e($visit->patient->name); ?></td>
					<td><?php $__currentLoopData = $visit->tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit_tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php echo e($visit_tests->testType->name); ?> |
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
					<td><?php $__currentLoopData = $visit->tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit_tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($visit_tests->test_status_id == 7): ?>
						<b style="color: green">*</b>
						<?php else: ?>
						<b style="color: red">x</b>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
					<td><?php echo e($visit->patient->getGender()); ?></td>
					<td><?php echo e($visit->exactAge()); ?></td>
					<td>
					<!-- show the patient report(uses the show method found at GET /patient/{id} -->

					<?php if($visit->is_printed == 0): ?>
					<a class="btn btn-sm btn-warning view-visit" href="<?php echo e(URL::to('print/' . $visit->id)); ?>">
                        <span class="glyphicon glyphicon-play"></span>
                        <?php echo e(trans('messages.view-report')); ?>

                    </a>
					<?php else: ?>
						<a class="btn btn-sm btn-default" href="<?php echo e(URL::to('patientvisitreport/' . $visit->id)); ?>" target="_blank" >
							<span class="glyphicon glyphicon-eye-open"></span>
							Result
						</a>
					<?php endif; ?>
					</td>
					<td><a class="btn btn-sm btn-info" href="<?php echo e(URL::to('patientrequestform/' . $visit->id)); ?>" target="_blank" >
								<span class="glyphicon glyphicon-eye-open"></span>
								Request Form
							</a></td>
					<td><?php echo e(isset($visit->printed_by) ? $visit->printBy->name:''); ?><br><?php echo e($visit->time_printed); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<tr>
					<td colspan="5"><?php echo e(trans('messages.no-records-found')); ?></td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
		<?php echo e($visits->links()); ?>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/patient/merged.blade.php ENDPATH**/ ?>
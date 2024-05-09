<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		<li><a href="<?php echo e(route('bbincidence.create')); ?>"><?php echo e(trans('Register New BB Incident')); ?></a></li>
		<li><a href="<?php echo e(route('bbincidence.bbfacilityreport')); ?>">Facility Report</a></li>
	  <li class="active">BB Incidents</li>
	</ol>
</div>

<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-4'>
			<?php echo e(Form::open(array('route' => array('bbincidence.index'), 'class'=>'form-inline',
				'role'=>'form', 'method'=>'GET'))); ?>

				<div class="form-group">

				    <?php echo e(Form::label('search', "search", array('class' => 'sr-only'))); ?>

		            <?php echo e(Form::text('search', old('search'), array('class' => 'form-control test-search', 'placeholder' => 'Serial No, Description'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::button("<span class='glyphicon glyphicon-search'></span> ".trans('messages.search'),
				        array('class' => 'btn btn-primary', 'type' => 'submit'))); ?>

				</div>
			<?php echo e(Form::close()); ?>

		</div>

		<div class='col-md-8'>
			<?php echo e(Form::open(array('route' => array('bbincidence.index'), 'class'=>'form-inline',
				'role'=>'form', 'method'=>'GET'))); ?>

				<div class="form-group">
				    <?php echo e(Form::label('datefrom', "Date From")); ?>

		            <?php echo e(Form::text('datefrom', old('datefrom'), array('class' => 'form-control test-search standard-datepicker', 'required' => 'required'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('dateto', "Date To")); ?>

		            <?php echo e(Form::text('dateto', old('dateto'), array('class' => 'form-control test-search standard-datepicker', 'required' => 'required'))); ?>

				</div>
				<div class="form-group">
					</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>

	<br>

<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>

<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-book"></span>
		List of BB Incidents  (<?php echo e(count($bbincidences)); ?>)

		<?php if(\Illuminate\Support\Facades\Auth::user()->can('create_bbincidences')): ?>
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(route('bbincidence.create')); ?>">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.new-bbincidence')); ?>

			</a>

			<a class="btn btn-sm btn-info" href="<?php echo e(route('bbincidence.index')); ?>"> Clear Filters </a>
		</div>
		<?php endif; ?>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>#</th>
					<th>BB incident No.</th>
					<th>Date / Time Of Ocuurence</th>
					<th>Description</th>
					<!--<th>Victim Details</th>-->
					<th>Cause of Incident</th>
					<th>Nature of Incident</th>

					<th>Actions</th>

				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $bbincidences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bbincidence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr  <?php if(Session::has('activebbincidence')): ?>
						<?php echo e((Session::get('activebbincidence') == $bbincidence->id)?"class='info'":""); ?>

					<?php endif; ?>>

					<td class="text-left"><?php echo e($bbincidence->id); ?></td>
					<td class="text-left"><?php echo e($bbincidence->serial_no); ?></td>
					<td><?php echo e(date('d M Y', strtotime($bbincidence->occurrence_date))); ?><br><?php echo e($bbincidence->occurrence_time); ?>

					</td>

				<!--	<td class="text-left"> <?php echo e($bbincidence->personnel_surname); ?> <?php echo e($bbincidence->personnel_othername); ?><br><?php echo e($bbincidence->personnel_gender); ?></td>-->

					<td>
						<?php $__currentLoopData = $bbincidence->bbnature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<span title="<?php echo e($nature->name); ?>"><?php echo e($nature->priority); ?>/<?php echo e($nature->class); ?>;</span>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</td>

					<td>
						<?php $__currentLoopData = $bbincidence->bbcause; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cause): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($cause->causename); ?>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</td>

					<td>'<?php echo e($bbincidence->description); ?>'</td>

					<td>
					<a class="btn btn-sm btn-success" href="<?php echo e(route('bbincidence.show', array($bbincidence->id))); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							<!--<?php echo e(trans('messages.edit')); ?>-->
							View
						</a>
						<a class="btn btn-sm btn-info" href="<?php echo e(route('bbincidence.edit', array($bbincidence->id))); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							Edit
							<!--<?php echo e(trans('messages.edit')); ?>-->
						</a>
						<a class="btn btn-sm btn-info" href="<?php echo e(route('bbincidence.clinicaledit', array($bbincidence->id))); ?>" >
							<span class="glyphicon glyphicon-list-alt"></span>
							Clinical Intervention
						</a>
						<a class="btn btn-sm btn-info" href="<?php echo e(route('bbincidence.analysisedit', array($bbincidence->id))); ?>" >
							<span class="glyphicon glyphicon-th-list"></span>
							Incident Analysis
						</a>
						<a class="btn btn-sm btn-warning" href="<?php echo e(route('bbincidence.responseedit', array($bbincidence->id))); ?>" >
							<span class="glyphicon glyphicon-th"></span>
							Emergency Incident Response
						</a>

						<!--<div class="dropdown">
							 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Action
							 <span class="caret"></span></button>
							 <ul class="dropdown-menu">
								 <li><a href="<?php echo e(route('bbincidence.show', array($bbincidence->id))); ?>"><?php echo e(trans('messages.view')); ?></a></li>
								 <li><a href="<?php echo e(route('bbincidence.edit', array($bbincidence->id))); ?>">Update Incident Information</a></li>
								 <li><a href="<?php echo e(route('bbincidence.clinicaledit', array($bbincidence->id))); ?>">Update Clinical Intervention</a></li>
								 <li><a href="<?php echo e(route('bbincidence.analysisedit', array($bbincidence->id))); ?>">Update Incident Analysis</a></li>
								 <li><a href="<?php echo e(route('bbincidence.responseedit', array($bbincidence->id))); ?>">Update BRM Response</a></li>
							 </ul>
					 </div>-->

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo $bbincidences->links();
		Session::put('SOURCE_URL', URL::full());?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/bbincidence/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>

	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(route('blisclient.index')); ?>"><?php echo e(trans('messages.interfaced-equipment')); ?></a></li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-edit"></span>
			<?php echo e(trans('messages.select-equipment')); ?>

		</div>
		<div class="panel-body">
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>
			<?php if(Session::has('message')): ?>
				<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
			<?php endif; ?>
				<div class="col-md-7">
				<?php echo e(Form::open(array('method' => 'PUT', 'id' => 'form-edit-client'))); ?>

					<div class="form-group">
						<?php echo e(Form::label('equipment', trans('messages.equipment'))); ?>

						<?php echo e(Form::select('client', array(0 => ' - ')+$client,
							'', array('class' => 'form-control', 'id' => 'client', 'onchange' => "fetch_equipment_details()"))); ?>

					</div>
					<div id="eq_con_details" name="eq_con_details"></div>

				<?php echo e(Form::close()); ?>

				</div>
				<div class="col-md-5">
					<ul class="list-group">
						<li class="list-group-item disabled"><strong>Page Help</strong></li>
						<li class="list-group-item">This Page list all interfaced equipment</li>
						<li class="list-group-item">Please select the equipment and see how it is interfaced with BLIS</li>
						<li class="list-group-item">Check the configurations that must be set in the <strong>BLISInterfaceClient.ini</strong> file</li>
					</ul>
				</div>
			</div>
		<?php echo e(Session::put('SOURCE_URL', URL::full())); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/instrument/blisClient.blade.php ENDPATH**/ ?>
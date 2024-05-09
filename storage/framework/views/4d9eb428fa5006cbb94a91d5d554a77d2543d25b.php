<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(route('user.home')); ?>"></a></li>
		<li><a href="<?php echo e(route('resetulin.create')); ?>"></a></li>

	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading"> <span class="glyphicon glyphicon-cog"><?php echo e(trans('Upload Stamps And Signature')); ?></span>
		<!-- <div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(route('unhls_patient.create')); ?>">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.new-patient')); ?>

			</a>
		</div> -->
	</div>

	<div class="panel-body">
		<?php if(Session::has('message')): ?>
		<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
		<?php endif; ?>
		<?php if($errors->all()): ?>
		<div class="alert alert-danger">
			<?php echo e(HTML::ul($errors->all())); ?>


		</div>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<ul class="list-group">
						<li class="list-group-item disabled"><strong> Upload</strong></li>
						<?php echo e(Form::open(array('route' => array('resetulin.reset'), 'id' => 'uuid-set', 'files' => true))); ?>


						<li class="list-group-item">
							<div class="form-group">
								<?php echo e(Form::label('image', trans('Laboratory Stamp'))); ?>

								<?php echo e(Form::file("image")); ?>

							</div>
						</li>
						<!-- <li class="list-group-item">
							<div class="form-group">
								<?php echo e(Form::label('image_signature', trans('Laboratory Signature'))); ?>

								<?php echo e(Form::file("image_signature")); ?>

							</div>
						</li> -->
						<li class="list-group-item">
							<div class="form-group actions-row">
								<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
									['class' => 'btn btn-primary', 'onclick' => 'submit()']
								)); ?>

							</div>
						</li>
					</ul>
					<?php echo e(Form::close()); ?>

				</div>
				<div class="col-md-2">
					<ul class="list-group">
						<li class="list-group-item disabled"><strong> Current Stamp </strong></li>
						<?php if(is_null($facility->image_stamp)): ?>
						<li class="list-group-item">
						</li>
						<?php else: ?>
						<li class="list-group-item">
							<div class="form-group">
								<img class="img-responsive img-thumbnail user-image" src="<?php echo e($facility->image_stamp); ?>" alt="<?php echo e(trans('messages.image-alternative')); ?>"></img>
							</div>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-7">
					<?php echo e(Form::open(array('route' => array('resetulin.specimen_collection'), 'id' => 'uuid-set'))); ?>


					<div class="form-group">
						<div class="panel-btn"><a href="javascript:void(0)" class="btn btn-link" role="button" data-toggle="modal" data-target="#resetTwo">
								<span class="glyphicon glyphicon-plus-sign"></span><strong><?php echo e(' Click to activate specimen collection option for the facility'); ?></strong></a>
						</div>
					</div>
					<?php echo e(Form::close()); ?>

				</div>
			</div> -->
		</div>

	</div>
	<?php echo e(Session::put('SOURCE_URL', URL::full())); ?>


</div>

<!--Modals -->

<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo e(Form::open(array('route' => 'resetulin.reset', 'id' => 'uuid-set-2'))); ?>

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo e('Reset ULIN to Given Value'); ?></h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<?php echo e(Form::label('incrementNum', 'Enter reset number:')); ?>

					<?php echo e(Form::text('incrementNum',  old('incrementNum'), array('class' => 'form-control'))); ?>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="submit();">Set ID</button>
			</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>

<div class="modal fade" id="resetOne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo e(Form::open(array('route' => 'resetulin.reset', 'id' =>'uuid-reset'))); ?>

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo e('Reset ULIN to 1'); ?></h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">
					<?php echo e(Form::hidden('incrementNum', '0')); ?>

					<?php echo e('This will reset your Lab ID to 1. Are you sure you want to proceed? This Action is irreversible!'); ?>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="submit();">Reset ID</button>
			</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>

<div class="modal fade" id="resetTwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo e(Form::open(array('route' => 'resetulin.specimen_collection', 'id' =>'uuid-reset'))); ?>

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo e('Activate facility sample collection option'); ?></h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">
					<?php echo e(Form::hidden('incrementNum', '2')); ?>

					<?php echo e('This will activate view for sample collection. Are you sure you want to proceed? This Action is irreversible!'); ?>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="submit();">Activate</button>
			</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>
<!--End of Modals -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/resetulin/create.blade.php ENDPATH**/ ?>
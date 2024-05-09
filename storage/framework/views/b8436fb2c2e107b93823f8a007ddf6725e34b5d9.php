<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
       <li><a href="<?php echo e(route('item.index')); ?>"><?php echo e(Lang::choice('messages.item', 2)); ?></a></li>
	 	  <li class="active"><?php echo e(trans('messages.new').' '.Lang::choice('messages.item', 1)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
	<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<?php if($errors->all()): ?>
                <div class="alert alert-danger">
                    <?php echo e(HTML::ul($errors->all())); ?>

                </div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(Lang::choice('messages.item', 2)); ?>

	</div>
	<div class="panel-body">
		   <?php echo e(Form::open(array('route' => 'item.store', 'id' => 'form-store_items'))); ?>


            <div class="form-group">
                <?php echo e(Form::label('name', Lang::choice('messages.name', 1))); ?>

                <!-- <?php echo e(Form::text('name', old('name'), array('class' => 'form-control', 'rows' => '2'))); ?> -->
                <input list="browsers" name="name" class="form-control col-sm-4" placeholder="Click for options or write">
                    <datalist id="browsers">
                      <option value="Neonatal Collection Bundles">
                      <option value="GXP Collection Bundles">
                      <option value="Thermal Printer paper">
                      <option value="M-PIMA Catridges">
                      <option value="GXP EID HIV Catridges">
                    </datalist>
            </div>
            <div class="form-group">
                <?php echo e(Form::label('unit', trans('messages.unit'))); ?>

                <?php echo e(Form::select('unit', $metrics, old('unit'),array('class' => 'form-control', 'rows' => '2'))); ?>

            </div> 
            <div class="form-group">
                <?php echo e(Form::label('min_level', trans('messages.min-level'))); ?>

                <?php echo e(Form::text('min_level', old('min_level'),array('class' => 'form-control', 'rows' => '2'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('max_level', trans('messages.max-level'))); ?>

                <?php echo e(Form::text('max_level', old('max_level'),array('class' => 'form-control', 'rows' => '2'))); ?>

            </div>
             <div class="form-group">
                <?php echo e(Form::label('storage_req', trans('messages.storage'))); ?>

                <?php echo e(Form::textarea('storage_req', old('storage_req'), array('class' => 'form-control', 'rows' => '2'))); ?>

            </div>
             <div class="form-group">
                <?php echo e(Form::label('remarks', trans('messages.remarks'))); ?>

                <?php echo e(Form::textarea('remarks', old('remarks'), array('class' => 'form-control', 'rows' => '2'))); ?>

            </div>

            <div class="form-group actions-row">
                    <?php echo e(Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save'),
                        array('class' => 'btn btn-primary', 'onclick' => 'submit()'))); ?>

            </div>
        <?php echo e(Form::close()); ?>

	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/inventory/item/create.blade.php ENDPATH**/ ?>
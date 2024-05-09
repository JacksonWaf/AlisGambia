<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
       <li><a href="<?php echo e(route('request.index')); ?>"><?php echo e(Lang::choice('messages.request', 2)); ?></a></li>
	 	  <li class="active"><?php echo e(trans('messages.new').' '.Lang::choice('messages.request', 1)); ?></li>
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
		<?php echo e(Lang::choice('messages.request', 2)); ?>

	</div>
	<div class="panel-body">
		   <?php echo e(Form::open(array('route' => 'request.store', 'id' => 'form-store-requests'))); ?>


            <div class="form-group">
                <?php echo e(Form::label('item', Lang::choice('messages.item', 1))); ?>

                <?php echo e(Form::select('item_id', $items, '', array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('quantity-remaining', trans('messages.quantity-remaining'))); ?>

                <?php echo e(Form::text('quantity_remaining', old('quantity_remaining'), array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('test-category', Lang::choice('messages.test-category', 1))); ?>

                <?php echo e(Form::select('test_category_id', $testCategories, '', array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('tests', trans('messages.tests-done'))); ?>

                <?php echo e(Form::text('tests_done', old('tests_done'), array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('quantity', trans('messages.order-quantity'))); ?>

                <?php echo e(Form::text('quantity_ordered', old('quantity_ordered'), array('class' => 'form-control'))); ?>

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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/inventory/request/create.blade.php ENDPATH**/ ?>
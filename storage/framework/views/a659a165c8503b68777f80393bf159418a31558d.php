<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
        <li><a href="<?php echo e(route('equipmentmaintenance.index')); ?>"><?php echo e(trans('messages.equipment-maintenance')); ?></a></li>
        <li class="active"><?php echo e(Lang::choice('messages.equipment',2)); ?></li>
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
		<span class="ion-gear-a"></span>
		<?php echo e(Lang::choice('messages.equipment-maintenance',2)); ?>

	</div>
	<div class="panel-body">


      <?php echo e(Form::open(array('url' => 'equipmentmaintenance/store', 'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator'))); ?>


                            <fieldset>


                                <div class="form-group">
                                <?php echo e(Form::label('equipment_id', 'Equipment', ['class' => 'col-lg-2 control-label'])); ?>

                                  <div class="col-md-4">
                                        <?php echo e(Form::select('equipment_id', array(null => 'Select')+ $equipment_list, old('equipment_id'), array('class' => 'form-control', 'id' => 'warranty_id','required'=>'required'))); ?>


                                        <?php if($errors->has('equipment_id')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('equipment_id')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>


                                <div class="form-group">
                                <?php echo e(Form::label('service_date', 'Date of service', ['class' => 'col-md-2 control-label'])); ?>

                                  <div class="col-md-4">
                                        <?php echo e(Form::text('service_date', old('service_date'),array('placeholder' => 'Date of service','class' => 'form-control standard-datepicker','required'=>'required'))); ?>


                                        <?php if($errors->has('service_date')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('service_date')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>


                                <div class="form-group">
                                <?php echo e(Form::label('next_service_date', 'Date of next service', ['class' => 'col-md-2 control-label'])); ?>

                                  <div class="col-md-4">
                                        <?php echo e(Form::text('next_service_date', old('next_service_date'),array('placeholder' => 'Date of next service','class' => 'form-control standard-datepicker','required'=>'required'))); ?>


                                        <?php if($errors->has('next_service_date')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('next_service_date')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>

                                <div class="form-group">
                                <?php echo e(Form::label('serviced_by', 'Serviced by', ['class' => 'col-lg-2 control-label'])); ?>

                                  <div class="col-lg-7">
                                        <?php echo e(Form::text('serviced_by',null,['class' => 'form-control','placeholder' => 'Serviced by', 'required' => 'true'])); ?>


                                        <?php if($errors->has('serviced_by')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('serviced_by')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>

                                <div class="form-group">
                                <?php echo e(Form::label('serviced_by_phone', 'Serviced by contact', ['class' => 'col-lg-2 control-label'])); ?>

                                  <div class="col-lg-7">
                                        <?php echo e(Form::text('serviced_by_phone',null,['class' => 'form-control','placeholder' => 'Serviced by contact', 'type'=>'number','required' => 'true'])); ?>


                                        <?php if($errors->has('serviced_by_phone')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('serviced_by_phone')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>

                                <div class="form-group">
                                <?php echo e(Form::label('supplier', 'Supplier', ['class' => 'col-lg-2 control-label'])); ?>

                                  <div class="col-md-4">
                                        <?php echo e(Form::select('supplier_id', array(null => 'Select')+ App\Models\UNHLSEquipmentSupplier::pluck('name','id')->toArray(), old('supplier_id'), array('class' => 'form-control', 'id' => 'warranty_id','required'=>'required'))); ?>


                                        <?php if($errors->has('supplier_id')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('supplier_id')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>

                                <div class="form-group">
                                <?php echo e(Form::label('comment', 'Comment', ['class' => 'col-lg-2 control-label'])); ?>

                                  <div class="col-lg-7">
                                        <?php echo e(Form::textarea('comment',null,['rows' => '3','class' => 'form-control','placeholder' => 'Comment'])); ?>


                                        <?php if($errors->has('comment')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('comment')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                  </div>
                                </div>
                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                        <a href="<?php echo e(url('/equipmentmaintenance')); ?>" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                </div>

                            </fieldset>

        <?php echo e(Form::close()); ?>


		<?php
		Session::put('SOURCE_URL', URL::full());?>
	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/equipment/maintenance/create.blade.php ENDPATH**/ ?>
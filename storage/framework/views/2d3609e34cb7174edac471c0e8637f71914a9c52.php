<?php $__env->startSection("edit"); ?>
<?php $__currentLoopData = $testtype->measures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $measure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row measure-section">
<div class="col-md-11 measure">
    <div class="col-md-3">
        <div class="form-group">
            <?php echo e(Form::label('measures[name]['.$measure->id.']', Lang::choice('messages.name',1))); ?>

           <input class="form-control" name="measures[<?php echo e($measure->id); ?>][name]" value="<?php echo e($measure->name); ?>" type="text">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo e(Form::label('measures[measure_type_id]['.$measure->id.']', trans('messages.measure-type'))); ?>

                <select class="form-control measuretype-input-trigger <?php echo e($measure->id); ?>" 
                    data-measure-id="<?php echo e($measure->id); ?>" 
                    name="measures[<?php echo e($measure->id); ?>][measure_type_id]" 
                    id="measure_type_id">
                    <option value="0"></option>
                    <?php $__currentLoopData = $measuretype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->id); ?>"
                        <?php echo e(($type->id == $measure->measure_type_id) ? 'selected="selected"' : ''); ?>><?php echo e($type->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo e(Form::label('measures[unit]['.$measure->id.']', trans('messages.unit'))); ?>

            <input class="form-control" name="measures[<?php echo e($measure->id); ?>][unit]" value="<?php echo e($measure->unit); ?>" type="text">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <?php echo e(Form::label('measures[description]['.$measure->id.']', trans('messages.description'))); ?>

            <textarea class="form-control" value="<?php echo e($measure->description); ?>" rows="2" name="measures[<?php echo e($measure->id); ?>][description]"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="measurerange"><?php echo e(trans('messages.measure-range-values')); ?></label>
            <div class="form-pane panel panel-default">
                <div class="panel-body">
                <div>
                    <div 
                    class="<?php echo e(($measure->measure_type_id == 1) ? 'col-md-12' : 'col-md-6'); ?> measurevalue <?php echo e($measure->id); ?>">
                    
                    <?php if($measure->measure_type_id == 1): ?>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <span class="col-md-6 range-title"><?php echo e(trans('messages.measure-age-range')); ?></span>
                                <span class="col-md-6 range-title"><?php echo e(trans('messages.gender')); ?></span>
                            </div>
                            <div class="col-md-3">
                                <span class="col-md-12 range-title"><?php echo e(trans('messages.measure-range')); ?></span>
                            </div>
                            <div class="col-md-2">
                                <span class="col-md-12 interpretation-title"><?php echo e(trans('messages.interpretation')); ?>

                                </span>
                            </div>
                        </div>     
                        <?php $__currentLoopData = $measure->measureRanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 measure-input">
                            <div class="col-md-4">
                                <input class="col-md-2" name="measures[<?php echo e($measure->id); ?>][agemin][]" type="text" value="<?php echo e($value->age_min); ?>"
                                    title="<?php echo e(trans('messages.lower-age-limit')); ?>">
                                <span class="col-md-1">:</span>
                                <input class="col-md-2" name="measures[<?php echo e($measure->id); ?>][agemax][]" type="text" value="<?php echo e($value->age_max); ?>"
                                    title="<?php echo e(trans('messages.upper-age-limit')); ?>">
                                    <?php $selection = array("","","");?>
                                    <?php $selection[$value->gender] = "selected='selected'"; ?>
                                <span class="col-md-1"></span>
                                <select class="col-md-4" name="measures[<?php echo e($measure->id); ?>][gender][]">
                                    <option value="0" <?php echo e($selection[0]); ?>><?php echo e(trans('messages.male')); ?></option>
                                    <option value="1" <?php echo e($selection[1]); ?>><?php echo e(trans('messages.female')); ?></option>
                                    <option value="2" <?php echo e($selection[2]); ?>><?php echo e(trans('messages.both')); ?></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input class="col-md-4" name="measures[<?php echo e($measure->id); ?>][rangemin][]" type="text"
                                    value="<?php echo e($value->range_lower); ?>" 
                                    title="<?php echo e(trans('messages.lower-range')); ?>">
                                <span class="col-md-2">:</span>
                                <input class="col-md-4" name="measures[<?php echo e($measure->id); ?>][rangemax][]" type="text"
                                    value="<?php echo e($value->range_upper); ?>"
                                    title="<?php echo e(trans('messages.upper-range')); ?>">
                            </div>
                            <div class="col-md-2">
                                <input class="col-md-10" name="measures[<?php echo e($measure->id); ?>][interpretation][]" type="text" 
                                    value="<?php echo e($value->interpretation); ?>">
                                <button class="col-md-2 close" aria-hidden="true" type="button" 
                                title="<?php echo e(trans('messages.delete')); ?>">×</button>
                                <input value="<?php echo e($value->id); ?>" name="measures[<?php echo e($measure->id); ?>][measurerangeid][]" type="hidden">
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php elseif($measure->measure_type_id == 2 || $measure->measure_type_id == 3): ?>
                        <div class="col-md-12">
                            <span class="col-md-5 val-title"><?php echo e(trans('messages.range')); ?></span>
                            <span class="col-md-5 interpretation-title"><?php echo e(trans('messages.interpretation')); ?></span>
                        </div>
                        <?php $__currentLoopData = $measure->measureRanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 measure-input">
                            <div class="col-md-5">
                                <input class="col-md-10 val" value="<?php echo e($value->alphanumeric); ?>"
                                name="measures[<?php echo e($measure->id); ?>][val][]" type="text">
                            </div>
                            <div class="col-md-5">
                                <input class="col-md-10 interpretation" value="<?php echo e($value->interpretation); ?>"
                                name="measures[<?php echo e($measure->id); ?>][interpretation][]" type="text">
                                <button class="col-md-2 close" aria-hidden="true" type="button" 
                                    title="<?php echo e(trans('messages.delete')); ?>">×</button>
                                <input value="<?php echo e($value->id); ?>" name="measures[<?php echo e($measure->id); ?>][measurerangeid][]" type="hidden">
                            </div>
                        </div>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="freetextInputLoader">
                            <p class="freetextInput" ><?php echo e(trans('messages.freetext-measure-config-input-message')); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-12 actions-row <?php echo e(($measure->measure_type_id == 4)? 'hidden':''); ?>">
                    <a class="btn btn-default add-another-range" href="javascript:void(0);" 
                        data-measure-id="<?php echo e($measure->id); ?>">
                    <span class="glyphicon glyphicon-plus-sign"></span><?php echo e(trans('messages.add-new-measure-range')); ?></a>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-1">
    <button class="col-md-12 close" aria-hidden="true" type="button" 
        title="<?php echo e(trans('messages.delete')); ?>">×</button>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->yieldSection(); ?><?php /**PATH /var/www/alis_gambia/resources/views/measure/edit.blade.php ENDPATH**/ ?>
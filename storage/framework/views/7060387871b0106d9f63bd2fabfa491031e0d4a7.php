<?php $__env->startSection("content"); ?>

<style>
	.highliht {
		color: red;
	}

	.highlightedGreen {
		color: green;
	}
</style>
<div>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		<li class="active"><?php echo e(Lang::choice('messages.item', 2)); ?></li>
	</ol>
</div>
<?php if(Session::has('message')): ?>
<div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
<?php endif; ?>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		<?php echo e(Lang::choice('messages.item', 2)); ?>

		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="<?php echo e(route('item.create')); ?>">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<?php echo e(trans('messages.add').' '.Lang::choice('messages.item', 1)); ?>

			</a>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e('Name - Code'); ?></th>
					<th><?php echo e(trans('messages.unit')); ?></th>
					<th><?php echo e(trans('messages.quantity')); ?></th>
					<th><?php echo e(trans('messages.min-level')); ?></th>
					<th><?php echo e(trans('messages.max-level')); ?></th>
					<th><?php echo e(trans('messages.remarks')); ?></th>
					<th><?php echo e(trans('messages.storage')); ?></th>
					<th><?php echo e(trans('messages.actions')); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr <?php if(Session::has('activeitem')): ?> <?php echo e((Session::get('activeitem') == $value->id)?"class='info'":""); ?> <?php endif; ?> class="<?php if ($value->quantity() <= $value->min_level) echo 'highliht'; ?>">
					<td><?php echo e($value->name); ?></td>
					<td><?php if(!is_numeric($value->unit)): ?>
						<?php echo e($value->unit); ?>

						<?php else: ?>
						<?php echo e($value->metrics->name); ?>

						<?php endif; ?>
					</td>
					}
					<td><?php echo e($value->quantity()); ?></td>
					<td><?php echo e($value->min_level); ?></td>
					<td><?php echo e($value->max_level); ?></td>
					<td><?php echo e($value->remarks); ?></td>
					<td><?php echo e($value->storage_req); ?></td>

					<td>
						<!-- show the item (uses the show method found at GET /item/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("item/" . $value->id)); ?>">
							<span class="glyphicon glyphicon-eye-open"></span>
							<?php echo e(trans('messages.view')); ?>

						</a>
						<!-- edit this commodity (uses the edit method found at GET /inventory/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(route('item.edit', array($value->id))); ?>">
							<span class="glyphicon glyphicon-edit"></span>
							<?php echo e(trans('messages.edit')); ?>

						</a>
						<!-- Barcode -->
						<a class="btn btn-sm btn-midnight-blue barcode-button" onclick="print_barcode(<?php echo e("'".$value->id."'".', '."'".$barcode->encoding_format."'".', '."'".$barcode->barcode_width."'".', '."'".$barcode->barcode_height."'".', '."'".$barcode->text_size."'"); ?>)" title="<?php echo e(trans('messages.barcode')); ?>">
							<span class="glyphicon glyphicon-barcode"></span>
							<?php echo e(trans('messages.barcode')); ?>

						</a>
						<!-- show button for logging stock usage -->
						<a class="btn btn-sm btn-wisteria" href="<?php echo e(URL::to("stock/" . $value->id)."/log"); ?>">
							<span class="glyphicon glyphicon-bookmark"></span>
							<?php echo e(trans('messages.log-usage')); ?>

						</a>
						<!-- show button for adding stock -->
						<a class="btn btn-sm btn-sun-flower" href="<?php echo e(URL::to("stock/" . $value->id)."/create"); ?>">
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<?php echo e(trans('messages.add-stock')); ?>

						</a>
						<!-- delete this commodity (uses the delete method found at GET /inventory/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link" data-toggle="modal" data-target=".confirm-delete-modal" data-id="<?php echo e(route('item.delete', array($value->id))); ?>">
							<span class="glyphicon glyphicon-trash"></span>
							<?php echo e(trans('messages.delete')); ?>

						</button>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo e(Session::put('SOURCE_URL', URL::full())); ?>

	</div>
</div>
<!-- Barcode begins -->

<div id="count" style='display:none;'>0</div>
<div id="barcodeList" style="display:none;"></div>
<!-- jQuery barcode script -->
<script type="text/javascript" src="<?php echo e(asset('js/barcode.js')); ?> "></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/inventory/item/index.blade.php ENDPATH**/ ?>
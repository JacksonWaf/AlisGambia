<?php $__env->startSection("footer"); ?>
<!-- Begin footer section -->
<!-- Delete Modal-->
<br>
<div class="modal fade confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;</button>
				<h4 class="modal-title" id="myModalLabel">
					<span class="glyphicon glyphicon-trash"></span>
					<?php echo e(trans('messages.confirm-delete-title')); ?>

				</h4>
			</div>
			<div class="modal-body">
				<p><?php echo e(trans('messages.confirm-delete-message')); ?></p>
				<p><?php echo e(trans('messages.confirm-delete-irreversible')); ?></p>
				<input type="hidden" id="delete-url" value="" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-delete">
					<?php echo e(trans('messages.delete')); ?></button>
				<button type="button" class="btn btn-default" data-dismiss="modal">
					<?php echo e(trans('messages.cancel')); ?></button>
			</div>
		</div>
	</div>
</div>
<hr>
<footer class="footer">
	<div class="col-md-12 row">
		<div class="col-md-12">
			<a href="https://www.theglobalfund.org/en/" target="_blank">
				<img src="<?php echo e(config('kblis.cdc-logoo')); ?>">
			</a>
		</div>
	</div>

	<div class="col-md-12 row">
		<a href="https://moh.gov.gm/" target="_blank">
			GAHLC / MOH Gambia - NPHL &copy; 2023
			<!-- date("Y") -->
		</a>
	</div>
</footer>

<!-- End footer section-->
<?php echo $__env->yieldSection(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/footer.blade.php ENDPATH**/ ?>
<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>

	  <li class="active">Equipment, Logistics and Supplies</li>
	</ol>
</div>

<div class="sub_panel" style="left: -220px;">
						<div class="side_inner ps-ready ps-container" style="height: 620px;">
							<h4 class="panel_heading panel_heading_first">Inventory</h4>
							<!-- <ul>
								<li>
									<a href="<?php echo e(route("stockcard.index")); ?>">
									<span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.stock-card')); ?></a>
								</li>
								<li>

									<a href="<?php echo e(route("request.index")); ?>">
									<span class="glyphicon glyphicon-tag"></span>Request For Commodities</a>
								</li>
							<li>
								<a href="<?php echo e(route("stockrequisition.index")); ?>">
								<span class="glyphicon glyphicon-tag"></span> Stockbook</a>
							</li>
							<li>
								<a href="<?php echo e(route("commodity.index")); ?>">
								<span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.commodities')); ?></a>
							</li>
							<li>
								<a href="<?php echo e(route("supplier.index")); ?>">
								<span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.suppliers',2)); ?></a>
							</li>
							<li>
								<a href="<?php echo e(route("metric.index")); ?>">
								<span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.metrics')); ?></a>
							</li>
							</ul> -->
							<ul>
                                <li>
                                    <a href="<?php echo e(route("item.index")); ?>">
                                        <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.stock-card')); ?></a>
                                </li>
                                <li>

                                    <a href="<?php echo e(route("request.index")); ?>">
                                        <span class="glyphicon glyphicon-tag"></span>Request For Commodities</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route("reports.inventory")); ?>">
                                        <span class="glyphicon glyphicon-tag"></span> Stockbook</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route("item.index")); ?>">
                                        <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.commodities')); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route("supplier.index")); ?>">

                                        <span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.suppliers',2)); ?></a>
                                </li>
                            <li>
								<a href="<?php echo e(route("metric.index")); ?>">
								<span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.metrics')); ?></a>
							</li>
                            </ul>
							<h4 class="panel_heading">Equipment</h4>
							<ul>
								<li><a href="<?php echo e(route("equipmentinventory.index")); ?>"><span class="glyphicon glyphicon-tag"></span> Inventory</a></li>
								<li><a href="<?php echo e(route("equipmentmaintenance.index")); ?>"><span class="glyphicon glyphicon-tag"></span> Maintenance log</a></li>
								<li><a href="<?php echo e(route("equipmentbreakdown.index")); ?>"><span class="glyphicon glyphicon-tag"></span> Breakdown</a></li>
								<li><a href="<?php echo e(route("equipmentsupplier.index")); ?>"><span class="glyphicon glyphicon-tag"></span> Supplier</a></li>
							</ul>
						<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
					</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/unhls_els/index.blade.php ENDPATH**/ ?>
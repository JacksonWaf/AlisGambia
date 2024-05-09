<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
	  <li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
	  <li class="active"><?php echo e(Lang::choice('messages.report',2)); ?></li>
	</ol>
</div>
<div class='container-fluid'>

<div class="sub_panel" style="left: -220px;">
						<div class="side_inner ps-ready ps-container" style="height: 620px;">
							<h4 class="panel_heading panel_heading_first"><?php echo e(trans('messages.daily-reports')); ?></h4>
							<ul>
								<li>
									<div>
										<a href="<?php echo e(route('reports.patient.index')); ?>">
											<span class="glyphicon glyphicon-tag"></span>
											<?php echo e(trans('messages.patient-report')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.daily.log')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.daily-log')); ?></a>
									</div>
								</li>
							</ul>
							<h4 class="panel_heading panel_heading_first"><?php echo e(trans('messages.aggregate-reports')); ?></h4>
							<ul>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.prevalence')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.positivity-rates')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.surveillance')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.surveillance')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.counts')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.counts')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.tat')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.turnaround-time')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.infection')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.infection-report')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.userStatistics')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.user-statistics-report')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.moh706')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.moh-706')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="#">
										<span class="glyphicon glyphicon-tag"></span>
										HMIS Report</a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.aggregate.cd4')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.cd4-report')); ?></a>
									</div>
								</li>
								<li>
									<div><a href="<?php echo e(route('reports.qualityControl')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(Lang::choice('messages.quality-control', 2)); ?></a>
									</div>
								</li>
							</ul>
							<h4 class="panel_heading panel_heading_first"><?php echo e(trans('messages.inventory-reports')); ?></h4>
							<ul>
								<li>
									<div><a href="<?php echo e(route('reports.inventory')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.stock-levels')); ?></a>
									</div>
								</li>
							</ul>
							<h4 class="panel_heading panel_heading_first">Dashboard</h4>
							<ul>
								<li>
									<div><a href="<?php echo e(route('dashboard.index')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										Dashboard</a>
									</div>
								</li>
							</ul>

						<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
					</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/reports/index.blade.php ENDPATH**/ ?>
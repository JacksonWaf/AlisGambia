<?php $__env->startSection("sidebar"); ?>
<nav id="side_nav">
    <ul>

        <li>
            <a href="<?php echo e(route('user.home')); ?>"><span class="ion-home"></span> <span class="nav_title">Main Menu</span></a>
        </li>

        <li class="nav_trigger">
            <a href="#">
                <span class="ion-stats-bars"></span>
                <span class="nav_title">Reports</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first"><?php echo e(trans('messages.daily-reports')); ?></h4>
                    <ul>
                        <li>
                            <!-- <div>
                                <a href="<?php echo e(route('reports.patient.index')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <?php echo e(trans('messages.patient-report')); ?></a>
                            </div> -->
                            <div>
                                <a href="<?php echo e(route('reports.patient.merged')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <?php echo e(trans('Patient Report')); ?>

                                </a>
                            </div>
                        </li>
                        <!-- <li>
                            <div><a href="<?php echo e(route('reports.daily.log')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <?php echo e(trans('messages.daily-log')); ?></a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('reports.microbiology.search')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Microbiology Export</a>
                            </div>
                        </li> -->
                    </ul>
                    <h4 class="panel_heading panel_heading_first"><?php echo e(trans('messages.aggregate-reports')); ?></h4>
                    <ul>
                        <!-- <li>
                            <div><a href="<?php echo e(route('reports.aggregate.prevalence')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <?php echo e(trans('messages.positivity-rates')); ?></a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('reports.aggregate.surveillance')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <?php echo e(trans('messages.surveillance')); ?></a>
                            </div>
                        </li> -->
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
                        <!-- <li class="hidden">
                            <div><a href="<?php echo e(route('reports.aggregate.hmis105')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    HMIS 105</a>
                            </div>
                        </li> -->
                        <li>
                            <div><a href="<?php echo e(route('report.hmis105')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    HMIS Report</a>
                            </div>
                        </li>
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.hmis108')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    HMIS 108</a>
                            </div>
                        </li> -->
                        <!-- 								<li>
									<div><a href="<?php echo e(route('reports.aggregate.moh706')); ?>">
										<span class="glyphicon glyphicon-tag"></span>
										<?php echo e(trans('messages.moh-706')); ?></a>
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
 -->
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
                    <!-- <h4 class="panel_heading panel_heading_first">Dashboard</h4>
                    <ul>
                        <li>
                            <div><a href="<?php echo e(route('dashboard.index')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Dashboard</a>
                            </div>
                        </li>
                    </ul> -->

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav_trigger">
            <a href="#">
                <span class="ion-stats-bars"></span>
                <span class="nav_title">Registers</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first">MOH REGISTERS</h4>
                    <ul>
                        <li>
                            <div><a href="<?php echo e(route('report.hmis105')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    HMIS Report</a>
                            </div>
                        </li>
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.hmis108')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    HMIS 108</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.33bRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    33b Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.biosafetyRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Biosafety Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.chemistryRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Chemistry Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.dailyHIVregister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Daily HIV register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.EQARegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    EQA Register</a>
                            </div>
                        </li> -->
                        <li>
                            <div><a href="<?php echo e(route('report.equipmentBreakdownRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Equipment Breakdown Register</a>
                            </div>
                        </li>
                        <li>
                            <div><a href="<?php echo e(route('report.equipmentMaintenanceRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Equipment Maintenance Register</a>
                            </div>
                        </li>
                        <li>
                            <div><a href="<?php echo e(route('report.equipmentRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Equipment Register</a>
                            </div>
                        </li>
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.haematologyRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Haematology Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.labQuaterlyReport')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Lab Quaterly Report</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.microbiologyRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Microbiology Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.referralRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Referral Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.VLTBregister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    VL TB Register</a>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div><a href="<?php echo e(route('report.sampleReceptionRegister')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    Sample Reception Register</a>
                            </div>
                        </li> -->

                    </ul>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav_trigger">
            <a href="#"><span class="ion-person"></span><span class="nav_title">Patient Information</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first"><?php echo e(Lang::choice('messages.patient-unhls', 1)); ?></h4>
                    <ul>
                        <li>
                            <div>
                                <a href="<?php echo e(route('unhls_patient.create')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.register-new-patient', 1)); ?></a>
                            </div>
                        </li>
                        <!-- <li>
                            <div>
                                <a href="<?php echo e(route('poc.create')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e("Register EID patient"); ?></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route('viral.create')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e("Register VL patient"); ?></a>
                            </div>
                        </li> -->

                        <!-- <li>
                                <div>
                                    <a href="<?php echo e(route('microbio.create')); ?>">
                                        <span class="glyphicon glyphicon-tag"></span> <?php echo e('Microbiology Specimen'); ?></a>
                                </div>
                            </li> -->
                        <li>
                            <div>
                                <a href="<?php echo e(route('unhls_patient.index')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.view-patients', 1)); ?></a>
                            </div>
                        </li>

                    </ul>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_visits')): ?>
        <!-- <li>
            <a href="<?php echo e(route('visit.index')); ?>"><span class="ion ion-person"><span class="nav_title">Visits</span></span>
            </a>
        </li> -->
        <?php endif; ?>
        <li class="nav_trigger">
            <a href="#">
                <span class="ion-erlenmeyer-flask"></span>
                <span class="nav_title">Tests</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first"> Tests</h4>
                    <ul>
                        <li>
                            <div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#new-test-modal-unhls">
                                    <!--<span class="glyphicon glyphicon-plus-sign"></span><?php echo e(trans('messages.new-test')); ?>-->
                                    <span class="glyphicon glyphicon-plus-sign"></span> Make Test Request
                                </a>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a href="<?php echo e(route('unhls_test.index')); ?>">
                                    <!--<span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.test-unhls', 2)); ?></a>-->
                                    <span class="glyphicon glyphicon-tag"></span> List of All Tests</a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route('test.completed')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('Completed Tests')); ?>

                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route('test.notrecieved')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('Samples Not Recieved')); ?>

                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route('test.pending')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('Pending Tests')); ?>

                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route('test.started')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('Tests Started')); ?>

                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route('test.verified')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span>Reviewed Tests
                                </a>
                            </div>
                        </li>
                    </ul>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_upload')): ?>
                    <h4 class="panel_heading panel_heading_first"> Uploads</h4>
                    <ul>
                        <!-- <li>
                                <div>
                                    <a href="<?php echo e(route('unhls_test.importPoc')); ?>">
                                        <span class="glyphicon glyphicon-tag" ></span><?php echo e(trans('Import POC results')); ?>

                                    </a>
                                </div>
                            </li> -->

                        <li>
                            <div>
                                <a href="<?php echo e(route('reports.export.alis_restrack_data')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('Download ALIS-RESTRACK DATA')); ?>

                                </a>
                            </div>
                        </li>

                        <!-- <li>
                            <div>
                                <a href="<?php echo e(URL::route('vl.vl_data_view')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('POC Upload')); ?>

                                </a>
                            </div>
                        </li> -->

                    </ul>
                    <?php endif; ?>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_lab_configurations')): ?>

        <li class="nav_trigger">
            <a href="#">
                <span class="ion-wrench"></span>
                <span class="nav_title">Lab Configuration</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height:620px;">
                    <h4 class="panel_heading panel_heading_first">Lab Configuration</h4>
                    <ul>
                        <li>
                            <a href="<?php echo e(route("clinicians.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span> Clinicians</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("ward.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span> Health Units</a>
                        </li>
                        <!-- <li>
									<a href="<?php echo e(route("referral.index")); ?>">
									<span class="glyphicon glyphicon-tag"></span> Manage Referrals</a>
								</li> -->
                        <li>
                            <a href="<?php echo e(route("instrument.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.instrument')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("reportconfig.surveillance")); ?>">
                                <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.surveillance')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("barcode.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.barcode-settings')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("blisclient.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span><?php echo e(trans('messages.interfaced-equipment')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("testnamemapping.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Test name Mapping</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo e(route("resetulin.create")); ?>">
                                <span class="glyphicon glyphicon-tag"></span><?php echo e('Reset ULIN'); ?></a>
                        </li> -->
                        <!-- <li>
                            <a href="<?php echo e(route("resetulin.create")); ?>">
                                <span class="glyphicon glyphicon-tag"></span><?php echo e('Reset ULIN'); ?></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_test_catalog')): ?>
        <li class="nav_trigger">
            <a href="#">
                <span class="ion-gear-a"></span>
                <span class="nav_title">Test Catalog</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height:620px;">
                    <h4 class="panel_heading panel_heading_first">Test Catalog</h4>
                    <ul>
                        <li>
                            <a href="<?php echo e(route("testcategory.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Lab Sections</a>
                        </li>

                        <li>
                            <a href="<?php echo e(route("specimentype.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Specimen Types</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("specimenrejection.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Specimen Rejection</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("testtype.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Test Types</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("drug.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Drugs</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("organism.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Organisms</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route("testpurpose.index")); ?>">
                                <span class="glyphicon glyphicon-tag"></span>Testing Purpose</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <?php endif; ?>


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_inventory')): ?>
        <!-- <li class="nav_trigger">
            <a href="#">
                <span class="ion-ios-cart"></span>
                <span class="nav_title">Inventory & Equipment</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first">Inventory</h4>
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
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li> -->
        <?php endif; ?>

        <!-- Biosafety Commented -->
        <!-- <li class="nav_trigger">
            <a href="#">
                <span class="ion-nuclear"></span>
                <span class="nav_title">Biosafety & Biosecurity</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first">Bio-safety / Bio-security</h4>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('bbincidence.index')); ?>">
                                <span class="glyphicon glyphicon-list"></span> Summary Log</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('bbincidence.create')); ?>">
                                <span class="glyphicon glyphicon-plus-sign"></span> Register Incident</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('bbincidence.bbfacilityreport')); ?>">
                                <span class="glyphicon glyphicon-stats"></span> Facility Report</a>
                        </li>
                    </ul>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li> -->

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_users')): ?>

        <li class="nav_trigger">
            <a href="#">
                <span class="ion-key"></span>
                <span class="nav_title">Access Control</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first">Access Control</h4>
                    <ul>
                        <li>
                            <div>
                                
                                <a href="<?php echo e(Auth::user()->can('manage_users') ? route('user.index') : URL::to('user')); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.user-accounts')); ?></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route("permission.index")); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.permission', 2)); ?></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route("role.index")); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(Lang::choice('messages.role', 2)); ?></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route("role.assign")); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('messages.assign-roles')); ?></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route("resetulin.create")); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('Upload Stamps')); ?></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="<?php echo e(route("resetulin.create")); ?>">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo e(trans('Upload Signature')); ?></a>
                            </div>
                        </li>
                    </ul>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li>
        <?php endif; ?>

        <li class="nav_trigger">
            <a href="#">
                <span class="ion-ios-folder"></span>
                <span class="nav_title">Other Resouces</span>
            </a>
            <div class="sub_panel" style="left: -220px;">
                <div class="side_inner ps-ready ps-container" style="height: 620px;">
                    <h4 class="panel_heading panel_heading_first">Other Resources</h4>
                    <ul>
                        <li>
                            <a href="http://srs.moh.gm/" target="_blank">
                                <span class=""></span> Sample Tracker Dashboard</a>
                        </li>
                        <!-- <li>
                            <a href="http://vldash.cphluganda.org/" target="_blank">
                                <span class=""></span> Viral Load Dashboard</a>
                        </li> -->
                        <!-- <li>
                            <a href="http://cphl.go.ug/" target="_blank">
                                <span class=""></span> CPHL/UNHLS Website</a>
                        </li> -->
                        <!-- <li>
                            <a href="http://health.go.ug/" target="_blank">
                                <span class=""></span> MoH Website</a>
                        </li> -->
                    </ul>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 215px; display: none;">
                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 620px; display: none;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
</nav>
<?php echo $__env->yieldSection(); ?><?php /**PATH C:\Users\Jax.DESKTOP-2NUFPOA\Downloads\alis_gambia\resources\views/sidebar.blade.php ENDPATH**/ ?>
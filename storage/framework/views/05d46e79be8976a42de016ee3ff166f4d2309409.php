<?php $__env->startSection("content"); ?>
	<div>
		<ol class="breadcrumb">
		  <li><a href="<?php echo e(old('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		  <li><a href="<?php echo e(old('unhls_test.index')); ?>"><?php echo e(Lang::choice('messages.test',2)); ?></a></li>
		  <li class="active"><?php echo e(trans('messages.edit')); ?></li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
            <div class="container-fluid">
	            <div class="row less-gutter">
		            <div class="col-md-11">
						<span class="glyphicon glyphicon-filter"></span><?php echo e(trans('messages.edit')); ?>

                        <?php if($test->testType->instruments->count() > 0): ?>
                        <div class="panel-btn">
                            <a class="btn btn-sm btn-info fetch-test-data" href="javascript:void(0)"
                                title="<?php echo e(trans('messages.fetch-test-data-title')); ?>"
                                data-test-type-id="<?php echo e($test->testType->id); ?>"
                                data-url="<?php echo e(old('instrument.getResult')); ?>"
                                data-instrument-count="<?php echo e($test->testType->instruments->count()); ?>">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                <?php echo e(trans('messages.fetch-test-data')); ?>

                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if($test->isCompleted() && $test->specimen->isAccepted()): ?>
						<div class="panel-btn">
							<?php if(Auth::user()->can('verify_test_results') && Auth::user()->id != $test->tested_by): ?>
							<a class="btn btn-sm btn-success" href="<?php echo e(old('test.verify', array($test->id))); ?>">
								<span class="glyphicon glyphicon-thumbs-up"></span>
								<?php echo e(trans('messages.verify')); ?>

							</a>
							<?php endif; ?>
							<?php if(Auth::user()->can('view_reports')): ?>
								<a class="btn btn-sm btn-default" href="<?php echo e(URL::to('patientreport/'.$test->visit->patient->id)); ?>">
									<span class="glyphicon glyphicon-eye-open"></span>
									<?php echo e(trans('messages.view-report')); ?>

								</a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
		            <div class="col-md-1">
		                <a class="btn btn-sm btn-primary pull-right" href="#" onclick="window.history.back();return false;"
		                    alt="<?php echo e(trans('messages.back')); ?>" title="<?php echo e(trans('messages.back')); ?>">
		                    <span class="glyphicon glyphicon-backward"></span></a>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="panel-body">
		<!-- if there are creation errors, they will show here -->
			<?php if($errors->all()): ?>
				<div class="alert alert-danger">
					<?php echo e(HTML::ul($errors->all())); ?>

				</div>
			<?php endif; ?>
			<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
					<?php echo e(Form::open(array('route' => array('unhls_test.saveEditedResults', $test->id), 'method' => 'POST'))); ?>

						<?php $__currentLoopData = $test->testType->measures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $measure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="form-group">
								<?php
								$ans = "";
								foreach ($test->testResults as $res) {
									if($res->measure_id == $measure->id)$ans = $res->result;
								}
								 ?>
							<?php
							$fieldName = "m_".$measure->id;
							?>
								<?php if( $measure->isNumeric() ): ?>
			                        <?php echo e(Form::label($fieldName , $measure->name)); ?>

			                        <?php echo e(Form::text($fieldName, $ans, array(
			                            'class' => 'form-control result-interpretation-trigger',
			                            'data-url' => old('unhls_test.resultinterpretation'),
			                            'data-age' => $test->visit->patient->dob,
			                            'data-gender' => $test->visit->patient->gender,
			                            'data-measureid' => $measure->id
			                            ))); ?>

		                            <span class='units'>
		                                <?php echo e(App\Models\Measure::getRange($test->visit->patient, $measure->id)); ?>

		                                <?php echo e($measure->unit); ?>

		                            </span>
								<?php elseif( $measure->isAlphanumeric() || $measure->isAutocomplete() ): ?>
			                        <?php
			                        $measure_values = array();
		                            $measure_values[] = '';
			                        foreach ($measure->measureRanges as $range) {
			                            $measure_values[$range->alphanumeric] = $range->alphanumeric;
			                        }
			                        ?>
		                            <?php echo e(Form::label($fieldName , $measure->name)); ?>

		                            <?php echo e(Form::select($fieldName, $measure_values, array_search($ans, $measure_values),
		                                array('class' => 'form-control result-interpretation-trigger',
		                                'data-url' => old('unhls_test.resultinterpretation'),
		                                'data-measureid' => $measure->id
		                                ))); ?>

								<?php elseif( $measure->isFreeText() ): ?>
		                            <?php echo e(Form::label($fieldName, $measure->name)); ?>

		                            <?php
										$sense = '';
										if($measure->name=="Sensitivity"||$measure->name=="sensitivity")
											$sense = ' sense'.$test->id;
									?>
		                            <?php echo e(Form::text($fieldName, $ans, array('class' => 'form-control'.$sense))); ?>

								<?php endif; ?>
		                    </div>
		                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                <div class="form-group">
		                    <?php echo e(Form::label('interpretation', trans('messages.interpretation'))); ?>

		                    <?php echo e(Form::textarea('interpretation', $test->interpretation,
		                        array('class' => 'form-control result-interpretation', 'rows' => '2'))); ?>

		                </div>
		                <div class="form-group actions-row" align="left">
							<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.update-test-results'),
								array('class' => 'btn btn-default', 'onclick' => 'submit()'))); ?>

						</div>
						<?php echo e(Form::close()); ?>


		                <div class="col-md-6">
		                    <div class="panel panel-info">  <!-- Patient Details -->
		                        <div class="panel-heading">
		                            <h3 class="panel-title"><?php echo e(trans("messages.patient-details")); ?></h3>
		                        </div>
		                        <div class="panel-body">
		                            <div class="container-fluid">
		                                <div class="row">
		                                    <div class="col-md-3">
		                                        <p><strong><?php echo e(trans("messages.patient-number")); ?></strong></p></div>
		                                    <div class="col-md-9">
		                                        <?php echo e($test->visit->patient->patient_number); ?></div></div>
		                                <div class="row">
		                                    <div class="col-md-3">
		                                        <p><strong><?php echo e(Lang::choice('messages.name',1)); ?></strong></p></div>
		                                    <div class="col-md-9">
		                                        <?php echo e($test->visit->patient->name); ?></div></div>
		                                <div class="row">
		                                    <div class="col-md-3">
		                                        <p><strong><?php echo e(trans("messages.age")); ?></strong></p></div>
		                                    <div class="col-md-9">
		                                        <?php echo e($test->visit->patient->getAge()); ?></div></div>
		                                <div class="row">
		                                    <div class="col-md-3">
		                                        <p><strong><?php echo e(trans("messages.gender")); ?></strong></p></div>
		                                    <div class="col-md-9">
		                                        <?php echo e($test->visit->patient->gender==0?trans("messages.male"):trans("messages.female")); ?>

		                                    </div></div>
		                            </div>
		                        </div> <!-- ./ panel-body -->
		                    </div> <!-- ./ panel -->
		                    <div class="panel panel-info"> <!-- Specimen Details -->
		                        <div class="panel-heading">
		                            <h3 class="panel-title"><?php echo e(trans("messages.specimen-details")); ?></h3>
		                        </div>
		                        <div class="panel-body">
		                            <div class="container-fluid">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(Lang::choice('messages.specimen-type',1)); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->specimenType->name or trans('messages.pending')); ?>

		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans('messages.specimen-number')); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->id or trans('messages.pending')); ?>

		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans('messages.specimen-status')); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e(trans('messages.'.$test->specimen->specimenStatus->name)); ?>

		                                    </div>
		                                </div>
		                            <?php if($test->specimen->isRejected()): ?>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans('messages.rejection-reason-title')); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->rejectionReason->reason or trans('messages.pending')); ?>

		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans('messages.reject-explained-to')); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->reject_explained_to or trans('messages.pending')); ?>

		                                    </div>
		                                </div>
		                            <?php endif; ?>
		                            <?php if($test->specimen->isReferred()): ?>
		                            <br>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans("messages.specimen-referred-label")); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php if($test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
		                                            <?php echo e(trans("messages.in")); ?>

		                                        <?php elseif($test->specimen->referral->status == App\Models\Referral::REFERRED_OUT): ?>
		                                            <?php echo e(trans("messages.out")); ?>

		                                        <?php endif; ?>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(Lang::choice("messages.facility", 1)); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->referral->getFacilityName()); ?>

		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans("messages.person-involved")); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->referral->person); ?>

		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans("messages.contacts")); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->referral->contacts); ?>

		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <p><strong><?php echo e(trans("messages.referred-by")); ?></strong></p>
		                                    </div>
		                                    <div class="col-md-8">
		                                        <?php echo e($test->specimen->referral->user->name); ?>

		                                    </div>
		                                </div>
		                            <?php endif; ?>
		                            </div>
		                        </div>
		                    </div> <!-- ./ panel -->
		                    <div class="panel panel-info">  <!-- Test Results -->
		                        <div class="panel-heading">
		                            <h3 class="panel-title"><?php echo e(trans("messages.test-details")); ?></h3>
		                        </div>
		                        <div class="panel-body">
		                            <div class="container-fluid">
		                                <div class="display-details">
		                                    <p class="view"><strong><?php echo e(Lang::choice('messages.test-type',1)); ?></strong>
		                                        <?php echo e($test->testType->name or trans('messages.unknown')); ?></p>
		                                    <p class="view"><strong><?php echo e(trans('messages.visit-number')); ?></strong>
		                                        <?php echo e($test->visit->visit_number or trans('messages.unknown')); ?></p>
		                                    <p class="view"><strong><?php echo e(trans('messages.date-ordered')); ?></strong>
	                                            <?php echo e($test->isExternal()?$test->external()->request_date:$test->time_created); ?></p>
		                                    <p class="view"><strong><?php echo e(trans('messages.lab-receipt-date')); ?></strong>
		                                        <?php echo e($test->time_created); ?></p>
		                                    <p class="view"><strong><?php echo e(trans('messages.test-status')); ?></strong>
		                                        <?php echo e(trans('messages.'.$test->testStatus->name)); ?></p>
		                                    <p class="view-striped"><strong><?php echo e(trans('messages.physician')); ?></strong>
		                                        <?php echo e($test->requested_by or trans('messages.unknown')); ?></p>
		                                    <p class="view-striped"><strong><?php echo e(trans('messages.request-origin')); ?></strong>
		                                        <?php if($test->specimen->isReferred() && $test->specimen->referral->status == App\Models\Referral::REFERRED_IN): ?>
		                                            <?php echo e(trans("messages.in")); ?>

		                                        <?php else: ?>
		                                            <?php echo e($test->visit->visit_type); ?>

		                                        <?php endif; ?></p>
		                                    <p class="view-striped"><strong><?php echo e(trans('messages.registered-by')); ?></strong>
		                                        <?php echo e($test->createdBy->name or trans('messages.unknown')); ?></p>
		                                    <?php if($test->isCompleted()): ?>
		                                    <p class="view"><strong><?php echo e(trans('messages.tested-by')); ?></strong>
		                                        <?php echo e($test->testedBy->name or trans('messages.unknown')); ?></p>
		                                    <?php endif; ?>
		                                    <?php if($test->isVerified()): ?>
		                                    <p class="view"><strong><?php echo e(trans('messages.verified-by')); ?></strong>
		                                        <?php echo e($test->verifiedBy->name or trans('messages.verification-pending')); ?></p>
		                                    <?php endif; ?>
		                                    <?php if((!$test->specimen->isRejected()) && ($test->isCompleted() || $test->isVerified())): ?>
		                                    <!-- Not Rejected and (Verified or Completed)-->
		                                    <p class="view-striped"><strong><?php echo e(trans('messages.turnaround-time')); ?></strong>
		                                        <?php echo e($test->getFormattedTurnaroundTime()); ?></p>
		                                    <?php endif; ?>
		                                </div>
		                            </div>
		                        </div> <!-- ./ panel-body -->
		                    </div>  <!-- ./ panel -->
		                </div>
					</div>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/unhls_test/edit.blade.php ENDPATH**/ ?>
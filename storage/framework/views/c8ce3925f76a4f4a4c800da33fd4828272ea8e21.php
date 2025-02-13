<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
		<li><a href="<?php echo e(route('bbincidence.index')); ?>">BB Incidents</a></li>
		<li><a href="<?php echo e(route('bbincidence.bbfacilityreport')); ?>">Facility Report</a></li>
		<li class="active">New BB Incident</li>
	</ol>
</div>
<div class="panel panel-primary">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-plus"></span>
		New BB Incident
	</div>
	<div class="panel-body">

		<!-- if there are creation errors, they will show here -->
		<?php if($errors->all()): ?>
		<div class="alert alert-danger">
			<?php echo e(HTML::ul($errors->all())); ?>

		</div>
		<?php endif; ?>
		<?php echo e(Form::open(array('url' => 'bbincidence', 'id' => 'form-create-bbincidence', 'autocomplete' => 'off'))); ?>

		<div class="form-group actions-row" style="text-align:right;">
		</div>
		<div class="panel panel-primary">

			 <h3 class="panel-title" style="text-align:center"><strong>FACILITY BIOSAFETY AND BIOSECURITY INCIDENT/OCCURENCE FORM</strong></h3>
			 <br><br>
			<div class="panel-body">
				<div class="form-group">

					<!-- Health Facility Information -->
					<?php echo e(Form::hidden('facility_id', Auth::user()->facility->id)); ?>

					<?php echo e(Form::label('facility_id', 'Facility Information:', array('class' => ''))); ?>

					<?php echo e(Form::textarea('',
					'Facility Code:: ' .Auth::user()->facility->code.
					' Facility Name:: '.Auth::user()->facility->name.
					'Facility Level::'.Auth::user()->facility->level->level.
					' District Name:: '.Auth::user()->facility->district->name,
					array('size' => '30x5','class' => 'form-control col-sm-4','readonly' => 'readonly'))); ?>


					<?php echo e(Form::label('serial_no', 'BB Incident Identification No:', array('class' => 'col-sm-6'))); ?>

					<?php echo e(Form::text('serial_no', '', array('class' => 'form-control col-sm-4','readonly' => 'readonly',
					'placeholder' => 'To be generated automatically'))); ?>

				</div>

				<!-- Location, description and first aid information given to victim -->
				<div class="form-group">
					<?php echo e(Form::label('lab_section', 'Location', array('class' => 'required'))); ?>

					<?php echo e(Form::text('lab_section', old('lab_section'), array('class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('description', 'Description', array('class' => 'col-sm-2 required'))); ?>

					<?php echo e(Form::textarea('description', old('description'), array('size' => '10x2', 'class' => 'form-control col-sm-4'))); ?>


					<?php echo e(Form::label('firstaid', 'First Aid / Immediate Actions', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::textarea('firstaid', old('firstaid'), array('size' => '10x2', 'class' => 'form-control col-sm-4'))); ?>


				</div>

				<!-- BB incident occurence date and time details -->
				<div class="form-group">
					<?php echo e(Form::label('occurrence_date', trans('Occurrence Date'), array('class' => 'required'))); ?>

					<?php echo e(Form::text('occurrence_date',old('occurrence_date') ,array('class' => 'form-control standard-datepicker col-sm-4'))); ?>


					<?php echo e(Form::label('occurrence_time', trans('Occurence Time'), array('class' => 'required col-sm-4'))); ?>

					<?php echo e(Form::text('occurrence_time', old('occurrence_time'), array('class' => 'form-control col-sm-4'))); ?>


					<div class='input-group date' id='occurrence_time'>
						<script type="text/javascript">
							$(function () {
								$('#occurrence_time').datetimepicker({format:'LT'});
							});
						</script>
					</div>
				</div>
			</div>

			<!-- Affected person's Particulars -->
			<div class="panel panel-primary">
				<div class="panel-heading "><strong>Facility Bio-Safety and Bio-Security Incident/Occurence Details (<i>to be completed by the person affected or his/her supervisor</i>)</strong></div>
				<div class="panel-body">

					<div class="form-group">
						<?php echo e(Form::label('personnel_id', 'Victim Identification Number:', array('class' => ''))); ?>

						<?php echo e(Form::text('personnel_id', old('personnel_id'), array('class' => 'form-control col-sm-4'))); ?>


						<?php echo e(Form::label('ahpc_reg', 'AHPC Registration No:', array('class' => 'col-sm-2'))); ?>

						<?php echo e(Form::text('ahpc_reg', old('ahpc_reg'), array('class' => 'form-control col-sm-4'))); ?>

					</div>

					<div class="form-group">
						<?php echo e(Form::label('personnel_surname', 'Surname', array('class' => 'required'))); ?>

						<?php echo e(Form::text('personnel_surname', old('personnel_surname'), array('class' => 'form-control col-sm-4'))); ?>


						<?php echo e(Form::label('personnel_othername', 'Other Name', array('class' => 'required col-sm-4'))); ?>

						<?php echo e(Form::text('personnel_othername', old('personnel_othername'), array('class' => 'form-control col-sm-4'))); ?>


						<?php echo e(Form::label('personnel_gender', 'Gender:', array('class' =>'col-sm-2 required '))); ?>

						<div class="radio-inline"><?php echo e(Form::radio('personnel_gender', 'Male', false)); ?> <span class="input-tag">Male</span></div>
						<div class="radio-inline"><?php echo e(Form::radio("personnel_gender", 'Female', false)); ?> <span class="input-tag">Female</span></div>
					</div>

					<div class="form-group">
						<?php echo e(Form::label('personnel_dob', 'Date of Birth', array('class' => 'required'))); ?>

						<?php echo e(Form::text('personnel_dob', old('personnel_dob'), array('class' => 'form-control standard-datepicker col-sm-4'))); ?>


						<?php echo e(Form::label('personnel_age', 'Age', array('class' => 'required col-sm-4'))); ?>

						<?php echo e(Form::text('personnel_age', old('personnel_age'), array('class' => 'form-control col-sm-4', 'placeholder' => 'If DOB is not known'))); ?>

					</div>

				<div class="form-group">
					<!--<?php echo e(Form::label('personnel_category', 'Victim Category', array('class' => 'col-sm-2'))); ?>

					<?php echo e(Form::text('personnel_category', old('personnel_category'), array('class' => 'form-control col-sm-4'))); ?>-->

					<?php echo e(Form::label('personnel_category', 'Victim Category', array('class' => 'required'))); ?>

					<input list="personnel_category" name="personnel_category" class="form-control" placeholder="Double click for Options or write">
					<datalist id="personnel_category">
						<option value="Laboratory Staff">
							<option value="Clinician">
								<option value="Support Staff">
									<option value="Patient">
										<option value="Visitor">
											<option value="Bike Rider">
											</datalist>
											<?php echo e(Form::label('personnel_telephone', 'Telephone', array('class' => 'col-sm-4'))); ?>

											<?php echo e(Form::text('personnel_telephone', old('personnel_telephone'), array('class' => 'form-control col-sm-4'))); ?>

											</div>
										<div class="form-group">
											<?php echo e(Form::label('personnel_email', 'Email', array('class' => ''))); ?>

											<?php echo e(Form::email('personnel_email', old('personnel_email'), array('class' => 'form-control col-sm-4'))); ?>


											<?php echo e(Form::label('nok_email', 'Next Of Kin Email', array('class' => 'col-sm-4'))); ?>

											<?php echo e(Form::email('nok_email', old('nok_email'), array('class' => 'form-control col-sm-4'))); ?>

										</div>
											<!--<label style="font-size:15px">Next Of Kin Details</label> <br>-->
										<div class="form-group">
											<?php echo e(Form::label('nok_name', 'Name Of Next Of Kin', array('class' => ''))); ?>

											<?php echo e(Form::text('nok_name', old('nok_name'), array('class' => 'form-control col-sm-4'))); ?>


											<?php echo e(Form::label('nok_telephone', 'Contact Of Next Of Kin:', array('class' => 'col-sm-2'))); ?>

											<?php echo e(Form::text('nok_telephone', old('nok_telephone'), array('class' => 'form-control col-sm-4'))); ?>

										</div>
									</div>
								</div>

								<!--List of nature of BB Incidents-->
								<div class="form-group">
									<b>Nature of Incident/Occurrence</b>
									<div class="form-pane panel panel-default">
										<div class="container-fluid">
											<?php
											$cnt = 0;
											$zebra = "";
											?>
											<?php $__currentLoopData = $natures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<!-- <?php echo e(($cnt%6==0)?"<div class='row $zebra'>":""); ?>

												<?php
												$cnt++;
												$zebra = (((int)$cnt/6)%2==1?"row-striped":"");
												?> -->
												<div class="col-md-2">
													<!--<label  class="checkbox" title="<?php echo e($value->priority); ?>/<?php echo e($value->class); ?>">
													<input type="checkbox" name="nature[]" value="<?php echo e($value->id); ?>" /><?php echo e($value->name); ?>

												</label>-->

												<label  class="checkbox" title="<?php echo e($value->priority); ?>/<?php echo e($value->class); ?>">
													<?php echo e(Form::checkbox('nature[]',$value->id,old($value->id),array('title'=>$value->priority.'/'.$value->class))); ?>

													<?php echo e($value->name); ?>

												</label>

											</div>
											<!-- <?php echo e(($cnt%6==0)?"</div>":""); ?> -->
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<!-- <?php echo e(($cnt%6!=0)?"</div>":""); ?> -->
											<br></br>

											<?php echo e(Form::label('facility_id', 'Check if incident(s) is Minor or Major', array('class' => 'col-sm-4'))); ?><br></br>

											<input type="checkbox" name="minor" value="Bike"> Minor<br></br>
											<input type="checkbox" name="minor" value="Bike"> Major<br>

										</div>
									</div>
								</div>

							</div>
						</div>

						 <!-- Extra details about the Incident -->
						<div class="panel panel-primary">
							<div class="panel-heading"><strong>Extra details about the Incident</strong></div>
							<div class="panel-body">
								<label style="">Does nature of occurrence involve contact with suspected VHF patient? If yes, click and Specify Patient ULIN</label> <br><br>
								<script>
									function toggle(checkboxID, toggleID) {
										var checkbox = document.getElementById(checkboxID);
										var toggle = document.getElementById(toggleID);
										updateToggle = checkbox.checked ? toggle.disabled=false : toggle.disabled=true;
									}
								</script>
								<input
								id="patient_ulin"
								name="patient_ulin"
								onClick="toggle('patient_ulin', 'ulin')"
								type="checkbox" value="1" /> Yes <br />
								<label> Patient ULIN:</label>
								<input id="ulin" name="ulin" type="text" value="if no VHF contact, this will be disabled" /> <br>

								<!--	<?php echo e(Form::label('ulin', 'Patient ULIN', array('class' => 'col-sm-2'))); ?>

									<?php echo e(Form::text('ulin', old('ulin'), array('class' => 'form-control col-sm-4','placeholder' => 'If contact with suspected VHF patient'))); ?>-->

									<?php echo e(Form::label('task', 'Activity/Procedure/task being performed', array('class' => 'col-sm-2'))); ?>

									<?php echo e(Form::text('task', old('task'), array('class' => 'form-control col-sm-4'))); ?>



								</div>

								<div class="form-group">
									<?php echo e(Form::label('equip_code', 'Equipment Code', array('class' => 'col-sm-2'))); ?>

									<?php echo e(Form::text('equip_code', old('equip_code'), array('class' => 'form-control col-sm-4'))); ?>


									<?php echo e(Form::label('equip_name', 'Equipment Name', array('class' => 'col-sm-2'))); ?>

									<?php echo e(Form::text('equip_name', old('equip_name'), array('class' => 'form-control col-sm-4'))); ?>

								</div>

								<span style="font-weight: bold;">Reporting Officer</span>
								<div class="form-group">
									<?php echo e(Form::label('officer_fname', 'First Name', array('class' => 'required'))); ?>

									<?php echo e(Form::text('officer_fname', old('officer_fname'), array('class' => 'form-control col-md-4'))); ?>


									<?php echo e(Form::label('officer_lname', 'Last Name', array('class' => 'required'))); ?>

									<?php echo e(Form::text('officer_lname', old('officer_lname'), array('class' => 'form-control col-sm-4'))); ?>

								</div>

								<div class="form-group">
									<?php echo e(Form::label('officer_cadre', 'Designation', array('class' => 'required'))); ?>

									<?php echo e(Form::text('officer_cadre', old('officer_cadre'), array('class' => 'form-control col-sm-4'))); ?>


									<?php echo e(Form::label('officer_telephone', 'Telephone', array('class' => 'col-sm-2'))); ?>

									<?php echo e(Form::text('officer_telephone', old('officer_telephone'), array('class' => 'form-control col-sm-4'))); ?>

								</div>
							</div>
						</div>

						<div class="form-group actions-row" style="text-align:right;">
							<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.'SAVE',
							['class' => 'btn btn-primary', 'onclick' => 'submit()'])); ?>

						</div>


						<?php echo e(Form::close()); ?>


					</div>
				</div>
				<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/bbincidence/create.blade.php ENDPATH**/ ?>
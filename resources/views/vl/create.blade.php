@extends("layout")
@section("content")

<div>
	<ol class="breadcrumb">
		<li><a href="{{{route('user.home')}}}">{{ trans('messages.home') }}</a></li>
		<li><a href="{{ route('viral.index') }}">Viral Load Patient list</a></li>
		<li class="active">New Patient </li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">

		Facility:: {{ strtoupper(Auth::user()->facility->name) }}
	</div>
	<div class="panel-body">
		<!-- if there are creation errors, they will show here -->
		@if($errors->all())
		<div class="alert alert-danger">
			{{ HTML::ul($errors->all()) }}
		</div>
		@endif
		{{ Form::open(array('url' => 'viral/store', 'id' => 'form-create-patient')) }}
		<div class="form-group">
			<fieldset class="scheduler-border">
				<legend class="scheduler-border">For facilities referring samples ONLY</legend>
				<div class="col-md-6">
					<div class="form-group">
						{{ Form::label('facility_id','Facility Name:' , array('class' =>'label-control')) }}
						{{ Form::select('facility_id', $facilities, null, ['class' => 'form-control select2 select2-hidden-accessible', 'multiple'=>"",'style'=>'width: 270px;', 'tabindex'=>'"-1"', 'aria-hidden'=>'"true"']) }}
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						{{ Form::label('referral_reason','Reason for refer:' , array('class' =>'label-control')) }}
						{{ Form::select('referral_reason', $referral_reasons, old('referral_reason'),['class' => 'form-control col-sm-3']) }}
					</div>
				</div>
			</fieldset>
		</div>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">PATIENT DETAILS</legend>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('patient_ART','Patient Clinic ID/ART # :', array('text-align' => 'right', 'class' => 'required')) }}
					{{ Form::text('patient_ART', old('patient_ART'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('nin','NIN :', array('text-align' => 'right')) }}
					{{ Form::text('nin', old('nin'), array('class' => 'form-control')) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('gender', trans('messages.sex'), array('class' => 'required')) }}
					<div>{{ Form::radio("gender", '1', true) }}
						<span class="input-tag">{{trans('messages.female')}}</span>
					</div>
					<div>{{ Form::radio('gender', '0', false) }}
						<span class="input-tag">{{trans('messages.male')}}</span>
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('other_id','Other ID', array('text-align' => 'right')) }}
					{{ Form::text('other_id', old('other_id'), array('class' => 'form-control')) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class='required' for="dob">Date Of Birth</label>
					<input type="text" name="dob" id="dob" class="form-control input-sm" size="11">
				</div>
				<div class="form-group">
					<label for="age">Age</label>
					<input type="text" name="age" id="age" class="form-control input-sm" maxlength="50%" size="4" style="width:20%">
					<select name="age_units" id="id_age_units" class="form-control input-sm" style="width:20%">
						<option value="Y">Years</option>
						<option value="M">Months</option>
						<option value="D">Days</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('phone_number','Phone Number:', array('text-align' => 'right')) }}
					{{ Form::text('phone_number', old('phone_number'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('form_number','Form Number :' , array('class' =>'label-control')) }}
					{{ Form::text('form_number', old('form_number'),['class' => 'form-control col-sm-3']) }}
				</div>
			</div>
		</fieldset>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">TREATMENT INFORMATION</legend>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('initiation_date','Date of Treatment Initiation ', array('text-align' => 'right', 'class' => 'required')) }}
					<input type="text" name="initiation_date" id="intitiationdate" class="form-control input-sm" size="11">
					@if ($errors->has('initiation_date'))
					<span class="text-danger">
						<strong>{{ $errors->first('initiation_date') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					{{ Form::label('duration_on_current_regimen','Duration on Current regimen ', array('text-align' => 'right')) }}
					{{ Form::select('duration_on_current_regimen', array_merge(array(' ' => '--- Select ---'), $duration_current_regimen),old('duration_on_current_regimen'),['class' => 'form-control'])}}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('who_stage', 'Current WHO Stage') }}
					{{ Form::select('who_stage', array_merge(array(' ' => '--- Select ---'), $who_stage),old('who_stage'),['class' => 'form-control'])}}
				</div>
				<div class="form-group">
					{{ Form::label('anc','If Pregnant, Emter ANC #', array('text-align' => 'right')) }}
					{{ Form::text('anc', old('anc'), array('class' => 'form-control')) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('mother_pregnant', 'Is Mother Pregnant ?') }}
					{{ Form::select('mother_pregnant', array_merge(array(' ' => '--- Select ---'), $mother_pregnant),old('duration_on_current'),['class' => 'form-control'])}}
				</div>
				<div class="form-group">
					{{ Form::label('mother_breastfeeding','Is Mother Breastfeeding ?:' ) }}
					{{ Form::select('mother_breastfeeding', array_merge(array(' ' => '--- Select ---'), $mother_pregnant),old('mother_breastfeeding'),['class' => 'form-control'])}}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('active_tb','Patient has active TB ?:', array('text-align' => 'right')) }}
					{{ Form::select('active_tb', array_merge(array(' ' => '--- Select ---'), $mother_pregnant),old('active_tb'),['class' => 'form-control'])}}
				</div>
				<div class="form-group">
					{{ Form::label('tb_phase','If Yes, are they on', array('text-align' => 'right')) }}
					{{ Form::select('tb_phase', array_merge(array(' ' => '--- Select ---'), $active_tb),old('tb_phase'),['class' => 'form-control'])}}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('arv_adherence','ARV Adherence ?:', array('text-align' => 'left')) }}
					<select name="arv_adherence" class="form-control">
						<option value="">-- Select --</option>
						@foreach ($arv_adherence as $key=>$value)
						<option value="{{$key}}">
							{{$value}}
						</option>
						@endforeach
					</select>
					@if ($errors->has('arv_adherence'))
					<span class="text-danger">
						<strong>{{ $errors->first('arv_adherence') }}</strong>
					</span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('care_approach','Treatment care approach') }}
					<select name="care_approach" class="form-control">
						<option value="">-- Select --</option>
						@foreach ($care_approach as $key=>$value)
						<option value="{{$key}}">
							{{$value}}
						</option>
						@endforeach
					</select>
					@if ($errors->has('care_approach'))
					<span class="text-danger">
						<strong>{{ $errors->first('care_approach') }}</strong>
					</span>
					@endif
				</div>
			</div>
		</fieldset>
		<div class="panel panel-primary">
			<strong>INDICATION FOR VIRAL LOAD TESTING (please tick one): To be completed by Clinician</strong><br><br>
			<div class="radio-inline">{{ Form::radio('indication', '6 Months after ART initiation', false) }} <span class="input-tag">6 Months after ART initiation</span></div>
			<div class="radio-inline">{{ Form::radio('indication', '12 Months after ART initiation', false) }} <span class="input-tag">12 Months after ART initiation</span></div>
			<div class="radio-inline">{{ Form::radio('indication', 'Routine', false) }} <span class="input-tag">Routine</span></div>
			<div class="radio-inline">{{ Form::radio("indication", 'Repeat (after IAC)', false) }} <span class="input-tag">Repeat (after IAC)</span></div>
			<div class="radio-inline">{{ Form::radio("indication", 'Suspected Treatment Failure', false) }} <span class="input-tag">Suspected Treatment Failure</span></div>
			<div class="radio-inline">{{ Form::radio("indication", 'ANC For PMTCT', false) }} <span class="input-tag">1<sup>st</sup> ANC For PMTCT</span></div>
			<div class="radio-inline">{{ Form::radio("indication", 'Special Considerations', false) }} <span class="input-tag">Special Considerations</span></div>
			@if ($errors->has('indication'))
			<span class="text-danger">
				<strong>{{ $errors->first('indication') }}</strong>
			</span>
			@endif
		</div>

		<fieldset class="scheduler-border">
			<legend class="scheduler-border">TREATMENT LINE AND CURRENT REGIMEN</legend>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('regiment','Select Current regimen ', array('text-align' => 'right')) }}
					<select name="regiment" class="form-control">
						<option value="">-- Select --</option>
						@foreach ($regimens as $key=>$value)
						<option value="{{$key}}">
							{{$value}}
						</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					{{ Form::label('treatment_line','Treatment Line', array('text-align' => 'right')) }}
					<select name="treatment_line" class="form-control">
						<option value="">-- Select --</option>
						@foreach ($treatment_line as $key=>$value)
						<option value="{{$key}}">
							{{$value}}
						</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('clinician', 'Test Requested By',array('class' => 'required')) }}
					{{ Form::select('clinician', $clinicians, null,
                        array('class' => 'form-control','id'=>'clinician_dropdown_id')) }}
				</div>
				<div class="form-group">
					{{ Form::label('phone_contact', 'Phone Contact',array('class' => 'required')) }}
					{{Form::text('phone_contact', old('phone_contact'), array('class' => 'form-control',
                        'id'=>'clinician_phone_id','name'=>'clinician_phone'))}}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('test_date','Test Date ', array('text-align' => 'right', 'class' => 'required')) }}
					{{ Form::text('test_date', old('test_date'), array('class' => 'form-control standard-datepicker')) }}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{{ Form::label('poc_device', 'Device used', array('class' => 'required')) }}
					<div>{{ Form::radio('poc_device', 'GeneXpert', false) }}
						<span class="input-tag">{{trans('GeneXpert')}}</span>
					</div>
					<div>{{ Form::radio("poc_device", 'm-PIMA', false) }}
						<span class="input-tag">{{trans('m-PIMA')}}</span>
					</div>
				</div>
			</div>
		</fieldset>

		<div class="col-md-14">
			<div class="form-group">
				<fieldset class="scheduler-border">
					<legend class="scheduler-border">SPECIMEN INFORMATIONS</legend>
					<div class="form-pane panel panel-default">
						<div class="col-md-6">
							<div class="form-group">
								{{Form::label('specimen_type', 'Sample Type')}}
								{{ Form::select('specimen_type', $specimenTypes,
                                Illuminate\Support\Facades\Request::get('specimenType'),
                                ['class' => 'form-control specimen-type']) }}
							</div>
							<div class="form-group">
								<label for="collection_date">Time of Sample Collection</label>
								<input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="collection_date" type="text" id="collection-date" value="{{$collectionDate}}">
							</div>
							<div class="form-group">
								<label for="reception_date">Time Sample was Received in Lab</label>
								<input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="reception_date" type="text" id="reception-date" value="{{$receptionDate}}">
							</div>
							<div class="form-group">
								{{Form::label('test_type_category', 'Lab Section')}}
								{{ Form::select('test_type_category', $categories,
                                Illuminate\Support\Facades\Request::get('testCategory'),
                                ['class' => 'form-control test-type-category']) }}
							</div>
						</div>
						<div class="col-md-6 test-type-list">
						</div>
						<div class="col-md-12">
							<a class="btn btn-default add-test-to-list" href="javascript:void(0);" data-measure-id="0" data-new-measure-id="">
								<span class="glyphicon glyphicon-plus-sign"></span>Add Test to List</a>
						</div>
					</div>
					<div class="form-pane panel panel-default test-list-panel">
						<div class=" test-list col-md-12">
							<div class="col-md-4">
								<b>Specimen</b>
							</div>
							<div class="col-md-4">
								<b>Lab Section</b>
							</div>
							<div class="col-md-4">
								<div class="col-md-11"><b>Test</b></div>
								<div class="col-md-1"></div>
							</div>
						</div>
						@if ($errors->has('testtypes'))
						<span class="text-danger">
							<strong>{{ $errors->first('testtypes') }}</strong>
						</span>
						@endif
					</div>
				</fieldset>
			</div>
		</div>
		<div class="form-group actions-row">
			{{ Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save-test'),
                        ['class' => 'btn btn-primary', 'onclick' => 'submit()', 'alt' => 'save_new_test']) }}
		</div>
	</div>
	{{ Form::close() }}
</div>
</div>






<div class="hidden test-list-loader">
	<div class="col-md-12 new-test-list-row">
		<div class="col-md-4 specimen-name">
		</div>
		<div class="col-md-4 test-type-category-name">
		</div>
		<div class="col-md-4">
			<div class="col-md-11 test-type-name">
				<input class="specimen-type-id" type="hidden">
				<input class="test-type-id" type="hidden">
			</div>
			<button class="col-md-1 delete-test-from-list close" aria-hidden="true" type="button" title="{{trans('messages.delete')}}">×</button>
		</div>
	</div><!-- Test List Item -->
</div><!-- Test List Item Loader-->


<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2();

	});
</script>

@stop
@extends("layout")
@section("content")
<?php
$res_genexpert = $res_mpima = false;
if($patient->poc_device=='GeneXpert'){
	$res_genexpert = true;
}elseif($patient->poc_device=='m-PIMA'){
	$res_mpima = true;
}
?>
<?php
$indication1 = $indication2 = $indication3 = $indication4 = $indication5 = $indication6 = $indication7 = false;
if($patient->indication=='6 Months after ART initiation'){
	$indication1 = true;
}elseif($patient->indication=='12 Months after ART initiation'){
	$indication2 = true;
}elseif($patient->indication=='Routine'){
	$indication3 = true;
}elseif($patient->indication=='Repeat (after IAC)'){
	$indication4 = true;
}elseif($patient->indication=='Suspected Treatment Failure'){
	$indication5 = true;
}elseif($patient->indication=='1st ANC For PMTCT'){
	$indication6 = true;
}elseif($patient->indication=='Special Considerations'){
	$indication7 = true;
}
?>
<div>
	<ol class="breadcrumb">
		<li><a href="{{{route('user.home')}}}">{{ trans('messages.home') }}</a></li>
		<li><a href="{{ route('viral.index') }}">VL Patient list</a></li>
		<!-- <li><a href="{{ route('bbincidence.bbfacilityreport') }}">Facility Report</a></li> -->
		<li class="active">Patient Results</li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		Facility:: {{Auth::user()->facility->name}} || Level:: {{Auth::user()->facility->level->level}} || {{Auth::user()->facility->district->name}}
	</div>
	<div class="panel-body">

		<!-- if there are creation errors, they will show here -->
		@if($errors->all())
		<div class="alert alert-danger">
			{{ HTML::ul($errors->all()) }}
		</div>
		@endif
		{{ Form::open(array('url' => 'viral/update/'.$patient->id, 'id' => 'form-create-bbincidence', 'autocomplete' => 'off')) }}
		<div class="form-group actions-row" style="text-align:right;">
		</div>

		<div class="panel-heading "><strong>Patient Results</strong></div>
		<div class="panel-body">

			<div class="form-group">
				{{ Form::label('infant_name', 'Name:', array('class' =>'col-sm-2 ')) }}
				{{ $patient->VlPatient->name }}

			</div>

			<div class="form-group">
				{{ Form::label('sample_id', 'Date of birth:', array('class' =>'col-sm-2 ')) }}
				{{ $patient->VlPatient->dob }}

			</div>


			<div class="form-group">
						{{ Form::label('initiation_date','Date of Treatment Initiation ', array('text-align' => 'right', 'class' => 'required')) }}
						<input type="text" name="initiation_date" id="intitiationdate" value="{{$patient->initiation_date}}" class="form-control input-sm" size="11">
						@if ($errors->has('initiation_date'))
						<span class="text-danger">
						<strong>{{ $errors->first('initiation_date') }}</strong>
					</span>
					@endif
			</div>
			<div class="form-group">
						{{ Form::label('duration_on_current_regimen','Duration on Current regimen ', array('text-align' => 'right','class' => 'required')) }}
						{{ Form::select('duration_on_current_regimen', array_merge(array(' ' => '--- Select ---'), $duration_current_regimen), $patient->duration_on_current_regimen,['class' => 'form-control','required' => 'required'])}}
			</div>
			<div class="form-group">
						{{ Form::label('who_stage', 'Current WHO Stage',array('text-align' => 'right','class' => 'required')) }}
						<select name="who_stage" class="form-control">
			                <option value="">-- Select --</option>
			                @foreach ($who_stage as $key=>$value)
			                <option value="{{$key}}">
			                    {{$value}}
			                </option>
			                @endforeach
			            </select>
			</div>
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
			<div class="form-group">
						{{ Form::label('care_approach','Treatment care approach',array('text-align' => 'right','class' => 'required')) }}
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
			<div class="form-group">
            	<strong>INDICATION FOR VIRAL LOAD TESTING (please tick one): To be completed by Clinician</strong><br><br>
				<div class="radio-inline">{{ Form::radio('indication', '6 Months after ART initiation', $indication1) }} <span class="input-tag">6 Months after ART initiation</span></div>
				<div class="radio-inline">{{ Form::radio('indication', '12 Months after ART initiation', $indication2) }} <span class="input-tag">12 Months after ART initiation</span></div>
				<div class="radio-inline">{{ Form::radio('indication', 'Routine', $indication3) }} <span class="input-tag">Routine</span></div>
				<div class="radio-inline">{{ Form::radio("indication", 'Repeat (after IAC)', $indication4) }} <span class="input-tag">Repeat (after IAC)</span></div>
				<div class="radio-inline">{{ Form::radio("indication", 'Suspected Treatment Failure', $indication5) }} <span class="input-tag">Suspected Treatment Failure</span></div>
				<div class="radio-inline">{{ Form::radio("indication", 'ANC For PMTCT', $indication6) }} <span class="input-tag">1<sup>st</sup> ANC For PMTCT</span></div>
				<div class="radio-inline">{{ Form::radio("indication", 'Special Considerations', $indication7) }} <span class="input-tag">Special Considerations</span></div>
				@if ($errors->has('indication'))
						<span class="text-danger">
						<strong>{{ $errors->first('indication') }}</strong>
					</span>
					@endif
			</div>
			<div class="form-group">
						{{ Form::label('regiment','Select Current regimen ', array('text-align' => 'right','class' => 'required')) }}
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
						{{ Form::label('treatment_line','Treatment Line', array('text-align' => 'right','class' => 'required')) }}
						<select name="treatment_line" class="form-control">
			                <option value="">-- Select --</option>
			                @foreach ($treatment_line as $key=>$value)
			                <option value="{{$key}}">
			                    {{$value}}
			                </option>
			                @endforeach
			            </select>
			</div>
			<div class="form-group">
						{{ Form::label('poc_device', 'Device used', array('class' => 'required')) }}
						<div>{{ Form::radio('poc_device', 'GeneXpert', $res_genexpert) }}
						<span class="input-tag">{{trans('GeneXpert')}}</span></div>
						<div>{{ Form::radio("poc_device", 'm-PIMA', $res_mpima) }}
						<span class="input-tag">{{trans('m-PIMA')}}</span></div>
			</div>

			<div class="form-group actions-row">
				{{ Form::button('<span class="glyphicon glyphicon-save"></span> '.'SAVE RESULTS',
				['class' => 'btn btn-primary', 'onclick' => 'submit()']) }}
			</div>
			{{ Form::close() }}
			<script>
				$(".standard-datepicker-nofuture").datepicker({
					maxDate: new Date(),
					dateFormat: "yy-mm-dd"
				});
			</script>

		</div>

		@stop

@extends("layout")
@section("content")
	<div>
		<ol class="breadcrumb">
		  <li><a href="{{{URL::route('user.home')}}}">{{ trans('messages.home') }}</a></li>
		  <!-- <li><a href="{{ URL::route('fileupload.index') }}">HPV list</a></li> -->
		</ol>
	</div>

	@if (Session::has('message'))
	<div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
	@endif

	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-user"></span>
			Result Upload window
		</div>
		<div class="panel-body">
			
			@if($errors->all())
				<div class="alert alert-danger">
					{{ HTML::ul($errors->all()) }}
				</div>
			@endif
			
			{{ Form::model('', array('files'=>true,'route' => array('hpv.upload'), 'method' => 'POST', 'enctype'=> "multipart/form-data",
				'id' => 'form-edit-eventreport')) }}

			<div class="form-group actions-row" style="text-align:centre;">
				{{ Form::button('<span class="glyphicon glyphicon-save"></span> '.'SYNCRONIZE', 
				['class' => 'btn btn-primary', 'onclick' => 'submit()']) }}
			</div>

			<div class="panel panel-default">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		HPV Patient List
	</div>
	<div class="panel-body" style="overflow-x:auto;">
		<table class="table table-striped table-bordered table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>Patient number</th>
					<th>Patient Name</th>
					<th>DOB</th>
					<th>Result</th>
					<th>Test Date</th>
				</tr>
			</thead>

			<tbody>
				<?php $row=1; ?>
				@foreach($records as $key => $patient)
				<tr  @if(Session::has('activepatient'))
				{{(Session::get('activepatient') == $patient->id)?"class='info'":""}}
				@endif

				<tr>
					<td class="text-center">{{ $row }}</td>
					<td>{{ $patient->result_id }}</td>
					<td>{{ $patient->patient_number }}</td>
					<td>{{ $patient->patient_name }}</td>
					<td>{{ $patient->dob }}</td>
					<td>{{ $patient->genotype_16}},{{ $patient->genotype_18}},{{ $patient->genotype_hr}}</td>
					<td>{{ $patient->test_date}}</td>
				</tr>
				<?php $row++; ?>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
			
{{ Form::close() }}

@stop	
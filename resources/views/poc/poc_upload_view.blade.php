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
			
			{{ Form::model('', array('files'=>true,'route' => array('poc.upload'), 'method' => 'POST', 'enctype'=> "multipart/form-data",
				'id' => 'form-edit-eventreport')) }}

			<div class="form-group actions-row" style="text-align:centre;">
				{{ Form::button('<span class="glyphicon glyphicon-upload"></span> '.'UPLOAD', 
				['class' => 'btn btn-primary', 'onclick' => 'submit()']) }}
			</div>

			<div class="panel panel-default">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		Point of care List
	</div>
	<div class="panel-body" style="overflow-x:auto;">
		<table class="table table-striped table-bordered table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>#</th>
					<th>Sample ID</th>
					<th>Infant Name</th>
					<th>Gender</th>
					<th>Age In Months</th>
					<th>PCR Status</th>
					<th>Entry Point</th>
					<th>EID Test Result</th>
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
					<td>{{ $patient->sample_id }}</td>
					<td>{{ $patient->infant_name }}</td>
					<td>{{ $patient->gender }}</td>
					<td class="text-center">{{ $patient->age}}</td>
					<td>{{ $patient->pcr_level}}</td>
					@if ($patient->entry_point == '')
					<td>-</td>
					@else
					<td>{{ $patient->entry_point}}</td>
					@endif
					<td>{{ $patient->results}}</td>
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
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
			
			{{ Form::model('', array('files'=>true,'route' => array('stock.upload'), 'method' => 'POST', 'enctype'=> "multipart/form-data",
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
					<th>Commodity</th>
					<th>Supplier</th>
					<th>Lot</th>
					<th>Bach No</th>
					<th>Unit</th>
					<th>Expiry date</th>
					<th>Quantity supplied</th>
					<th>Used</th>
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
					<td>{{ $patient->commodity }}</td>
					<td>{{ $patient->supplier }}</td>
					<td>{{ $patient->lot }}</td>
					<td>{{ $patient->batch_no}}</td>
					<td>{{ $patient->unit}}</td>
					<td>{{ $patient->expiry_date}}</td>
					<td>{{ $patient->quantity_supplied}}</td>
					<td>{{ $patient->used}}</td>
				</tr>
				<?php $row++; ?>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
			
{{ Form::close() }}

@stop	
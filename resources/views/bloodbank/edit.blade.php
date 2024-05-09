@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
	  <li><a href="{{{URL::route('user.home')}}}">{{trans('messages.home')}}</a></li>
	  <li><a href="{{ URL::route('bloodbank.index') }}">{{ Lang::choice('messages.blood-unit',1) }}</a></li>
	  <li class="active">{{trans('messages.edit-blood-unit')}}</li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-edit"></span>
		{{trans('messages.edit-blood-unit')}}
	</div>
	{{ Form::model($specimen, array(
			'route' => array('bloodbank.update', $specimen->id), 'method' => 'PUT',
			'id' => 'form-edit-bloodunit'
		)) }}
		<div class="panel-body">
			@if($errors->all())
				<div class="alert alert-danger">
					{{ HTML::ul($errors->all()) }}
				</div>
			@endif

			<div class="form-group">
				{{ Form::label('unit_no', 'Unit Number') }}
				{{ Form::text('unit_no', old('unit_no'), array('class' => 'form-control')) }}
				@if ($errors->has('unit_no'))
					<span class="text-danger">
                            <strong>{{ $errors->first('unit_no') }}</strong>
                        </span>
				@endif
			</div>
			<div class="form-group">
				{{ Form::label('group', 'Blood group') }}
				{{ Form::select('group',array('','A+' => 'A+','A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'), old('group'), array('class' => 'form-control')) }}
				@if ($errors->has('group'))
					<span class="text-danger">
                            <strong>{{ $errors->first('group') }}</strong>
                        </span>
				@endif
			</div>
			<!-- <div class="form-group">
				{{ Form::label('rhs', 'Rhesus') }}
				{{ Form::text('rhs', old('rhs'), array('class' => 'form-control')) }}
				@if ($errors->has('rhs'))
					<span class="text-danger">
                            <strong>{{ $errors->first('rhs') }}</strong>
                        </span>
				@endif
			</div> -->
			<div class="form-group">
				{{ Form::label('blood_component', 'Blood component') }}
				{{ Form::select('blood_component', array('','Packed cells' => 'Packed cells','Whole blood' => 'Whole blood', 'FFP' => 'Fresh frozen plasma','CRYO' => 'CRYO Precipitates','platelets'=>'platelets'),old('blood_component'), array('class' => 'form-control')) }}
				@if ($errors->has('blood_component'))
					<span class="text-danger">
                            <strong>{{ $errors->first('blood_component') }}</strong>
                        </span>
				@endif
			</div>
			<div class="form-group">
				{{ Form::label('amount', 'Amount') }}
				{{ Form::number('amount', old('amount'), array('class' => 'form-control')) }}
				@if ($errors->has('amount'))
					<span class="text-danger">
                            <strong>{{ $errors->first('amount') }}</strong>
                        </span>
				@endif
			</div>
			<div class="form-group">
				{{ Form::label('donation_date', 'Donation date') }}
				{{ Form::text('donation_date', old('donation_date'), array('class' => 'form-control standard-datepicker')) }}
				@if ($errors->has('donation_date'))
					<span class="text-danger">
                            <strong>{{ $errors->first('donation_date') }}</strong>
                        </span>
				@endif
			</div>
			<div class="form-group">
				{{ Form::label('expiry_date', 'Expiry date') }}
				{{ Form::text('expiry_date', old('expiry_date'), array('class' => 'form-control standard-datepicker')) }}
				@if ($errors->has('expiry_date'))
					<span class="text-danger">
                            <strong>{{ $errors->first('expiry_date') }}</strong>
                        </span>
				@endif
			</div>
			<div class="form-group hidden">
				{{ Form::label('status', 'Blood Unit status') }}
				{{ Form::select('status', array('','0' => 'In stock','1' => 'Used', '2' => 'Tranfered'),old('status'), array('class' => 'form-control')) }}
				@if ($errors->has('status'))
					<span class="text-danger">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
				@endif
			</div>
		<div class="panel-footer">
			<div class="form-group actions-row">
				{{ Form::button(
					'<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
					['class' => 'btn btn-primary', 'onclick' => 'submit()']
				) }}
				{{ Form::button(trans('messages.cancel'),
					['class' => 'btn btn-default', 'onclick' => 'javascript:history.go(-1)']
				) }}
			</div>
		</div>
	{{ Form::close() }}
</div>
@stop

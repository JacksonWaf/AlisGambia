@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
		<li><a href="{{ route('user.home')}}"></a></li>
		<li><a href="{{ route('resetulin.create')}}"></a></li>

	</ol>
</div>
<div class ="panel panel-primary">
	<div class="panel-heading"> <span class="glyphicon glyphicon-cog">{{trans('Facility Settings')}}</span>
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="{{ route('unhls_patient.create') }}">
				<span class="glyphicon glyphicon-plus-sign"></span>
				{{trans('messages.new-patient')}}
			</a>
		</div>
	</div>

	<div class="panel-body">
		@if (Session::has('message'))
			<div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
		@endif
		@if($errors->all())
			<div class="alert alert-danger">
				{{ HTML::ul($errors->all())}}

			</div>
		@endif
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5">
			    	<ul class="list-group">
			    		@foreach($details as $details)
			    		<li class="list-group-item disabled"><strong> Details</strong></li>
			    		<li class="list-group-item"><b>Facility ID:</b> {{$details->id}}</li>
			    		<li class="list-group-item"><b>Facility Name:</b> {{$details->name}}</li>
			    		<li class="list-group-item"><b>Facility Code:</b> {{$details->code}}</li>
			    		<li class="list-group-item"><b>District Name:</b> {{$details->district_id}}</li>
			    		<li class="list-group-item"><b>Facility Level:</b> {{$details->level_id}}</li>
			    		<li class="list-group-item"><b>Facility Address:</b> {{$address_info}}</li>
			    		<li class="list-group-item"><b>Facility Email:</b> {{$email_address}}</li>
			    		<li class="list-group-item"><b>Facility Contact:</b> {{$telephone_number}}</li>
			    		@endforeach
			    	</ul>
		    	</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-7">
					{{ Form::open(array('route' => array('settings.update'), 'id' => 'uuid-set'))}}

						<div class="form-group">
							<div class="panel-btn"><a href="javascript:void(0)" class="btn btn-link" role="button" data-toggle="modal" data-target="#resetTwo">
								<span class="glyphicon glyphicon-plus-sign"></span><strong>{{' Click to activate specimen collection option for the facility'}}</strong></a>
							</div>
						</div>
					{{ Form::close()}}
				</div>
	    	</div>
    	</div>

	</div>
		{{ Session::put('SOURCE_URL', URL::full()) }}

</div>

<!--Modals -->

<div class="modal fade" id="resetTwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	{{Form::open(array('route' => 'settings.update', 'id' =>'uuid-reset')) }}
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{'Activate facility sample collection option'}}</h4>
      </div>
      <div class="modal-body">
			<div class="alert alert-danger">
				{{  Form::label('method_used', 'Method used', array('class'=>'control-label')) }}
        {{ Form::text('method_used', old('method_used'), array('class' => 'form-control', 'id' => 'method_used')) }}

        {{  Form::label('method_used', 'Method used', array('class'=>'control-label')) }}
        {{ Form::text('method_used', old('method_used'), array('class' => 'form-control', 'id' => 'method_used')) }}

        {{  Form::label('method_used', 'Method used', array('class'=>'control-label')) }}
        {{ Form::text('method_used', old('method_used'), array('class' => 'form-control', 'id' => 'method_used')) }}

        {{  Form::label('method_used', 'Method used', array('class'=>'control-label')) }}
        {{ Form::text('method_used', old('method_used'), array('class' => 'form-control', 'id' => 'method_used')) }}

        {{  Form::label('method_used', 'Method used', array('class'=>'control-label')) }}
        {{ Form::text('method_used', old('method_used'), array('class' => 'form-control', 'id' => 'method_used')) }}
			</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submit();">Activate</button>
      </div>
      {{Form::close()}}
    </div>
  </div>
</div>
<!--End of Modals -->
@stop()



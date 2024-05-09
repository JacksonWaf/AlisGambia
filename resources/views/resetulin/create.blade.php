@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
		<li><a href="{{ route('user.home')}}"></a></li>
		<li><a href="{{ route('resetulin.create')}}"></a></li>

	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading"> <span class="glyphicon glyphicon-cog">{{trans('Upload Stamps And Signature')}}</span>
		<!-- <div class="panel-btn">
			<a class="btn btn-sm btn-info" href="{{ route('unhls_patient.create') }}">
				<span class="glyphicon glyphicon-plus-sign"></span>
				{{trans('messages.new-patient')}}
			</a>
		</div> -->
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
				<div class="col-md-7">
					<ul class="list-group">
						<li class="list-group-item disabled"><strong> Upload</strong></li>
						{{ Form::open(array('route' => array('resetulin.reset'), 'id' => 'uuid-set', 'files' => true))}}

						<li class="list-group-item">
							<div class="form-group">
								{{ Form::label('image', trans('Laboratory Stamp')) }}
								{{ Form::file("image") }}
							</div>
						</li>
						<!-- <li class="list-group-item">
							<div class="form-group">
								{{ Form::label('image_signature', trans('Laboratory Signature')) }}
								{{ Form::file("image_signature") }}
							</div>
						</li> -->
						<li class="list-group-item">
							<div class="form-group actions-row">
								{{ Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
									['class' => 'btn btn-primary', 'onclick' => 'submit()']
								) }}
							</div>
						</li>
					</ul>
					{{ Form::close()}}
				</div>
				<div class="col-md-2">
					<ul class="list-group">
						<li class="list-group-item disabled"><strong> Current Stamp </strong></li>
						@if(is_null($facility->image_stamp))
						<li class="list-group-item">
						</li>
						@else
						<li class="list-group-item">
							<div class="form-group">
								<img class="img-responsive img-thumbnail user-image" src="{{ $facility->image_stamp }}" alt="{{trans('messages.image-alternative')}}"></img>
							</div>
						</li>
						@endif
					</ul>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-7">
					{{ Form::open(array('route' => array('resetulin.specimen_collection'), 'id' => 'uuid-set'))}}

					<div class="form-group">
						<div class="panel-btn"><a href="javascript:void(0)" class="btn btn-link" role="button" data-toggle="modal" data-target="#resetTwo">
								<span class="glyphicon glyphicon-plus-sign"></span><strong>{{' Click to activate specimen collection option for the facility'}}</strong></a>
						</div>
					</div>
					{{ Form::close()}}
				</div>
			</div> -->
		</div>

	</div>
	{{ Session::put('SOURCE_URL', URL::full()) }}

</div>

<!--Modals -->

<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{Form::open(array('route' => 'resetulin.reset', 'id' => 'uuid-set-2')) }}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">{{'Reset ULIN to Given Value'}}</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					{{ Form::label('incrementNum', 'Enter reset number:')}}
					{{ Form::text('incrementNum',  old('incrementNum'), array('class' => 'form-control'))}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="submit();">Set ID</button>
			</div>
			{{Form::close()}}
		</div>
	</div>
</div>

<div class="modal fade" id="resetOne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{Form::open(array('route' => 'resetulin.reset', 'id' =>'uuid-reset')) }}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">{{'Reset ULIN to 1'}}</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">
					{{Form::hidden('incrementNum', '0')}}
					{{ 'This will reset your Lab ID to 1. Are you sure you want to proceed? This Action is irreversible!'}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="submit();">Reset ID</button>
			</div>
			{{Form::close()}}
		</div>
	</div>
</div>

<div class="modal fade" id="resetTwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{Form::open(array('route' => 'resetulin.specimen_collection', 'id' =>'uuid-reset')) }}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">{{'Activate facility sample collection option'}}</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">
					{{Form::hidden('incrementNum', '2')}}
					{{ 'This will activate view for sample collection. Are you sure you want to proceed? This Action is irreversible!'}}
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
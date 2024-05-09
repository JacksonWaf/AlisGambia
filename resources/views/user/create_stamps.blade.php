@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
		<li><a href="{{ route('user.home') }}">{{ trans('messages.home') }}</a></li>
		<li><a href="{{ route('user.index') }}">{{ Lang::choice('messages.user', 1) }}</a></li>
		<li class="active">{{ trans('messages.create-user') }}</li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		{{ trans('messages.create-user') }}
	</div>
	<div class="panel-body">
		<!-- if there are creation errors, they will show here -->

		@if($errors->all())
		<div class="alert alert-danger">
			{{ HTML::ul($errors->all()) }}
		</div>
		@endif

		{{ Form::open(array('route' => array('resetulin.reset'), 'id' => 'uuid-set', 'files' => true)) }}
		<div class="form-group">
			{{ Form::label('image', trans('messages.photo')) }}
			{{ Form::file("image") }}
		</div>
		<div class="form-group actions-row">
			{{ Form::button('<span class="glyphicon glyphicon-save"></span> '.trans('messages.save'),
						['class' => 'btn btn-primary', 'onclick' => 'submit()']
					) }}
		</div>

		{{ Form::close() }}
	</div>
</div>
@stop
@extends("layout")
@section("content")
	<div>
		<ol class="breadcrumb">
		  <li><a href="{{{route('user.home')}}}">{{trans('messages.home')}}</a></li>
		  <li><a href="{{ route('bloodbank.index') }}">{{ Lang::choice('messages.blood-bank',1) }}</a></li>
		  <li class="active">{{trans('messages.blood-unit-details')}}</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
			<span class="glyphicon glyphicon-cog"></span>
			{{trans('messages.test-type-details')}}
			<div class="panel-btn">
				<a class="btn btn-sm btn-info" href="{{ URL::to("bloodbank/". $specimen->id ."/edit") }}">
					<span class="glyphicon glyphicon-edit"></span>
					{{trans('messages.edit')}}
				</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="display-details">
				<h3 class="view"><strong>{{ Lang::choice('messages.name',1) }}</strong>{{ $specimen->unit_no }} </h3>
				<p class="view-striped"><strong>{{trans('messages.description')}}</strong>
					{{ $specimen->blood_component }}</p>
				<p class="view"><strong>{{ Lang::choice('messages.test-category',1) }}</strong>
					{{ $specimen->group }}</p>
				<p class="view-striped"><strong>{{trans('messages.turnaround-time')}}</strong>
					{{ $specimen->amount }}</p>

				<p class="view"><strong>{{trans('messages.prevalence-threshold')}}</strong>
					{{ $specimen->created_by }}</p>
				<p class="view-striped"><strong>{{trans('messages.date-created')}}</strong>
					{{ $specimen->created_at }}</p>
			</div>
		</div>
	</div>
@stop

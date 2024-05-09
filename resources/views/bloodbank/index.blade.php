@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
	  <li><a href="{{{route('user.home')}}}">{{trans('messages.home')}}</a></li>
	  <li class="active">Bloodbank</li>
	</ol>
</div>
@if (Session::has('message'))
	<div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
@endif
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		List of Blood units
		<div class="panel-btn">
			<a class="btn btn-sm btn-info" href="{{ URL::to("bloodbank/create") }}" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				New entry
			</a>
		</div>
	</div>

	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="active">
        	<a  href="#1" data-toggle="tab">Available blood units({{ count($bloodunits) }})</a>
			</li>
			<li><a href="#2" data-toggle="tab">Used blood units({{ count($bloodunits_used) }})</a>
			</li>
			<li><a href="#3" data-toggle="tab">Transfered blood units({{ count($bloodunits_transfered) }})</a>
			</li>
		</ul>
		<div class="tab-content ">
			<div class="tab-pane active" id="1">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Unit Number</th>
					<th>Group</th>
					<th>Rhs</th>
					<th>Blood component</th>
					<th>Amount</th>
					<th>donation date</th>
					<th>Expiry date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($bloodunits as $key => $value)
				<tr @if(Session::has('activetesttype'))
                            {{(Session::get('activetesttype') == $value->id)?"class='info'":""}}
                        @endif
                        >
					<td><a href="{{ URL::to("bloodbank/". $value->id . "/transfer") }}" >
				<span></span>{{ $value->unit_no }}</td>
					<td>{{ $value->group }}</td>
					<td>{{ $value->rhs }}</td>
					<td>{{ $value->blood_component }}</td>
					<td>{{ $value->amount }}</td>
					<td>{{ $value->donation_date }}</td>
					<td>{{ $value->expiry_date }}</td>
					<td>
						<!-- show the testtype (uses the show method found at GET /testtype/{id} -->
						<a class="btn btn-sm btn-success" href="{{ URL::to("bloodbank/" . $value->id) }}">
							<span class="glyphicon glyphicon-eye-open"></span>
							{{trans('messages.view')}}
						</a>

						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="{{ URL::to("bloodbank/" . $value->id . "/edit") }}" >
							<span class="glyphicon glyphicon-edit"></span>
							Edit
						</a>
						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-default" href="{{ URL::to("bloodbank/" . $value->id . "/transfer") }}" >
							<span class="glyphicon glyphicon-edit"></span>
							Transfer
						</a>
						<!-- delete this testtype (uses the delete method found at GET /testtype/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='{{ URL::to("testtype/" . $value->id . "/delete") }}'>
							<span class="glyphicon glyphicon-trash"></span>
							{{trans('messages.delete')}}
						</button>

					</td>
				</tr>
			@endforeach
			</tbody>
			</table>
		  </div>
		</div>
			<div class="tab-pane" id="2">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Unit Number</th>
					<th>Group</th>
					<th>Blood component</th>
					<th>Patient</th>
					<th>Reason</th>
					<th>Amount</th>
					<th>donation date</th>
					<th>Expiry date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($bloodunits_used as $key => $value)
				<tr @if(Session::has('activetesttype'))
                            {{(Session::get('activetesttype') == $value->id)?"class='info'":""}}
                        @endif
                        >
					<td>{{ $value->unit_no }}</td>
					<td>{{ $value->group }}</td>
					<td>{{ $value->blood_component }}</td>
					<td>{{ $value->bloodTransfused->patient->name }}</td>
					<td>{{ $value->bloodTransfused->reason }}</td>
					<td>{{ $value->amount }}</td>
					<td>{{ $value->donation_date }}</td>
					<td>{{ $value->expiry_date }}</td>
					<td>
						<!-- show the testtype (uses the show method found at GET /testtype/{id} -->
						<a class="btn btn-sm btn-success" href="{{ URL::to("bloodbank/" . $value->id) }}">
							<span class="glyphicon glyphicon-eye-open"></span>
							{{trans('messages.view')}}
						</a>

						<!-- edit this testtype (uses the edit method found at GET /testtype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="{{ URL::to("bloodbank/" . $value->id . "/edit") }}" >
							<span class="glyphicon glyphicon-edit"></span>
							{{trans('messages.edit')}}
						</a>
						<!-- delete this testtype (uses the delete method found at GET /testtype/{id}/delete -->
						<button class="btn btn-sm btn-danger delete-item-link"
							data-toggle="modal" data-target=".confirm-delete-modal"
							data-id='{{ URL::to("testtype/" . $value->id . "/delete") }}'>
							<span class="glyphicon glyphicon-trash"></span>
							{{trans('messages.delete')}}
						</button>

					</td>
				</tr>
			@endforeach
			</tbody>
			</table>
		  </div>
		</div>
			<div class="tab-pane" id="3">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>Unit Number</th>
					<th>Group</th>
					<th>Blood component</th>
					<th>Amount</th>
					<th>donation date</th>
					<th>Expiry date</th>
					<th>Destination</th>
					<th>Recorded By</th>
				</tr>
			</thead>
			<tbody>
			@foreach($bloodunits_transfered as $key => $value)
				<tr @if(Session::has('activetesttype'))
                            {{(Session::get('activetesttype') == $value->id)?"class='info'":""}}
                        @endif
                        >
					<td>{{ $value->bloodBank->unit_no }}</td>
					<td>{{ $value->bloodBank->group }}</td>
					<td>{{ $value->bloodBank->blood_component }}</td>
					<td>{{ $value->bloodBank->amount }}</td>
					<td>{{ $value->bloodBank->donation_date }}</td>
					<td>{{ $value->bloodBank->expiry_date }}</td>
					<td>{{ $value->destination }}</td>
					<td>{{$value->recordedBy->name}}
					</td>
				</tr>
			@endforeach
			</tbody>
			</table>
		</div>
		 
		
	</div>
	</div>
	</div>
</div>
@stop

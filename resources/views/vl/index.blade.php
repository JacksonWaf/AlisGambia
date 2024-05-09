@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
		<li><a href="{{{route('user.home')}}}">{{trans('messages.home')}}</a></li>
		<li class="active">{{ Lang::choice('messages.patient',2) }}</li>
	</ol>
</div>

@if (Session::has('message'))
<div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
@endif

<div class="panel panel-default">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		POC / VL Patient List
		<div class="panel-btn">
			<a class="btn btn-sm btn-success" href="{{ route('viral.create') }}">
				<span class="glyphicon glyphicon-plus-sign"></span>
				Register new form
			</a>
		</div>
	</div>
	<div class="panel-body" style="overflow-x:auto;">
		<table class="table table-striped table-bordered table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>#</th>
					<th>ART No</th>
					<th>DOB</th>
					<th>Initiation Date</th>
					<th>Adherence</th>
					<th>Care Approach</th>
					<th>Indication</th>
					<th>Regimen</th>
					<th>Treatment Line</th>
					<th>Device</th>
					<th>Result</th>
					<th>Upload Status</th>
					<th>{{trans('messages.actions')}}</th>
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
					<td>{{ $patient->name }}</td>
					<td>{{ $patient->dob }}</td>
					<td class="text-center">{{$patient->initiation_date}}</td>
					<td>
					@foreach($arv_adherence as $key=>$value)
						@if($patient->arv_adherence==$key)
						{{$value}}
						@endif
					@endforeach
					</td>
					<td>
					@foreach($care_approach as $key=>$value)
						@if($patient->care_approach==$key)
						{{$value}}
						@endif
					@endforeach
					</td>
					<td>{{$patient->indication}}</td>
					<td>
					@foreach($regimens as $key=>$value)
						@if($patient->regiment==$key)
						{{$value}}
						@endif
					@endforeach
					</td>
					<td>
					@foreach($treatment_line as $key=>$value)
						@if($patient->treatment_line==$key)
						{{$value}}
						@endif
					@endforeach
					</td>
					<td>{{$patient->poc_device}}</td>
					<td>{{$patient->result}}
					<td>@if($patient->uploaded == 0)
						<b style="color: red;">No</b>
						@elseif($patient->uploaded == 1)
						<b style="color: green;">YES</b>
						@else
						<b style="color: blue;">???</b>
						@endif
					</td>
					<td>

						<a class="btn btn-sm btn-warning" href="{{ route('viral.edit', array($patient->id)) }}"
							<span class="glyphicon glyphicon-edit"></span>
							Update
						</a>
						
					</td>
				</tr>
				<?php $row++; ?>
				@endforeach
			</tbody>
		</table>
				
				<div class="col-md-7">
					{{ Form::open(array('route' => array('viral.reupload'), 'id' => 'uuid-set'))}}

						<div class="form-group">
							<div class="panel-btn"><a href="javascript:void(0)" class="btn btn-link" role="button" data-toggle="modal" data-target="#resetTwo">
								<span class="glyphicon glyphicon-plus-sign"></span><strong>{{' Click to undo all uploads'}}</strong></a>
							</div>
						</div>
					{{ Form::close()}}
				</div>

	</div>
</div>
<div class="modal fade" id="resetTwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	{{Form::open(array('route' => 'viral.reupload', 'id' =>'uuid-reset')) }}
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{'Undo uploads'}}</h4>
      </div>
      <div class="modal-body">
			<div class="alert alert-danger">
				{{Form::hidden('reload', '1')}}
				{{ 'This will undo all uploads for re-edit and upload!'}}
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
<script>
$(document).ready(function(){
        setInterval(function() {
            $("#data-number").load("/poc #data-number");
        }, 3000);
    });
</script>
@stop

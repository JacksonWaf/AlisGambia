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

			<div style="text-align: right;" id="vl-number">
                <a href="#">
                <span class="ion-planet">
                    <font size="3"> Viral load Pending upload<span class="badge badge-danger"> {{App\Http\Controllers\VlController::poc_vl_upload()}}</span></font>
                </span>
                </a>     
        </div>
        <div style="text-align: right;" id="hpv-number">
                <a href="#">
                <span class="ion-planet">
                    <font size="3"> HPV upload<span class="badge badge-danger"> {{App\Models\UnhlsTest::upload()}}</span></font>
                </span>
                </a>
        </div>
        <div style="text-align: right;" id="data-number">
				<a href="#">
                <span class="ion-planet">
                    <font size="3">  Pending upload<span class="badge badge-danger">{{App\Models\POC::poc_upload()}}</span></font>
                </span>
                </a>
			</div>

			<div class="panel panel-default">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		Point of care List
	</div>

	<div class="panel-body" style="overflow-x:auto;">
		<ul class="nav nav-tabs">
			<li class="active">
        	<a  href="#1" data-toggle="tab">POC EID ({{count($eid_records)}})</a>
			</li>
			<li><a href="#2" data-toggle="tab">HPV ({{count($hpv_records)}})</a>
			</li>
			<li><a href="#3" data-toggle="tab">VIRAL LOAD ({{count($vl_records)}})</a>
			</li>
		</ul>
		<div class="tab-content ">
			<div class="tab-pane active" id="1">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
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
					<th>{{trans('messages.actions')}}</th>
				</tr>
			</thead>
			<tbody>
			<?php $row=1; ?>
				@foreach($eid_records as $key => $patient)
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


					<td>
					</td>
				</tr>
				<?php $row++; ?>
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
				@foreach($hpv_records as $key => $patient)
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
			<div class="tab-pane" id="3">
          <div class="panel-body" style="overflow-x:auto;">
		    <table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>#</th>
					<th>Sample ID</th>
					<th>Name</th>
					<th>Gender</th>
					<th>DOB</th>
					<th>Pregnant mother</th>
					<th>Breastfeeding</th>
					<th>Test Result</th>
					<th>Test Date</th>
				</tr>
			</thead>
			<tbody>
			<?php $row=1; ?>
				@foreach($vl_records as $key => $patient)
				<tr  @if(Session::has('activepatient'))
				{{(Session::get('activepatient') == $patient->id)?"class='info'":""}}
				@endif

				<tr>
					<td class="text-center">{{ $row }}</td>
					<td>{{ $patient->ulin }}</td>
					<td>{{ $patient->name }}</td>
					<td>{{ $patient->gender }}</td>
					<td class="text-center">{{ $patient->dob}}</td>
					<td>{{ $patient->mother_pregnant}}</td>
					<td>{{ $patient->mother_breastfeeding}}</td>
					<td>{{ $patient->result}}</td>
					<td>{{ $patient->test_date}}</td>
				</tr>
				<?php $row++; ?>
				@endforeach
			</tbody>
			</table>
		</div>
		 
		
	</div>
	</div>
	</div>
</div>
			
{{ Form::close() }}
<script>
// $(document).ready(function(){
//         setInterval(function() {
//             $("#vl-number").load("/unhls_test #vl-number");
//             $("#hpv-number").load("/unhls_test #hpv-number");
//             $("#data-number").load("/poc #data-number");
//         }, 3000);
//     });
</script>
@stop	
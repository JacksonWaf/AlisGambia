<style type="text/css">
	TD,
	TH {
		font-size: 8pt;
		font-variant: normal;
		font-family: DejaVu Serif;
	}

	@page {
		margin: 100px 25px;
		margin-left: 40px;
		margin-top: 180px;
		margin-right: 25px;
	}

	header {
		position: fixed;
		top: -150px;
		left: 0px;
		right: 0px;
		height: 150px;
	}

	footer {
		position: fixed;
		bottom: -60px;
		left: 0px;
		right: 0px;
		text-align: right;
		height: 15px;
		page-break-after: always;
	}

	.pagenum:before {
		font-size: 12px;
		font-style: italic;
		content: "Page " counter(page);
	}
</style>

<body>
	<header>
		<table style="text-align:center;" border="0" width="100%">
			<tr>
				<td colspan="12" style="text-align:center;">
					{{ @HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px')) }}
				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					{{ strtoupper(Auth::user()->facility->name) }}
				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					{{config('kblis.address-info')}}
				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					{{config('kblis.telephone-number')}}
				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					{{config('kblis.email-address')}}
				</td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:center;">
					@if(isset($tests))
					@if(!empty($tests->first()->approved_by))
					<b> {{config('kblis.request-form')}}</b>
					@else
					<b> {{config('kblis.request-form')}} </b>
					@endif
					@endif
				</td>
			</tr>
		</table>
	</header>
	<br>
	<br>
	<table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
		<tr>
			<td width="20%"><b>Patient ID</b></td>
			<td width="30%">{{ $patient->ulin}}</td>
			<td width="20%"><b>{{ trans('messages.report-date')}}</b></td>
			<td width="30%">{{ date('d-m-Y') }}</td>
		</tr>
		<tr>
			<td width="20%"><b>Patient Name</b></td>
			<td width="30%">{{ $patient->name }}</td>
			<td width="20%"><b>{{ trans('messages.gender')}} & {{ trans('messages.age')}}</b></td>
			<td width="30%">{{ $patient->getGender(false) }} | {{ $patient->getAge()}}</td>
		</tr>
		<tr>
			<td><b>{{ trans('messages.patient-contact')}}</b></td>
			<td>{{ $patient->phone_number}}</td>
			<td><b>Facility/Dept</b></td>
			<td>@if(isset($tests))
				@if(!is_null($tests->first()))
				{{ is_null($tests->first()->visit->ward) ? '':$tests->first()->visit->ward->name }}
				@else
				{{ is_null($tests->first()->visit->facility) ? '':$tests->first()->visit->facility->name }}
				@endif
				@endif
			</td>
		</tr>
		<tr>
			<td width="20%"><b>Requesting Officer</b></td>
			<td width="30%">@if(isset($tests))
				@if(!empty($tests->first()))
				@if(!empty($tests->first()->requested_by))
				{{$tests->first()->clinician->name}}
				@elseif(!empty($tests->first()->clinician_id))
				{{$tests->first()->clinicians->name}}
				@endif
				@endif
				@endif
			</td>
			<td width="20%"><b>Officer's Contact</b></td>
			<td width="30%">@if(isset($tests))
				@if(!empty($tests->first()))
				@if(!empty($tests->first()->therapy->contact))
				{{$tests->first()->therapy->contact}}
				@elseif(!empty($tests->first()->clinician_id))
				{{$tests->first()->clinicians->phone}}
				@endif
				@endif
				@endif
			</td>
		</tr>
	</table>
	<br>
	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%; font-family: 'Courier New',Courier;">
		<tr align="left">
			<td width="15%"><strong>Clinical Information</strong>:</td>
			<td width="45%">@if(isset($tests))
				@if(!empty($tests->first()))
				@if(!empty($tests->first()->therapy->clinical_notes))
				{{$tests->first()->therapy->clinical_notes}}
				@endif
				@endif
				@endif
			</td>

		</tr>
		<br />
	</table>
	<br>
	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<thead>
			<tr>
				<td colspan="2"><b>Examination Requested</b></td>
			</tr>
			<tr align="left">
				<th width="20%"><strong>Tests</strong></th>
				<th width="20%"><strong>Sample Type</strong></th>
				<th width="20%"><strong>{{ Lang::choice('messages.test-category', 1)}}</strong></th>
				<th width="20%"><strong>Date Collected</strong></th>
				<th width="20%"><strong>Date Received</strong></th>

			</tr>
		</thead>
		<tbody>
			@if(isset($tests))
			@forelse($tests as $test)
			<tr>
				<td width="20%">{{ isset($test->testType->name)?$test->testType->name:'' }}</td>
				<td width="20%">{{ isset($test->specimen->id)? $test->specimen->specimenType->name : ''}}</td>
				<td width="20%">{{ isset($test->testType->id)?$test->testType->testCategory->name:'' }}</td>

				@if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED)

				<td width="20%">{{trans('messages.specimen-not-collected')}}</td>
				<td width="20%">not received</td>
				@elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED)
				<td width="20%">{{ ($test->specimen->time_collected)?date_format(date_create($test->specimen->time_collected), 'd-M-Y H:i:s'):'' }}</td>
				<td width="20%">{{ ($test->time_started)?date_format(date_create($test->time_started), 'd-M-Y H:i:s'):'' }}</td>

				@elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED)
				<td width="20%">{{trans('messages.specimen-not-collected')}}</td>
				<td width="20%">{{isset($test->specimen->time_rejected)?date_format(date_create($test->specimen->time_rejected), 'd-M-Y H:i:s'):''}}</td>

				@endif

			</tr>
			@empty
			<tr>
				<td colspan="5">{{trans("messages.no-records-found")}}</td>
			</tr>
			@endforelse
			@endif
		</tbody>

	</table>

	<br>
	<br>

	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		@if(isset($tests))

		<tr>
			<td width="30%"><b>Type of Request</b></td>
			<td width="30%">
				@if($tests->first()->urgency_id == 1)
				<b><i>Emergency</i></b>
				@else
				<span><i>Normal</i></span>
				@endif
			</td>
			<!-- <td>
			<span>Mob:: </span>
		</td> -->
		</tr>
		@endif
	</table>

	<br>
	<br>
	<!-- <table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
	<thead>
		<tr>
		<td colspan="2"><b>Test Requested By</b></td>
		</tr>
	    <tr align="left">
	            <th width="30%"><strong>Name</strong></th>
	            <th width="30%"><strong>Cadre</strong></th>
	            <th width="30%"><strong>Mob:</strong></th>

	        </tr>
	</thead>
	<tbody>
	    @if(isset($tests))
	        @forelse($tests as $test)
	                <tr>
	                    <td width="30%">@if(isset($tests))
                @if(!empty($tests->first()->requested_by))
                    {{$tests->first()->clinician->name}}

                @elseif($tests->first()->therapy->clinician_id !== 0)
                    {{''}}
                @else
                    N/A
                    @endif
             @endif</td>
	                    <td width="30%"></td>
	                    <td width="30%"></td>


	                </tr>
	        @empty
	            <tr>
	                <td colspan="5">{{trans("messages.no-records-found")}}</td>
	            </tr>
	        @endforelse
	    @endif
	</tbody>

</table>
 -->
	<br>

	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<thead>
			<tr>
				<td colspan="2"><b>Sample Collected By</b></td>
			</tr>
			<tr align="left">
				<th width="20%"><strong>Name</strong></th>
				<th width="20%"><strong>Cadre</strong></th>
				<th width="20%"><strong>{{ Lang::choice('messages.test-category', 1)}}</strong></th>
				<th width="20%"><strong>Date Collected</strong></th>
				<th width="20%"><strong>Time Collected</strong></th>

			</tr>
		</thead>
		<tbody>
			@if(isset($tests))
			<!--  @forelse($tests as $test) -->
			<tr>
				<td width="20%">{{ isset($test->specimen->accepted_by)?$test->specimen->acceptedBy->name :'' }}</td>
				<td width="20%">{{ isset($test->specimen->accepted_by)?$test->specimen->acceptedBy->designation :'' }}</td>
				<td width="20%">{{ isset($test->testType->id)?$test->testType->testCategory->name:'' }}</td>

				@if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED)

				<td width="20%">{{trans('messages.specimen-not-collected')}}</td>
				<td width="20%">not received</td>
				@elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED)
				<td width="20%">{{ ($test->specimen->time_collected)?date_format(date_create($test->specimen->time_collected), 'd-M-Y'):'' }}</td>
				<td width="20%">{{isset($test->specimen->time_collected)?date_format(date_create($test->specimen->time_collected), 'H:i:s'): ''}}</td>

				@elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED)
				<td width="20%">{{trans('messages.specimen-not-collected')}}</td>
				<td width="20%">{{isset($test->specimen->time_rejected)?date_format(date_create($test->specimen->time_rejected), 'd-M-Y H:i:s'):''}}</td>

				@endif

			</tr>
			<!-- @empty
	            <tr>
	                <td colspan="5">{{trans("messages.no-records-found")}}</td>
	            </tr>
	        @endforelse -->
			@endif
		</tbody>

	</table>

	<br>

	<table style="border-bottom: 1px solid #cecfd5; font-size:8px; width: 100%;
 font-family: 'Courier New',Courier;">
		<thead>
			<tr>
				<td colspan="2"><b>Sample Received By</b></td>
			</tr>
			<tr align="left">
				<th width="20%"><strong>Lab Section</strong></th>
				<th width="15%"><strong>Date Received</strong></th>
				<th width="15%"><strong>Time Received</strong></th>
				<th width="20%"><strong>Sample Suitability</strong></th>
				<th width="20%"><strong>Name</strong></th>
				<th width="10%"><strong>Number</strong></th>

			</tr>
		</thead>
		<tbody>
			@if(isset($tests))
			@forelse($tests as $test)
			<tr>
				<td width="20%">{{ isset($test->testType->id)?$test->testType->testCategory->name:'' }}</td>

				@if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED)

				<td width="15%">{{trans('messages.specimen-not-collected')}}</td>
				<td width="15%">not received</td>
				@elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED)
				<td width="15%">{{ ($test->time_started)?date_format(date_create($test->time_started), 'd-M-Y'):'' }}</td>
				<td width="15%">{{ ($test->time_started)?date_format(date_create($test->time_started), 'H:i:s'):'' }}</td>

				@elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED)
				<td width="15%">{{trans('messages.specimen-not-collected')}}</td>
				<td width="15%">{{isset($test->specimen->time_rejected)?date_format(date_create($test->specimen->time_rejected), 'd-M-Y H:i:s'):''}}</td>

				@endif
				<td width="20%">
					@if($test->test_status_id == 6)
					Rejected
					@else
					{{trans('messages.'.$test->specimen->specimenStatus->name) }}
					@endif
				</td>
				<td width="20%">@if($test->tested_by !=0) {{ isset($test->tested_by)?$test->testedBy->name :'' }} @endif</td>
				<td width="10%"></td>

			</tr>
			@empty
			<tr>
				<td colspan="5">{{trans("messages.no-records-found")}}</td>
			</tr>
			@endforelse
			@endif
		</tbody>

	</table>

	<br>

	@forelse($tests as $test)
	@if( $test->testStatus->name == 'approved' || $test->testStatus->name == 'verified')
	<table>
		<tr>
			<td width="15%" style="display:none;">{{ $test->testType->name }}</td>
			<td width="85%">

			</td>


		</tr>

	</table>

	@endif
	@empty
	<table>
		<tr>
			<td colspan="6">{{trans("messages.no-records-found")}}</td>
		</tr>
	</table>
	@endforelse

	<script type="text/php">
		if (isset($pdf)) {
        $x = 250;
        $y = 820;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $texts = "{{config('kblis.certificate-info')}}";
        $font = null;
        $size = 8;
        $size2 = 6;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        $pdf->page_text(250, 800, $texts, $font, $size2, $color, $word_space, $char_space, $angle);
    }
</script>
</body>

</html>
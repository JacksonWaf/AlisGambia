<html>

<head>
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
</head>

<body>
  <header>
    <table style="text-align:center;" border="0" width="100%">
      <tr>
        <td colspan="12" style="text-align:center;">
          <!-- {{ @HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px')) }} -->
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
          <b> {{config('kblis.report-name')}}</b>
          @else
          <b> {{config('kblis.report-name')}} </b>
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
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <thead>
      <tr align="left">
        <th width="20%"><strong>Sample Type</strong></th>
        <th width="20%"><strong>Date Collected</strong></th>

        <th width="20%"><strong>Date Received</strong></th>

        <th width="20%"><strong>{{ Lang::choice('messages.test-category', 1)}}</strong></th>
        <th width="20%"><strong>Tests Requested</strong></th>
      </tr>
    </thead>
    <tbody>
      @if(isset($tests))
      @forelse($tests as $test)
      <tr>
        <td>{{getSpecimenName($test->specimen->id)}}</td>

        @if($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::NOT_COLLECTED)

        <td>{{trans('messages.specimen-not-collected')}}</td>
        <td>not received</td>
        @elseif($test->specimen->specimen_status_id == App\Models\UnhlsSpecimen::ACCEPTED)
        <td>{{ ($test->specimen->time_collected)?$test->specimen->time_collected:'' }}</td>
        <td>{{isset($test->specimen->time_accepted)?$test->specimen->time_accepted : ''}}</td>

        @elseif($test->test_status_id == App\Models\UnhlsTest::REJECTED)
        <td>{{trans('messages.specimen-not-collected')}}</td>
        <td>{{isset($test->specimen->time_rejected)?$test->specimen->time_rejected:''}}</td>

        @endif

        <td>{{getLabSection($test->testType->id)}}</td>
        <td>{{ isset($test->testType->name)?$test->testType->name:'' }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="5">{{trans("messages.no-records-found")}}</td>
      </tr>
      @endforelse
      @endif
    </tbody>
  </table>


  <table width="100%">
    <thead>
      <tr>
        <th width="20%"><strong>Test Status :</strong></th>
        <td width="30%"><u>{{trans('messages.specimen-rejected')}}</u></td>
      </tr>
    </thead>
  </table>

  <br>
  <br>
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <tr>


      <td colspan="5" align="left"><b>REJECTION REASONS</b></td>

    </tr>
  </table>
  @forelse($tests as $test)
  @if($test->specimenIsRejected())
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <tr>
      <td>
        <table style="padding: 1px;">

          <tr>
            <td width="100%">
              <ul>
                @foreach(getRejectionReasons($test->id) as $reason)
                <li>{{ $reason->reason }}</li>
                @endforeach
              </ul>
            </td>

          </tr>
        </table>
      </td>
    </tr>
  </table>
  <table border="0" width="100%" ; style="border-bottom: 1px solid #cecfd5">
    <tr>
      <td><b>Rejected By:</b></td>
      <td colspan="3">
        {{$test->analyticSpecimenRejections->rejectedBy->name}}
      </td>
    </tr>
    <tr>
      <td>
        <b>Rejected Date & Time</b>:
      <td colspan="3">{{ $test->analyticSpecimenRejections->time_rejected }}
      </td>
      </td>
    </tr>
  </table>


  @elseif($test->testType->isCulture())
  <!-- Culture and Sensitivity analysis -->
  @if(count($test->isolated_organisms)>0)<!-- if there are any isolated organisms -->
  <table style="border-bottom: 1px solid #cecfd5; font-size:9px;font-family: 'Courier New',Courier;">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td colspan="6">Antimicrobial Susceptibility Testing(AST)</td>
    </tr>
    <tr>
      <th><b>Organism(s)</b></th>
      <th><b>Antibiotic(s)</b></th>
      <th><b>Result(s)</b></th>
    </tr>
  </table>
  @foreach($test->isolated_organisms as $isolated_organism)
  <table style="border-bottom: 1px solid #cecfd5;">
    <tr>
      <td rowspan="{{$isolated_organism->drug_susceptibilities->count()}}" class="organism"><i><b>{{$isolated_organism->organism->name}}</b></i></td>
      <?php $i = 1; ?>
      @if($isolated_organism->drug_susceptibilities->count() == 0)
    </tr>
    @else
    @foreach($isolated_organism->drug_susceptibilities as $drug_susceptibility)
    @if ($i > 1)
    <tr>
      @endif
      <?php $i++; ?>
      <td style="font-size:10px;" class="antibiotic">{{$drug_susceptibility->drug->name}}</td>
      <td style="font-size:10px;" class="result">{{$drug_susceptibility->drug_susceptibility_measure->symbol}}</td>
    </tr>
    @endforeach
    @endif

  </table>
  @endforeach

  <table style="border-bottom: 1px solid #cecfd5; font-size:10px;font-family: 'Courier New',Courier;">
    <tr>
      <td><b>Comment(s)</b></td>
      <td colspan="2">
        {{$test->interpretation}}
      </td>
    </tr>
    <tr>
      <td width="50%" style="font-size:9px">
        <b>Results Entry Date</b>:{{ $test->time_completed }}
      </td>
    </tr>
  </table>

  <table style="border-bottom: 1px solid #cecfd5; font-size:10px;font-family: 'Courier New',Courier;">
    <tr>
      <td colspan="2"><b>Analysis Performed by:</b></td>
      <td colspan="4">{{ $test->testedBy->name }}</td>
      <!-- <td><b>Verified by:</b></td>
              <td>{{ $test->isVerified()?$test->verifiedBy->name:'Pending' }}</td> -->
    </tr>
  </table>

  <table style="border-bottom: 1px solid #cecfd5; font-size:10px;font-family: Bookman Old Style;">
    <tr>
      <td colspan="2"><b>Results Guide</b></td>
      <td colspan="4"><b>S-Sensitive | R-Resistant | I-Intermediate</b></td>
    </tr>
  </table>
  @else<!-- if there are no isolated organisms -->
  @if($test->culture_observation)<!-- if there are comments -->
  <table>
    <tr>
      <td>{{ $test->culture_observation->observation }}</td>
    </tr>
  </table>
  @endif<!--./ if there are comments -->
  @endif<!--./ if there are no isolated organisms -->
  @endif
  @empty
  <table style="border-bottom: 1px solid #cecfd5;">
    <tr>
      <td colspan="6">{{trans("messages.no-records-found")}}</td>
    </tr>
  </table>
  @endforelse

  <hr>

  <table>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td>
        <strong>Approved By :

          @if(isset($tests))
          @if(!empty($tests->first()))
          @if(!empty($tests->first()->isApproved()))

          {{$tests->first()->approvedBy->name}}
          @else

          @endif

          @endif
          @endif
        </strong>
      </td>
    </tr>
    <!-- <tr><td><u><strong></strong></u></td></tr> -->
  </table>

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
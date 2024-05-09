<html>

<head>
  <style type="text/css">
    TD {
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
      top: -170px;
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
  <?php
  $testedBy = '';
  ?>
</head>

<body>
  <header>
    <table style="text-align:center;" border="0" width="100%">
      <tr>
        <td colspan="12" style="text-align:center;">
          <img src="i/Coat_of_arms_of_The_Gambia.png" height="90" ; width="75" ;>
          <!-- {{ @HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '90px')) }} -->
        </td>
      </tr>
      <tr>
        <td colspan="12" style="text-align:center;">
          {{ $facilityname }}
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
      <!--       <tr>
        <td colspan="12" style="text-align:center;">
          {{config('kblis.email-address')}}
        </td>
      </tr>   -->
      <tr>
        <td colspan="12" style="text-align:center;">
          @if(isset($tests))
          @if(!empty($tests->first()->revised_by))
          <b>{{trans('REVISED REPORT')}}</b>
          @elseif(!empty($tests->first()->approved_by))
          <b> {{config('kblis.final-report-name')}}</b>
          @else
          <b> {{config('kblis.interim-report-name')}} </b>
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
      <td width="20%"><b>Patient ID/ULIN</b></td>
      <td width="30%">{{!is_null($patient->patient_number) ? $patient->patient_number : ''}} / {{$patient->ulin}}</td>
      <td width="20%"><b>{{ trans('messages.report-date')}}</b></td>
      <td width="30%">{{ date('d-m-Y') }}</td>
    </tr>
    <tr>
      <td width="20%"><b>Patient Name</b></td>
      <td width="30%">{{ $patient->name }}</td>
      <td width="20%"><b>{{ trans('messages.gender')}} & DOB/{{ trans('messages.age')}}</b></td>
      <td width="30%">{{ $patient->getGender(false) }} | {{ $patient->dob}}/({{ $patient->getAge()}})</td>
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
  <table style="border-bottom: 1px solid #cecfd5; font-size:9px; font-family: Bookman Old Style;" width="100%">
    <thead>
      <tr>
        <td width="20%"><strong>Sample Type</strong></td>
        <td width="20%"><strong>Date Collected</strong></td>
        <td width="20%"><strong>Date Received</strong></td>
        <td width="20%"><strong>{{ Lang::choice('messages.test-category', 1)}}</strong></td>
        <td width="20%"><strong>Tests Requested</strong></td>
      </tr>
    </thead>
    <tbody>
      @if(isset($tests))
      @forelse($tests as $test)
      <tr>
        <td>{{ isset($test->specimen->specimen_type_id)?$test->specimen->specimenType->name:'' }}</td>

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

        <td>{{ isset($test->testType->test_category_id)?$test->testType->testCategory->name:'' }}</td>
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
  <table style="border-bottom: 1px solid #cecfd5; font-size:7px;font-family: Bookman Old Style;" width="100%">
    <tr>
      <td colspan="5" align="center"><b>TEST RESULTS</b></td>
    </tr>
  </table>
  @forelse($tests as $test)
  @if(!$test->testType->isCulture() && ( $test->testStatus->name == 'approved' || $test->testStatus->name == 'verified'))
  <table id="results_content_id" style="border-bottom: 1px solid #cecfd5; font-size:9px;font-family: Bookman Old Style;" width="100%">
    <tr>
      <td>
        <table style="padding: 1px;" id="{{generateSlug($test->testType->name)}}" width="100%">
          <thead>
            <tr>
              <td width="18%"><b>Test</b></td>
              <td width="20%"><b>Parameter</b></td>
              <td width="27%"><b>Result</b></td>
              <td width="10%"><b>Flag</b></td> <!-- Diagnostic Flag column for results -->
              <td width="16%"><b>Reference </b></td>
              <td width="9%"><b>SI units</b></td>
            </tr>
          </thead>
          <tbody>
            <?php $counter = 0 ?>
            @foreach($test->testResults as $result)
            <?php $counter++ ?>
            <!-- show only parameters with values -->
            @if($result->result != '')
            <tr>
              <?php if ($counter == 1) { ?>
                <td rowspan="{{count($test->testResults)}}">{{ $test->testType->name }}</td>
              <?php } ?>
              <td>
                @if($test->testType->measures->count() > 0)
                {{ App\Models\Measure::find($result->measure_id)->name }}:
                @endif
              </td>
              @if($result->free_text_interpretation == NULL)
              <td>
                @if($result->revised_result!=null)
                {{ htmlspecialchars($result->revised_result)}}
                @else
                {{ htmlspecialchars($result->result)}}
                @endif
              </td>
              @else
              <td>
                {{ htmlspecialchars($result->free_text_interpretation)}} {{ htmlspecialchars($result->result)}}
              </td>
              @endif
              <td>
                @if(!is_null(App\Models\Measure::getRange($test->visit->patient, $result->measure_id)))
                {{App\Models\Measure::measureFlag($test->visit->patient, $result->measure_id, $result->result) }}
                @endif
              </td><!-- Diagnostic Flag column for results-->
              <td>
                {{ App\Models\Measure::getRange($test->visit->patient, $result->measure_id) }}
              </td>
              <td>
                {{ App\Models\Measure::find($result->measure_id)->unit }}
              </td>
            </tr>
            @endif
            @endforeach
            <!--  Test results ends here  -->
            @if($test->testType->name == 'HIV')
            <tr>
              <td><b>Interpretation:</b></td>
              <td>{{$test->interpreteHIVResults()}}</td>
            </tr>
            @else
            @if($test->getEquipement == '')
            <tr>
              <td></td>
            </tr>
            @else
            <tr>
              <td>
                <b>Equipment Used</b>:{{ $test->getEquipement->name }}
              </td>
            </tr>
            @endif

            @endif
          </tbody>
        </table>
        <table width="100%">
          <tr>
            <td style="font-family: 'Courier New',Courier; font-size:11px;"><b>Comment (s) :</b>
              @if($test->interpretation == '' && $test->testType->description == '')
              {{ 'N/A' }}
              @elseif( !$test->interpretation == '' && $test->testType->description == '')
              {{ $test->interpretation }}
              @elseif( $test->interpretation == '' && !$test->testType->description == '')
              {{ htmlspecialchars($test->testType->description) }}
              @endif
              <!-- {{ $test->testType->description == '' ? 'N/A' : htmlspecialchars($test->testType->description) }} -->

            </td>
          </tr>
          <tr>
            <td width="100%">
              <b>Equipment/Technique used:</b>
              @if(is_null($test->instrument_id) || $test->instrument_id == '0')
              {{$test->method_used}}
              @elseif(is_null($test->method_used))
              {{$test->equipment->name}}
              @else
              @endif
            </td>

          </tr>
        </table>
        <table width="100%">
          <tr>
            <td width="20%">
              <b>{{trans('messages.tested-by')}}</b>:
            </td>
            <td width="30%">
              {{ $test->testedBy->name}}
            </td>
            @if($test->time_revised!=null)
            <td width="20%">
              <b>Results Revision Date</b>:
            </td>
            <td width="30%">
              {{ $test->time_revised }}
            </td>
            @else
            <td width="20%">
              <b>Results Entry Date</b>:
            </td>
            <td width="30%">
              {{ $test->time_completed }}
            </td>
            @endif
          </tr>
          <tr>
            <td width="15%"><b>Reviewed by </b>:</td>
            <td width="15%"> {{$test->verifiedBy->name}} </td>
            <td width="35%"> <b>Date Reviewed</b>:</td>
            <td width="35%"> {{$test->time_verified}}</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  @elseif($test->testType->isCulture())
  <!-- Culture and Sensitivity analysis -->
  @if(count($test->isolatedOrganisms)>0)<!-- if there are any isolated organisms -->
  <table style="border-bottom: 1px solid #cecfd5;" border="0" width="100%">
    <tr>
      <td colspan="3">Culture and Sensitivity Results</td>
    </tr>
    <tr>
      <td style="font-size:.70em; margin-top:40px;" width="40%"><b>Organism(s) Isolated</b></td>
      <td style="font-size:.70em; margin-top:40px;" width="30%"><b>Antibiotic(s)</b></td>
      <td style="font-size:.70em; margin-top:40px;" width="30%"><b>Result(s)</b></td>
    </tr>
  </table>
  @foreach($test->isolatedOrganisms as $isolated_organism)
  <table style="border-bottom: 1px solid #cecfd5;" width="100%">
    <tr>
      <td rowspan="{{$isolated_organism->drugSusceptibilities->count()}}" class="organism" width="40%"><i><b>{{$isolated_organism->organism->name}}</i></b></td>
      <?php $i = 1; ?>
      @if($isolated_organism->drugSusceptibilities->count() == 0)
    </tr>
    @else
    @foreach($isolated_organism->drugSusceptibilities as $drug_susceptibility)
    @if ($i > 1)
    <tr>
      @endif
      <?php $i++; ?>
      <td class="antibiotic" width="30%">{{$drug_susceptibility->drug->name}}</td>
      <td class="result" width="30%">{{$drug_susceptibility->drugSusceptibilityMeasure->symbol }}</td>
    </tr>
    @endforeach
    @endif
  </table>
  @endforeach

  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td width="20%">Comment(s)</td>
      <td style="font-family: 'Courier New',Courier; font-size:11px;" width="80%">
        {{$test->interpretation}}
      </td>
    </tr>
  </table>

  </hr>
  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td colspan="2">Result Guide</td>
      <td colspan="4" style="text-align:left;">S-Sensitive | R-Resistant | I-Intermediate</td>
    </tr>
  </table>
  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td width="20%"><b>Analysis Performed by:</b></td>
      <td width="60%">{{ isset($test->tested_by)?$test->testedBy->name:'' }}</td>
    </tr>
  </table>

  @else<!-- if there are no isolated organisms -->
  @if($test->culture_observation)<!-- if there are comments -->
  <table style="width: 100%;">
    <tr>
      <td>{{ $test->culture_observation->observation }}</td>
    </tr>
  </table>
  @endif<!--./ if there are comments -->
  @endif<!--./ if there are no isolated organisms -->
  @endif
  @empty
  <table style="border-bottom: 1px solid #cecfd5; width: 100%;">
    <tr>
      <td colspan="6">{{trans("messages.no-records-found")}}</td>
    </tr>
  </table>
  @endforelse

  <table style="border-bottom: 0px solid #cecfd5; font-size:8px;font-family: 'Courier New',Courier;">
    <tr>
      <td></td>
    </tr>
    <tr>
      <td>
        <strong>Approved By : {{isset($tests->first()->approvedBy->name)? $tests->first()->approvedBy->name:''}}</strong>

      </td>
    </tr>
    <!-- <tr><td><u><strong></strong></u></td></tr> -->
  </table>
  <!-- <table style="width: 100%;">
    <tr>
      <td style="text-align: right;">
        <img src="{{ public_path('/i/lab_23.png') }}" class="manager" style="margin-top:10px; padding-right: 20px;">
        <div class="stamp-date" style="margin-top:-100px; padding-right: 150px;">Date</div>
        <span class='date-released' style="font-size:8px;color:#000; font-weight: lighter; ">DATE RELEASED</span>
      </td>
    </tr>
  </table> -->
  <script type="text/php">
    if (isset($pdf)) {
        $x = 250;
        $y = 820;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $texts = "{{config('kblis.certificate-info')}}";
        $pagelabel = "PRINTED BY {{!is_null(Auth::user()) ? Auth::user()->name : ''}} {{now()}}";
        $printdate = "{{now()}}";
        $font = null;
        $size = 8;
        $size2 = 6;
        $color = array(0,0,0);
        $color2 = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        $pdf->page_text(250, 800, $texts, $font, $size2, $color, $word_space, $char_space, $angle);
        $pdf->page_text(10, 820, $pagelabel, $font, $size2, $color2, $word_space, $char_space, $angle);

    }
</script>
</body>

</html>
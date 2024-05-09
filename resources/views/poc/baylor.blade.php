<html>
<head>
  <style type="text/css">
  TD{font-size: 8pt; font-variant: normal; font-family: DejaVu Serif;}
     @page { margin: 100px 25px; margin-left: 40px; margin-top: 180px;margin-right: 25px;}
    header { position: fixed; top: -170px; left: 0px; right: 0px; height: 150px;}
    footer { position: fixed; bottom: -60px; left: 0px; right: 0px; text-align: right; height: 15px; page-break-after: always; }
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
          {{ @HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '100%'))}}
        </td>
      </tr>   
      <tr>
        <td colspan="12" style="text-align:center;">
          @if(isset($patient))
            <b>  {{config('kblis.final-report-name')}}</b>
          @endif
        </td>
      </tr>                   
    </table>
  </header>
  <br>
  <br>
  <table  border="0" width="100%"; style="border-bottom: 1px solid #cecfd5">
    <tr>
      <td width="20%"><b>Patient ID</b></td>
      <td width="30%">{{ isset($patient->exp_no) ? $patient->exp_no : ''}}</td>
      <td width="20%"><b>{{ trans('messages.report-date')}}</b></td>
      <td width="30%">{{ date('d-m-Y') }}</td>
    </tr>
    <tr>
      <td width="20%"><b>Patient Name</b></td>
      <td width="30%">{{ $patient->infant_name }}</td>
      <td width="20%"><b>{{ trans('messages.gender')}} & {{ trans('messages.age')}}</b></td>
      <td width="30%">{{ $patient->gender }} | {{ $patient->age}} months</td>
    </tr>
    <tr>
      <td><b>{{ trans('messages.patient-contact')}}</b></td>
      <td>{{ $patient->caretaker_number}}</td>
      <td><b>Facility/Dept</b></td>
      <td>{{ $patient->entry_point}}
      </td>
    </tr>
    <!-- <tr>
      <td width="20%"><b>Requesting Officer</b></td>
      <td width="30%">@if(isset($patient))
                @if(!empty($patient->first()))
                    {{ $patient->created_by}}
                  @endif
              @endif
      </td>
      <td width="20%"><b>Officer's Contact</b></td>
      <td width="30%">
      </td>
    </tr> -->
  </table>
  <br>
  <table style="border-bottom: 1px solid #cecfd5; font-size:9px; font-family: Bookman Old Style;"  width="100%">
    <thead>
      <tr>
        <td width="25%"><strong>Sample Type</strong></td>
        <td width="25%"><strong>Date Collected</strong></td>              
        <td width="25%"><strong>Date Received</strong></td>             
        <td width="25%"><strong>Tests Requested</strong></td>
      </tr>
    </thead>
    <tbody>
            <tr>
                <td>Whole blood</td>
                <td >{{isset($tests->collection_date) ? $tests->collection_date :'' }}</td>
                <td >{{isset($tests->collection_date) ? $tests->collection_date :''}}</td>
                <td >{{isset($tests->pcr_level) ? $tests->pcr_level : '' }}</td>
            </tr>
    </tbody>
  </table>
  <br>
  <table style="border-bottom: 1px solid #cecfd5; font-size:7px;font-family: Bookman Old Style;" width="100%">
    <tr>     
      <td colspan="5" align="center"><b>TEST RESULTS</b></td>
    </tr>
  </table>
  <table id="results_content_id" style="border-bottom: 1px solid #cecfd5; font-size:9px;font-family: Bookman Old Style;" width="100%">
    <tr>      
      <td>
        <table style="padding: 1px;" width="100%">
          <thead>
            <tr>
                <td width="18%"><b>Test</b></td>
                <td width="27%"><b>Result</b></td>
                <td width="10%"><b>Flag</b></td> <!-- Diagnostic Flag column for results -->
                <td width="16%"><b>Reference </b></td>
                <td width="9%"><b>SI units</b></td>
              </tr>
          </thead>
          <tbody>
                <?php $counter = 0 ?>
                <?php $counter++ ?>
             
              <tr>
                    <?php if($counter==1){?>
                <td rowspan="">{{isset($tests->pcr_level) ? $tests->pcr_level :''}}</td>
                    <?php } ?>             
                <td>
                {{isset($tests->results) ? $tests->results : ''}}
                </td>
                <td>
                 
                </td><!-- Diagnostic Flag column for results-->
                <td>
                  
                </td>
                <td >
                  
                </td>
              </tr>
              
            </tbody>
        </table>
            <table width="100%">
              <tr>
                <td style="font-family: 'Courier New',Courier; font-size:11px;"><b>Comment (s) :</b>
                  

                </td>                           
              </tr>
              <tr>
                <td width="100%">
                  <b>Equipment/Technique used:</b> 
                  {{isset($tests->equipment_used) ? $tests->equipment_used : ''}}
                </td> 
                
              </tr>
            </table> 
            <table width="100%">       
              <tr>
                <td width="20%">
                  <b>{{trans('messages.tested-by')}}</b>:
                </td>
                <td width="30%">
                  {{isset($tests->tested_by) ? $tests->tested_by:''}}
                </td>
                <td width="20%"><b>Reviewed by </b>:</td>
                <td width="30%"> {{isset($tests->dispatched_by)?$tests->dispatched_by:''}} </td>
                              
              </tr>          
           </table> 
          </td>   
        </tr>
      </table>

<table style="border-bottom: 0px solid #cecfd5; font-size:8px;font-family: 'Courier New',Courier;">
  <tr><td></td></tr>
  <tr>
    <td>
      <strong>Approved By : {{isset($tests->dispatched_by) ? $tests->dispatched_by : ''}}</strong>
      
    </td>
  </tr>
 
</table>
  <script type="text/php">
    if (isset($pdf)) {
        $x = 250;
        $y = 820;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $texts = "{{config('kblis.certificate-info')}}";
        $pagelabel = "PRINTED BY {{ Auth::user()->name}} {{now()}}";
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
@extends("layout")
@section("content")
<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:"Cambria Math";
  panose-1:2 4 5 3 5 4 6 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:roman;
  mso-font-pitch:variable;
  mso-font-signature:-536870145 1107305727 0 0 415 0;}
@font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-536870145 1073786111 1 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:0in;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;
  color:black;}
span.SpellE
  {mso-style-name:"";
  mso-spl-e:yes;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-size:10.0pt;
  mso-ansi-font-size:10.0pt;
  mso-bidi-font-size:10.0pt;
  font-family:"Calibri",sans-serif;
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
@page WordSection1
  {size:11.0in 8.5in;
  mso-page-orientation:landscape;
  margin:1.0in 1.0in 1.0in 1.0in;
  mso-header-margin:.5in;
  mso-footer-margin:.5in;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
-->
</style>
<div>
  <ol class="breadcrumb">
    <li><a href="{{{URL::route('user.home')}}}">{{ trans('messages.home') }}</a></li>
    <li class="active">{{ Lang::choice('messages.report',2) }}</li>
    <li class="active">Referral Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    Referral | 
    <a title="Previous Month"
      href="{{URL::to('/report/hmis108/'.date('Y-m',strtotime(date('Y-m',strtotime($month)).' -1 month')))}}">
      <span class="btn btn-default ion-android-arrow-back"></span></a>
    {{date('Y-M',strtotime($month))}}
    <a title="Next Month"
      href="{{URL::to('/report/hmis108/'.date('Y-m',strtotime(date('Y-m',strtotime($month)).' +1 month')))}}">
      <span class="btn btn-default ion-android-arrow-forward"></span></a>
  </div>
  <div class="panel-body">
  @if (Session::has('message'))
    <div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
  @endif  
    <div class="table-responsive">
      <p class="c124"><span class="c5">HEALTH UNIT REFERRAL REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="95%"
 style='width:95.88%;border-collapse:collapse;border:none;mso-border-alt:solid black .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.15pt'>
  <td width="17%" colspan=4 valign=top style='width:17.82%;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Referring Health worker</span></b><span style='font-size:
  9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="40%" colspan=8 valign=top style='width:40.18%;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Patient and Specimen Information</span></b><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="12%" colspan=3 valign=top style='width:12.24%;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Receiving Facility</span></b><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="16%" colspan=3 valign=top style='width:16.2%;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Result/ Report of Referred Specimen</span></b><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="13%" colspan=4 valign=top style='width:13.56%;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Officer receiving result report of referral Specimen<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:39.35pt;mso-row-margin-right:.04%'>
  <td width="4%" rowspan=2 valign=top style='width:4.76%;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(1)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Date<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>DD/MM/YY</span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.48%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(2)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Serial Number on referral&amp; Request form</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.42%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(3)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Name</span></b><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.16%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(5)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Tel. Contact</span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.44%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(6)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Lab. No.</span></b><i style='mso-bidi-font-style:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></i></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.34%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>(7)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>NIN<o:p></o:p></span></b></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.74%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(8)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>SpecimenID</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'> </span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.92%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(9)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Specimen</span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Type</span></b><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.66%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(10)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Test required</span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.34%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(11)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Reason for referral <i style='mso-bidi-font-style:normal'>(use
  code from list below)</i></span></b><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.64%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(12)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Specimen</span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Dispatch</span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Date/<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Time</span></b><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>(D/M/Y;<o:p></o:p></span></i></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>H:M)</span></i></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="9%" rowspan=2 valign=top style='width:9.1%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:center 208.35pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>(13)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:center 208.35pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Type of
  Transport (</span></b><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'>Use options: 1. hub system for hub rider &amp;
  courier,</span></i></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:center 208.35pt'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>2. Arrangement
  with Public means, <o:p></o:p></span></i></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:53.25pt'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>3. Private/self means<span
  style='mso-spacerun:yes'>                                                             
  </span>4. If others, specify</span></i></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.8%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(14)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Name of receiving Facility/Hub</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.76%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(15)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Specimen Accepted (A) or Rejected (R)?</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.68%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(16)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>If rejected, Specify reason for specimen rejection<i
  style='mso-bidi-font-style:normal'>(use code from list below)</i></span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.68%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(17)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Date&amp; time of
  receiving result </span></b><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>(D/M/Y;<o:p></o:p></span></i></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>H:M)</span></i></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.06%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(18)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Summary results </span></b><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.46%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(19)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Turn Around Time<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(TAT)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>DAYS<o:p></o:p></span></i></p>
  </td>
  <td width="4%" valign=top style='width:4.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(20)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Name</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.56%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(22)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Designation</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.46%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(23)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Contact</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:2;height:46.7pt;mso-row-margin-right:.04%'>
  <td width="4%" valign=top style='width:4.42%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:46.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>4.Signature<o:p></o:p></span></b></p>
  </td>
  <td width="4%" valign=top style='width:4.54%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:46.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(21)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Signature<o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.4pt;mso-row-margin-right:.04%'>
  <td width="4%" rowspan=2 valign=top style='width:4.76%;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.48%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:black;mso-border-left-alt:black;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:windowtext;mso-border-style-alt:solid;
  mso-border-width-alt:.5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-size:8.0pt;line-height:250%;
  font-family:"Times New Roman",serif;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Referral No.</span><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.42%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Name</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.16%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.44%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.34%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.74%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.92%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.66%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.34%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:250%'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" valign=top style='width:3.64%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:250%'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>D/M/Y</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="9%" rowspan=2 valign=top style='width:9.1%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.8%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.76%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.68%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:black;mso-border-left-alt:black;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:windowtext;mso-border-style-alt:solid;
  mso-border-width-alt:.5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>D/M/Y</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.06%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.46%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Name</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.56%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.46%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:4;height:21.4pt;mso-row-margin-right:.04%'>
  <td width="4%" valign=top style='width:4.48%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:black;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-size:8.0pt;line-height:250%;
  font-family:"Times New Roman",serif;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Request No.</span><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.42%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Signature</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" valign=top style='width:3.64%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:250%'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>H:M)</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.68%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:black;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>H:M)</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.54%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Signature</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:5;height:21.4pt;mso-row-margin-right:.04%'>
  <td width="4%" rowspan=2 valign=top style='width:4.76%;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.48%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:black;mso-border-left-alt:black;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:windowtext;mso-border-style-alt:solid;
  mso-border-width-alt:.5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-size:8.0pt;line-height:250%;
  font-family:"Times New Roman",serif;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Referral No.</span><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.42%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Name</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.16%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.44%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.34%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.74%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.92%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.66%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.34%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:250%'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" valign=top style='width:3.64%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:250%'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>D/M/Y</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="9%" rowspan=2 valign=top style='width:9.1%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.8%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.76%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="3%" rowspan=2 valign=top style='width:3.68%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:black;mso-border-left-alt:black;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:windowtext;mso-border-style-alt:solid;
  mso-border-width-alt:.5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>D/M/Y</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.06%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.46%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Name</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.56%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.46%;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:6;height:23.05pt;mso-row-margin-right:.04%'>
  <td width="4%" valign=top style='width:4.48%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:black;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><span style='font-size:8.0pt;line-height:250%;
  font-family:"Times New Roman",serif;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Request</span><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.42%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Signature</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="3%" valign=top style='width:3.64%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:23.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:250%'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>H:M)</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.68%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:black;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;line-height:
  250%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'>H:M)</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="4%" valign=top style='width:4.54%;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:23.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  250%;mso-pagination:none'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:250%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>Signature</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;border-bottom:solid black 1.0pt'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:120.1pt'>
  <td width="100%" colspan=22 valign=top style='width:100.0%;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:120.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>ULIN
  <span class=SpellE>format:<span style='font-size:9.0pt;background:#D9D9D9;
  mso-shading-themecolor:background1;mso-shading-themeshade:217'>Year</span></span></span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman";background:
  #D9D9D9;mso-shading-themecolor:background1;mso-shading-themeshade:217'> of first
  time registration[YY]/facility code of first time registration[0000]/patient
  initials [XXXX]/ auto increasing number reset at the start of every year
  [0000]</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'> = ULIN = [YY/0000/XXXX/0000] e.g. 15/0345/YMK/0009<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Sample
  ID <span class=SpellE>format:<span style='font-size:9.0pt;background:#D9D9D9;
  mso-shading-themecolor:background1;mso-shading-themeshade:217'>Year</span></span></span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman";background:
  #D9D9D9;mso-shading-themecolor:background1;mso-shading-themeshade:217'> of
  sample collection [YY]/ Month of sample collection [MM]/ three letters
  representing code of test type [XXX]/auto increasing number reset at the
  start of every month [0000]</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'> –<span style='background:#D9D9D9;mso-shading-themecolor:
  background1;mso-shading-themeshade:217'> patient initials part in the
  ULIN/auto increase number part of the ULIN</span> = Sample ID = [YY/MM/XXX/0000
  – XXXX/0000]. Thus, if patient ULIN is [15/0345/YMK/0009], the ID of his/her
  sample (that is collected in January 2017) becomes: 17/01/WBC/021-YM/0329<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><!--[if gte vml 1]><v:rect id="Rectangle_x0020_8" o:spid="_x0000_s1026"
   style='position:absolute;margin-left:.4pt;margin-top:8.7pt;width:1042.5pt;
   height:17.25pt;z-index:-251658752;visibility:visible;mso-wrap-style:square;
   mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
   mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
   mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
   mso-position-horizontal-relative:text;mso-position-vertical:absolute;
   mso-position-vertical-relative:text;mso-width-percent:0;
   mso-height-percent:0;mso-width-relative:page;mso-height-relative:page;
   v-text-anchor:middle' o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA
0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD
OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893
SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y
JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl
bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR
JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY
22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i
OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA
IQCnwcWFlAIAAIYFAAAOAAAAZHJzL2Uyb0RvYy54bWysVFtP2zAUfp+0/2D5fSQpdEDUFFUgpkkV
VMDEs+vYTTTHx7Pdpt2v37FzacfQHqblwbJzvvOd+5nd7BtFdsK6GnRBs7OUEqE5lLXeFPTby/2n
K0qcZ7pkCrQo6EE4ejP/+GHWmlxMoAJVCkuQRLu8NQWtvDd5kjheiYa5MzBCo1CCbZjHp90kpWUt
sjcqmaTp56QFWxoLXDiHf+86IZ1HfikF949SOuGJKij65uNp47kOZzKfsXxjmalq3rvB/sGLhtUa
jY5Ud8wzsrX1H1RNzS04kP6MQ5OAlDUXMQaMJkvfRPNcMSNiLJgcZ8Y0uf9Hyx92K0vqsqBYKM0a
LNETJo3pjRLkKqSnNS5H1LNZ2RCgM0vg3x0Kkt8k4eF6zF7aJmAxPLKPuT6MuRZ7Tzj+zM4n59eX
U6wJR+Eku04vp8FcwvJB3VjnvwhoSLgU1KJfMcdst3S+gw6Q6BmouryvlYqP0EDiVlmyY1j69Sbr
yd0RFQPofI7e+4MSQVfpJyExJ+jlJBqM3XgkY5wL7bNOVLFSdDamKX6DlcF8DCgSBmaJ3o3cPcGA
7EgG7i68Hh9URWzmUTn9m2Od8qgRLYP2o3JTa7DvESiMqrfc4fsquy41IUtrKA/YMRa6UXKG39dY
niVzfsUszg5WFPeBf8RDKmgLCv2Nkgrsz/f+Bzy2NEopaXEWC+p+bJkVlKivGpv9Oru4CMMbHxfT
ywk+7KlkfSrR2+YWsOYZbh7D4zXgvRqu0kLzimtjEayiiGmOtgvKvR0et77bEbh4uFgsIgwH1jC/
1M+GB/KQ1dB+L/tXZk3fox7b+wGGuWX5m1btsEFTw2LrQdaxj4957fONwx4bp19MYZucviPquD7n
vwAAAP//AwBQSwMEFAAGAAgAAAAhAKKusNnbAAAABwEAAA8AAABkcnMvZG93bnJldi54bWxMjs1O
wzAQhO9IvIO1SNyo00JLCXEqVAluqCKhUo9OvCQGex3FbhvenuUEx/nRzFdsJu/ECcdoAymYzzIQ
SG0wljoF7/XzzRpETJqMdoFQwTdG2JSXF4XOTTjTG56q1AkeoZhrBX1KQy5lbHv0Os7CgMTZRxi9
TizHTppRn3ncO7nIspX02hI/9HrAbY/tV3X0CpLdH14chvp11XQ781lX292tVer6anp6BJFwSn9l
+MVndCiZqQlHMlE4Bcyd2L2/A8HpIlsv2WkULOcPIMtC/ucvfwAAAP//AwBQSwECLQAUAAYACAAA
ACEAtoM4kv4AAADhAQAAEwAAAAAAAAAAAAAAAAAAAAAAW0NvbnRlbnRfVHlwZXNdLnhtbFBLAQIt
ABQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAAAAAAAAAAAAAAC8BAABfcmVscy8ucmVsc1BLAQIt
ABQABgAIAAAAIQCnwcWFlAIAAIYFAAAOAAAAAAAAAAAAAAAAAC4CAABkcnMvZTJvRG9jLnhtbFBL
AQItABQABgAIAAAAIQCirrDZ2wAAAAcBAAAPAAAAAAAAAAAAAAAAAO4EAABkcnMvZG93bnJldi54
bWxQSwUGAAAAAAQABADzAAAA9gUAAAAA
" fillcolor="white [3212]" strokecolor="#1f4d78 [1604]" strokeweight="1pt">
   <v:path arrowok="t"/>
  </v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
  absolute;z-index:-1895825920;margin-left:13px;margin-top:286px;width:2088px;
  height:37px'><img width=1392 height=25
  src="Referral%20register_files/image001.png" v:shapes="Rectangle_x0020_8"></span><![endif]><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Reasons
  for referral: 01.</span></b><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'> Equipment failure/breakdown; <b
  style='mso-bidi-font-weight:normal'>02.</b> Reagent stock out; <b
  style='mso-bidi-font-weight:normal'>03.</b> Supplies stock out; <b
  style='mso-bidi-font-weight:normal'>04.</b> Power outage; <b
  style='mso-bidi-font-weight:normal'>05.</b> Lack of testing expertise; <b
  style='mso-bidi-font-weight:normal'>06.</b><span style='mso-spacerun:yes'> 
  </span>Lack of required equipment; <b style='mso-bidi-font-weight:normal'>07.</b>
  For confirmatory testing; <b style='mso-bidi-font-weight:normal'>08.</b>
  Quality Assurance (from lower to higher facility); <b style='mso-bidi-font-weight:
  normal'>09.</b> Other (specify)<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
   style='width:834.75pt;border-collapse:collapse;border:none;mso-border-alt:
   dashed black .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;
   mso-border-insideh:.5pt dashed black;mso-border-insidev:.5pt dashed black'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.1pt'>
    <td width=317 valign=top style='width:3.3in;border:dashed black 1.0pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.1pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Specimen rejection reasons</span></b><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=52 valign=top style='width:38.9pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:12.1pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Code</span></b><span style='font-size:10.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=304 valign=top style='width:228.15pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:12.1pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Specimen rejection reasons</span></b><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.05pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:12.1pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Code</span></b><span style='font-size:10.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=285 valign=top style='width:213.6pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:12.1pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Specimen rejection reasons</span></b><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.45pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:12.1pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Code</span></b><span style='font-size:10.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:11.3pt'>
    <td width=317 valign=top style='width:3.3in;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Inadequate specimen volume</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=52 valign=top style='width:38.9pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>01</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=304 valign=top style='width:228.15pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Wrong sample label</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>06</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=285 valign=top style='width:213.6pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Date of specimen collection not
    specified</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>11</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:11.3pt'>
    <td width=317 valign=top style='width:3.3in;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span class=SpellE><span style='font-size:9.0pt;
    font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Hemolyzed</span></span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'> specimen</span><span style='font-size:9.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=52 valign=top style='width:38.9pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>02</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=304 valign=top style='width:228.15pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Unclear sample label</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>07</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=285 valign=top style='width:213.6pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Time of specimen collection not
    specified</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>12</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;height:11.3pt'>
    <td width=317 valign=top style='width:3.3in;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Specimen without lab request
    form</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=52 valign=top style='width:38.9pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>03</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=304 valign=top style='width:228.15pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Specimen in wrong container</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>08</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=285 valign=top style='width:213.6pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Improper transport media</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>13</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;height:11.3pt'>
    <td width=317 valign=top style='width:3.3in;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>No test ordered on<span
    style='mso-spacerun:yes'>  </span>lab request form of sample</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=52 valign=top style='width:38.9pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>04</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=304 valign=top style='width:228.15pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Damaged/broken/leaking specimen
    container</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>09</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=285 valign=top style='width:213.6pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Specimen type unacceptable for
    required test</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.3pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>14</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:15.9pt'>
    <td width=317 valign=top style='width:3.3in;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt;height:15.9pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>No specimen label or identifier</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=52 valign=top style='width:38.9pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.9pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>05</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=304 valign=top style='width:228.15pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.9pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Expired specimen</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.9pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>10</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=285 valign=top style='width:213.6pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.9pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Other</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.9pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>15</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none'><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
@stop
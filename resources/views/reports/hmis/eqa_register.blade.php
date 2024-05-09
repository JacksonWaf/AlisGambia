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
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:0in;
  margin-left:.5in;
  margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";}
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
  {size:8.5in 11.0in;
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
    <li class="active">EQA Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    EQA
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
      <p class="c124"><span class="c5"> EQA REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="95%"
 style='width:95.34%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:22.2pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:22.2pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="23%" colspan=3 valign=top style='width:23.08%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 0in 0in 0in;height:22.2pt'>
  <p class=MsoListParagraph><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;color:black'>EQA Details<o:p></o:p></span></b></p>
  </td>
  <td width="25%" colspan=4 valign=top style='width:25.5%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 0in 0in 0in;height:22.2pt'>
  <p class=MsoListParagraph><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;color:black'>Participants Information<o:p></o:p></span></b></p>
  </td>
  <td width="21%" colspan=4 valign=top style='width:21.72%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 0in 0in 0in;height:22.2pt'>
  <p class=MsoListParagraph><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;color:black'>Panel Testing<o:p></o:p></span></b></p>
  </td>
  <td width="13%" colspan=2 valign=top style='width:13.38%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 0in 0in 0in;height:22.2pt'>
  <p class=MsoListParagraph><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;color:black'>Feedback<o:p></o:p></span></b></p>
  </td>
  <td width="9%" rowspan=3 valign=top style='width:9.6%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 0in 0in 0in;height:22.2pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(15)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Comments<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:31.1pt'>
  <td width="6%" rowspan=2 valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'>(1)<o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'>Date<o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'>(<span class=SpellE>dd</span>/mm/<span
  class=SpellE>yy</span>)<o:p></o:p></span></b></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.68%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(2)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>EQA Scheme<o:p></o:p></span></b></p>
  </td>
  <td width="8%" rowspan=2 valign=top style='width:8.66%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'>(3)<o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'>Quarter of participation<o:p></o:p></span></b></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(4)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Specify type of QA/QC <o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.1%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(5)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Participant’s Code<o:p></o:p></span></b></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.36%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(6)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Participant’s name<o:p></o:p></span></b></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(7)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Designation<o:p></o:p></span></b></p>
  </td>
  <td width="4%" style='width:4.84%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;
  height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(8)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Testing Site<o:p></o:p></span></b></p>
  </td>
  <td width="5%" rowspan=2 valign=top style='width:5.44%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(9)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Date panel received<o:p></o:p></span></b></p>
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.84%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(10)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Date of Testing<o:p></o:p></span></b></p>
  </td>
  <td width="5%" rowspan=2 valign=top style='width:5.54%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(11)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Date of results dispatch from facility<o:p></o:p></span></b></p>
  </td>
  <td width="5%" rowspan=2 valign=top style='width:5.9%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(12)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Date of feedback receipt<o:p></o:p></span></b></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.36%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(13)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Feedback Results<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(PASS or FAIL)<o:p></o:p></span></b></p>
  </td>
  <td width="7%" rowspan=2 valign=top style='width:7.02%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(14)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>Corrective action.<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  106%'>(If FAIL)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:31.1pt'>
  <td width="4%" style='width:4.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:31.1pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><b
  style='mso-bidi-font-weight:normal'><span style='color:#BFBFBF;mso-themecolor:
  background1;mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><b
  style='mso-bidi-font-weight:normal'><span style='color:#BFBFBF;mso-themecolor:
  background1;mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><span
  style='color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'><o:p></o:p></span></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><span
  style='color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'><o:p></o:p></span></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><span
  style='color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'><o:p></o:p></span></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><span
  style='color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'><o:p></o:p></span></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><span
  style='color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'><o:p></o:p></span></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;height:26.55pt'>
  <td width="6%" valign=top style='width:6.72%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;line-height:115%;color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'>(<span class=SpellE>dd</span>/mm/<span class=SpellE>yy</span>)</span></b><span
  style='color:#BFBFBF;mso-themecolor:background1;mso-themeshade:191'><o:p></o:p></span></p>
  </td>
  <td width="7%" valign=top style='width:7.68%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="8%" valign=top style='width:8.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.74%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.1%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.44%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="4%" valign=top style='width:4.84%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="5%" valign=top style='width:5.9%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="6%" valign=top style='width:6.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="7%" valign=top style='width:7.02%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="9%" valign=top style='width:9.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 0in 0in 0in;height:26.55pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
@stop

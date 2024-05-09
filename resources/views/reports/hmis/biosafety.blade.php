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
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
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
    <li class="active">Biosafety Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    HMIS 108 | 
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
      <p class="c124"><span class="c5">HEALTH UNIT BIOSAFETY REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black 2.25pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;
 mso-border-insideh:2.25pt solid black;mso-border-insidev:2.25pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:8.7pt'>
  <td width=154 colspan=3 valign=top style='width:115.45pt;border:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>1.
  Details of reporting officer</span></b></p>
  </td>
  <td width=173 colspan=7 valign=top style='width:129.75pt;border:solid black 2.25pt;
  border-left:none;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>2.
  Incident Identifier</span></b></p>
  </td>
  <td width=458 colspan=14 valign=top style='width:343.3pt;border:solid black 2.25pt;
  border-left:none;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>3.
  Details of Personnel Affected</span></b></p>
  </td>
  <td width=215 colspan=7 valign=top style='width:161.1pt;border:solid black 2.25pt;
  border-left:none;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.7pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:2.25pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>4.
  Details of Incident</span></b></p>
  </td>
  <td width=237 colspan=5 valign=top style='width:177.6pt;border:solid black 2.25pt;
  border-left:none;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>5.
  Incident Analysis and Follow up</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:77.5pt;mso-row-margin-right:1.2pt'>
  <td width=83 colspan=2 valign=top style='width:62.4pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Name
  of reporting officer</span><span style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=71 valign=top style='width:53.0pt;border-top:none;border-left:none;
  border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;mso-border-top-alt:
  solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Contact
  of reporting officer</span><span style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=104 colspan=4 valign=top style='width:78.05pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Biosafety
  Biosecurity Incident identification number <b style='mso-bidi-font-weight:
  normal'>(format: BB/facility code/auto generated number)</b></span><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Date<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(D:M:Y)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Time
  <b style='mso-bidi-font-weight:normal'>(H:M)</b></span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
  <td width=101 colspan=4 valign=top style='width:75.95pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-themecolor:text1'>Victim’sNIN</span></span><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;color:black;
  mso-themecolor:text1'><o:p></o:p></span></p>
  </td>
  <td width=86 colspan=2 valign=top style='width:64.35pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif'>Victim Laboratory Number<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif'>(</span><i style='mso-bidi-font-style:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>If
  Applicable</span></i><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>)<o:p></o:p></span></p>
  </td>
  <td width=82 colspan=3 valign=top style='width:.85in;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Name
  of Victim</span><span style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.2pt;border-top:none;border-left:none;
  border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;mso-border-top-alt:
  solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>AGE</span><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Sex<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>(M/F)</span><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=94 colspan=3 valign=top style='width:70.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Category
  of Victim<i style='mso-bidi-font-style:normal'> (use codes <span
  class=SpellE>below<sup><span style='color:black;mso-themecolor:text1'>A</span></sup></span>)</i></span><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=67 colspan=3 valign=top style='width:50.55pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Location
  of incident</span><span style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.5pt;border-top:none;border-left:none;
  border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;mso-border-top-alt:
  solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Type
  of incident</span><span style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=83 colspan=3 valign=top style='width:62.0pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Specific
  incident<i style='mso-bidi-font-style:normal'>(use codes <span class=SpellE>below<sup>B</sup></span>)</i></span><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=83 colspan=2 valign=top style='width:62.25pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Specific
  cause of incident<i style='mso-bidi-font-style:normal'>(use codes <span
  class=SpellE>below<sup>C</sup></span>)</i></span><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=80 colspan=2 valign=top style='width:60.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Corrective/
  preventive actions taken<i style='mso-bidi-font-style:normal'>(use codes <span
  class=SpellE>below<sup>D</sup></span>)</i></span><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=74 valign=top style='width:55.7pt;border-top:none;border-left:none;
  border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;mso-border-top-alt:
  solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:77.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif'>Incident <b style='mso-bidi-font-weight:
  normal'>Resolved or Referred?</b><o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width=2><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:2;height:26.95pt;mso-row-margin-right:1.2pt'>
  <td width=83 colspan=2 valign=top style='width:62.4pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><a name="_gjdgxs"></a><span
  style='color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>First
  name<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=71 rowspan=2 valign=top style='width:53.0pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=104 colspan=4 rowspan=2 valign=top style='width:78.05pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal style='line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  class=SpellE><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>dd</span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>/mm/<span class=SpellE>yy</span><o:p></o:p></span></p>
  </td>
  <td width=101 colspan=4 rowspan=2 valign=top style='width:75.95pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=86 colspan=2 rowspan=2 valign=top style='width:64.35pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=82 colspan=3 valign=top style='width:.85in;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>First Name<o:p></o:p></span></p>
  </td>
  <td width=47 rowspan=2 valign=top style='width:35.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=51 rowspan=2 valign=top style='width:38.35pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=94 colspan=3 rowspan=2 valign=top style='width:70.2pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=67 colspan=3 rowspan=2 valign=top style='width:50.55pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=63 rowspan=2 valign=top style='width:47.5pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=83 colspan=3 rowspan=2 valign=top style='width:62.0pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=83 colspan=2 rowspan=2 valign=top style='width:62.25pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=80 colspan=2 rowspan=2 valign=top style='width:60.2pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=74 rowspan=2 valign=top style='width:55.7pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width=2><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:3;height:3.7pt;mso-row-margin-right:1.2pt'>
  <td width=83 colspan=2 valign=top style='width:62.4pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>Surname<o:p></o:p></span></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;color:#A6A6A6;mso-themecolor:background1;
  mso-themeshade:166'>H:M<o:p></o:p></span></p>
  </td>
  <td width=82 colspan=3 valign=top style='width:.85in;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>Surname<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width=2><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:4;height:3.7pt;mso-row-margin-right:1.2pt'>
  <td width=83 colspan=2 valign=top style='width:62.4pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>First name<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=71 rowspan=2 valign=top style='width:53.0pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=104 colspan=4 rowspan=2 valign=top style='width:78.05pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>dd</span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>/mm/<span class=SpellE>yy</span></span></p>
  <p class=MsoNormal><o:p>&nbsp;</o:p></p>
  </td>
  <td width=101 colspan=4 rowspan=2 valign=top style='width:75.95pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=86 colspan=2 rowspan=2 valign=top style='width:64.35pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=82 colspan=3 valign=top style='width:.85in;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>First Name</span></p>
  </td>
  <td width=47 rowspan=2 valign=top style='width:35.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=51 rowspan=2 valign=top style='width:38.35pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=94 colspan=3 rowspan=2 valign=top style='width:70.2pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=67 colspan=3 rowspan=2 valign=top style='width:50.55pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=63 rowspan=2 valign=top style='width:47.5pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=83 colspan=3 rowspan=2 valign=top style='width:62.0pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=83 colspan=2 rowspan=2 valign=top style='width:62.25pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=80 colspan=2 rowspan=2 valign=top style='width:60.2pt;border-top:
  none;border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=74 rowspan=2 valign=top style='width:55.7pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><o:p>&nbsp;</o:p></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
  width=2><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:5;height:3.7pt;mso-row-margin-right:1.2pt'>
  <td width=83 colspan=2 valign=top style='width:62.4pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='color:#A6A6A6;mso-themecolor:background1;mso-themeshade:
  166'>Surname</span></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.2pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#A6A6A6;
  mso-themecolor:background1;mso-themeshade:166'>H:M</span></p>
  </td>
  <td width=82 colspan=3 valign=top style='width:.85in;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='color:#A6A6A6;mso-themecolor:
  background1;mso-themeshade:166'>Surname</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;border-bottom:solid black 2.25pt;
  padding:0in 0in 0in 0in' width=2><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:6;height:8.4pt'>
  <td width=1236 colspan=36 valign=top style='width:927.3pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b style='mso-bidi-font-weight:normal'><sup><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>A</span></sup></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Codes</span></b></span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'> for category of victim<span
  class=GramE>:<span style='mso-fareast-font-family:Calibri;font-weight:normal'>1</span></span></span></b><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'>. Laboratory</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-bidi-font-family:
  Calibri'>; </span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>2.
  Clinician</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>; </span><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>3. Support Staff</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-bidi-font-family:
  Calibri'>; </span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>4.
  Patient/client</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>; </span><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>5. Visitor</span><span style='font-size:
  9.0pt;font-family:"Times New Roman",serif;mso-bidi-font-family:Calibri'>; </span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'>6. Bike rider</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-bidi-font-family:
  Calibri'>; </span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>7.
  Post master</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>; </span><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>8. Other (specify)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:40.6pt'>
  <td width=232 colspan=6 valign=top style='width:173.7pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:40.6pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span class=SpellE><b style='mso-bidi-font-weight:
  normal'><sup><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>B</span></sup></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Specific</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'> incident:
  <o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>1.
  Assault or Fighting <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>2.
  Slip and fall<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>3.
  Breakage of sample container<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>4.
  Injuries from lab objects<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>5.
  Attack on the lab/facility<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>6.
  Collapsing building<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>7.
  Bike rider accident <o:p></o:p></span></p>
  </td>
  <td width=242 colspan=8 valign=top style='width:181.4pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:40.6pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>8.
  Fire<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>9.
  Hacking into data bank<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>10.
  Poor disposal of medical care waste<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>11.
  Roof leakage<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>12.
  Fainting<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>13.
  Pricks/ cuts by unused sharps<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>14.
  Chemical Burns<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>15.
  Chemical spillage<span style='mso-spacerun:yes'>                  </span><o:p></o:p></span></p>
  </td>
  <td width=226 colspan=7 valign=top style='width:169.75pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:40.6pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>16.
  Used needle prick<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>17.
  Theft of samples<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>18.
  Theft of isolates<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>19.
  Contact with VHF suspect<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>20.Hacking
  into bio-bank<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>21.
  Sample spillage<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>22.
  Electric shock/burns<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>23.
  Machine cuts<o:p></o:p></span></p>
  </td>
  <td width=233 colspan=7 valign=top style='width:175.05pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:40.6pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>24.
  Machine bruises<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>25.
  Theft of radiological materials<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>26.
  Poor disposal <span class=SpellE>ofradiological</span> materials<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>27.
  Contact with radiological materials<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>28.
  Effects on vision <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>29.
  Back pain from posture effects <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>30.
  Death within lab<span style='mso-spacerun:yes'>        </span><o:p></o:p></span></p>
  </td>
  <td width=303 colspan=8 valign=top style='width:227.3pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:40.6pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>31.
  Other occupational hazards<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>32.
  Mental confusion<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>33.
  Complex mental confusion<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>34.
  Depression <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>35.
  Theft of equipment<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>36.
  Theft of lab supplies/ consumables<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>37.
  Theft of chemicals <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:9.55pt'>
  <td width=77 valign=top style='width:57.95pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><sup><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>C</span></sup><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Specific</span></span><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>
  cause of incident: <o:p></o:p></span></p>
  </td>
  <td width=113 colspan=3 valign=top style='width:85.05pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>1. Defective equipment<o:p></o:p></span></p>
  </td>
  <td width=104 colspan=4 valign=top style='width:78.05pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>2. Hazardous location<o:p></o:p></span></p>
  </td>
  <td width=97 colspan=3 valign=top style='width:72.95pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>3. Unsafe procedure</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=191 colspan=5 valign=top style='width:143.4pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>4. Employee physical emotional condition</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=117 colspan=6 valign=top style='width:87.95pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>5. Lack of skill/knowledge</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=95 colspan=3 valign=top style='width:70.9pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>6. Inadequate safeguard Equipment</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=138 colspan=3 valign=top style='width:103.55pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>7. Unsafe behavior/attitude</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'>; <o:p></o:p></span></p>
  </td>
  <td width=166 colspan=5 valign=top style='width:124.55pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>8. Unsafe working environment</span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'>; <o:p></o:p></span></p>
  </td>
  <td width=137 colspan=3 valign=top style='width:102.7pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-bidi-font-family:Calibri'>9. Others<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:2.55pt'>
  <td width=197 colspan=5 valign=top style='width:147.9pt;border:solid black 2.25pt;
  border-top:none;mso-border-top-alt:solid black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><sup><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif'>D</span></sup><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Corrective</span></span><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>/ preventive actions taken:<span
  style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>1. Conducted
  risk assessment<o:p></o:p></span></p>
  </td>
  <td width=202 colspan=7 valign=top style='width:151.65pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>2.
  Disinfected the place<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>3.
  Patient sample taken &amp; referred to testing lab<o:p></o:p></span></p>
  </td>
  <td width=184 colspan=5 valign=top style='width:138.35pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>4.
  Victim counseled<span
  style='mso-spacerun:yes'>                                        </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>5.
  Contacted Police<o:p></o:p></span></p>
  </td>
  <td width=405 colspan=12 valign=top style='width:303.6pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>6.
  Referred to disciplinary committee<span style='mso-spacerun:yes'>    </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>7. Engaged
  national level bio-risk coordinators for intervention<o:p></o:p></span></p>
  </td>
  <td width=248 colspan=7 valign=top style='width:185.75pt;border-top:none;
  border-left:none;border-bottom:solid black 2.25pt;border-right:solid black 2.25pt;
  mso-border-top-alt:solid black 2.25pt;mso-border-left-alt:solid black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>8.
  Others</span><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=113 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=104 style='border:none'></td>
  <td width=54 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=51 style='border:none'></td>
  <td width=39 style='border:none'></td>
  <td width=54 style='border:none'></td>
  <td width=42 style='border:none'></td>
  <td width=5 style='border:none'></td>
  <td width=96 style='border:none'></td>
  <td width=11 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=71 style='border:none'></td>
  <td width=55 style='border:none'></td>
  <td width=107 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=69 style='border:none'></td>
  <td width=75 style='border:none'></td>
  <td width=14 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=123 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=15 style='border:none'></td>
  <td width=83 style='border:none'></td>
  <td width=93 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=81 style='border:none'></td>
  <td width=13 style='border:none'></td>
  <td width=3 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=90 style='border:none'></td>
  <td width=109 style='border:none'></td>
  <td width=2 style='border:none'></td>
 </tr>
 <![endif]>
</table>

</div>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

@stop
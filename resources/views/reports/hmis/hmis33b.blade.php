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
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;}
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
    <li class="active">HMIS 33b</li>
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
      <p class="c124"><span class="c5">HEALTH UNIT MONTHLY REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:100%pt;margin-left:7.0pt;border-collapse:collapse;border:none;
 mso-border-alt:solid #231F20 1.0pt;mso-yfti-tbllook:480;mso-padding-alt:0in 0in 0in 0in;
 mso-border-insideh:1.0pt solid #231F20;mso-border-insidev:1.0pt solid #231F20'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:10.3pt'>
  <td width=374 colspan=2 rowspan=2 valign=top style='width:280.85pt;
  border:solid #231F20 1.0pt;mso-border-top-alt:1.0pt;mso-border-left-alt:1.0pt;
  mso-border-bottom-alt:.5pt;mso-border-right-alt:.75pt;mso-border-color-alt:
  #231F20;mso-border-style-alt:solid;padding:0in 0in 0in 0in;height:10.3pt'>
  <p class=TableParagraph style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:13.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:11.7pt;margin-right:0in;margin-bottom:
  0in;margin-left:21.65pt;margin-bottom:.0001pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%;color:#010202'>1. CASES.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=67 rowspan=2 valign=top style='width:49.9pt;border:solid #231F20 1.0pt;
  border-left:none;mso-border-left-alt:solid #231F20 .75pt;mso-border-top-alt:
  .5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:.5pt;mso-border-right-alt:
  .75pt;mso-border-color-alt:#231F20;mso-border-style-alt:solid;padding:0in 0in 0in 0in;
  height:10.3pt'>
  <p class=TableParagraph style='margin-top:.45pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:14.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.3pt;margin-bottom:.0001pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%;color:#010202'>Code</span></b><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 rowspan=2 valign=top style='width:117.4pt;border:solid #231F20 1.0pt;
  border-left:none;mso-border-left-alt:solid #231F20 .75pt;mso-border-top-alt:
  .5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:.5pt;mso-border-right-alt:
  .75pt;mso-border-color-alt:#231F20;mso-border-style-alt:solid;padding:0in 0in 0in 0in;
  height:10.3pt'>
  <p class=TableParagraph style='margin-top:8.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:12.35pt;margin-bottom:.0001pt;text-indent:-6.25pt;line-height:
  102%'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;line-height:102%;color:#010202'>Total Cases this
  week</span></b><b style='mso-bidi-font-weight:normal'><span style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt;line-height:102%'><o:p></o:p></span></b></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border:solid #231F20 1.0pt;
  border-left:none;mso-border-left-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:10.3pt'>
  <p class=TableParagraph style='margin-top:1.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:18.95pt;margin-bottom:.0001pt;line-height:106%;tab-stops:
  40.3pt'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>2.<span
  style='mso-tab-count:1'>   </span></span><span style='color:#010202;
  letter-spacing:-.2pt'>DEATH.</span><o:p></o:p></b></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.25pt;border:solid #231F20 1.0pt;
  border-left:none;mso-border-left-alt:solid #231F20 .75pt;mso-border-top-alt:
  .5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:.5pt;mso-border-right-alt:
  .75pt;mso-border-color-alt:#231F20;mso-border-style-alt:solid;padding:0in 0in 0in 0in;
  height:10.3pt'>
  <p class=TableParagraph style='margin-top:.2pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:16.9pt;margin-bottom:.0001pt;text-indent:-1.05pt;line-height:
  102%'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:102%;color:#010202'>Tested Cases</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:102%'><o:p></o:p></span></b></p>
  </td>
  <td width=147 rowspan=2 valign=top style='width:109.9pt;border:solid #231F20 1.0pt;
  border-left:none;mso-border-left-alt:solid #231F20 .75pt;mso-border-top-alt:
  .5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:.5pt;mso-border-right-alt:
  .75pt;mso-border-color-alt:#231F20;mso-border-style-alt:solid;padding:0in 0in 0in 0in;
  height:10.3pt'>
  <p class=TableParagraph style='margin-top:.2pt;line-height:106%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:13.6pt;
  margin-bottom:0in;margin-left:22.9pt;margin-bottom:.0001pt;text-indent:-7.1pt;
  line-height:102%'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
  color:#010202'>Pos</span></b></span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
  color:#010202'>(+<span class=SpellE>ve</span>) cases</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:102%'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:15.65pt'>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:15.65pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:30.45pt;margin-bottom:.0001pt;text-indent:-4.35pt;line-height:
  102%'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:102%;color:#010202'>Total Death this
  week</span></b><b style='mso-bidi-font-weight:normal'><span style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;line-height:102%'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:2.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.2pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>1</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:2.95pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Malaria
  (diagnosed)</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:2.95pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>MA.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>2</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Dysentery</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>DY.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.55pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>3</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:102%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;color:#010202'>Severe
  Acute Respiratory Infection (SARI)</span><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;line-height:102%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>SA.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>4</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Acute
  Flaccid Paralysis</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>AF.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.55pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>5</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:102%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;color:#010202'>Adverse
  Events Following <span class=SpellE>Immuniza</span>- <span class=SpellE>tion</span>
  (AEFI)</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:102%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>AE.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:14.55pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>6</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Animal
  Bites (suspected rabies)</span><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>AB.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>7</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Bacterial
  Meningitis</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>MG.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>8</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Cholera</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>CH.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>9</span><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Guinea
  Worm</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>GW.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>10</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Measles</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>ME.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>11</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Neonatal
  tetanus</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>NT.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#010202;padding:0in 0in 0in 0in;
  height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>12</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Plague</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>PL.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>13</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Typhoid
  Fever</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>TF.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>14</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Hepatitis
  B</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>HB.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>15</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Rifampicin
  resistant TB cases</span><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>DR.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:9.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>16</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Yellow
  Fever</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>YF.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:9.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:13.8pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>17</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:10.2pt;mso-line-height-rule:
  exactly'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#010202'>Other
  Viral Hemorrhagic Fevers (</span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;color:#010202'>EVD,</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;mso-bidi-font-size:
  11.0pt'><o:p></o:p></span></b></p>
  <p class=TableParagraph style='margin-left:4.25pt;line-height:6.75pt;
  mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;color:#010202'>MVD, RVF,
  CCHF)</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph align=center style='margin-top:1.85pt;margin-right:
  5.85pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>VF.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.8pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:12.15pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='margin-top:4.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.45pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>18</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='margin-top:4.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.5pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Leprosy</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph align=center style='margin-top:5.0pt;margin-right:
  4.35pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>LP.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:11.45pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.45pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>19</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph style='margin-top:2.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.5pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Anthrax</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border-top:none;border-left:none;
  border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph align=center style='margin-top:5.95pt;margin-right:
  5.35pt;margin-bottom:0in;margin-left:6.9pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>AX.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border:none;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-right-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border:none;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-right-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border:none;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-right-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.45pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:13.65pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:13.65pt'>
  <p class=TableParagraph style='margin-top:6.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:7.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>20</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.65pt'>
  <p class=TableParagraph style='margin-top:6.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Maternal
  death</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border:none;border-bottom:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:13.65pt'>
  <p class=TableParagraph align=center style='margin-top:6.5pt;margin-right:
  6.85pt;margin-bottom:0in;margin-left:7.65pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>MD.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 rowspan=3 valign=top style='width:117.4pt;border:none;
  background:#231F20;padding:0in 0in 0in 0in;height:13.65pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-top-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;mso-border-right-alt:solid #231F20 .75pt;
  padding:0in 0in 0in 0in;height:13.65pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border:none;border-right:solid #231F20 1.0pt;
  mso-border-left-alt:solid #231F20 .75pt;mso-border-left-alt:solid #231F20 .75pt;
  mso-border-right-alt:solid #231F20 .25pt;background:#0E0F0F;padding:0in 0in 0in 0in;
  height:13.65pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border:none;border-right:solid #231F20 1.0pt;
  mso-border-left-alt:solid #231F20 .25pt;mso-border-left-alt:solid #231F20 .25pt;
  mso-border-right-alt:solid #231F20 .5pt;background:#0E0F0F;padding:0in 0in 0in 0in;
  height:13.65pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:12.15pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='margin-top:5.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:7.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>21</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='margin-top:3.9pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Macerated
  Still births</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border:none;border-bottom:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph align=center style='margin-top:3.9pt;margin-right:
  6.85pt;margin-bottom:0in;margin-left:7.65pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>MB.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-top-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;mso-border-right-alt:solid #231F20 .25pt;
  padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=272 colspan=2 valign=top style='width:204.15pt;border:none;
  border-right:solid #231F20 1.0pt;mso-border-left-alt:solid #231F20 .25pt;
  mso-border-left-alt:solid #231F20 .25pt;mso-border-right-alt:solid #231F20 .5pt;
  background:#0E0F0F;padding:0in 0in 0in 0in;height:12.15pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:11.2pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:11.2pt'>
  <p class=TableParagraph style='margin-top:6.55pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>22</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.2pt'>
  <p class=TableParagraph style='margin-top:6.75pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Fresh
  Still Birth</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border:none;border-bottom:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:11.2pt'>
  <p class=TableParagraph align=center style='margin-top:6.75pt;margin-right:
  6.85pt;margin-bottom:0in;margin-left:7.65pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>FB.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-top-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;mso-border-right-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:11.2pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-left-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;mso-border-right-alt:solid #231F20 .5pt;
  background:#0E0F0F;padding:0in 0in 0in 0in;height:11.2pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#0E0F0F;padding:0in 0in 0in 0in;
  height:11.2pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;mso-yfti-lastrow:yes;height:12.1pt'>
  <td width=55 valign=top style='width:41.1pt;border:solid #231F20 1.0pt;
  border-top:none;mso-border-top-alt:solid #231F20 .5pt;mso-border-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:12.1pt'>
  <p class=TableParagraph style='margin-top:5.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.5pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
  color:#231F20'>23</span><span style='font-size:10.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=320 valign=top style='width:239.7pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.1pt'>
  <p class=TableParagraph style='margin-top:6.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:4.25pt;margin-bottom:.0001pt;line-height:106%'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>Early
  Neonatal deaths 0-7 days</span><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
  <td width=67 valign=top style='width:49.9pt;border:none;border-bottom:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;padding:0in 0in 0in 0in;height:12.1pt'>
  <p class=TableParagraph align=center style='margin-top:6.8pt;margin-right:
  6.85pt;margin-bottom:0in;margin-left:7.65pt;margin-bottom:.0001pt;text-align:
  center;line-height:106%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#010202'>ND.</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=157 valign=top style='width:117.4pt;border:none;background:#231F20;
  padding:0in 0in 0in 0in;height:12.1pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=174 valign=top style='width:130.8pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-top-alt:solid #231F20 .5pt;
  mso-border-bottom-alt:solid #231F20 .5pt;mso-border-right-alt:solid #231F20 .5pt;
  padding:0in 0in 0in 0in;height:12.1pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.25pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#0E0F0F;padding:0in 0in 0in 0in;
  height:12.1pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=147 valign=top style='width:109.9pt;border-top:none;border-left:
  none;border-bottom:solid #231F20 1.0pt;border-right:solid #231F20 1.0pt;
  mso-border-top-alt:solid #231F20 .5pt;mso-border-left-alt:solid #231F20 .5pt;
  mso-border-alt:solid #231F20 .5pt;background:#0E0F0F;padding:0in 0in 0in 0in;
  height:12.1pt'>
  <p class=TableParagraph style='line-height:106%'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
@stop
@extends("layout")
@section("content")
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073786111 1 0 415 0;}
@font-face
	{font-family:Domine;
	mso-font-alt:"Times New Roman";
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:auto;
	mso-font-signature:0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
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
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:11.0in 8.5in;
	mso-page-orientation:landscape;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:1357846139;
	mso-list-type:hybrid;
	mso-list-template-ids:-934500764 1777915722 134807577 134807579 134807567 134807577 134807579 134807567 134807577 134807579;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:9.0pt;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-font-weight:bold;}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<div>
  <ol class="breadcrumb">
    <li><a href="{{{URL::route('user.home')}}}">{{ trans('messages.home') }}</a></li>
    <li class="active">{{ Lang::choice('messages.report',2) }}</li>
    <li class="active">Sample Reception Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    Sample Reception | 
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
      <p class="c124"><span class="c5">HEALTH UNIT SAMPLE RECEPTION REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:1526.05pt;border-collapse:collapse;border:none;mso-border-alt:
 solid black .5pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid black;
 mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:42.0pt'>
  <td width=2035 colspan=28 valign=top style='width:1526.05pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:42.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman",serif;
  mso-fareast-font-family:Domine;color:white;background:black;mso-highlight:
  black'>MINISTRY OF HEALTH</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman",serif;
  mso-fareast-font-family:Domine;background:yellow;mso-highlight:yellow'>(</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman",serif;
  mso-fareast-font-family:Domine;color:red;background:yellow;mso-highlight:
  yellow'>HMIS…..</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif;mso-fareast-font-family:Domine;
  background:yellow;mso-highlight:yellow'>)</span></b><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman",serif;mso-fareast-font-family:
  Domine'> Laboratory Sample Reception Register</span></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:42.0pt;border:none' width=0 height=84></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:1;height:3.0pt'>
  <td width=799 colspan=13 valign=top style='width:574.45pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Patient Information</span></b><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=481 colspan=6 valign=top style='width:357.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Sample Information</span></b><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=159 colspan=2 valign=top style='width:125.05pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Requesting officer</span></b><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=450 colspan=5 valign=top style='width:355.45pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Information on sample rejection/acceptance</span></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=146 colspan=2 valign=top style='width:113.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Receiving/
  rejecting officer</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:3.0pt;border:none' width=0 height=6></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:2;height:19.3pt'>
  <td width=82 rowspan=5 valign=top style='width:63.55pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal style='margin-left:.25in'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;line-height:115%'>Date</span></b><o:p></o:p></p>
  </td>
  <td width=91 rowspan=5 valign=top style='width:70.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;line-height:115%'>Serial Number on request Form</span></b><o:p></o:p></p>
  </td>
  <td width=66 rowspan=5 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;line-height:115%'>OPD No.</span></b><o:p></o:p></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=66 rowspan=5 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><span
  style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;line-height:115%'>IPD No.</span></b><o:p></o:p></p>
  </td>
  <td width=66 rowspan=5 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><span
  style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'>NIN<o:p></o:p></b></p>
  </td>
  <td width=114 colspan=3 rowspan=4 valign=top style='width:63.8pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><span
  style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></b></p>
  <p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'>PatientCategory</b></span><b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman",serif'>(Circle)<o:p></o:p></span></b></p>
  </td>
  <td width=62 rowspan=5 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph align=center style='text-align:center;text-indent:
  -.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-size:9.0pt'><span
  style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></i></b><![endif]><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;line-height:115%'>Lab. No.</span></b><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;line-height:
  115%'><o:p></o:p></span></i></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:63.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoListParagraph style='text-indent:-.25in;mso-list:l0 level1 lfo1'><![if !supportLists]><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt'><span style='mso-list:Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><![endif]><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;line-height:115%'>Name</span></b><o:p></o:p></p>
  </td>
  <td width=37 rowspan=5 valign=top style='width:28.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;line-height:
  115%'>9.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;line-height:
  115%'>Sex<o:p></o:p></span></b></p>
  </td>
  <td width=50 rowspan=5 valign=top style='width:28.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>10.Age</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=82 rowspan=5 valign=top style='width:64.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>11. <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Address</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=75 rowspan=5 valign=top style='width:56.8pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>12. <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Specify Patient Location </span></b><i style='mso-bidi-font-style:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(i.e. Unit/ Clinic/Ward/ Facility/
  Outreach site/Other)</span></i><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=74 rowspan=5 valign=top style='width:50.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>13.<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Type
  of</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=GramE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Sample</span></b><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(</span></i></span><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>e.g. blood, urine, stool, etc.)</span></i><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=81 rowspan=5 valign=top style='width:56.75pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>14.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Test (s)</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=GramE><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Required</span></b><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>(</span></i></span><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>e.g. CBC,
  urinalysis, blood grouping etc.)<o:p></o:p></span></i></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 rowspan=3 valign=top style='width:64.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>15.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Sample</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>collection</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Date</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif'>(D/M/Y)</span></i><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=100 rowspan=3 valign=top style='width:78.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>16.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Sample</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Received</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Date/</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman";color:black;
  mso-themecolor:text1'>(D/M/<span class=GramE>Y;</span>)</span></i></b><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=68 rowspan=5 valign=top style='width:51.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>17.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Sample</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>ID</span></b><i style='mso-bidi-font-style:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(this is an extension of the lab number to indicate the
  test type for a given patient sample e.g. 006-CBC, 006-WBC)</span></i><span
  style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=79 rowspan=5 valign=top style='width:62.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>18. <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Name</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=80 rowspan=5 valign=top style='width:62.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>19.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Contact</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=56 rowspan=5 valign=top style='width:42.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>20.<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Reject (R) or</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Accept (A)?</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=207 colspan=2 rowspan=2 valign=top style='width:164.15pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>21. For Rejected Samples<o:p></o:p></span></b></p>
  </td>
  <td width=187 colspan=2 rowspan=2 valign=top style='width:148.8pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>22. For Accepted Samples<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=72 rowspan=5 valign=top style='width:56.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>23. Name</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=74 rowspan=5 valign=top style='width:56.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>24. Signature</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:19.3pt;border:none' width=0 height=39></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:3;height:10.35pt'>
  <td width=83 rowspan=4 valign=top style='width:63.75pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Telephone<o:p></o:p></span></b></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:10.35pt;border:none' width=0 height=21></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:4;height:10.35pt'>
  <td width=92 rowspan=3 valign=top style='width:71.85pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Give reason for rejection </span></b><i style='mso-bidi-font-style:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(use code from list below)</span></i><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=116 rowspan=3 valign=top style='width:92.3pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Serial Number of rejection form<o:p></o:p></span></b></p>
  </td>
  <td width=89 rowspan=3 valign=top style='width:70.85pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>If accept, test within (W) or refer (R)?<o:p></o:p></span></b></p>
  </td>
  <td width=98 rowspan=3 valign=top style='width:77.95pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>If test within,</span></b><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=GramE><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>which</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'> lab
  section/ <span class=SpellE>dept</span>?<o:p></o:p></span></b></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:10.35pt;border:none' width=0 height=21></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:5;height:10.35pt'>
  <td width=83 rowspan=2 valign=top style='width:64.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Time</span></b><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif'> (H:M)</span></i><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=100 rowspan=2 valign=top style='width:78.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.35pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Time</span></b><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-themecolor:text1'>(H:M)</span></i></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:10.35pt;border:none' width=0 height=21></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:6;height:62.2pt'>
  <td width=38 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-bottom-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:62.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>N<o:p></o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-bottom-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:62.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>R<o:p></o:p></span></b></p>
  </td>
  <td width=37 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:62.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>F<o:p></o:p></span></b></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:62.2pt;border:none' width=0 height=124></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:7;height:15.0pt'>
  <td width=82 rowspan=2 valign=top style='width:63.55pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 rowspan=2 valign=top style='width:70.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=66 rowspan=2 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=66 rowspan=2 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=66 rowspan=2 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=38 rowspan=2 valign=top style='width:21.3pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;line-height:
  115%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>N</span></b><span
  style='font-family:"Times New Roman",serif;color:#A6A6A6;mso-themecolor:background1;
  mso-themeshade:166'><o:p></o:p></span></p>
  </td>
  <td width=38 rowspan=2 valign=top style='width:21.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;line-height:
  115%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>R</span></b><span
  style='font-family:"Times New Roman",serif;color:#A6A6A6;mso-themecolor:background1;
  mso-themeshade:166'><o:p></o:p></span></p>
  </td>
  <td width=37 rowspan=2 valign=top style='width:21.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;line-height:
  115%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>F</span></b><span
  style='font-family:"Times New Roman",serif;color:#A6A6A6;mso-themecolor:background1;
  mso-themeshade:166'><o:p></o:p></span></p>
  </td>
  <td width=62 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:63.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:10.0pt;line-height:
  115%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6'>Name</span></i><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=37 rowspan=2 valign=top style='width:28.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=50 rowspan=2 valign=top style='width:28.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 valign=top style='width:64.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;line-height:115%;font-family:"Times New Roman",serif;
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'>District<o:p></o:p></span></i></p>
  </td>
  <td width=75 rowspan=2 valign=top style='width:56.8pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=74 rowspan=2 valign=top style='width:50.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=2 valign=top style='width:56.75pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:64.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#A6A6A6'>Date</span></i><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=100 valign=top style='width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#A6A6A6'>Date</span></i><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=68 rowspan=2 valign=top style='width:51.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='tab-stops:31.1pt'><span style='font-size:9.0pt;
  line-height:115%;font-family:"Times New Roman",serif'><span style='mso-tab-count:
  1'>            </span></span><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=79 rowspan=2 valign=top style='width:62.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 rowspan=2 valign=top style='width:62.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 rowspan=2 valign=top style='width:42.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=92 rowspan=2 valign=top style='width:71.85pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=116 rowspan=2 valign=top style='width:92.3pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 rowspan=2 valign=top style='width:70.85pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=98 rowspan=2 valign=top style='width:77.95pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=72 rowspan=2 valign=top style='width:56.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=74 rowspan=2 valign=top style='width:56.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:15.0pt;border:none' width=0 height=30></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:8;height:8.95pt'>
  <td width=83 valign=top style='width:63.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:10.0pt;line-height:
  115%;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6'>Telephone</span></i><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=82 valign=top style='width:64.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:
  solid black .5pt;mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.95pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;mso-pagination:
  none'><i style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;
  line-height:115%;font-family:"Times New Roman",serif;color:#A6A6A6;
  mso-themecolor:background1;mso-themeshade:166'>Village<o:p></o:p></span></i></p>
  </td>
  <td width=83 valign=top style='width:64.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:
  solid black .5pt;mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:8.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#A6A6A6'>Time</span></i><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=100 valign=top style='width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#A6A6A6'>Time</span></i><span style='font-family:
  "Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:8.95pt;border:none' width=0 height=18></td>
  <![endif]>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:85.0pt'>
  <td width=2035 colspan=28 valign=top style='width:1526.05pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:85.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>ULIN
  <span class=SpellE>format:<span style='font-size:9.0pt;background:#D9D9D9;
  mso-shading-themecolor:background1;mso-shading-themeshade:217'>Year</span></span></span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman";background:
  #D9D9D9;mso-shading-themecolor:background1;mso-shading-themeshade:217'> of
  first time registration[YY]/facility code of first time
  registration[0000]/patient initials [XXXX]/ auto increasing number reset at
  the start of every year [0000]</span></b><b style='mso-bidi-font-weight:normal'><span
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
  ULIN/auto increase number part of the ULIN</span> = Sample ID =
  [YY/MM/XXX/0000 – XXXX/0000]. Thus, if patient ULIN is [15/0345/YMK/0009],
  the ID of his/her sample (that is collected in January 2017) becomes:
  17/01/WBC/021-YM/0329<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Patient Category: National (N), Refugee
  (R), Foreigner (F)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
   style='border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
   mso-border-alt:dashed black .5pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;
   mso-border-insideh:.5pt dashed black;mso-border-insidev:.5pt dashed black'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=349 valign=top style='width:261.6pt;border:dashed black 1.0pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Sample rejection reasons</span></b><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=57 valign=top style='width:42.85pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Code</span></b><span style='font-size:10.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=335 valign=top style='width:251.2pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Sample rejection reasons</span></b><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=93 valign=top style='width:69.45pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Code</span></b><span style='font-size:10.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=314 valign=top style='width:235.2pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Sample rejection reasons</span></b><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=78 valign=top style='width:58.85pt;border:dashed black 1.0pt;
    border-left:none;mso-border-left-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'>Code</span></b><span style='font-size:10.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=349 valign=top style='width:261.6pt;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Inadequate sample volume</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=57 valign=top style='width:42.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>01</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=335 valign=top style='width:251.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Wrong sample label</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=93 valign=top style='width:69.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>06</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=314 valign=top style='width:235.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Date of sample collection not
    specified</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=78 valign=top style='width:58.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>11</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=349 valign=top style='width:261.6pt;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span class=SpellE><span style='font-size:9.0pt;
    font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Haemolysed</span></span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
    "Times New Roman"'> sample</span><span style='font-size:9.0pt;font-family:
    "Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=57 valign=top style='width:42.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>02</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=335 valign=top style='width:251.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Unclear sample label</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=93 valign=top style='width:69.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>07</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=314 valign=top style='width:235.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Time of sample collection not
    specified</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=78 valign=top style='width:58.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>12</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=349 valign=top style='width:261.6pt;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Specimen without lab request
    form</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=57 valign=top style='width:42.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>03</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=335 valign=top style='width:251.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Sample in wrong container</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=93 valign=top style='width:69.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>08</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=314 valign=top style='width:235.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Improper transport media</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=78 valign=top style='width:58.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>13</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=349 valign=top style='width:261.6pt;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>No test ordered on lab request
    form of sample</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=57 valign=top style='width:42.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>04</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=335 valign=top style='width:251.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Damaged/broken/leaking sample
    container</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=93 valign=top style='width:69.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>09</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=314 valign=top style='width:235.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Sample type unacceptable for
    required test</span><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=78 valign=top style='width:58.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>14</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes'>
    <td width=349 valign=top style='width:261.6pt;border:dashed black 1.0pt;
    border-top:none;mso-border-top-alt:dashed black .5pt;mso-border-alt:dashed black .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>No sample label or identifier</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=57 valign=top style='width:42.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>05</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=335 valign=top style='width:251.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Expired sample</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=93 valign=top style='width:69.45pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>10</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=314 valign=top style='width:235.2pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>Other</span><span
    style='font-size:9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
    <td width=78 valign=top style='width:58.85pt;border-top:none;border-left:
    none;border-bottom:dashed black 1.0pt;border-right:dashed black 1.0pt;
    mso-border-top-alt:dashed black .5pt;mso-border-left-alt:dashed black .5pt;
    mso-border-alt:dashed black .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif;
    mso-fareast-font-family:"Times New Roman"'>15</span><span style='font-size:
    9.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <![if !supportMisalignedRows]>
  <td style='height:85.0pt;border:none' width=0 height=170></td>
  <![endif]>
 </tr>
</table>

</div>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
@stop
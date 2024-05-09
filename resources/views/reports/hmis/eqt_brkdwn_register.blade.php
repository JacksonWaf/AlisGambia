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
    <li class="active">EQUIPMENT BREAKDOWN Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    EQUIPEMNT BREAKDOWN | 
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
      <p class="c124"><span class="c5">HEALTH UNIT EQUIPMENT REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=0 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:
 none;mso-border-alt:solid black .5pt;width:100%;mso-table-lspace:9.0pt;margin-left:7.5pt;
 mso-table-rspace:9.0pt;margin-right:7.5pt;mso-table-anchor-vertical:page;
 mso-table-anchor-horizontal:page;mso-table-left:53.55pt;mso-table-top:114.9pt;
 mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid black;
 mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:53.05pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;background:#BFBFBF;mso-background-themecolor:
  background1;mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;
  height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><a
  name="_Hlk523374697"><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>1. Date</span></b></a><span style='mso-bookmark:_Hlk523374697'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=78 valign=top style='width:58.55pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>2. Equipment Code</span></b></span><span style='mso-bookmark:
  _Hlk523374697'><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=79 valign=top style='width:59.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>3. Equipment name</span></b></span><span style='mso-bookmark:
  _Hlk523374697'><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=137 valign=top style='width:103.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>4. Reason for failure or breakdown <i style='mso-bidi-font-style:
  normal'>(where possible: use codes below)</i></span></b></span><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=84 valign=top style='width:63.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>5. Reported by<o:p></o:p></span></b></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>(Name
  &amp; signature)</span></i></b></span><span style='mso-bookmark:_Hlk523374697'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></i></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=89 valign=top style='width:67.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>6. Date when fault was reported</span></b></span><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=155 valign=top style='width:117.0pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:
  background1;mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;
  height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>7. Action taken
  on equipment<o:p></o:p></span></b></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'>(use codes: 1. Equipment repaired/restore; 2.
  Equipment not repaired/restored; 3. Equipment referred for repair)</span></i></b></span><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=161 valign=top style='width:121.5pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:black;
  mso-border-left-alt:windowtext;mso-border-bottom-alt:black;mso-border-right-alt:
  windowtext;mso-border-style-alt:solid;mso-border-width-alt:.5pt;background:
  #BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:191;
  padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>8. If Equipment
  is referred for repair, specify destination <i style='mso-bidi-font-style:
  normal'>(use codes: 1. Regional workshop, <span class=SpellE>Wabigalo</span>
  national workshop, manufacturer’s agent, if others then specify)</i><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=96 valign=top style='width:67.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;background:#BFBFBF;
  mso-background-themecolor:background1;mso-background-themeshade:191;
  padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>9. If equipment is repaired/restored, specify date of
  restoration</span></b></span><span style='mso-bookmark:_Hlk523374697'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
  <td width=90 valign=top style='width:67.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:53.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='mso-bookmark:_Hlk523374697'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>10. Equipment down time (time interval between reporting
  &amp; restoration)</span></b></span><span style='mso-bookmark:_Hlk523374697'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'><o:p></o:p></span></b></span></p>
  </td>
  <span style='mso-bookmark:_Hlk523374697'></span>
 </tr>
 <tr style='mso-yfti-irow:1;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:16.4pt'>
  <td width=48 valign=top style='width:35.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=79 valign=top style='width:59.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=137 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=89 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=155 valign=top style='width:117.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:black;mso-border-left-alt:windowtext;mso-border-bottom-alt:
  black;mso-border-right-alt:windowtext;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 valign=top style='width:67.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:200%;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;line-height:200%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:11.45pt'>
  <td width=1015 colspan=10 valign=top style='width:761.4pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
  solid windowtext 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-alt:
  solid black .5pt;mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:11.45pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Codes of
  possible reasons for equipment failure or breakdown:</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'> 1. Equipment is overdue for service; 2. Accident
  occurred; 3. Missed service schedule<span class=GramE>;4</span>. Too old
  equipment; 5. Poorly maintained; 6. Unknown reason for failure; <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>7. If others (specify)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:10.55pt'>
  <td width=1015 colspan=10 valign=top style='width:761.4pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
  solid windowtext 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-alt:
  solid black .5pt;mso-border-right-alt:solid windowtext .5pt;background:#D9D9D9;
  mso-background-themecolor:background1;mso-background-themeshade:217;
  padding:0in 5.4pt 0in 5.4pt;height:10.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'>Reviewer Details<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes;height:20.0pt'>
  <td width=514 colspan=6 valign=top style='width:387.9pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'>Name:<o:p></o:p></span></b></p>
  </td>
  <td width=316 colspan=2 valign=top style='width:238.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'>Signature:<o:p></o:p></span></b></p>
  </td>
  <td width=185 colspan=2 valign=top style='width:135.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:53.6pt;mso-element-top:114.9pt;mso-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
  "Times New Roman",serif'>Date of review:<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
@stop

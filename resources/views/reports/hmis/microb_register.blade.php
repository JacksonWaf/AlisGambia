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
-->
</style>
<div>
  <ol class="breadcrumb">
    <li><a href="{{{URL::route('user.home')}}}">{{ trans('messages.home') }}</a></li>
    <li class="active">{{ Lang::choice('messages.report',2) }}</li>
    <li class="active">Microbiology Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    MICROB | 
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
      <p class="c124"><span class="c5">HEALTH UNIT MICROBIOLOGY REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=0 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext 1.5pt;mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;
 margin-left:7.5pt;mso-table-rspace:9.0pt;margin-right:7.5pt;mso-table-anchor-vertical:
 page;mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:
 103.95pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:1.5pt solid windowtext;
 mso-border-insidev:1.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.5pt'>
  <td width=594 colspan=13 style='width:445.8pt;border:solid windowtext 1.5pt;
  background:#AEAAAA;mso-background-themecolor:background2;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:21.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>PERSONAL INFORMATION<o:p></o:p></span></b></p>
  </td>
  <td width=198 nowrap colspan=3 rowspan=2 style='width:148.8pt;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:21.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(12)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Community / Hospital Acquired Infections
  (HAI)<o:p></o:p></span></b></p>
  </td>
  <td width=113 nowrap colspan=2 rowspan=2 style='width:85.05pt;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:21.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(13) <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Antibiotic history</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=359 nowrap colspan=6 rowspan=2 style='width:269.4pt;border-top:
  solid windowtext 1.0pt;border-left:none;border-bottom:solid windowtext 1.5pt;
  border-right:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-top-alt:solid windowtext .5pt;
  background:#DEEAF6;mso-background-themecolor:accent1;mso-background-themetint:
  51;padding:0in 5.4pt 0in 5.4pt;height:21.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:107%;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:margin;mso-element-top:103.95pt;
  mso-height-rule:exactly'><b><span style='font-size:6.0pt;mso-bidi-font-size:
  8.0pt;line-height:107%;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:10.5pt'>
  <td width=65 style='width:48.9pt;border:solid windowtext 1.5pt;border-top:
  none;mso-border-top-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(1)<o:p></o:p></span></b></p>
  </td>
  <td width=38 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(2)<o:p></o:p></span></b></p>
  </td>
  <td width=38 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-top-alt:.5pt;mso-border-left-alt:1.5pt;mso-border-bottom-alt:1.5pt;
  mso-border-right-alt:.5pt;mso-border-color-alt:windowtext;mso-border-style-alt:
  solid;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(3)<o:p></o:p></span></b></p>
  </td>
  <td width=38 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(4)<o:p></o:p></span></b></p>
  </td>
  <td width=57 style='width:42.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(5)<o:p></o:p></span></b></p>
  </td>
  <td width=85 colspan=3 style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(6)<o:p></o:p></span></b></p>
  </td>
  <td width=38 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(7)<o:p></o:p></span></b></p>
  </td>
  <td width=28 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(8)<o:p></o:p></span></b></p>
  </td>
  <td width=65 style='width:49.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(9)<o:p></o:p></span></b></p>
  </td>
  <td width=76 style='width:57.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(10)<o:p></o:p></span></b></p>
  </td>
  <td width=66 style='width:49.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(11)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:37.5pt'>
  <td width=65 rowspan=2 style='width:48.9pt;border:solid windowtext 1.5pt;
  border-top:none;mso-border-top-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Date/Time</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><span class=SpellE><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Ipd</span></b></span><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'> No.<o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><span class=SpellE><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Opd</span></b></span><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>No.<o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>NIN<o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Lab. No.<o:p></o:p></span></b></p>
  </td>
  <td width=85 colspan=3 style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Patient Category<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(Circle)<o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Sex<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(M/F)</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Age</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=65 rowspan=2 style='width:49.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Sample No.<o:p></o:p></span></b></p>
  </td>
  <td width=76 rowspan=2 style='width:57.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Facility/<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Ward/Clinic</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Provisional diagnosis</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Date of specimen collection</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Hospitalized for more than 48hrs
  at specimen collection time? Y/N</span></b><b><span style='font-size:6.0pt;
  mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Patient transferred from another
  facility? Y/N</span></b><b><span style='font-size:6.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>On antibiotics? (Y/N)</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>If (Y)<br>
  Duration in <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>days</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Specimen type (Indicate if
  isolate)</span></b><b><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Macroscopic Appearance<o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Microscopy (Wet prep)</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Microscopy (Gram stain)</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Microscopy (ZN Staining)<o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>India ink<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:27.65pt'>
  <td width=28 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-top-alt:.5pt;mso-border-left-alt:1.5pt;mso-border-bottom-alt:1.5pt;
  mso-border-right-alt:.5pt;mso-border-color-alt:windowtext;mso-border-style-alt:
  solid;padding:0in 5.4pt 0in 5.4pt;height:27.65pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>N<o:p></o:p></span></b></p>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:27.65pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>R<o:p></o:p></span></b></p>
  </td>
  <td width=28 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:27.65pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>F<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:24.0pt'>
  <td width=65 valign=top style='width:48.9pt;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-alt:solid windowtext 1.5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:24.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:3.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#D9D9D9;mso-themecolor:background1;
  mso-themeshade:217;mso-ansi-language:IT'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#D9D9D9;mso-themecolor:background1;
  mso-themeshade:217'>Date</span></b><b><span lang=IT style='font-size:3.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#D9D9D9;mso-themecolor:background1;mso-themeshade:
  217;mso-ansi-language:IT'><o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'></td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><i
  style='mso-bidi-font-style:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  color:#A6A6A6;mso-themecolor:background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:gray;mso-themecolor:background1;
  mso-themeshade:128'>N<o:p></o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:1.5pt;mso-border-left-alt:.5pt;mso-border-bottom-alt:1.5pt;
  mso-border-right-alt:.5pt;mso-border-color-alt:windowtext;mso-border-style-alt:
  solid;padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:gray;mso-themecolor:background1;
  mso-themeshade:128'>R<o:p></o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:gray;mso-themecolor:background1;
  mso-themeshade:128'>F<o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'></td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=65 rowspan=2 style='width:49.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=76 rowspan=2 style='width:57.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>Y/N&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>Y/N&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>Y/N&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>&nbsp;</span></b><b><span lang=IT
  style='font-size:5.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>dd/mm/yy</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:23.05pt'>
  <td width=65 style='width:48.9pt;border:solid windowtext 1.5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:23.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#D9D9D9;mso-themecolor:background1;
  mso-themeshade:217'>Time</span></b><b><span lang=IT style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#D9D9D9;mso-themecolor:background1;mso-themeshade:
  217;mso-ansi-language:IT'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:.3in'>
  <td width=65 valign=top style='width:48.9pt;border:solid windowtext 1.5pt;
  border-top:none;mso-border-top-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:.3in'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:3.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#D9D9D9;mso-themecolor:background1;
  mso-themeshade:217;mso-ansi-language:IT'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#D9D9D9;mso-themecolor:background1;
  mso-themeshade:217'>Date</span></b><b><span lang=IT style='font-size:3.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#D9D9D9;mso-themecolor:background1;mso-themeshade:
  217;mso-ansi-language:IT'><o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'></td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><i style='mso-bidi-font-style:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman";color:#A6A6A6;
  mso-themecolor:background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><i style='mso-bidi-font-style:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman";color:#A6A6A6;
  mso-themecolor:background1;mso-themeshade:166'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:gray;mso-themecolor:background1;
  mso-themeshade:128'>N<o:p></o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:1.5pt;mso-border-left-alt:.5pt;mso-border-bottom-alt:1.5pt;
  mso-border-right-alt:.5pt;mso-border-color-alt:windowtext;mso-border-style-alt:
  solid;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:gray;mso-themecolor:background1;
  mso-themeshade:128'>R<o:p></o:p></span></b></p>
  </td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:gray;mso-themecolor:background1;
  mso-themeshade:128'>F<o:p></o:p></span></b></p>
  </td>
  <td width=38 rowspan=2 style='width:28.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'></td>
  <td width=28 rowspan=2 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=65 rowspan=2 style='width:49.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=76 rowspan=2 style='width:57.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>Y/N&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>Y/N&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>Y/N&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>&nbsp;</span></b><b><span lang=IT
  style='font-size:5.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191;mso-ansi-language:IT'>dd/mm/yy</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#BFBFBF;mso-themecolor:background1;
  mso-themeshade:191'><o:p></o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 style='width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'>&nbsp;</span></b><b><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 rowspan=2 valign=top style='width:49.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  mso-border-alt:solid windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 rowspan=2 valign=top style='width:42.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:103.95pt;mso-height-rule:exactly'><b><span lang=IT
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:IT'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:.3in'>
  <td width=65 style='width:48.9pt;border:solid windowtext 1.5pt;border-top:
  none;mso-border-top-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:.3in'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:margin;
  mso-element-top:103.95pt;mso-height-rule:exactly'><b><span style='font-size:
  6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";color:#D9D9D9;mso-themecolor:background1;
  mso-themeshade:217'>Time</span></b><b><span lang=IT style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman";color:#D9D9D9;mso-themecolor:background1;mso-themeshade:
  217;mso-ansi-language:IT'><o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=0 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:
 none;mso-border-alt:solid windowtext 1.5pt;mso-yfti-tbllook:1184;mso-table-lspace:
 9.0pt;margin-left:7.5pt;mso-table-rspace:9.0pt;margin-right:7.5pt;mso-table-anchor-vertical:
 page;mso-table-anchor-horizontal:page;mso-table-left:47.05pt;mso-table-top:
 309.0pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:1.5pt solid windowtext;
 mso-border-insidev:1.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:5.8pt'>
  <td width=237 colspan=6 style='width:268.9pt;border:solid windowtext 1.5pt;
  border-left:solid windowtext 1.0pt;mso-border-alt:solid windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;background:#AEAAAA;mso-background-themecolor:
  background2;mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;
  height:5.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Routine Specimen Examination <o:p></o:p></span></b></p>
  </td>
  <td width=190 colspan=6 valign=top style='width:141.75pt;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;background:#AEAAAA;
  mso-background-themecolor:background2;mso-background-themeshade:191;
  padding:0in 5.4pt 0in 5.4pt;height:5.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=485 colspan=19 valign=top style='width:269.5pt;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;background:#AEAAAA;
  mso-background-themecolor:background2;mso-background-themeshade:191;
  padding:0in 5.4pt 0in 5.4pt;height:5.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Culture and Sensitivity results <o:p></o:p></span></b></p>
  </td>
  <td width=265 nowrap colspan=5 style='width:198.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext 1.5pt;mso-border-alt:solid windowtext 1.5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#A6A6A6;mso-background-themecolor:
  background1;mso-background-themeshade:166;padding:0in 5.4pt 0in 5.4pt;
  height:5.8pt'></td>
  <td width=58 style='width:35.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:1.5pt;
  mso-border-left-alt:.5pt;mso-border-bottom-alt:1.5pt;mso-border-right-alt:
  .5pt;mso-border-color-alt:windowtext;mso-border-style-alt:solid;background:
  #A6A6A6;mso-background-themecolor:background1;mso-background-themeshade:166;
  padding:0in 5.4pt 0in 5.4pt;height:5.8pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.25pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=46 style='width:35.45pt;border:solid windowtext 1.5pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;background:#A6A6A6;mso-background-themecolor:
  background1;mso-background-themeshade:166;padding:0in 5.4pt 0in 5.4pt;
  height:5.8pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.25pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:30.9pt'>
  <td width=237 colspan=6 style='width:268.9pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.5pt;border-right:
  solid windowtext 1.5pt;mso-border-top-alt:solid windowtext 1.5pt;mso-border-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext .5pt;background:
  #DEEAF6;mso-background-themecolor:accent1;mso-background-themetint:51;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>14)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>ROUTINE SPECIMEN EXAMINATION</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=124 colspan=5 style='width:99.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(15)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(Serological test)<o:p></o:p></span></b></p>
  </td>
  <td width=66 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(16)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Microorganism identified</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=485 colspan=19 valign=top style='width:269.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(17) <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Antibiotics<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=265 colspan=5 valign=top style='width:198.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>(18) <o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Referral of samples &amp; results
  return<o:p></o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:107%;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:6.0pt;mso-bidi-font-size:
  8.0pt;line-height:107%;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(19)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:107%;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:6.0pt;mso-bidi-font-size:
  8.0pt;line-height:107%;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>Sample Quality<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=46 rowspan=2 valign=top style='width:35.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.9pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:107%;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:6.0pt;mso-bidi-font-size:
  8.0pt;line-height:107%;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'>(20)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Remarks<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:82.2pt'>
  <td width=38 style='width:44.05pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-alt:solid windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Others</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=39 style='width:49.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Protein<o:p></o:p></span></b></p>
  </td>
  <td width=35 style='width:49.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Sugar</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=56 style='width:49.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Other (Chemistry)<o:p></o:p></span></b></p>
  </td>
  <td width=35 style='width:42.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>White Cells</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=34 style='width:33.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Other cells<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Crag<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>RPR / TPHA<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>BAT<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><span
  class=SpellE><b><span style='font-size:6.0pt;mso-bidi-font-size:8.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>HBsAg</span></b></span><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:19.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Other</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=66 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'></td>
  <td width=25 valign=top style='width:15.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Ampicillin</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><span
  class=SpellE><b><span style='font-size:6.0pt;mso-bidi-font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Amoxcillin-Clavulanate</span></b></span><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Cefuroxime<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Ceftriaxone<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Cefotaxime<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Chloramphenicol<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Ciprofloxacin<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Clindamycin<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:21.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Trimethoprim/<span class=SpellE>sulphamethoxazole</span><o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Erythromycin<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Gentamicin<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><span
  class=SpellE><b><span style='font-size:6.0pt;mso-bidi-font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Meropenem</span></b></span><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Nitrofurantoin<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><span
  class=SpellE><b><span style='font-size:6.0pt;mso-bidi-font-size:9.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'>Nalidixic</span></b></span><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'> acid<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Oxacillin<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Penicillin G<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Tetracycline<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:15.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:0in;margin-left:5.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:9.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Vancomycin<o:p></o:p></span></b></p>
  </td>
  <td width=39 valign=top style='width:14.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:5.65pt;
  margin-bottom:10.0pt;margin-left:.25in;text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:6.0pt;mso-bidi-font-size:
  9.0pt;line-height:115%'>Other</span></b><b><span style='font-size:6.0pt;
  mso-bidi-font-size:8.0pt;line-height:115%'><o:p></o:p></span></b></p>
  </td>
  <td width=63 style='width:47.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Molecular Results<o:p></o:p></span></b></p>
  </td>
  <td width=52 style='width:39.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Result Date and Time<o:p></o:p></span></b></p>
  </td>
  <td width=47 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Date referred<o:p></o:p></span></b></p>
  </td>
  <td width=54 style='width:40.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Reference lab<o:p></o:p></span></b></p>
  </td>
  <td width=47 style='width:35.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>Result Received date<o:p></o:p></span></b></p>
  </td>
  <td width=58 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:82.2pt'>
  <p class=MsoNormalCxSpMiddle style='line-height:normal;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:5.0pt'>Codes:<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='line-height:normal;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:5.0pt'>1.Acceptable<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='line-height:normal;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:5.0pt'>2.Contaminated<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='line-height:normal;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:47.1pt;mso-element-top:
  309.0pt;mso-height-rule:exactly'><b><span style='font-size:5.0pt'>3.Inserficient</span></b><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:47.3pt'>
  <td width=38 style='width:44.05pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-alt:solid windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=39 style='width:49.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=35 style='width:49.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=56 style='width:49.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=35 style='width:42.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=34 style='width:33.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=25 style='width:19.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=66 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:15.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:21.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:15.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=39 valign=top style='width:14.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=63 style='width:47.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=52 style='width:39.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=47 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=54 style='width:40.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=47 style='width:35.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:47.3pt'></td>
  <td width=58 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=46 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:47.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:28.1pt'>
  <td width=38 style='width:44.05pt;border:solid windowtext 1.5pt;border-top:
  none;mso-border-top-alt:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:28.1pt'></td>
  <td width=39 style='width:49.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=35 style='width:49.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'></td>
  <td width=56 style='width:49.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=35 style='width:42.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=34 style='width:33.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 style='width:21.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 style='width:19.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'></td>
  <td width=66 style='width:42.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'></td>
  <td width=25 valign=top style='width:15.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:14.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:21.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:12.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:15.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=39 valign=top style='width:14.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=63 style='width:47.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=52 style='width:39.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=47 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=54 style='width:40.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width=47 style='width:35.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;mso-border-top-alt:
  solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;padding:
  0in 5.4pt 0in 5.4pt;height:28.1pt'></td>
  <td width=58 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=46 style='width:35.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
  around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:47.1pt;mso-element-top:309.0pt;mso-height-rule:exactly'><b><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
@stop
<?php $__env->startSection("content"); ?>

<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:Wingdings;
  panose-1:5 0 0 0 0 0 0 0 0 0;
  mso-font-charset:2;
  mso-generic-font-family:auto;
  mso-font-pitch:variable;
  mso-font-signature:0 268435456 0 0 -2147483648 0;}
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
  margin-bottom:8.0pt;
  margin-left:0in;
  line-height:106%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
p.Default, li.Default, div.Default
  {mso-style-name:Default;
  mso-style-unhide:no;
  mso-style-parent:"";
  margin:0in;
  margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  mso-layout-grid-align:none;
  text-autospace:none;
  font-size:12.0pt;
  font-family:"Arial",sans-serif;
  mso-fareast-font-family:Calibri;
  color:black;}
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
@page  WordSection1
  {size:8.5in 11.0in;
  margin:1.0in 1.0in 1.0in 1.0in;
  mso-header-margin:.5in;
  mso-footer-margin:.5in;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
 /* List Definitions */
 @list  l0
  {mso-list-id:1141312211;
  mso-list-type:hybrid;
  mso-list-template-ids:-198292070 67698711 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list  l0:level1
  {mso-level-number-format:alpha-lower;
  mso-level-text:"%1\)";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list  l0:level2
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list  l0:level3
  {mso-level-number-format:bullet;
  mso-level-text:\F0A7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list  l0:level4
  {mso-level-number-format:bullet;
  mso-level-text:\F0B7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list  l0:level5
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list  l0:level6
  {mso-level-number-format:bullet;
  mso-level-text:\F0A7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list  l0:level7
  {mso-level-number-format:bullet;
  mso-level-text:\F0B7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list  l0:level8
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list  l0:level9
  {mso-level-number-format:bullet;
  mso-level-text:\F0A7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
ol
  {margin-bottom:0in;}
ul
  {margin-bottom:0in;}
-->
</style>
<div>
  <ol class="breadcrumb">
    <li><a href="<?php echo e(URL::route('user.home')); ?>"><?php echo e(trans('messages.home')); ?></a></li>
    <li class="active"><?php echo e(Lang::choice('messages.report',2)); ?></li>
    <li class="active">EQUIPMENT MAINTENANCE Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    EQUIPEMNT MAINTENANCE | 
    <a title="Previous Month"
      href="<?php echo e(URL::to('/report/hmis108/'.date('Y-m',strtotime(date('Y-m',strtotime($month)).' -1 month')))); ?>">
      <span class="btn btn-default ion-android-arrow-back"></span></a>
    <?php echo e(date('Y-M',strtotime($month))); ?>

    <a title="Next Month"
      href="<?php echo e(URL::to('/report/hmis108/'.date('Y-m',strtotime(date('Y-m',strtotime($month)).' +1 month')))); ?>">
      <span class="btn btn-default ion-android-arrow-forward"></span></a>
  </div>
  <div class="panel-body">
  <?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(trans(Session::get('message'))); ?></div>
  <?php endif; ?>  
    <div class="table-responsive">
      <p class="c124"><span class="c5">HEALTH UNIT EQUIPMENT REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid windowtext .5pt;width:100%;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:70.65pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>1.<span
  style='mso-spacerun:yes'>  </span>Date (DD/MM/YY)<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>2.
  Type of maintenance (preventive or curative/repair or calibration)<o:p></o:p></span></b></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>3.<o:p></o:p></span></b></p>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>Frequency
  of maintenance<o:p></o:p></span></b></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>4.Next
  service date<o:p></o:p></span></b></p>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>(</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;line-height:
  106%;font-family:"Times New Roman",serif;color:windowtext'>DD/MM/YYYY</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;line-height:
  106%;font-family:"Times New Roman",serif'>)<o:p></o:p></span></b></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>5.
  Name of person carrying out maintenance<o:p></o:p></span></b></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>6.
  Equipment maintained by:<o:p></o:p></span></b></p>
  <p class=Default style='margin-left:.5in;text-indent:-.25in;line-height:106%;
  mso-list:l0 level1 lfo2'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;line-height:
  106%;font-family:"Times New Roman",serif'>Biomedical engineer<o:p></o:p></span></b></p>
  <p class=Default style='margin-left:.5in;text-indent:-.25in;line-height:106%;
  mso-list:l0 level1 lfo2'><![if !supportLists]><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;line-height:
  106%;font-family:"Times New Roman",serif'>Lab person<o:p></o:p></span></b></p>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>7.
  Contact of person carrying out maintenance<o:p></o:p></span></b></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>8.
  Comments<o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:70.65pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'>9.
  Signature <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.3pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.3pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.3pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.3pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.3pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:14.3pt'>
  <td width=102 valign=top style='width:57.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=109 valign=top style='width:85.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=124 valign=top style='width:1.45in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:118.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:73.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 valign=top style='width:88.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=75 valign=top style='width:75.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.3pt'>
  <p class=Default style='line-height:106%'><span style='font-size:11.0pt;
  line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reports/hmis/eqt_maintenance_register.blade.php ENDPATH**/ ?>
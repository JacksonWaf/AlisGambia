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
  {font-family:"Gill Sans MT";
  panose-1:2 11 5 2 2 1 4 2 2 3;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:7 0 0 0 3 0;}
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
  mso-bidi-font-family:"Times New Roman";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:.5in;
  mso-add-space:auto;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:0in;
  margin-left:.5in;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:0in;
  margin-left:.5in;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:.5in;
  mso-add-space:auto;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";}
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
  mso-bidi-theme-font:minor-bidi;
  mso-ansi-language:EN-GB;}
.MsoPapDefault
  {mso-style-type:export-only;
  margin-bottom:8.0pt;
  line-height:107%;}
@page WordSection1
  {size:841.9pt 595.3pt;
  mso-page-orientation:landscape;
  margin:78.0pt 14.2pt 1.0in 14.2pt;
  mso-header-margin:35.4pt;
  mso-footer-margin:35.4pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
 /* List Definitions */
 @list l0
  {mso-list-id:662390342;
  mso-list-type:hybrid;
  mso-list-template-ids:-1672938598 134807567 134807577 134807579 134807567 134807577 134807579 134807567 134807577 134807579;}
@list l0:level1
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
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
@list l1
  {mso-list-id:1265921842;
  mso-list-type:hybrid;
  mso-list-template-ids:-1000031084 134807567 134807577 134807579 134807567 134807577 134807579 134807567 134807577 134807579;}
@list l1:level1
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l1:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l1:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  text-indent:-9.0pt;}
@list l1:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l1:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l1:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  text-indent:-9.0pt;}
@list l1:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l1:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l1:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  text-indent:-9.0pt;}
@list l2
  {mso-list-id:1799034800;
  mso-list-template-ids:-280174140;}
@list l2:level1
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l2:level2
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:94.5pt;
  text-indent:-.25in;}
@list l2:level3
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:171.0pt;
  text-indent:-.5in;}
@list l2:level4
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.%4\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:229.5pt;
  text-indent:-.5in;}
@list l2:level5
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:4.25in;
  text-indent:-.75in;}
@list l2:level6
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:364.5pt;
  text-indent:-.75in;}
@list l2:level7
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:423.0pt;
  text-indent:-.75in;}
@list l2:level8
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:499.5pt;
  text-indent:-1.0in;}
@list l2:level9
  {mso-level-legal-format:yes;
  mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:7.75in;
  text-indent:-1.0in;}
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
    <li class="active">QUATERLY Register</li>
  </ol>
</div>
<br />
<div class="panel panel-primary">
  <div class="panel-heading ">
    <span class="glyphicon glyphicon-stats"></span>
    QUATERLY | 
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
      <p class="c124"><span class="c5">HEALTH UNIT QUATERLY REPORT</span></p>
<a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=0
 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:24.1pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:24.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif;color:black;mso-themecolor:text1'>#<o:p></o:p></span></b></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:24.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif;color:black;mso-themecolor:text1'>Priority
  Disease<o:p></o:p></span></b></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:24.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif;color:black;mso-themecolor:text1'>Total
  Reported<o:p></o:p></span></b></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:24.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif;color:black;mso-themecolor:text1'>Total
  Laboratory Investigated within 72 hours<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:24.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif;color:black;mso-themecolor:text1'>Total
  Lab Confirmed<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:7.25pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>1<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Salmonellosis<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:8.05pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>2<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Shigella<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:7.25pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>3<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Typhoid<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:8.05pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>4<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Cholera<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:7.25pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>5<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Dysentery (Other than Shigellosis)<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:8.05pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>6<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Hepatitis<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:8.05pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>7<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>VHF<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:7.25pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>8<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Measles/Rubella<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:7.25pt'>
  <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>9<o:p></o:p></span></p>
  </td>
  <td width=169 valign=top style='width:126.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'>Others<o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 valign=top style='width:141.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormalCxSpMiddle align=center style='text-align:center;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
font-family:"Times New Roman",serif'>2.<span style='mso-spacerun:yes'>   
</span>QUARTERLY REPORT ON LABORATORY EQUIPMENT STATUS AND FUNCTIONALITY</span></b><span
style='font-family:"Times New Roman",serif'><o:p></o:p></span></p>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:solid black .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=697 colspan=8 valign=top style='width:522.7pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;background:#C6D9F1;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>2.1. Equipment
  Functionality or Status <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Equipment Type<o:p></o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Equipment Availability<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(Y/N)<o:p></o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Functionality
  Status<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(If Yes)<o:p></o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Down Time of
  Equipment over Reporting Period<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(Days)<o:p></o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Existence of
  service contract.<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(Y/N)<o:p></o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Was the equipment
  calibrated in the last quarter?<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>(Y/N)<o:p></o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Average
  turnaround response time on break downs (Days)<o:p></o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:8.0pt;line-height:107%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;line-height:
  107%;font-family:"Times New Roman",serif'>Equipment Utilization Rates<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>= (Average No of
  tests per day / Manufacturer’s through put) * 100 <i style='mso-bidi-font-style:
  normal'>where applicable</i><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>PIMA<o:p></o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>BD Presto<o:p></o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Genexpert<span
  style='background:yellow;mso-highlight:yellow'><o:p></o:p></span></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Microscope <o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Specify:<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>EID POC<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Specify:<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Chemistry:<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Specify;<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Haematology:<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Specify;<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes'>
  <td width=81 valign=top style='width:60.75pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Microbiology;<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Specify;<o:p></o:p></span></b></p>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=70 valign=top style='width:52.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=76 valign=top style='width:56.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=58 valign=top style='width:43.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=101 valign=top style='width:75.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 valign=top style='width:107.9pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
  mso-add-space:auto;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif;color:red'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormalCxSpMiddle align=center style='text-align:center;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
font-family:"Times New Roman",serif'>3.<span style='mso-spacerun:yes'>        
</span>EXTERNAL QUALITY ASSURANCE<o:p></o:p></span></b></p>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:solid black .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=709 colspan=9 valign=top style='width:531.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>3.1<span class=GramE>. .</span> EQA
  Participation &amp; Performance in Reporting Period <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:8.9pt'>
  <td width=73 rowspan=2 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Type of EQA undertaken<o:p></o:p></span></b></p>
  </td>
  <td width=78 rowspan=2 valign=top style='width:58.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Type of Personnel<o:p></o:p></span></b></p>
  </td>
  <td width=81 rowspan=2 valign=top style='width:61.05pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>No. of Participants in specified
  category<o:p></o:p></span></b></p>
  </td>
  <td width=81 rowspan=2 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Total Number of EQA panels/Isolates received<o:p></o:p></span></b></p>
  </td>
  <td width=81 rowspan=2 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid black .5pt;mso-border-left-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Total number of EQA panels/Isolates results
  dispatched<o:p></o:p></span></b></p>
  </td>
  <td width=89 colspan=2 valign=top style='width:66.65pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>No. of EQA verified panel/ Isolate
  Tested Results received<o:p></o:p></span></b></p>
  </td>
  <td width=18 rowspan=23 valign=top style='width:13.3pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=208 valign=top style='width:156.1pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:8.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Reasons for non-participation in EQA<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.1pt'>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:18.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Passed<o:p></o:p></span></b></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;background:#D9D9D9;
  padding:0in 5.4pt 0in 5.4pt;height:18.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Failed<o:p></o:p></span></b></p>
  </td>
  <td width=208 rowspan=12 valign=top style='width:156.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>01.
  HIV EQA<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>02.
  TB EQA for Microscopy <o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>TB
  EQA for Genexpert<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>03.
  Microbiology EQA<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=208 valign=top style='width:156.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-top-alt:windowtext;mso-border-left-alt:black;mso-border-bottom-alt:
  windowtext;mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Major Causes of EQA failure</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>04.
  Hep B EQA<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=208 rowspan=9 valign=top style='width:156.1pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>05.
  Malaria EQA<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21'>
  <td width=73 rowspan=3 valign=top style='width:54.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>05.
  Other <span style='color:#A6A6A6'>(specify)<o:p></o:p></span></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  color:#A6A6A6'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lab
  Personnel<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 rowspan=3 valign=top style='width:60.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Nurse<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;mso-yfti-lastrow:yes'>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Other<o:p></o:p></span></p>
  </td>
  <td width=81 valign=top style='width:61.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=81 valign=top style='width:60.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=45 valign=top style='width:33.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=44 valign=top style='width:32.7pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid black .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center'><span style='font-size:8.0pt;line-height:115%;font-family:
"Times New Roman",serif'>4.<span style='mso-spacerun:yes'>     </span>HEALTH
FACILITY BIOSAFETY &amp; BIOSECURITY<o:p></o:p></span></p>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:solid black .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:6.45pt'>
  <td width=454 colspan=3 valign=top style='width:340.25pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:6.45pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>4.1. Facility Summary on Incidents<o:p></o:p></span></b></p>
  </td>
  <td width=16 rowspan=33 valign=top style='width:11.8pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:6.45pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=240 colspan=2 rowspan=2 valign=top style='width:179.85pt;
  border:solid black 1.0pt;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:6.45pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>4.2. Summary on Facility Incident
  Management <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:7.1pt'>
  <td width=170 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:7.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Incident Category<o:p></o:p></span></b></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:7.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Type of Incident<o:p></o:p></span></b></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:7.1pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Number reported<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:4.05pt'>
  <td width=170 rowspan=3 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>1.Psychological
  incidents<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Depression<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Number
  of Resolved Incidents<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:4.05pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Mental
  confusion<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:4.05pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Complex
  mental confusion<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Number
  of Referred Incidents<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:1.65pt'>
  <td width=170 rowspan=9 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:1.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>2.Physical
  incidents<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Roof
  linkages <o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Fighting
  among staff<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=240 colspan=2 rowspan=2 valign=top style='width:179.85pt;
  border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-left-alt:
  solid black .5pt;mso-border-alt:solid black .5pt;background:#DBE5F1;
  padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>4.3. Summary on Incident prevalence
  among Personnel and Other Facility Clients</span></b><span style='font-size:
  8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Slip
  or fall<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Fainting<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Affected Persons</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Number of incidents</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Theft
  of equipment<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Laboratory<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Attack
  on the Lab<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Clinician<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Collapsing
  building<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Support
  Staff<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Bike
  rider accident<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Patient/client<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:1.3pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Fire<span
  style='mso-spacerun:yes'>     </span><o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Visitor<b
  style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:3.4pt'>
  <td width=170 rowspan=3 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>3.Chemical
  incidents<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Theft
  of chemical<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Bike
  rider<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:3.0pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Breakage
  of sample container<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Post
  master<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:3.0pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Chemical
  spillage<span style='mso-spacerun:yes'>    </span><o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Others<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:2.55pt'>
  <td width=170 rowspan=4 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-no-proof:yes'>4.Biological incidents</span><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Needle
  prick<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=240 colspan=2 valign=top style='width:179.85pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>4.4. Summary on specific causes of
  Incidents<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:2.4pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Sample
  spillage<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Specific Cause<o:p></o:p></span></b></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  font-family:"Times New Roman",serif'>Frequency<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:2.4pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Theft
  of samples<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Defective
  equipment<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:2.4pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Contact
  with VHF Sample or patient<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Hazardous
  location<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:3.05pt'>
  <td width=170 rowspan=3 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>5.Mechanical
  incidents<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Machine
  cuts<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Unsafe
  procedure<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:3.65pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Pricks/cuts
  by unused sharps<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Employee
  physical emotional condition<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.65pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:3.0pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Electric
  shock<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:2.55pt'>
  <td width=170 rowspan=3 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>6.Radiological
  incidents<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Contact
  with radiological materials<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Lack
  of skill/knowledge<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.55pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:2.4pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Theft
  of radiological materials<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Inadequate
  safeguard Equipment<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:2.4pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Poor
  disposal of radiological materials<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;height:2.9pt'>
  <td width=170 rowspan=4 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-no-proof:yes'>7.Ergonometric and medical incidents</span><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;tab-stops:53.25pt'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Posture<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Unsafe
  behavior/attitude<o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.9pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;height:2.85pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Effects
  on vision<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Unsafe
  working environment<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;height:4.85pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Effects
  on Physical Body<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:4.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;height:2.85pt'>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Death
  within lab<o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 rowspan=2 valign=top style='width:94.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Others<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;height:2.85pt'>
  <td width=170 valign=top style='width:127.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif;
  mso-no-proof:yes'>8.Others<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:134.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'>Others
  <o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;mso-yfti-lastrow:yes;height:2.85pt'>
  <td width=350 colspan=2 valign=top style='width:262.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:2.85pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Total<o:p></o:p></span></b></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:2.85pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'>Total</span></b><span
  style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;
  height:2.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>

@stop
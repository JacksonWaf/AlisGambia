@extends("layout")
@section("content")

<style>
    <!--
    /* Font Definitions */
    @font-face {
        font-family: Batang;
        panose-1: 2 3 6 0 0 1 1 1 1 1;
        mso-font-alt: \BC14\D0D5;
        mso-font-charset: 129;
        mso-generic-font-family: roman;
        mso-font-pitch: variable;
        mso-font-signature: -1342176593 1775729915 48 0 524447 0;
    }

    @font-face {
        font-family: "Cambria Math";
        panose-1: 2 4 5 3 5 4 6 3 2 4;
        mso-font-charset: 0;
        mso-generic-font-family: roman;
        mso-font-pitch: variable;
        mso-font-signature: -536870145 1107305727 0 0 415 0;
    }

    @font-face {
        font-family: Calibri;
        panose-1: 2 15 5 2 2 2 4 3 2 4;
        mso-font-charset: 0;
        mso-generic-font-family: swiss;
        mso-font-pitch: variable;
        mso-font-signature: -536870145 1073786111 1 0 415 0;
    }

    @font-face {
        font-family: "\@Batang";
        panose-1: 2 3 6 0 0 1 1 1 1 1;
        mso-font-charset: 129;
        mso-generic-font-family: roman;
        mso-font-pitch: variable;
        mso-font-signature: -1342176593 1775729915 48 0 524447 0;
    }

    /* Style Definitions */
    p.MsoNormal,
    li.MsoNormal,
    div.MsoNormal {
        mso-style-unhide: no;
        mso-style-qformat: yes;
        mso-style-parent: "";
        margin-top: 0in;
        margin-right: 0in;
        margin-bottom: 8.0pt;
        margin-left: 0in;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
    }

    span.SpellE {
        mso-style-name: "";
        mso-spl-e: yes;
    }

    .MsoChpDefault {
        mso-style-type: export-only;
        mso-default-props: yes;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
    }

    .MsoPapDefault {
        mso-style-type: export-only;
        margin-bottom: 8.0pt;
        line-height: 107%;
    }

    @page WordSection1 {
        size: 8.5in 11.0in;
        margin: 1.0in 1.0in 1.0in 1.0in;
        mso-header-margin: .5in;
        mso-footer-margin: .5in;
        mso-paper-source: 0;
    }

    div.WordSection1 {
        page: WordSection1;
    }
    -->
</style>
<div>
    <ol class="breadcrumb">
        <li><a href="{{{URL::route('user.home')}}}">{{ trans('messages.home') }}</a></li>
        <li class="active">{{ Lang::choice('messages.report',2) }}</li>
        <li class="active">HMIS Report</li>
    </ol>
</div>
<br />
<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-stats"></span>
        HMIS 108 |
        <a title="Previous Month" href="{{URL::to('/report/hmis108/'.date('Y-m',strtotime(date('Y-m',strtotime($month)).' -1 month')))}}">
            <span class="btn btn-default ion-android-arrow-back"></span></a>
        {{date('Y-M',strtotime($month))}}
        <a title="Next Month" href="{{URL::to('/report/hmis108/'.date('Y-m',strtotime(date('Y-m',strtotime($month)).' +1 month')))}}">
            <span class="btn btn-default ion-android-arrow-forward"></span></a>
    </div>
    <div class="panel-body">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
        @endif
        <div class="table-responsive">
            <p class="c124"><span class="c5">HEALTH UNIT INPATIENT MONTHLY REPORT</span></p>
            <a id="t.7bfbc9d2907142eb0f3dc0cba0b6fcbbdf40d847"></a><a id="t.0"></a>

            <!-- <div class=WordSection1>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<div align=center> -->

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=0 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:8.75pt'>
                    <td width=1146 colspan=6 valign=top style='width:859.85pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Batang",serif'>UTILIZATION
                                    OF SPECIAL SERVICES</span>
                                <o:p></o:p>
                            </b></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:1;height:8.75pt'>
                    <td width=452 valign=bottom style='width:339.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.2pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>4a.
                                    Service (Blood transfusions)<o:p></o:p></span></b></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Whole blood</span></b></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Packed cells</span></b></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Platelets</span></b></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Fresh frozen plasma</span></b></p>
                    </td>
                    <td width=154 valign=top style='width:115.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Cryo</span></b></span><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Batang",serif'> precipitates</span>
                                <o:p></o:p>
                            </b></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:2;height:8.75pt'>
                    <td width=452 valign=bottom style='width:339.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:6.0pt;margin-bottom:.0001pt;line-height:10.35pt;mso-line-height-rule:
  exactly'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Batang",serif'>1 No. of units requests<o:p></o:p></span></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['wholeblood_request']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['packedcells_request']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['platelets_request']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['ffp_request']}}
                        </p>
                    </td>
                    <td width=154 valign=top style='width:115.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['cryo_request']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:3;height:8.45pt'>
                    <td width=452 valign=bottom style='width:339.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.45pt'>
                        <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:6.0pt;margin-bottom:.0001pt;line-height:10.25pt;mso-line-height-rule:
  exactly'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Batang",serif'>2 No. of units received <o:p></o:p></span></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.45pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['wholeblood_received']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.45pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['packedcells_received']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.45pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['platelets_received']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.45pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['ffp_received']}}
                        </p>
                    </td>
                    <td width=154 valign=top style='width:115.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.45pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['cryo_received']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:4;height:8.75pt'>
                    <td width=452 valign=bottom style='width:339.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:6.0pt;margin-bottom:.0001pt;line-height:10.25pt;mso-line-height-rule:
  exactly'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Batang",serif'>3 No. of units transfused<o:p></o:p></span></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['wholeblood_transfused']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['packedcells_transfused']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['platelets_transfused']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['ffp_transfused']}}
                        </p>
                    </td>
                    <td width=154 valign=top style='width:115.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['cryo_transfused']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:8.75pt'>
                    <td width=452 valign=bottom style='width:339.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:6.0pt;margin-bottom:.0001pt;line-height:10.25pt;mso-line-height-rule:
  exactly'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Batang",serif'>3 No. of adverse blood reactions in the facility<o:p></o:p></span></p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['wholeblood_reactions']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['packedcells_reactions']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['platelets_reactions']}}
                        </p>
                    </td>
                    <td width=135 valign=top style='width:101.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['ffp_reactions']}}
                        </p>
                    </td>
                    <td width=154 valign=top style='width:115.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:8.75pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_count['cryo_reactions']}}
                        </p>
                    </td>
                </tr>
            </table>

        </div>

        <p class=MsoNormal>
            <o:p>&nbsp;</o:p>
        </p>

        <div align=center>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=0 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.55pt'>
                    <td width=333 rowspan=3 valign=top style='width:249.8pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>4b
                                    Reasons for transfusion</span></b></p>
                    </td>
                    <td width=160 colspan=4 valign=top style='width:120.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Whole blood</span></b><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>
                                <o:p></o:p>
                            </span></p>
                    </td>
                    <td width=161 colspan=4 valign=top style='width:120.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Packed cells</span></b><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>
                                <o:p></o:p>
                            </span></p>
                    </td>
                    <td width=162 colspan=5 valign=top style='width:121.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Platelets</span></b><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>
                                <o:p></o:p>
                            </span></p>
                    </td>
                    <td width=162 colspan=6 valign=top style='width:121.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Fresh frozen plasma</span></b><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt'>
                                    <o:p></o:p>
                                </span></b></p>
                    </td>
                    <td width=165 colspan=5 valign=top style='width:124.05pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Cryo</span></b></span><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Batang",serif'> precipitates</span></b><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt'>
                                    <o:p></o:p>
                                </span></b></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:1;height:11.55pt'>
                    <td width=80 colspan=2 valign=top style='width:59.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>0-4yrs</span></p>
                    </td>
                    <td width=81 colspan=2 valign=top style='width:60.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>5+yrs</span></p>
                    </td>
                    <td width=80 colspan=2 valign=top style='width:60.15pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>0-4yrs</span></p>
                    </td>
                    <td width=81 colspan=2 valign=top style='width:60.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>5+yrs</span></p>
                    </td>
                    <td width=80 colspan=2 valign=top style='width:60.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>0-4yrs</span></p>
                    </td>
                    <td width=81 colspan=3 valign=top style='width:61.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>5+yrs</span></p>
                    </td>
                    <td width=81 colspan=3 valign=top style='width:60.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>0-4yrs</span></p>
                    </td>
                    <td width=81 colspan=3 valign=top style='width:61.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>5+yrs</span></p>
                    </td>
                    <td width=81 colspan=3 valign=top style='width:60.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>0-4yrs</span></p>
                    </td>
                    <td width=84 colspan=2 valign=top style='width:63.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi'>5+yrs</span></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:2;height:11.55pt'>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>M<o:p></o:p></span></p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt'>F<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:3;height:11.1pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>1 Severe malaria<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_belowfour']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_belowfour']}}
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_abovefour']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_abovefour']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_belowfour2']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_belowfour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_abovefour2']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_abovefour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_belowfour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_belowfour3']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_abovefour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_abovefour3']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_belowfour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_belowfour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_abovefour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_abovefour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_belowfour5']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_belowfour5']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_m_abovefour5']}}
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['malaria_f_abovefour5']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:4;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>2 Obstacles<span style='mso-spacerun:yes'>   </span>
                                <o:p></o:p>
                            </span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:5;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.25pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>3 <span class=SpellE>Gynaecology</span>
                                <o:p></o:p>
                            </span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;
  height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:6;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.25pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>4 Accidents<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_belowfour']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_belowfour']}}
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_abovefour']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_abovefour']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_belowfour2']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_belowfour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_abovefour2']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_abovefour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_belowfour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_belowfour3']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_abovefour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_abovefour3']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_belowfour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_belowfour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_abovefour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_abovefour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_belowfour5']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_belowfour5']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_m_abovefour5']}}
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['accident_f_abovefour5']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:7;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>5 Cancer cases<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_belowfour']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_belowfour']}}
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_abovefour']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_abovefour']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_belowfour2']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_belowfour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_abovefour2']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_abovefour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_belowfour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_belowfour3']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_abovefour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_abovefour3']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_belowfour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_belowfour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_abovefour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_abovefour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_belowfour5']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_belowfour5']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_m_abovefour5']}}
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['cancer_f_abovefour5']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:8;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>6 <span class=SpellE>Sicklecell</span>
                                <span class=SpellE>Anaemia</span><span style='mso-spacerun:yes'>    </span>
                                <o:p></o:p>
                            </span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_belowfour']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_belowfour']}}
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_abovefour']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_abovefour']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_belowfour2']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_belowfour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_abovefour2']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_abovefour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_belowfour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_belowfour3']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_abovefour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_abovefour3']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_belowfour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_belowfour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_abovefour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_abovefour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_belowfour5']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_belowfour5']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_m_abovefour5']}}
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['sicklecells_f_abovefour5']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:9;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>7 Iron Deficiency <span class=SpellE>Anaemia</span> (IDA)<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_belowfour']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_belowfour']}}
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_abovefour']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_abovefour']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_belowfour2']}}
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_belowfour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_abovefour2']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_abovefour2']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_belowfour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_belowfour3']}}
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_abovefour3']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_abovefour3']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_belowfour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_belowfour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_abovefour4']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_abovefour4']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_belowfour5']}}
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_belowfour5']}}
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_m_abovefour5']}}
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>{{$bloodbank_reasons['IDA_f_abovefour5']}}
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:10;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>8 Other coagulations<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:11;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.35pt;mso-line-height-rule:exactly'><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>9 Other surgeries<o:p></o:p></span></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:11.55pt'>
                    <td width=333 valign=bottom style='width:249.8pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.25pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Batang",serif'>Total
                                    units of blood <span class=SpellE>Tranfused</span>
                                    <o:p></o:p>
                                </span></b></p>
                    </td>
                    <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:28.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=41 valign=top style='width:31.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=38 valign=top style='width:.4in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:28.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=39 valign=top style='width:29.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=42 colspan=2 valign=top style='width:31.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                    <td width=43 valign=top style='width:32.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.55pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>
                            <o:p>&nbsp;</o:p>
                        </p>
                    </td>
                </tr>
                <![if !supportMisalignedColumns]>
                <tr height=0>
                    <td width=500 style='border:none'></td>
                    <td width=62 style='border:none'></td>
                    <td width=57 style='border:none'></td>
                    <td width=62 style='border:none'></td>
                    <td width=59 style='border:none'></td>
                    <td width=63 style='border:none'></td>
                    <td width=58 style='border:none'></td>
                    <td width=63 style='border:none'></td>
                    <td width=59 style='border:none'></td>
                    <td width=63 style='border:none'></td>
                    <td width=58 style='border:none'></td>
                    <td width=63 style='border:none'></td>
                    <td width=58 style='border:none'></td>
                    <td width=1 style='border:none'></td>
                    <td width=62 style='border:none'></td>
                    <td width=59 style='border:none'></td>
                    <td width=1 style='border:none'></td>
                    <td width=62 style='border:none'></td>
                    <td width=59 style='border:none'></td>
                    <td width=1 style='border:none'></td>
                    <td width=63 style='border:none'></td>
                    <td width=58 style='border:none'></td>
                    <td width=1 style='border:none'></td>
                    <td width=62 style='border:none'></td>
                    <td width=64 style='border:none'></td>
                </tr>
                <![endif]>
            </table>

        </div>

        <p class=MsoNormal>
            <o:p>&nbsp;</o:p>
        </p>

        <p class=MsoNormal>
            <o:p>&nbsp;</o:p>
        </p>

    </div>
    @Stop
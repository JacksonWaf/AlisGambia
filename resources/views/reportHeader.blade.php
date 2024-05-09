@section ("reportHeader")
<style type="text/css">
    table {
        padding: 2px;
    }
</style>



<table style="padding: 0px;">
    <thead>
        <tr>
            <td colspan="12"></td>
        </tr>
</table>
<table style="text-align:center;">
    <tr>
        <td colspan="12" style="text-align:center;">

            <!-- {{ @HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '40px')) }} -->
        </td>
    </tr>
    <tr>

        <td colspan="12" style="text-align:center;"><b>
                {{ strtoupper('MINISTRY OF HEALTH') }}<br>
                <span style="font-size:14px">
                    {{ strtoupper(Auth::user()->facility->name) }}<br>
                </span>

                {{config('kblis.address-info')}}</b>
            {{config('kblis.report-name')}}
        </td>
    </tr>
    </thead>
</table>
@show
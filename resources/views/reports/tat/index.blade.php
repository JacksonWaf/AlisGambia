@extends("layout")
@section("content")

<style type="text/css">
    th,
    td {
        width: 18%;

    }
</style>
<div>
    <ol class="breadcrumb">
        <li><a href="{{{route('user.home')}}}">{{ trans('messages.home') }}</a></li>
        <li class="active"><a href="{{ route('reports.patient.index') }}">{{ Lang::choice('messages.report', 2) }}</a></li>
        <li class="active">{{ trans('messages.turnaround-time') }}</li>
    </ol>
</div>
{{ Form::open(array('route' => array('reports.aggregate.tat'), 'id' => 'prevalence_rates', 'method' => 'post')) }}
<div class="container-fluid">
    <div class="row report-filter">
        <div class="col-md-2">
            <div class="col-md-2">
                {{ Form::label('start', trans("messages.from")) }}
            </div>
            <div class="col-md-10">
                {{ Form::text('start', isset($input['start'])?$input['start']:date('Y-m-d'),
                        array('class' => 'form-control standard-datepicker')) }}
            </div>
        </div>
        <div class="col-md-2">
            <div class="col-md-2">
                {{ Form::label('to', trans("messages.to")) }}
            </div>
            <div class="col-md-10">
                {{ Form::text('end', isset($input['end'])?$input['end']:date('Y-m-d'),
                        array('class' => 'form-control standard-datepicker')) }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-3">
                {{ Form::label('test_type', Lang::choice('messages.test-type',1)) }}
            </div>
            <div class="col-md-9">
                {{ Form::select('test_type', array(0 => '-- All Tests --')+App\Models\TestType::supportTurnaoundCounts()->pluck('name','id')->toArray(),
                        isset($input['test_type'])?$input['test_type']:0, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-md-1">
            {{Form::submit(trans('messages.view'),
                    array('class' => 'btn btn-info', 'id'=>'filter', 'name'=>'filter'))}}
        </div>
        <div class="col-sm-1">
            {{Form::submit(trans('Export to Excel'), 
                    array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))}}
        </div>
        <div class="col-sm-1">
            {{Form::submit(trans('Export beyond Data'), 
                    array('class' => 'btn btn-success', 'id'=>'beyond', 'name'=>'beyond'))}}
        </div>
    </div>
</div>
{{ Form::close() }}
<br />
<div class="panel panel-primary">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-8">
                    <span class="glyphicon glyphicon-user"></span>
                    {{ trans('Turn Around Time Stats (Click Export Buttons To View More TAT Statistics)') }}
                </div>
                <div class="col-md-4">
                    <a class="btn btn-info pull-right" id="reveal" href="#" onclick="return false;" alt="{{trans('messages.show-hide')}}" title="{{trans('messages.show-hide')}}">
                        <span class="glyphicon glyphicon-eye-open"></span> {{trans('messages.show-hide')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <!-- if there are filter errors, they will show here -->
        @if (Session::has('message'))
        <div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
        @endif
        <div class="table-responsive">
            <div id="summary" class="hidden">
                <div class="table-responsive">
                    <!--  <div class="col-sm-1">
				{{Form::submit(trans('messages.export-to-word'),
		    		array('class' => 'btn btn-success', 'id'=>'word', 'name'=>'word'))}}
                        </div> -->
                    <table class="table table-bordered" id="rates">
                        <tbody>
                            <tr>
                                <th>{{Lang::choice('messages.test-type',1)}}</th>
                                <th>{{trans('messages.total-specimen')}}</th>
                                <th>Expected TAT</th>
                                <th>Actual TAT</th>
                                <th>Within TAT</th>
                                <th>Beyond TAT</th>
                                <th>{{trans('messages.tat-rates-label')}} Within</th>
                                <th>{{trans('messages.tat-rates-label')}} Beyond</th>
                            </tr>
                            @forelse($data as $datum)
                            <tr>
                                <td>{{$datum->name}}</td>
                                <td>{{$datum->total}}</td>
                                <td>{{$datum->ETAT}}</td>
                                <td>{{$datum->avgtime}}</td>
                                <td>{{$datum->Within}}</td>
                                <td>@if($datum->Beyond != 0)<a id="reject-{{$datum->Beyond}}-link" href="#new-tat-beyond-modal" title="">
                                        <span>{{$datum->Beyond}}</span>
                                    </a>@endif</td>
                                <td>{{round($datum->Within / $datum->total * 100, 2)}}</td>
                                <td>{{round($datum->Beyond / $datum->total * 100, 2)}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">{{trans('messages.no-records-found')}}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div id="highChart"></div>
    </div>
</div>
<!-- Begin HighCharts scripts -->
{{ HTML::script('highcharts/highcharts.js') }}
{{ HTML::script('highcharts/exporting.js') }}
<!-- End HighCharts scripts -->
<script type="text/javascript">
    $(document).ready(function() {
        //	Load prevalence chart
        $('#highChart').highcharts(<?php echo $chart; ?>);
    });
</script>
@stop
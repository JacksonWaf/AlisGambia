@extends("newdashboardlayout")
@section("content")
@section("content")

<div class="well firstrow list">
    <div class="col-md-12">
        {{Form::open(array('route' =>array('newdashboard.index')))}}
        <div class="col-md-3">
            {{Form::text('date_from', $dateFrom, array('class' => 'form-control standard-datepicker') )}}
        </div>
        <div class="col-md-3">
            {{Form::text('date_to', $dateTo, array('class' => 'form-control standard-datepicker') )}}
        </div>
        <div class="col-md-3">
            {{ Form::select("hubid", $hubs, Request::get('hubid'),['class'=>'form-control','id'=>'hub'])}}
        </div>
        <div class="col-md-3">
            {{ Form::button("<span class='glyphicon glyphicon-filter'> </span> ".trans('messages.view'), array('class' => 'btn btn-primary', 'id' => 'filter', 'type' => 'submit')) }}
        </div>
        {{Form::close()}}
    </div>
</div>
<div class="panel">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default">
                <b>Patients and Tests</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-people"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$patientCount}}</span>
                            <span class="stat_name">Number of patient Visits</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-flask"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$testCounts}}</span>
                            <span class="stat_name">Tests completed</span>
                        </div>

                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-plane"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$testCounts_pending}}</span>
                            <span class="stat_name">Tests Pending</span>
                        </div>

                    </div>
                </div>
            </div> <!--end of panel-->
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default"><b>Prevalences</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_b"><i class="ion-ios-personadd"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"> {{$hiv}} % </span>
                            <span class="stat_name">HIV Prevalence</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_b"><i class="ion-ios-personadd"></i></div>
                        <div class="stat_content">
                            <span class="stat_count"> {{$malaria}}% </span>
                            <span class="stat_name">Malaria Prevalence</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_b"><i class="ion-ios-personadd"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$tb}}% </span>
                            <span class="stat_name">TB Prevalence</span>
                        </div>
                    </div>
                </div>
            </div> <!--end of panel-->
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default"><b>Samples</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-medkit"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$sampleCounts}}</span>
                            <span class="stat_name">Collected at Lab</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_d"><i class="ion-ios-checkmark"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$stracker_samples}}</span>
                            <span class="stat_name">Received Through SRN</span>
                        </div>
                    </div>
                    <!-- <div class="stat_box">
                                                <div class="stat_ico color_c"><i class="ion-ios-close"></i></div>
                                                <div class="stat_content">
                                                    <span class="stat_count">{{$samplesRejected}}</span>
                                                    <span class="stat_name">Samples Rejected</span>
                                                </div>
                                            </div> -->
                    <div class="stat_box">
                        <div class="stat_ico color_a"><i class="ion-ios-flask"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$tests_rejected}}</span>
                            <span class="stat_name">Rejected</span>
                        </div>

                    </div>
                </div>
            </div><!--end of panel-->
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default"><b>Biosafety & Biosecurity Incidents</b>
                <div class="panel-body">
                    <div class="stat_box">
                        <div class="stat_ico color_g"><i class="ion-nuclear"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">{{$countbbincidents_all}}</span>
                            <span class="stat_name">Number of BB incidents</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_g"><i class="ion-nuclear"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">
                                {{$countbbincidents_major_dated}}
                                <?php if (($countbbincidents_all) > 0) { ?>
                                    ({{round (($countbbincidents_major_dated/$countbbincidents_all*100),2) }} %)
                                <?php } ?>
                            </span>
                            <span class="stat_name">Major incidents</span>
                        </div>
                    </div>
                    <div class="stat_box">
                        <div class="stat_ico color_g"><i class="ion-nuclear"></i></div>
                        <div class="stat_content">
                            <span class="stat_count">
                                {{$countbbincidents_minor_dated}}
                                <?php if (($countbbincidents_all) > 0) { ?>
                                    ({{round (($countbbincidents_minor_dated/$countbbincidents_all*100),2) }} %)
                                <?php } ?>
                            </span>
                            <span class="stat_name">Minor incidents</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading ">
        <div class="row less-gutter">
            <div class="col-md-8">
                <span class="glyphicon glyphicon-user"></span>
                {{ trans('messages.positivity-rates') }}
            </div>
            <div class="col-md-4">
                <a class="btn btn-info pull-right" id="reveal" href="#" onclick="return false;" alt="{{trans('messages.show-hide')}}" title="{{trans('messages.show-hide')}}">
                    <span class="glyphicon glyphicon-eye-open"></span> {{trans('messages.show-hide')}}</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <div id="summary" class="hidden">
            <div class="table-responsive">
                <table class="table table-bordered" id="rates">
                    <tbody>
                        <tr>
                            <th>{{Lang::choice('messages.test-type',1)}}</th>
                            <th>{{trans('messages.total-specimen')}}</th>
                            <th>{{trans('messages.positive')}}</th>
                            <th>{{trans('messages.negative')}}</th>
                            <th>{{trans('messages.prevalence-rates-label')}}</th>
                        </tr>
                        @forelse($data as $datum)
                        <tr>
                            <td>{{$datum->test}}</td>
                            <td>{{$datum->total}}</td>
                            <td>{{$datum->positive}}</td>
                            <td>{{$datum->negative}}</td>
                            <td>{{$datum->rate}}</td>
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
@endsection()
@stop
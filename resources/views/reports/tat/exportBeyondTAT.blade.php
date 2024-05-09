<html>
<head>
{{ HTML::style('css/bootstrap.min.css') }}
{{ HTML::style('css/bootstrap-theme.min.css') }}
</head>
<body>
    <style>
  table, th, td {
    border: 1px solid black;
    padding: 10px;
  }
</style>
<div id="content">
    <div class="panel panel-primary">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-8">
                    <span class="glyphicon glyphicon-user"></span>
                    TEST TYPE TURNAROUND TIME
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered"  width="100%">
        <tbody align="left">
            <<tr>
                            <th>{{Lang::choice('Patient',1)}}</th>
                            <th>{{Lang::choice('messages.test-type',1)}}</th>
                            <th>{{Lang::choice('Time accepted',1)}}</th>
                            <th>{{trans('Time completed')}}</th>
                            <th>Actual TAT</th>
                        </tr>
                        @forelse($databeyond as $datum)
                        <tr>
                            <td>{{$datum->patient}}</td>
                            <td>{{$datum->name}}</td>
                            <td>{{$datum->time_accepted}}</td>
                            <td>{{$datum->time_completed}}</td>
                            <td>{{$datum->avgtime}}</td>
                           
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
</body>
</html>
@extends("layout")
@section("content")
    <div>
        <ol class="breadcrumb">
            <li><a href="{{{route('user.home')}}}">{{trans('messages.home')}}</a></li>
            <li><a href="{{ route('bloodbank.index') }}">{{ Lang::choice('messages.blood-bank',2) }}</a></li>
            <li class="active">{{trans('messages.blood-transfer')}}</li>
        </ol>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <div class="container-fluid">
                <div class="row less-gutter">
                    <div class="col-md-11">
                        <span class="glyphicon glyphicon-filter"></span>{{trans('messages.blood-transfer')}}
                    </div>
                    <div class="col-md-1">
                        <a class="btn btn-sm btn-primary pull-right" href="#" onclick="window.history.back();return false;"
                           alt="{{trans('messages.back')}}" title="{{trans('messages.back')}}">
                            <span class="glyphicon glyphicon-backward"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <!-- if there are creation errors, they will show here -->
            @if($errors->all())
                <div class="alert alert-danger">
                    {{ HTML::ul($errors->all()) }}
                </div>
            @endif
            {{ Form::open(array('route' => 'bloodbank.transfer_update')) }}
            {{ Form::hidden('blood_bank_id', $specimen->id) }}
            <div class="panel-body">
                <div class="display-details">
                    <p><strong>{{ Lang::choice('messages.blood-unit',1) }}</strong>
                        {{$specimen->unit_no}}</p>
                    <p><strong>Blood component</strong>
                        {{$specimen->blood_component}}</p>
                </div>
                <div class="form-group">
                {{ Form::label('transfer_reason', 'Reason for Transfer') }}
                {{ Form::textarea('transfer_reason', old('transfer_reason'), array('class' => 'form-control')) }}
                @if ($errors->has('transfer_reason'))
                    <span class="text-danger">
                            <strong>{{ $errors->first('transfer_reason') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('destination', 'Blood destination') }}
                {{ Form::text('destination', old('destination'), array('class' => 'form-control')) }}
                @if ($errors->has('group'))
                    <span class="text-danger">
                            <strong>{{ $errors->first('destination') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('reference', 'Person Talked to') }}
                {{ Form::text('reference', old('reference'), array('class' => 'form-control')) }}
                @if ($errors->has('reference'))
                    <span class="text-danger">
                            <strong>{{ $errors->first('reference') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('date', 'Transfer date') }}
                {{ Form::text('date', old('date'), array('class' => 'form-control standard-datepicker')) }}
                @if ($errors->has('date'))
                    <span class="text-danger">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                @endif
            </div>
                <div class="form-group actions-row">
                    {{ Form::button("<span class='glyphicon glyphicon-thumbs-down'></span> ".trans('messages.save'),
                        ['class' => 'btn btn-success', 'onclick' => 'submit()']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop

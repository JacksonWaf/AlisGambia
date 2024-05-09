<!-- move to dcocumentation and bring back -->
<div class="display-details">
    {{ Form::hidden('specimen_id', $specimen->id) }}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <strong>{{ Lang::choice('messages.specimen-type',2) }}</strong>
            </div>
            <div class="col-md-8">
                {{ Form::select('specimen_type_id', $specimenTypes->pluck('name','id'),
                    array($specimen->specimen_type_id), array('class' => 'form-control')) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>{{trans('messages.specimen-number')}}</strong>
            </div>
            <div class="col-md-8">
                {{$specimen->id}}
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-4">
                <strong>{{trans('Sample Collected by:')}}</strong>
            </div>
            <div class="col-md-8">
                <input class="form-control" name="sample_obtainer" type="text" value="{{$specimen->sample_obtainer}}">
            </div>
        </div><br/>
        <div class="row">
            <div class="col-md-4">
                <strong>{{trans('messages.time-specimen-collected')}}</strong>
            </div>
            <div class="col-md-8">
                <input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" 
                    name="collection_date" type="text" id="collection-date" value="{{$specimen->time_collected}}">
            </div>
        </div><br/>
        <div class="row hidden">
            <div class="col-md-4">
                <strong>{{trans('messages.time-collected')}}</strong>
            </div>
            <div class="col-md-8">
                {{$specimen->time_collected}}
                 <?php $date = date('Y-m-d H:i:s');  echo $date; ?>
            </div>
        </div><br />
    </div>
</div>

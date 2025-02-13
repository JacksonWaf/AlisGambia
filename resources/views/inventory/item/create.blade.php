@extends("layout")
@section("content")
<div>
	<ol class="breadcrumb">
	  <li><a href="{{{route('user.home')}}}">{{trans('messages.home')}}</a></li>
       <li><a href="{{{route('item.index')}}}">{{ Lang::choice('messages.item', 2) }}</a></li>
	 	  <li class="active">{{ trans('messages.new').' '.Lang::choice('messages.item', 1) }}</li>
	</ol>
</div>
@if (Session::has('message'))
	<div class="alert alert-info">{{ trans(Session::get('message')) }}</div>
@endif
@if($errors->all())
                <div class="alert alert-danger">
                    {{ HTML::ul($errors->all()) }}
                </div>
@endif
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-user"></span>
		{{ Lang::choice('messages.item', 2) }}
	</div>
	<div class="panel-body">
		   {{ Form::open(array('route' => 'item.store', 'id' => 'form-store_items')) }}

            <div class="form-group">
                {{ Form::label('name', Lang::choice('messages.name', 1)) }}
                <!-- {{ Form::text('name', old('name'), array('class' => 'form-control', 'rows' => '2')) }} -->
                <input list="browsers" name="name" class="form-control col-sm-4" placeholder="Click for options or write">
                    <datalist id="browsers">
                      <option value="Neonatal Collection Bundles">
                      <option value="GXP Collection Bundles">
                      <option value="Thermal Printer paper">
                      <option value="M-PIMA Catridges">
                      <option value="GXP EID HIV Catridges">
                    </datalist>
            </div>
            <div class="form-group">
                {{ Form::label('unit', trans('messages.unit')) }}
                {{ Form::select('unit', $metrics, old('unit'),array('class' => 'form-control', 'rows' => '2')) }}
            </div> 
            <div class="form-group">
                {{ Form::label('min_level', trans('messages.min-level')) }}
                {{ Form::text('min_level', old('min_level'),array('class' => 'form-control', 'rows' => '2')) }}
            </div>
            <div class="form-group">
                {{ Form::label('max_level', trans('messages.max-level')) }}
                {{ Form::text('max_level', old('max_level'),array('class' => 'form-control', 'rows' => '2')) }}
            </div>
             <div class="form-group">
                {{ Form::label('storage_req', trans('messages.storage')) }}
                {{ Form::textarea('storage_req', old('storage_req'), array('class' => 'form-control', 'rows' => '2')) }}
            </div>
             <div class="form-group">
                {{ Form::label('remarks', trans('messages.remarks')) }}
                {{ Form::textarea('remarks', old('remarks'), array('class' => 'form-control', 'rows' => '2')) }}
            </div>

            <div class="form-group actions-row">
                    {{ Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save'),
                        array('class' => 'btn btn-primary', 'onclick' => 'submit()')) }}
            </div>
        {{ Form::close() }}
	</div>

</div>
@stop

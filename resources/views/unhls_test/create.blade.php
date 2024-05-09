@extends("layout")
@section("content")

<div>
    <ol class="breadcrumb">
        <li><a href="{{{route('user.home')}}}">{{trans('messages.home')}}</a></li>
        <li>
            <a href="{{ route('unhls_test.index') }}">{{ Lang::choice('messages.test',2) }}</a>
        </li>
        <li class="active">{{trans('messages.new-test')}}</li>
    </ol>
</div>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <div class="container-fluid">
            <div class="row less-gutter">
                <div class="col-md-11">
                    <span class="glyphicon glyphicon-adjust"></span>{{trans('messages.new-test')}}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-sm btn-primary pull-right" href="#" onclick="window.history.back();return false;" alt="{{trans('messages.back')}}" title="{{trans('messages.back')}}">
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
        {{ Form::open(array('route' => 'submit_test', 'id' => 'form-new-test')) }}
        <input type="hidden" name="_token" value="{{ Session::token() }}"><!--to be removed function for csrf_token -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{trans("messages.patient-details")}}</h3>
                        </div>
                        <div class="panel-body inline-display-details">
                            <span><strong>{{trans("messages.patient-number")}}</strong> {{ $patient->patient_number }}</span>
                            <!--		<span><strong>{{ trans('messages.nin') }}</strong> {{ $patient->nin }}</span> -->
                            <span><strong>{{ Lang::choice('messages.name',1) }}</strong> {{ $patient->name }}</span>
                            <span><strong>{{trans("messages.age")}}</strong> {{ $patient->getAge() }}</span>
                            <span><strong>{{trans("messages.gender")}}</strong>
                                {{ $patient->gender==0?trans("messages.male"):trans("messages.female") }}</span>
                            <span><strong>{{trans('messages.ulin')}}</strong></span>
                            <span>
                                {{ Form::text('ulin', '',
                        array('class' => 'form-control', 'readonly' =>'true', 'placeholder' => 'ULIN Auto generated upon succesfull save!')) }}
                            </span>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <!-- <div class="col-md-4">
                                <a class="btn btn-info pull-left active" id="reveal" href="#" onclick="return false;" alt="{{trans('messages.show-hide')}}" title="{{trans('messages.show-hide')}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Click to capture TB Patient details</a>
                            </div> -->
                            <br>
                            <br>
                            <div id="summary" class="hidden">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Required TB Patient Information</h3>
                                    </div>
                                    <div class="panel-body inline-display-details">
                                        <div class="form-group">

                                            <div class="form-group">
                                                {{ Form::label('presumptive_no','Presumptive No:', array('text-align' => 'right')) }}
                                                {{ Form::text('presumptive_no', old('presumptive_no'), array('class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('district_no','District No:', array('text-align' => 'right')) }}
                                                {{ Form::text('district_no', old('district_no'), array('class' => 'form-control')) }}
                                            </div>
                                            <div><span><strong>Examination Type</strong></span></div>
                                            <br>
                                            <div class="form-group">
                                                <span><strong>Diagnosis</strong></span>
                                                <div class="radio-inline">{{ Form::radio('tb_diagnosis', 'Pre-Rx', false) }} <span class="input-tag">Pre-Rx</span></div>
                                                <div class="radio-inline">{{ Form::radio("tb_diagnosis", 'Relapse', false) }} <span class="input-tag">Relapse</span></div>
                                                <div class="radio-inline">{{ Form::radio("tb_diagnosis", 'Default', false) }} <span class="input-tag">Default</span></div>
                                                <div class="radio-inline">{{ Form::radio("tb_diagnosis", 'Lost to follow up', false) }} <span class="input-tag">Lost to follow up</span></div>
                                                <div class="radio-inline">{{ Form::radio("tb_diagnosis", 'Re-treatment', false) }} <span class="input-tag">Re-treatment</span></div>
                                                <div class="radio-inline">{{ Form::radio("tb_diagnosis", 'Failure', false) }} <span class="input-tag">Failure</span></div>
                                                <div class="radio-inline">{{ Form::radio("tb_diagnosis", 'N/A', false) }} <span class="input-tag">N/A</span></div>

                                            </div>
                                            <div class="form-group">
                                                <span><strong>Follow up</strong></span>
                                                <div class="radio-inline">{{ Form::radio('follow_up', '2 months', false) }} <span class="input-tag">2 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '3 months', false) }} <span class="input-tag">3 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '4 months', false) }} <span class="input-tag">4 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '5 months', false) }} <span class="input-tag">5 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '6 months', false) }} <span class="input-tag">6 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '7 months', false) }} <span class="input-tag">7 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '8 months', false) }} <span class="input-tag">8 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", '9 months', false) }} <span class="input-tag">9 months</span></div>
                                                <div class="radio-inline">{{ Form::radio("follow_up", 'N/A', false) }} <span class="input-tag">N/A</span></div>

                                            </div>
                                            <span><strong>Type of Patient</strong></span>
                                            <br><br>
                                            <div class="row col-sm-12">
                                                <div class="radio-inline col-sm-2">{{ Form::radio('patient_type', 'HIV Positive', false) }} <span class="input-tag">HIV Positive</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Children (0-14 years)', false) }} <span class="input-tag">Children (0-14 years)</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Diabetic', false) }} <span class="input-tag">Diabetic</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Contact of DR TB', false) }} <span class="input-tag">Contact of DR TB</span></div>
                                            </div>
                                            <div class="row col-sm-12">
                                                <div class="radio-inline col-sm-2">{{ Form::radio('patient_type', 'Smear Pos at 2 months', false) }} <span class="input-tag">Smear Pos at 2 months</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Treatment Failure', false) }} <span class="input-tag">Treatment Failure</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Relapse', false) }} <span class="input-tag">Relapse</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Lost to follow up', false) }} <span class="input-tag">Lost to follow up</span></div>
                                            </div>
                                            <div class="row col-sm-12">
                                                <div class="radio-inline col-sm-2">{{ Form::radio('patient_type', 'Health Workers', false) }} <span class="input-tag">Health Workers</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Pregnant/Lactating mothers', false) }} <span class="input-tag">Pregnant</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Prisoners & Refugees', false) }} <span class="input-tag">Prisoners & Refugees</span></div>
                                                <div class="radio-inline col-sm-2">{{ Form::radio("patient_type", 'Others', false) }} <span class="input-tag">Others</span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span><strong>HIV Status</strong></span>
                                            <div class="radio-inline">{{ Form::radio('tb_hiv_status', 'Positive', false) }} <span class="input-tag">Positive</span></div>
                                            <div class="radio-inline">{{ Form::radio("tb_hiv_status", 'Negative', false) }} <span class="input-tag">Negative</span></div>
                                            <div class="radio-inline">{{ Form::radio("tb_hiv_status", 'Unknown', false) }} <span class="input-tag">Unknown</span></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- <div class="col-md-4">
                                <a class="btn btn-info pull-left" id="transfusion" href="#" onclick="return false;" alt="{{trans('messages.show-hide')}}" title="{{trans('messages.show-hide')}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Click to capture Patient Blood transfusion details</a>
                            </div> -->
                            <br>
                            <br>
                            <div id="blood-transfusion" class="hidden">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Required Patient Information</h3>
                                    </div>
                                    <div class="panel-body inline-display-details">
                                        <div class="form-group">

                                            <div class="form-group">
                                                <span><strong>Reasons for Transfusion</strong></span>
                                                <div class="radio-inline">{{ Form::radio('reason', 'Malaria', false) }} <span class="input-tag">Malaria</span></div>
                                                <div class="radio-inline">{{ Form::radio("reason", 'sickle-cell-anaemia', false) }} <span class="input-tag">Sickle cell Anaemia</span></div>
                                                <div class="radio-inline">{{ Form::radio("reason", 'Pregnancy-related', false) }} <span class="input-tag">Pregnancy-related</span></div>
                                                <div class="radio-inline">{{ Form::radio("reason", 'Trauma', false) }} <span class="input-tag">Trauma</span></div>
                                                <div class="radio-inline">{{ Form::radio("reason", 'Cancer', false) }} <span class="input-tag">Cancer</span></div>
                                                <div class="radio-inline">{{ Form::radio("reason", 'Accident', false) }} <span class="input-tag">Accident</span></div>
                                                <div class="radio-inline">{{ Form::radio("reason", 'IDA', false) }} <span class="input-tag">Iron Deficiency Anaemia</span></div>

                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('other_reasons','Other', array('text-align' => 'right')) }}
                                                {{ Form::text('other_reasons', old('other_reasons'), array('class' => 'form-control')) }}
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <span><strong>History of previous transfusion</strong></span>
                                                    <div class="radio-inline">{{ Form::radio('transfusion_history', 'NO', false) }} <span class="input-tag">NO</span></div>
                                                    <div class="radio-inline">{{ Form::radio("transfusion_history", 'YES', false) }} <span class="input-tag">YES</span></div>
                                                </div>
                                                <div class="col-md-6">
                                                    {{ Form::label('date','Date of transfusion', array('text-align' => 'right', 'class' => 'col-md-offset-1')) }}
                                                    {{ Form::text('date', old('date'), array('class' => 'form-control col-md-offset-2 standard-datepicker')) }}
                                                </div>
                                            </div>
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">If patient is female</legend>
                                                <div class="form-group">
                                                    {{ Form::label('pregnancies','No. of pregnancies', array('text-align' => 'right')) }}
                                                    {{ Form::text('pregnancies', old('pregnancies'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('still_birth','No. of still births', array('text-align' => 'right')) }}
                                                    {{ Form::text('still_birth', old('still_birth'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    <span>Jaundiced babies</span>
                                                    <div class="radio-inline">{{ Form::radio('jaundiced_babies', 'NO', false) }} <span class="input-tag">NO</span></div>
                                                    <div class="radio-inline">{{ Form::radio("jaundiced_babies", 'YES', false) }} <span class="input-tag">YES</span></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">Blood units</legend>
                                                <br><br>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <span><strong>Type</strong></span>
                                                        <div class="radio-inline">{{ Form::radio('type', 'Packed cells', false) }} <span class="input-tag">Packed cells</span></div>
                                                        <div class="radio-inline">{{ Form::radio("type", 'Whole blood', false) }} <span class="input-tag">Whole blood</span></div>
                                                        <div class="radio-inline">{{ Form::radio("type", 'FFP', false) }} <span class="input-tag">FFP</span></div>
                                                        <div class="radio-inline">{{ Form::radio("type", 'CRYO', false) }} <span class="input-tag">CRYO</span></div>
                                                        <div class="radio-inline">{{ Form::radio('type', 'Platelets', false) }} <span class="input-tag">Platelets</span></div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('units_requested','Units_requested', array('text-align' => 'right')) }}
                                                        {{ Form::text('units_requested', old('units_requested'), array('class' => 'form-control')) }}
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                        </li>
                        <li class="nav-item">
                            <!-- <div class="col-md-8">
                                <a class="btn btn-info pull-left" id="hpv" href="#" onclick="return false;" alt="{{trans('messages.show-hide')}}" title="{{trans('messages.show-hide')}}">
                                    <span class="glyphicon glyphicon"></span> Click to capture HPV details</a>
                            </div> -->
                            <br>
                            <br>
                            <div id="hpv-details" class="hidden">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Required Patient Information</h3>
                                    </div>
                                    <div class="panel-body inline-display-details">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <span>HIV Status</span>
                                                <div class="radio-inline">{{ Form::radio('hiv_status', '0', true) }} <span class="input-tag">Negative</span></div>
                                                <div class="radio-inline">{{ Form::radio("hiv_status", '1', false) }} <span class="input-tag">Positive</span></div>
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('art_number','ART Number', array('text-align' => 'right')) }}
                                                {{ Form::text('art_number', old('art_number'), array('class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('clinic_id','Other clinic ID', array('text-align' => 'right')) }}
                                                {{ Form::text('clinic_id', old('clinic_id'), array('class' => 'form-control')) }}
                                            </div>
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border"><strong>SECTION C:</strong> Next of Kin's details</legend>
                                                <div class="form-group">
                                                    {{ Form::label('nok_name','Name', array('text-align' => 'right')) }}
                                                    {{ Form::text('nok_name', old('nok_name'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('nok_relationship','Relationship', array('text-align' => 'right')) }}
                                                    {{ Form::text('nok_relationship', old('nok_relationship'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('nok_mobile','Mobile', array('text-align' => 'right')) }}
                                                    {{ Form::text('nok_mobile', old('nok_mobile'), array('class' => 'form-control')) }}
                                                </div>
                                            </fieldset>
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border"><strong>SECTION D:</strong> History</legend>

                                                <div class="form-group">
                                                    <span>Have you been screened for cervical Cancer previously?</span>
                                                    <div class="radio-inline">{{ Form::radio('screened_status', 'NO', false) }} <span class="input-tag">NO</span></div>
                                                    <div class="radio-inline">{{ Form::radio("screened_status", 'YES', false) }} <span class="input-tag">YES</span></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border"><strong>SECTION E:</strong>Previous cervical cancer screening and diagnostic method</legend>
                                                <div class="form-group">
                                                    <span><strong>Choose</strong></span>
                                                    <div class="radio-inline">{{ Form::radio('previous_diagnostic_method', 'HPV', false) }} <span class="input-tag">HPV</span></div>
                                                    <div class="radio-inline">{{ Form::radio("previous_diagnostic_method", 'VIA', false) }} <span class="input-tag">VIA</span></div>
                                                    <div class="radio-inline">{{ Form::radio("previous_diagnostic_method", 'PAP Smear', false) }} <span class="input-tag">PAP Smear</span></div>
                                                    <div class="radio-inline">{{ Form::radio("previous_diagnostic_method", 'Biopsy', false) }} <span class="input-tag">Biopsy</span></div>
                                                    <div class="radio-inline">{{ Form::radio("previous_diagnostic_method", 'Colposcopy', false) }} <span class="input-tag">Colposcopy</span></div>

                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('other_method','Other(Specify)', array('text-align' => 'right')) }}
                                                    {{ Form::text('other_method', old('other_method'), array('class' => 'form-control')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('previous_screening_date','Date of previous screening', array('text-align' => 'right')) }}
                                                    {{ Form::text('previous_screening_date', old('previous_screening_date'), array('class' => 'form-control standard-datepicker')) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('previous_screening_result','Previous result', array('text-align' => 'right')) }}
                                                    {{ Form::text('previous_screening_result', old('previous_screening_result'), array('class' => 'form-control')) }}
                                                </div>

                                            </fieldset>
                                            <fieldset class="scheduler-border">
                                                <legend class="scheduler-border"><strong>SECTION F:</strong> SPECIMEN COLLECTION</legend>
                                                <div class="form-group">
                                                    <span><strong>Specimen type</strong></span>
                                                    <div class="radio-inline">{{ Form::radio('hpv_specimen_type', 'Brush', false) }} <span class="input-tag">Brush</span></div>
                                                    <div class="radio-inline">{{ Form::radio("hpv_specimen_type", 'swab', false) }} <span class="input-tag">Swab</span></div>
                                                    <div class="radio-inline">{{ Form::radio("hpv_specimen_type", 'Biopsy', false) }} <span class="input-tag">Biopsy</span></div>
                                                    <div class="radio-inline">{{ Form::radio("hpv_specimen_type", 'Other', false) }} <span class="input-tag">Other</span></div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="sample_collection_date">Date and Time of Sample Collection</label>
                                                    <input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="sample_collection_date" type="text" id="sample_collection_date" value="{{$collectionDate}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_recieved_by_hw">Date and Time sample recieved by Health worker</label>
                                                    <input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="date_recieved_by_hw" type="text" id="date_recieved_by_hw" value="{{$collectionDate}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_recieved_by_lab">Date and Time sample recieved by Laboratory</label>
                                                    <input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="date_recieved_by_lab" type="text" id="date_recieved_by_lab" value="{{$collectionDate}}">
                                                </div>

                                            </fieldset>

                                        </div>
                                    </div>
                        </li>
                    </ul>

                    <div class="form-group">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{"Clinical Information and Sample Information"}}</h3>
                            </div>
                            <div class="panel-body inline-display-details">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::hidden('patient_id', $patient->id) }}
                                        {{ Form::label('visit_type', trans("messages.visit-type")) }}
                                        {{ Form::select('visit_type', ['0' => trans("messages.out-patient"),'1' => trans("messages.in-patient"),'2' => trans("messages.refferrals")], null,
                                                 array('class' => 'form-control')) }}
                                        @if ($errors->has('visit_type'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('visit_type') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- <div class="form-group">
											{{ Form::label('ward_id','Ward/Clinic/Health Unit') }}
                                    {{ Form::select('ward_id', [' ' => '- -'], Illuminate\Support\Facades\Request::get('ward_id'),
                                    array('class' => 'form-control','id'=>'ward_dropdown_id','name'=>'ward_dropdown')) }}
                                        </div> -->
                                    <div class="form-group">
                                        {{ Form::label('ward_id','Ward/Clinic/Health Unit') }}
                                        {{ Form::select('ward_id', $ward, Illuminate\Support\Facades\Request::get('ward_id'),
                                            array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('bed_no','Bed No:', array('text-align' => 'right')) }}
                                        {{ Form::text('bed_no', old('bed_no'), array('class' => 'form-control')) }}
                                    </div>
                                    <!--  <div class="form-group">
                                            {{ Form::label('facility','Facility Name:') }}
                                            {{ Form::select('facility', $facilities, Illuminate\Support\Facades\Request::get('facility'), array('class' => 'form-control')) }}
                                        </div>  -->
                                    <div class="form-group">
                                        {{ Form::label('facility','Source Facility Name:') }}
                                        {{ Form::select('facility', $facilities, null, ['class' => 'form-control select2 select2-hidden-accessible', 'multiple'=>"",'style'=>'width: 300px;', 'tabindex'=>'"-1"', 'aria-hidden'=>'"true"', 'data-placeholder'=>'Select facility']) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('sample_tracker_barcode_1','Sample Tracker Barcode:', array('text-align' => 'right')) }}
                                        {{ Form::text('sample_tracker_barcode', old('sample_tracker_barcode'), array('class' => 'form-control')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('facility_lab_number','Facility Lab No:', array('text-align' => 'right')) }}
                                        {{ Form::text('facility_lab_number', old('facility_lab_number'), array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('clinical_notes','Clinical Notes' ) }}
                                        {{ Form::textarea('clinical_notes', old('clinical_notes'), array('class' => 'form-control', 'rows' => '2')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('urgency', 'Type of request') }}
                                        <div>{{ Form::radio('urgency', '0', true) }}
                                            <span class="input-tag">Normal</span>
                                        </div>
                                        <div>{{ Form::radio("urgency", '1', false) }}
                                            <span class="input-tag">Emergency</span>
                                        </div>
                                        @if ($errors->has('urgency'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('urgency') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('previous_therapy','Previous Therapy') }}
                                        {{ Form::text('previous_therapy', old('previous_therapy'), array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('current_therapy','Current Therapy', array('text-align' => 'right')) }}
                                        {{ Form::text('current_therapy', old('current_therapy'), array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('clinician', 'Test Requested By',array('class' => 'required')) }}
                                        <!-- {{ Form::select('clinician', $clinicians, null,
                                            array('class' => 'form-control','id'=>'clinician_dropdown_id')) }} -->
                                        {{ Form::select('clinician', $clinicians, null, ['class' => 'form-control select2 select2-hidden-accessible', 'multiple'=>"",'style'=>'width: 200px;', 'tabindex'=>'"-1"', 'aria-hidden'=>'"true"', 'data-placeholder'=>'Select clinician','id'=>'clinician_dropdown_id']) }}
                                    </div>
                                    <!--    <div class="form-group">
											{{ Form::label('intern', 'Intern Doc') }}
                                    {{ Form::text('intern', old('intern'),
                                    array('class' => 'form-control')) }}
                                        </div> -->
                                    <div id="other_clinician" class="form-group text-danger " style="display:none">
                                        {{ Form::label('other_clinician', 'Other Clinician',array('class' => 'required')) }}
                                        {{Form::text('other_clinician', old('other_clinician'), array('class' => 'form-control', 'placeholder' => 'Please enter Clinician if other' )) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('cadre', 'Cadre') }}
                                        {{Form::text('cadre', old('cadre'), array('class' => 'form-control','id'=>'clinician_cadre_id',
                                            'name'=>'clinician_cadre'))}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('phone_contact', 'Phone Contact',array('class' => 'required')) }}
                                        {{Form::text('phone_contact', old('phone_contact'), array('class' => 'form-control',
                                            'id'=>'clinician_phone_id','name'=>'clinician_phone'))}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('email', 'E-mail') }}
                                        {{Form::email('email', Auth::user()->email, array('class' => 'form-control', 'id'=>'clinician_email_id',
                                            'name'=>'clinician_email'))}}
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
										<div class="form-group">
											{{ Form::label('hospitalized', 'Hospitalized for more than 48 hours') }}
                                    <div>{{ Form::radio('hospitalized', '1', false) }}
                                    <span class="input-tag">Yes</span></div>
                                    <div>{{ Form::radio("hospitalized", '0', false) }}
                                    <span class="input-tag">No</span></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
{{ Form::label('on_antibiotics', 'Has the patient been on antibiotics during the infection') }}
                                    <div>{{ Form::radio('on_antibiotics', '1', false) }}
                                    <span class="input-tag">Yes</span></div>
                                    <div>{{ Form::radio("on_antibiotics", '0', false) }}
                                    <span class="input-tag">No</span></div>
                                </div>
                            </div> -->
                                <div class="form-pane panel panel-default">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{Form::label('specimen_type', 'Sample Type')}}
                                            {{ Form::select('specimen_type', $specimenType,
                                                Illuminate\Support\Facades\Request::get('specimenType'),
                                                ['class' => 'form-control specimen-type']) }}
                                        </div>
                                        <div class="form-group">
                                            <label for="collection_date">Time of Sample Collection</label>
                                            <input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="collection_date" type="text" id="collection-date" value="{{$collectionDate}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="reception_date">Time Sample was Received in Lab</label>
                                            <input class="form-control" data-format="YYYY-MM-DD HH:mm" data-template="DD / MM / YYYY HH : mm" name="reception_date" type="text" id="reception-date" value="{{$receptionDate}}">
                                        </div>
                                        <!-- <div class="form-group">
                                                {{Form::label('test_type_category', 'Lab Section')}}
                                                {{ Form::select('test_type_category', $testCategory,
                                                Illuminate\Support\Facades\Request::get('testCategory'),
                                                ['class' => 'form-control test-type-category']) }}
                                            </div> -->
                                    </div>
                                    <div class="col-md-6 test-type-list">
                                    </div>
                                    <div class="col-md-12">
                                        <a class="btn btn-default add-test-to-list" href="javascript:void(0);" data-measure-id="0" data-new-measure-id="">
                                            <span class="glyphicon glyphicon-plus-sign"></span>Add Test to List</a>
                                    </div>
                                </div>
                                <div class="form-pane panel panel-default test-list-panel">
                                    <div class=" test-list col-md-12">
                                        <div class="col-md-4">
                                            <b>Specimen</b>
                                        </div>
                                        <!-- <div class="col-md-4">
                                                <b>Lab Section</b>
                                            </div> -->
                                        <div class="col-md-4">
                                            <div class="col-md-11"><b>Test</b></div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    @if ($errors->has('testtypes'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('testtypes') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group hidden hiv-purpose col-md-12">
                                    {{Form::label('hiv_purpose', 'Please select the purpose of HIV test', array('class' => 'required'))}}
                                    {{Form::select('hiv_purpose',['' => '----Select purpose of H.I.V----', 'pmtct' => 'PMTCT', 'hct' => 'HCT', 'smc' => 'SMC', 'qc' => 'Quality Control', 'clinical_diagnosis' => 'Clinical Diagnosis', 'repeat_test' => 'Repeat test', 'test_for_verification' => 'Test for verification', 'inconclusive_result' => 'Inconclusive Result', 'dna_confirmed_test' => 'DNA confirmed Test', 'eqa' => 'EQA'])}}
                                </div>
                            </div>
                        </div>
                    </div> <!--div that closes the panel div for clinical and sample information -->

                    <div class="form-group actions-row">
                        {{ Form::button("<span class='glyphicon glyphicon-save'></span> ".trans('messages.save-test'),
                                ['class' => 'btn btn-primary', 'onclick' => 'submit()', 'alt' => 'save_new_test']) }}
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>

<div class="hidden test-list-loader">
    <div class="col-md-12 new-test-list-row">
        <div class="col-md-4 specimen-name">
        </div>
        <!-- <div class="col-md-4 test-type-category-name">
            </div> -->
        <div class="col-md-4">
            <div class="col-md-11 test-type-name">
                <input class="specimen-type-id" type="hidden">
                <input class="test-type-id" type="hidden">
            </div>
            <button class="col-md-1 delete-test-from-list close" aria-hidden="true" type="button" title="{{trans('messages.delete')}}">×</button>
        </div>
    </div><!-- Test List Item -->
</div><!-- Test List Item Loader-->

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();

    });
</script>
@stop
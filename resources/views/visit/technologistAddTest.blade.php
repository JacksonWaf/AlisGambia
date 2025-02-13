@extends("layout")
@section("content")

	<div>
		<ol class="breadcrumb">
		  <li><a href="{{ route('user.home') }}">{{trans('messages.home')}}</a></li>
		  <li>
		  	<a href="{{ route('visit.index') }}">Visits</a>
		  </li>
		  <li class="active">{{trans('messages.new-test')}}</li>
		</ol>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">
            <div class="container-fluid">
                <div class="row less-gutter">
					<span class="glyphicon glyphicon-adjust"></span>
					{{trans('messages.new-test')}}
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
			{{ Form::model($visit, array('route' => ['visit.technologistpostaddtest', $visit->id], 'id' => 'form-new-test')) }}
			<input type="hidden" name="_token" value="{{ Session::token() }}"><!--to be removed function for csrf_token -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">{{trans("messages.patient-details")}}</h3>
								</div>
								<div class="panel-body inline-display-details">
									<span><strong>{{trans("messages.patient-number")}}</strong> {{ $visit->patient->patient_number }}</span>
									<span><strong>{{ Lang::choice('messages.name',1) }}</strong> {{ $visit->patient->name }}</span>
									<span><strong>{{trans("messages.age")}}</strong> {{ $visit->patient->getAge() }}</span>
									<span><strong>{{trans("messages.gender")}}</strong>
										{{ $visit->patient->gender==0?trans("messages.male"):trans("messages.female") }}</span>
									<span><strong>Visit Type</strong> {{ $visit->visit_type }}</span>
									@if($visit->visit_type == 'In-patient')
										<span><strong>Ward</strong>
										@if(!is_null($visit->ward))
											{{ $visit->ward->name }}
										@endif
										</span>
										<span><strong>Bed No</strong> {{ $visit->bed_no }}</span>
									@endif
								</div>
							</div>
							<div class="form-group">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">{{"Clinical Information and Sample Information"}}</h3>
								</div>
									<div class="panel-body inline-display-details">
									<div class="col-md-12">
										<div class="form-group">
											{{ Form::label('clinical_notes','Clinical Notes') }}
											{{ Form::textarea('clinical_notes', old('clinical_notes'), array('class' => 'form-control')) }}
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
											{{ Form::label('physician', 'Test Requested By') }}
											{{ Form::select('physician', $clinicians, null,
                                            array('class' => 'form-control','id'=>'clinician_dropdown_id')) }}
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											{{ Form::label('cadre', 'Cadre') }}
                                            {{Form::text('cadre', old('cadre'), array('class' => 'form-control','id'=>'clinician_cadre_id',
                                            'name'=>'clinician_cadre'))}}
										</div>
										<div class="form-group">
											{{ Form::label('phone_contact', 'Phone Contact') }}
                                            {{Form::text('phone_contact', old('phone_contact'), array('class' => 'form-control',
                                            'id'=>'clinician_phone_id','name'=>'clinician_phone'))}}
										</div>
										<div class="form-group">
											{{ Form::label('email', 'E-mail') }}
											{{Form::email('email', Auth::user()->email, array('class' => 'form-control', 'id'=>'clinician_email_id',
                                            'name'=>'clinician_email'))}}
										</div>
									</div>
									<div class="form-pane panel panel-default">
										<div class="col-md-6">
											<div class="form-group">
												{{Form::label('specimen_type', 'Sample Type')}}
												{{ Form::select('specimen_type', $specimenType,
												old('specimenType'),
												['class' => 'form-control specimen-type']) }}
											</div>
											<div class="form-group">
												<label for="collection_date">Time of Sample Collection</label>
												<input class="form-control"
													data-format="YYYY-MM-DD HH:mm"
													data-template="DD / MM / YYYY HH : mm"
													name="collection_date"
													type="text"
													id="collection-date"
													value="{{$collectionDate}}">
											</div>
											<div class="form-group">
												<label for="reception_date">Time Sample was Received in Lab</label>
												<input class="form-control"
													data-format="YYYY-MM-DD HH:mm"
													data-template="DD / MM / YYYY HH : mm"
													name="reception_date"
													type="text"
													id="reception-date"
													value="{{$receptionDate}}">
											</div>
											<!-- <div class="form-group">
										        {{Form::label('test_type_category', 'Lab Section')}}
										    	{{ Form::select('test_type_category', $testCategory,
										        old('testCategory'),
										        ['class' => 'form-control test-type-category']) }}
											</div> -->
										</div>
										<div class="col-md-6 test-type-list">
										</div>
							            <div class="col-md-12">
								            <a class="btn btn-default add-test-to-list"
								            	href="javascript:void(0);"
								                data-measure-id="0"
								                data-new-measure-id="">
								            <span class="glyphicon glyphicon-plus-sign"></span>Add Test to List</a>
							            </div>
									</div>
									<div class="form-pane panel panel-default test-list-panel">
							            <div class=" test-list col-md-12">
								                <div class="col-md-4">
													<b>Specimen</b>
								                </div>
								                <div class="col-md-4">
													<b>Lab Section</b>
								                </div>
								                <div class="col-md-4">
													<div class="col-md-11"><b>Test</b></div>
									            	<div class="col-md-1"></div>
								                </div>
							            </div>
									</div>
									<div class ="form-group hidden hiv-purpose col-md-12">
										{{Form::label('hiv_purpose', 'Please select the purpose of HIV test', array('class' => 'required'))}}
										{{Form::select('hiv_purpose',['' => '----Select purpose of H.I.V----', 'pmtct' => 'PMTCT', 'hct' => 'HCT', 'smc' => 'SMC', 'qc' => 'Quality Control', 'clinical_diagnosis' => 'Clinical Diagnosis'])}}
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
        <div class="col-md-4 test-type-category-name">
        </div>
        <div class="col-md-4">
            <div class="col-md-11 test-type-name">
                <input class="specimen-type-id" type="hidden">
                <input class="test-type-id" type="hidden">
            </div>
            <button class="col-md-1 delete-test-from-list close" aria-hidden="true" type="button"
                title="{{trans('messages.delete')}}">×</button>
        </div>
    </div><!-- Test List Item -->
</div><!-- Test List Item Loader-->
@stop

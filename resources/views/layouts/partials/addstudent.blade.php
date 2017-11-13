<!-- Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
	<form method="POST" action="/addstudent">
	 {{ csrf_field() }}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD NEW STUDENT</h4>
      </div>
	  
      <div class="modal-body">
        
			  <ul class="nav nav-tabs">
				<li class="active"><a href="#bio">Bio Data</a></li>
				<li><a href="#education">Education</a></li>
				<li><a href="#medical">Medical</a></li>
				<li><a href="#ca">CA & Project</a></li>
				<li><a href="#final">Final</a></li>				
			  </ul>

			  <div class="tab-content">
				<div id="bio" class="tab-pane fade in active">
				  <h3>Bio Data</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" id="firstname" value="{{ old('firstname') }}" required name="firstname">
										@if ($errors->has('firstname'))
												<span class="help-block">
														<strong>{{ $errors->first('firstname') }}</strong>
												</span>
											@endif
								</div>
														
								<div class="form-group{{ $errors->has('othername') ? ' has-error' : '' }}">
									<label for="othername">Other Names</label>
									<input type="text" class="form-control" id="othernames" value="{{ old('othername') }}" name="othername">
									@if ($errors->has('othername'))
												<span class="help-block">
														<strong>{{ $errors->first('othername') }}</strong>
												</span>
											@endif
								 </div>
								 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email">Email</label>
									<input type="email" class="form-control" value="{{ old('email') }}" id="email" name="email">
									@if ($errors->has('email'))
										<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								 </div>
								 <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
									<label for="dob">Date of Birth</label>
									<input type="date" class="form-control" id="dob" value="{{ old('dob') }}" name="dob">
									@if ($errors->has('dob'))
										<span class="help-block">
												<strong>{{ $errors->first('dob') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }}">
									<label for="religion">Religion</label>
									<input type="text" class="form-control" id="religion" value="{{ old('religion') }}" name="religion">
									@if ($errors->has('religion'))
										<span class="help-block">
												<strong>{{ $errors->first('religion') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
									<label for="city">City</label>
									<input type="text" class="form-control" id="city" value="{{ old('city') }}" name="city">
										@if ($errors->has('city'))
											<span class="help-block">
													<strong>{{ $errors->first('city') }}</strong>
											</span>
										@endif
								 </div>

								 <div class="form-group{{ $errors->has('fathername') ? ' has-error' : '' }}">
									<label for="fathername">Father's name</label>
									<input type="text" class="form-control" id="fathername" value="{{ old('fathername') }}" name="fathername">
										@if ($errors->has('fathername'))
											<span class="help-block">
													<strong>{{ $errors->first('fathername') }}</strong>
											</span>
										@endif
								 </div>


								 <div class="form-group{{ $errors->has('mothername') ? ' has-error' : '' }}">
									<label for="mothername">Mother's name</label>
									<input type="text" class="form-control" id="mothername" value="{{ old('mothername') }}" name="mothername">
									@if ($errors->has('mothername'))
										<span class="help-block">
												<strong>{{ $errors->first('mothername') }}</strong>
										</span>
									@endif
								 </div>
								 
								 <div class="form-group{{ $errors->has('parentaddress') ? ' has-error' : '' }}">
									<label for="parentaddress">Parent's Address</label>
									<input type="text" class="form-control" id="parentaddress" value="{{ old('parentaddress') }}" name="parentaddress">
									@if ($errors->has('parentaddress'))
										<span class="help-block">
												<strong>{{ $errors->first('parentaddress') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('nokname') ? ' has-error' : '' }}">
									<label for="nokname">Next of Kin</label>
									<input type="text" class="form-control" id="nok" value="{{ old('nokname') }}" name="nokname">
									@if ($errors->has('nokname'))
										<span class="help-block">
												<strong>{{ $errors->first('nokname') }}</strong>
										</span>
									@endif
								 </div>


							</div>
							<div class="col-md-5">
								
								<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" id="lastname" value="{{ old('lastname') }}" name="lastname">
										@if ($errors->has('lastname'))
											<span class="help-block">
													<strong>{{ $errors->first('lastname') }}</strong>
											</span>
										@endif
								 </div>


								 <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
									<label for="email">Sex</label>
									<select class="form-control" id="sex" name="sex">
										<option>---Gender---</option>
										<option value="M">Male</option>
										<option value="F">Female</option>
									</select>
									@if ($errors->has('sex'))
											<span class="help-block">
													<strong>{{ $errors->first('sex') }}</strong>
											</span>
										@endif
								 </div>


								 <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
									@if ($errors->has('phone'))
										<span class="help-block">
												<strong>{{ $errors->first('phone') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group">
									<label for="country">Citizenship</label>
									<select class="form-control" id="country" name="country_id">
									@foreach(\App\Country::all() as $key => $country)
										<option value="{{$country->id}}">{{$country->name}}</option>
										@endforeach
									</select>
								 </div>

								 <div class="form-group{{ $errors->has('maritalstatus') ? ' has-error' : '' }}">
									<label for="email">Status</label>
									<select class="form-control" id="maritalstatus" name="maritalstatus">
										<option>---</option>
										<option value="Married">Married</option>
										<option value="Single">Single</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
									</select>
									@if ($errors->has('maritalstatus'))
										<span class="help-block">
												<strong>{{ $errors->first('maritalstatus') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group {{ $errors->has('state_id') ? ' has-error' : '' }}">
									<label for="state_id">State / Region</label>
									<select class="form-control" id="state_id" name="state_id">
										<option>---</option>
										@foreach(\App\State::all() as $key => $state)
										<option value="{{$state->id}}">{{$state->name}}</option>
										@endforeach
									</select>
								 </div>


								<div class="form-group{{ $errors->has('fatherwork') ? ' has-error' : '' }}">
									<label for="fatherwork">Father's Occupation</label>
									<input type="text" class="form-control" id="fatherwork" value="{{old('fatherwork')}}" name="fatherwork">
									@if ($errors->has('fatherwork'))
										<span class="help-block">
												<strong>{{ $errors->first('fatherwork') }}</strong>
										</span>
									@endif
								 </div>


								 <div class="form-group{{ $errors->has('motherwork') ? ' has-error' : '' }}">
									<label for="motherwork">Mother's Occupation</label>
									<input type="text" class="form-control" id="motherwork" value="{{old('motherwork')}}" name="motherwork">
									@if ($errors->has('motherwork'))
										<span class="help-block">
												<strong>{{ $errors->first('motherwork') }}</strong>
										</span>
									@endif
								 </div>


								 <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
									<label for="language">Language / Dialect Spoken and Written</label>
									<input type="text" class="form-control" id="language" value="{{old('language')}}" name="language">
									@if ($errors->has('language'))
										<span class="help-block">
												<strong>{{ $errors->first('language') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('nokcontact') ? ' has-error' : '' }}">
									<label for="nokcontact">Next of Kin Phone and Address</label>
									<input type="text" class="form-control" id="nokcontact" value="{{old('nokcontact')}}" name="nokcontact">
									@if ($errors->has('nokcontact'))
										<span class="help-block">
												<strong>{{ $errors->first('nokcontact') }}</strong>
										</span>
									@endif
								 </div>


							</div>
						</div>						
					</div>
				  </p>
				</div>
				<div id="education" class="tab-pane fade">
				  <h3>Education</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
									<label for="faculty">Faculty</label>
									<input type="text" class="form-control" id="faculty" value="{{old('faculty')}}" name="faculty">
									@if ($errors->has('faculty'))
										<span class="help-block">
												<strong>{{ $errors->first('faculty') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
									<label for="course">Course</label>
									<input type="text" class="form-control" id="course" value="{{old('course')}}" name="course">
								 @if ($errors->has('course'))
										<span class="help-block">
												<strong>{{ $errors->first('course') }}</strong>
										</span>
									@endif
								 </div>


								 <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
									<label for="duration">Duration</label>
									<input type="number" class="form-control" id="duration" value="{{old('duration')}}" name="duration">
									@if ($errors->has('duration'))
										<span class="help-block">
												<strong>{{ $errors->first('duration') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
									<label for="startdate">Start Date</label>
									<input type="text" class="form-control" id="startdate" value="{{old('startdate')}}" name="startdate">
									@if ($errors->has('startdate'))
										<span class="help-block">
												<strong>{{ $errors->first('startdate') }}</strong>
										</span>
									@endif
								 </div>


								 <div class="form-group{{ $errors->has('facultyhead') ? ' has-error' : '' }}">
									<label for="facultyhead">Faculty Head</label>
									<input type="text" class="form-control" id="facultyhead" value="{{old('facultyhead')}}"  name="facultyhead">
									@if ($errors->has('facultyhead'))
										<span class="help-block">
												<strong>{{ $errors->first('facultyhead') }}</strong>
										</span>
									@endif
								 </div>

							</div>
							<div class="col-md-5">
								<div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
									<label for="department">Department</label>
									<input type="text" class="form-control" id="department" value="{{old('department')}}" name="department">
									@if ($errors->has('department'))
										<span class="help-block">
												<strong>{{ $errors->first('department') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('specialization') ? ' has-error' : '' }}">
									<label for="specilization">Specialization</label>
									<input type="text" class="form-control" id="specilization" value="{{old('specilization')}}" name="specilization">
									@if ($errors->has('specialization'))
										<span class="help-block">
												<strong>{{ $errors->first('specialization') }}</strong>
										</span>
									@endif
								 </div>

								 <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
									<label for="grade">Grade</label>
									<input type="text" class="form-control" id="grade" value="{{old('grade')}}" name="grade">
									@if ($errors->has('grade'))
										<span class="help-block">
												<strong>{{ $errors->first('grade') }}</strong>
										</span>
									@endif
								 </div>
								 <div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
									<label for="enddate">End Date</label>
									<input type="date" class="form-control" id="enddate" value="{{old('enddate')}}" name="enddate">
									@if ($errors->has('enddate'))
										<span class="help-block">
												<strong>{{ $errors->first('enddate') }}</strong>
										</span>
									@endif
								 </div>
								 <div class="form-group{{ $errors->has('hod') ? ' has-error' : '' }}">
									<label for="hod">HOD</label>
									<input type="text" class="form-control" id="hod" value="{{old('hod')}}" name="hod">
									@if ($errors->has('hod'))
										<span class="help-block">
												<strong>{{ $errors->first('hod') }}</strong>
										</span>
									@endif
								 </div>
							</div>
						</div>
					</div>
				  </p>
				</div>				
				<div id="medical" class="tab-pane fade">
				  <h3>Medical</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<div class="form-group">
									<label for="disability">Disability?</label>
									<select class="form-control" id="disability" name="disability">
										<option value="YES">Yes</option>
										<option value="NO">No</option>
									</select>
								 </div>
								 <div class="form-group">
									<label for="specialneeds">Special Needs?</label>
									<select class="form-control" id="specialneeds" name="specialneeds">
										<option value="YES">Yes</option>
										<option value="NO">No</option>
										
									</select>
								 </div>
							</div>
							<div class="col-md-5">

								<div class="form-group">
									<label for="disability">Specify</label>
									<input type="text" class="form-control" name="disability_specify">
								 </div>

								 <div class="form-group">
									<label for="specialneeds">Specify</label>
									<input type="text" class="form-control" id="specialneeds" name="specialneeds_specify">
								 </div>

							</div>
						</div>
					</div>
				  </p>
				</div>
				<div id="ca" class="tab-pane fade">
				  <h3>CA / Project</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
									<label for="ca">CA / Date / Grade</label>
									<textarea class="form-control" name="ca"></textarea>
								
							</div>
							<div class="form-group">
									<label for="project">Project / Topic / Date / Publication URL</label>
									<textarea class="form-control" name="project"></textarea>
								
							</div>
							
							</div>		
						</div>
				  </p>
				</div>
				<div id="final" class="tab-pane fade">
				  <h3>Final</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
									<label for="email">Do you have a unique identifier like matric number? (if you don't have it will be generated for you)</label>
									<select class="form-control" name="matric_no">
										<option value="YES">Yes</option>
										<option value="NO">No</option>
										
									</select>
								 </div>
							<div class="form-group">
									<label for="email">What is it?</label>
									<input type="text" class="form-control" id="uid" name="uid">
								
							</div>
							
							<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-lg">Submit</button>
							</div>
							
							</div>		
						</div>
				  </p>
				  
				</div>
			  </div>
			  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
	</form>
  </div>
</div>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});


</script>
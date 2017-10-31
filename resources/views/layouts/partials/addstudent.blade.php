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
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" id="firstname" name="firstname">
								 </div>
														
								<div class="form-group">
									<label for="othername">Other Names</label>
									<input type="text" class="form-control" id="othernames" name="othername">
								 </div>
								 <div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email">
								 </div>
								 <div class="form-group">
									<label for="dob">Date of Birth</label>
									<input type="text" class="form-control" id="dob" name="dob">
								 </div>
								 <div class="form-group">
									<label for="religion">Religion</label>
									<input type="text" class="form-control" id="religion" name="religion">
								 </div>
								 <div class="form-group">
									<label for="city">City</label>
									<input type="text" class="form-control" id="city" name="city">
								 </div>
								 <div class="form-group">
									<label for="fathername">Father's name</label>
									<input type="text" class="form-control" id="fathername" name="fathername">
								 </div>
								 <div class="form-group">
									<label for="mothername">Mother's name</label>
									<input type="text" class="form-control" id="mothername" name="mothername">
								 </div>
								 <div class="form-group">
									<label for="parentaddress">Parent's Address</label>
									<input type="text" class="form-control" id="parentaddress" name="parentaddress">
								 </div>
								 <div class="form-group">
									<label for="nokname">Next of Kin</label>
									<input type="text" class="form-control" id="nok" name="nokname">
								 </div>
							</div>
							<div class="col-md-5">
								
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" id="lastname" name="lastname">
								 </div>
								 <div class="form-group">
									<label for="email">Sex</label>
									<select class="form-control" id="sex" name="sex">
										<option>---</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								 </div>
								 <div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" id="phone" name="phone">
								 </div>
								 <div class="form-group">
									<label for="country">Citizenship</label>
									<input type="text" class="form-control" id="country" name="country">
								 </div>
								 <div class="form-group">
									<label for="email">Status</label>
									<select class="form-control" id="maritalstatus" name="maritalstatus">
										<option>---</option>
										<option>Married</option>
										<option>Single</option>
										<option>Divorced</option>
										<option>Widowed</option>
									</select>
								 </div>
								 <div class="form-group">
									<label for="state">State / Region</label>
									<input type="text" class="form-control" id="state" name="state">
								 </div>
								<div class="form-group">
									<label for="fatherwork">Father's Occupation</label>
									<input type="text" class="form-control" id="fatherwork" name="fatherwork">
								 </div>
								 <div class="form-group">
									<label for="motherwork">Mother's Occupation</label>
									<input type="text" class="form-control" id="motherwork" name="motherwork">
								 </div>
								 <div class="form-group">
									<label for="language">Language / Dialect Spoken and Written</label>
									<input type="text" class="form-control" id="email" name="language">
								 </div>
								 <div class="form-group">
									<label for="nokcontact">Next of Kin Phone and Address</label>
									<input type="text" class="form-control" id="nokcontact" name="nokcontact">
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
								<div class="form-group">
									<label for="faculty">Faculty</label>
									<input type="text" class="form-control" id="faculty" name="faculty">
								 </div>
								 <div class="form-group">
									<label for="course">Course</label>
									<input type="text" class="form-control" id="course" name="course">
								 </div>
								 <div class="form-group">
									<label for="duration">Duration</label>
									<input type="text" class="form-control" id="duration" name="duration">
								 </div>
								 <div class="form-group">
									<label for="startdate">Start Date</label>
									<input type="text" class="form-control" id="startdate" name="startdate">
								 </div>
								 <div class="form-group">
									<label for="facultyhead">Faculty Head</label>
									<input type="text" class="form-control" id="facultyhead" name="facultyhead">
								 </div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="department">Department</label>
									<input type="text" class="form-control" id="department" name="department">
								 </div>
								 <div class="form-group">
									<label for="specilization">Specialization</label>
									<input type="text" class="form-control" id="specilization" name="specilization">
								 </div>
								 <div class="form-group">
									<label for="grade">Grade</label>
									<input type="text" class="form-control" id="grade" name="grade">
								 </div>
								 <div class="form-group">
									<label for="enddate">End Date</label>
									<input type="text" class="form-control" id="enddate" name="enddate">
								 </div>
								 <div class="form-group">
									<label for="hod">HOD</label>
									<input type="text" class="form-control" id="hod" name="hod">
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
									<select class="form-control" id="disability">
										<option>---</option>
										<option>Yes</option>
										<option>No</option>
										
									</select>
								 </div>
								 <div class="form-group">
									<label for="specialneeds">Special Needs?</label>
									<select class="form-control" id="specialneeds" name="specialneeds">
										<option>---</option>
										<option>Yes</option>
										<option>No</option>
										
									</select>
								 </div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="disability">Specify</label>
									<input type="text" class="form-control" name="disability">
								 </div>
								 <div class="form-group">
									<label for="specialneeds">Specify</label>
									<input type="text" class="form-control" id="specialneeds" name="specialneeds">
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
									<select class="form-control">
										<option>---</option>
										<option>Yes</option>
										<option>No</option>
										
									</select>
								 </div>
							<div class="form-group">
									<label for="email">What is it?</label>
									<input type="text" class="form-control" id="uid">
								
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
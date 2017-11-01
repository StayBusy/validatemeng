<!-- Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="myInstitution" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
	<form method="POST" action="/addInstitution">
	 {{ csrf_field() }}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
        <h4 class="modal-title">Institution</h4>
      </div>
	  
      <div class="modal-body">
        
			  <ul class="nav nav-tabs">
				<li class="active"><a href="#details">Details</a></li>
				<li><a href="#stat">Stats</a></li>
				<li><a href="#sub">Subscription</a></li>						
			  </ul>

			  <div class="tab-content">
				<div id="details" class="tab-pane fade in active">
				  <h3>Institution/Or name</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<div class="form-group">
									<label for="firstname">Name</label>
									@if(isset($instDetails->name))
									<input type="text" readonly class="form-control" id="firstname" name="name" value="{{ $instDetails->name }}">
									@else
									<input type="text" class="form-control" id="firstname" name="name" required placeholder="Verifyme Institute Of Technology">
									@endif
									
								 </div>
								 <div class="form-group">
								 <label for="firstname">Email</label>
								 	@if(isset($instDetails->email))
									<input type="text" readonly class="form-control" id="email" name="email" value="{{ $instDetails->email }}">
									@else
									<input type="text" class="form-control" id="email" name="email" placeholder="official email: e.g info@verifyme.space" required>
									@endif
									
									
								 </div>
								 <div class="form-group">
									<label for="firstname">Address</label>
									@if(isset($instDetails->address))
									<input type="text" readonly class="form-control" id="address" name="address" value="{{ $instDetails->address }}">
									@else
									<input type="text" class="form-control" id="address" name="address" placeholder="23, CAP california" required>
									@endif
									
								 </div>
								 <div class="form-group">
									<label for="firstname">Description</label>
									@if(isset($instDetails->description))
									<input type="text" readonly class="form-control" id="description" name="description" value="{{ $instDetails->description }}">
									@else
									<input type="text" class="form-control" id="description" name="description" placeholder="school for the wise, since 1980" required>
									@endif
									
								 </div>
							</div>
							<div class="col-md-5">
							
								<div class="form-group">
									<label for="firstname">Phone</label>
									@if(isset($instDetails->phone))
									<input type="text" readonly class="form-control" id="phone" name="phone" value="{{ $instDetails->phone }}">
									@else
									<input type="text" class="form-control" id="phone" name="phone" required placeholder="+234 810234853">
									@endif
									
								 </div>
								 <div class="form-group">
									<label for="firstname">Website</label>
									@if(isset($instDetails->website))
									<input type="text" readonly class="form-control" id="website" name="website" value="{{ $instDetails->website }}">
									@else
									<input type="text" class="form-control" id="website" name="website" placeholder="http://verifyme.space">
									@endif
									
								 </div>
								 <div class="form-group">
									<label for="firstname">Motto</label>
									@if(isset($instDetails->motto))
									<input type="text" readonly class="form-control" id="motto" name="motto" value="{{ $instDetails->motto }}">
									@else
									<input type="text" class="form-control" id="motto" name="motto" placeholder="e.g in god we trust">
									@endif
									
								 </div>
								 <div class="form-group">
									<label for="firstname">Logo</label>
									@if(isset($instDetails->logo))
									<input type="text" readonly class="form-control" id="logo" name="logo" value="{{ $instDetails->logo }}">
									@else
									<input type="text" class="form-control" id="logo" name="logo" placeholder="img url">
									@endif
									
								 </div>
								
							</div>
						</div>						
					</div>
				  </p>
				</div>
				<div id="stat" class="tab-pane fade">
				  <h3>Stat</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								
								{{--  Students Count: {{ $instStuCount }}  --}}
								
							</div>
							<div class="col-md-5">
								
								
								
							</div>
						</div>
					</div>
				  </p>
				</div>				
				<div id="sub" class="tab-pane fade">
				  <h3>Subscription</h3>
				  <p>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								{{--  <p>Subscription Type: {{ $userSub->sub_type }} </p>
								<p>Activated on: {{ $userSub->created_at }} </p>
								<p>Expires on: {{ $userSub->expires_on }} </p>
								<p>Status: {{ $userSub->status }} </p>  --}}

							</div>
							<div class="col-md-5">
							{{--  @if($userSub->sub_type == "free")
								<h3>Why you should upgrade</h3>
								@else
								Did you know as a premium user you can request features?<br>
								Have anything in mind? send us an email: feature@verifyme.space

							@endif  --}}
							</div>
						</div>
					</div>
				  </p>
				</div>
			
			  
			  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: center">
				
						<h4>Dashboard</h4>
						<h5><p>
							From here you can run all your administrative tasks, such as adding students, update institution information, see stat on your insitution and certification etc
						</p>
						</h5>
				</div>

            </div>
		    
        </div>
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		 <div class="panel panel-default">
			  <div class="panel-heading"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myInstitution">Institution</button> | <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#goPremium">Go Premium</button> </div>
			
			</div>		
			
		</div>
	</div>	 
			 
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			<div class="col-md-4 feature-box feature-box--lg feature-box--blue">
				<h3 class="medium-heading">Students</h3>
					<p class="small-heading text-grey">
					  Total added students
					</p>
					<div class="row">
					  <div class="col-lg-12 col-md-12 col-sm-12s" style="text-align: center">
						
						<div class="text-primary center userCount" style="font-size: 100px">
						 	{{--  {{ $stuCount }}  --}}
						</div>
					  </div>

					</div>

					<ul class="feature-box__list feature-box__list--no-style">

						<li>
						  <a href="/students" class="btn btn-info btn-sm">
							See all 
						  </a>
						
						  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add</button>
						</li>

					</ul>
			</div>
			
			<div class="col-md-4 feature-box feature-box--lg feature-box--blue">
				<h3 class="medium-heading">Verifications</h3>
					<p class="small-heading text-grey">
					 Number of times your students have been verified
					</p>
					<div class="row">
					  <div class="col-lg-12 col-md-12 col-sm-12s" style="text-align: center">
						
						<div class="text-primary center userCount" style="font-size: 100px">
						 	0
						</div>
					  </div>

					</div>

					<ul class="feature-box__list feature-box__list--no-style">

						<li>
						  <a href="#">
							See breakdown 
						  </a>
						</li>

					</ul>
			</div>
			<div class="col-md-4 feature-box feature-box--lg feature-box--blue">
				<h3 class="medium-heading">Expiring Soon</h3>
					<p class="small-heading text-grey">
					Number of certificates needing renewal
					</p>
					<div class="row">
					  <div class="col-lg-12 col-md-12 col-sm-12s" style="text-align: center">
						
						<div class="text-primary center userCount" style="font-size: 100px">
						 	0
						</div>
					  </div>

					</div>

					<ul class="feature-box__list feature-box__list--no-style">

						<li>
						  <a href="#">
							See breakdown 
						  </a>
						</li>

					</ul>
			</div>
		
		</div>
	</div>

</div>



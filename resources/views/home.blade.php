@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-success">
                <div class="panel-heading" style="text-align: center">
				
						<h4>Welcome to validateme.ng</h4> 
						
				</div>

            </div>	
            @if(isset($msg))
            	@if($msg != "")
            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: center">
				
						<h4>{!! $msg !!}</h4> 
						
				</div>

            </div>		
            	@endif
            @endif
            @if($sub == "0")
            <div class="panel panel-warning">
                <div class="panel-heading" style="text-align: center">
					<form action="/activateFreePlan" method="POST">
					 {{ csrf_field() }}
						<input type="hidden" name="sub_type" value="free" />
						<h4>You have not activated any plan, do so now <button class="btn btn-sm btn-primary" type="submit">Activate Free Plan</button> 

						<!-- <button class="btn btn-sm btn-success" type="submit">Activate Premium Plan</button>  -->
						</h4>
					</form>	
				</div>

            </div>	
            @elseif($inst == "0")
             <div class="panel panel-warning">
                <div class="panel-heading" style="text-align: center">
				
						<h4>You have not added your institution details, do so now <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myInstitution" type="submit">Add Institution</button> </h4>
						
				</div>

            </div>
            @elseif($stu == "0")	
            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: center">
				
						<h4>Congratulations! your validatemg.ng account has been completely setup, start adding students <a class="btn btn-sm btn-primary" href="/dashboard">Go to Dashboard</a> </h4>
						
				</div>

            </div>	
           @elseif($stu != "0")
            <div class="panel panel-default">
                <div class="panel-heading">Welcome back, {{ Auth::user()->name }} 
                <span class="pull-right">
                <form method="POST" action="/clearNotification">
                	  {{ csrf_field() }}	
                <button class="btn btn-sm btn-primary" data-toggle="modal" type="submit">Clear Notification</button></form></span></div>

                <div class="col-md-6 col-md-offset-3 ">
                <br><br>
			  <form class="form-signin">
			  
			  @if(isset($notice))

				   @if($notice == "" )
				  	
				  		<h2 class="form-signin-heading" style="text-align: center">No Messages</h2>

				    @else    
				    	@foreach($notice as $note)
				  			<div class="panel panel-warning">
				                <div class="panel-heading" style="text-align: center">
								
									<h4>{{ $note->title }}</h4>
									<h5>
										<p>
											{!! $note->content !!}
										</p>
									</h5>
								</div>

				            </div>	
				        @endforeach
					@endif

				@endif

				 @if(!isset($notice))
				<h2 class="form-signin-heading" style="text-align: center">No Messages</h2>
				@endif
			
				
				<!-- <input style="height: 70px; text-align: center; font-size: 40px" type="number" class="form-control" placeholder="29573" required autofocus>
				<br><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Verify</button> -->
			  </form>

			</div>
			
            </div>
             @endif
        </div>
    </div>
</div>
@include('layouts.partials.addstudent')
@include('layouts.partials.institution')
@endsection

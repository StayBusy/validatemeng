
@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: center">
				
						<h4>Students</h4>
						<h5><p>
							A list of students in your institution
						</p>
						</h5>
				</div>

            </div>
		    
        </div>
    </div>
	<div class="row">

		<div class="col-md-10 col-md-offset-1">
		 
		 @if(isset( $instStu))
			  @if($instStu != "")

			  @foreach($instStu as $stu)
			  <a href="/singleStudent?id={{$stu->id}}"><div class="panel panel-default"><div class="panel-heading"> {{ $stu->firstname }} {{ $stu->lastname }} {{ $stu->othername }} | {{ $stu->phone }} | {{ $stu->email }} | <strong>Grade: </strong> {{ $stu->grade }} |<strong> Department:</strong> {{ $stu->department }} | <strong>Course:</strong> {{ $stu->course }} | <strong>Project Topic:</strong> {{ $stu->project }}   </div></div>	</a>
			  @endforeach	

			  @else
			  <div class="panel-heading">No Records Found </div>	
			  @endif
		@endif

		 	
			
		</div>
	</div>	 
			 
	

</div>



@endsection

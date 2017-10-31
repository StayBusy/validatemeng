
@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
 
	.feature-box{
		position: relative;
		min-height: 350px;
		border-top-width:6px;
		border-top-style:solid;
		border-radius: 5px;
		padding: 15px;
		-moz-box-shadow:    0 3px 5px 2px #ccc;
		-webkit-box-shadow: 0 3px 5px 2px #ccc;
		box-shadow:         0 3px 5px 2px #ccc;
	}

	.feature-box--lg {
		margin-bottom: 30px;
	}

	.feature-box--sm {
		min-height: 171px !important;
		margin-bottom: 10px;
	}

	.feature-box--blue {
		border-top-color: #448DDE;
	}

	.feature-box--green {
	  border-top-color: #64C073;
	}

	.feature-box__list {
	  margin: 0;
	  padding: 0;
	}

	.feature-box__list--no-style {
	  list-style: none;
	}

	.feature-box__list li {
	  margin-top: 10px;
	}

	.feature-box__p {
	  line-height: 0;
	}

	.feature-box__footer {
	  position: absolute;
	  bottom: 0;
	  left: 0;
	  border-top: 1px solid #f8f8f8f8;
	  width: 100%;
	  padding: 0 5px;
	}

	.feature-box__circle-image {
	  width:40px;
	  height:40px;
	  border-radius:50%;
	}

	.feature-mood {
	  display: inline-block;
	}

	.mood--sm {
	  width: 15px;
	  height: 15px;
	  border-radius:50%;
	}

	.mood--orange {
	  background-color: #fb8c00;
	}

	.mood--green {
	  background-color: #689f38;
	}

	.bg-blue {
	  background-color: #0277bd;
	  color: #ffffff;
	}

	.bg-red {
	  background-color: #d32f2f;
	  color: #ffffff;
	}

	/**
	 * Checkbox Styles
	 *
	 * Fancy Checkboxes
	 */

	 .fancy-checkbox {
	   opacity: 0;
	   position: absolute;
	 }

	 .fancy-checkbox,
	 .fancy-checkbox--label {
	   display: inline-block;
	   vertical-align: middle;
	   margin: 5px;
	   cursor: pointer;
	}

	.fancy-checkbox--label {
	  position:relative;
	}

	.fancy-checkbox +
	.fancy-checkbox--label:before {
	  content: '';
	  background: #ffffff;
	  border: 2px solid #dddddd;
	  border-radius: 5px;
	  display: inline-block;
	  vertical-align: middle;
	  width: 20px;
	  height: 20px;
	  padding: 0;
	  margin-right: 10px;
	  text-align: center;
	}

	.fancy-checkbox:checked +
	.fancy-checkbox--label:before {
		content: "\f00c";
		font-family: 'FontAwesome';
		background: #0277bd;
		color: #ffffff;
	}

	.fancy-checkbox:focus +
	.fancy-checkbox--label {
	  outline: 1px solid #dddddd;
	}

	.btn-dashboard{
		white-space: normal;
		width: 150px;
		height: 40px;
		font-size: 16;
		border-radius: 5px;
	}
  </style>
@if (Auth::guest())
			
			@include('layouts.partials.welcome');
		
	@else
			 @include('layouts.partials.dashboard')
	
	@endif

@include('layouts.partials.addstudent')
@include('layouts.partials.institution')
@include('layouts.partials.premium')
@endsection

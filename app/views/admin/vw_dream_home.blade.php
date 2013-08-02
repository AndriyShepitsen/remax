@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">

			@include('partials._admin_panel_menu')
			<h4> Dream Home Request</h4>
		</div>

		<div class="row">
		<div class="large-7 columns">	
				{{Form::open(array('url' => 'search', 'method'=>'GET'))}}

				<div class="row">
					<div class="large-12 columns">
						{{Form::label('location', 'Location')}}
						{{Form::text('location',Input::get('location'), array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						{{Form::label('location', 'Property Type')}}
						{{Form::text('location',Input::get('location'), array('placeholder'=>'', 'class'=>'findInput'))}}
					</div>
					<div class="large-6 columns">
						{{Form::label('location', 'Garage')}}
						{{Form::text('location',Input::get('location'), array('placeholder'=>'', 'class'=>'findInput'))}}
						
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						{{Form::label('beds', 'Bedrooms')}}
						{{Form::text('beds', Input::get('beds'), array('placeholder'=>'#', 'class'=>'findinput'))}}
					</div>
					<div class="large-6 columns">
						{{Form::label('baths', 'Bathrooms')}}
						{{Form::text('baths', Input::get('baths'), array('placeholder'=>'#', 'class'=>'findinput'))}}
					</div>

				</div>
				<div class="row">
					<div class="large-4 columns">

						{{ Form::submit('Search', array('class'=>'button small secondary radius submitSearch'))}}
						<br/>
					</div>
				</div>

				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@stop
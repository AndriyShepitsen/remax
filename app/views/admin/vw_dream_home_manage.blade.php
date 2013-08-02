@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')

			<h4>Manage Dreamhomes Request</h4>
			@if(isset($dreamhomes))
			<ol>
			@foreach($dreamhomes as $dreamhome)
			<li>
			<div class="panel radius">
			<em> Location:</em>{{$dreamhome->location}} <br/>
			<em> Property type:</em>{{$dreamhome->property_type}} <br/>
			<em> # of beds:</em>{{$dreamhome->beds}} <br/>
			<em> # of baths:</em>{{$dreamhome->baths}} <br/>
			<em> Garage:</em>{{$dreamhome->garage}} <br/>
			{{link_to('dream-home-request-edit/'.$dreamhome->id, 'Edit')}} ||
			{{link_to('dream-home-request-delete/'.$dreamhome->id, 'Delete')}}
			

			</div>
			</li>
			</ol>
			@endforeach
			@endif

		</div>
	</div>
</div>
@stop
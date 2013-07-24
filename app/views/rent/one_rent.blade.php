@extends('layouts.master')

@section('set')
{{$imCounter = $rental->rental_images()->first()->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public
-->
<div class="mainContent">
	<div class="panel oneListing">
		<div class="row">
			<div class="large-10 columns">
				<h5 class="addressColor">{{$rental->address}}</h5 >
				</div> 
				&nbsp &nbsp
				<div class="large-2 columns">
					<span class="priceStyle right top radius label">${{number_format($rental->price)}}
					</span>
				</div>
			</div>
			<hr/>
			<strong>Decription:</strong>
			<br></br>
			<p>{{$rental->details}}</p>

<!-- 			<strong>MLS:</strong> {{$rental->listing}}<br></br>
 -->
			<strong>bedrooms:</strong> {{$rental->bedrooms}} <br></br>

			<strong>bathrooms:</strong> {{$rental->bathrooms}} <br></br>

			<!-- <strong>Size:</strong> {{$rental->size}} <br></br> -->
			
			@if($rental->year)
			<strong>Year:</strong> {{(new DateTime($rental->year))->format("Y")}} <br></br>
			@endif


			@if($rental->agent)
			<strong>Listing Agent:</strong>
				  <a class="agentLink" data-reveal-id="{{$rental->agent['id']}}" href="#">
                  {{$rental->agent['firstname']}}  {{$rental->agent['lastname']}}
                  </a> <br/><br/>			
			@endif

			@if($imCounter)
			<ul class="clearing-thumbs" data-clearing>
				@for ($i =1; $i <= $imCounter; $i++)
				<li><a class="th" href="{{url('comp/img/rent/'.$rental->id.'/'.$i.'.jpg')}}">
				<img width="100px" height="50px" src="{{url('comp/img/rent/'.$rental->id.'/'.$i.'.jpg')}}"></a></li>
				@endfor
				</ul>

			@endif

		</div>
	</div>
	@stop



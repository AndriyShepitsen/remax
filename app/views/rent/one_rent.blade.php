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

			<strong>MLS:</strong> {{$rental->listing}}<br></br>

			<strong>bedrooms:</strong> {{$rental->bedrooms}} <br></br>

			<strong>bathrooms:</strong> {{$rental->bathrooms}} <br></br>

			<strong>Size:</strong> {{$rental->size}} <br></br>

			<strong>Year:</strong> {{$rental->year}} <br></br>

			@if($imCounter)
			@for ($i =1; $i <= $imCounter; $i++)
			<p><img src="{{url('comp/img/rent/'.$rental->id.'/'.$i.'.jpg')}}"> </p>
			@endfor

			@endif

		</div>
	</div>
	@stop



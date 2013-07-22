@extends('layouts.master')

@section('set')
{{$imCounter = $house->images()->first()->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing">
		<div class="row">
			<div class="large-10 columns">
				<h5 class="addressColor">{{$house->address}}</h5 >
				</div> 
				&nbsp &nbsp
				<div class="large-2 columns">
					<span class="priceStyle right top radius label">${{number_format($house->price)}}
					</span>
				</div>
			</div>
			<hr/>
			<strong>Description:</strong>
			<br></br>
			<p>{{$house->details}}</p>

			<strong>MLS:</strong> {{$house->listing}}<br></br>

			<strong>bedrooms:</strong> {{$house->bedrooms}} <br></br>

			<strong>bathrooms:</strong> {{$house->bathrooms}} <br></br>

			<strong>Size:</strong> {{$house->size}} <br></br>

			<strong>Year:</strong> {{$house->year}} <br></br>

			@if($imCounter)
			@for ($i =1; $i <= $imCounter; $i++)
			<p><img src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"> </p>
			@endfor

			@endif

		</div>
	</div>
	@stop



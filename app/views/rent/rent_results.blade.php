@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	@if(count($rentals)>0)
	<ul class="no-bullet">
		@foreach ($rentals as $rental)
		<li>

			<a href="{{url('rent/'.$rental->id)}}">
				<div class="panel addressColor">
					<strong>
						{{$rental->address}}
					</strong> &nbsp	&nbsp	<span class="priceStyle right radius label">${{number_format($rental->price)}}</span>
					<br/>
					<small>
						bedrooms:{{$rental->bedrooms}} | 
						bathrooms:{{$rental->bathrooms}} | 
						@if ($rental->size!=null)
						size:{{$rental->size}} sqft. 
						@endif
					</small>
					
					@if($rental->agent)
							<a href="{{URL::to('agent/'.$rental->agent['id'])}}">Listing Agent:
							{{$rental->agent['firstname'] . ' '. $rental->agent['lastname']}}

							 </a>
							@endif


					@if($rental->rental_images()->first()->maxid)
					<ul class="no-bullet listingImage">
						<li><a href="{{url('rent/'.$rental->id)}}"><img src="{{url('comp/img/rent_thumbs/'.$rental->id.'/1.jpg')}}"  class="th"></a> </li>
						
					</ul>
					@endif
				</div>
			</a>
		</li>
		@endforeach
	</ul>
<?php echo $rentals->appends(array(
	'location' => Input::get('location_r'),
	'from' => Input::get('from_r'),
	'to' => Input::get('to_r'),
	'beds' => Input::get('beds_r'),
	'baths' => Input::get('baths_r')))->links(); ?>
	@else
	{No result found for your request}
	@endif
</div>
@stop

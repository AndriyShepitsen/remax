@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
	@if(count($houses)>0)
	<ul class="no-bullet">
		@foreach ($houses as $house)
		<li>

			<a href="{{url('search/'.$house->id)}}">
				<div class="panel addressColor">
					<strong>
						{{$house->address}}
					</strong> &nbsp	&nbsp	<span class="priceStyle right radius label">${{number_format($house->price)}}</span>
					<br/>
					<small>
						bedrooms:{{$house->bedrooms}} | 
						bathrooms:{{$house->bathrooms}} | 
						@if ($house->size!=null)
						size:{{$house->size}} sqft. 
						@endif
					</small>
					@if($house->images()->first()->maxid)
					<ul class="no-bullet listingImage">
						<li><a href=""><img src="{{url('comp/img/thumbs/'.$house->id.'/1.jpg')}}"  class="th"></a> </li>
						
					</ul>
					@endif
				</div>
			</a>
		</li>
		@endforeach
	</ul>
<?php echo $houses->appends(array(
	'location' => Input::get('location'),
	'from' => Input::get('from'),
	'to' => Input::get('to'),
	'beds' => Input::get('beds'),
	'baths' => Input::get('baths')))->links(); ?>
	@else
	{No result found for your request}
	@endif
</div>
@stop
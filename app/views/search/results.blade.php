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
					<div class="row">
						<div class="large-10 columns">

							<strong>
								{{$house->address}}
							</strong> &nbsp	&nbsp	
							<br/>
						</div>
						<div class="large-2 columns">

							<span class="priceStyle right radius label">${{number_format($house->price)}}
							</span>
						</div>
					</div>
					<div class="row">
						<div class="large-7 columns">

							<small>
								Bedrooms:{{$house->bedrooms}} | 
								Bathrooms:{{$house->bathrooms}} | 
								@if ($house->year!=null)
								Year:{{$house->year}} 
								@endif
							</small>
							@if($house->images()->first()->maxid)
							<ul class="no-bullet listingImage">
								<li><a href="{{url('search/'.$house->id)}}"><img src="{{url('comp/img/thumbs/'.$house->id.'/1.jpg')}}"  class="th"></a> </li>

							</ul>
							@endif
						</div>
						<div class="large-5 columns">
							<ul class="vcard">
							<span class="label">Basic Information</span>
							<li><a href="{{url('search/'.$house->id)}}">Property Details</a></li>
							@if($house->agent)
							<li class="locality"><a href="{{URL::to('agent/'.$house->agent['id'])}}">Listing Agent:
							{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}

							 </a></li>
							@endif
							</ul>
						</div>
					</div>
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

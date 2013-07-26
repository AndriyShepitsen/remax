@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	@if(count($rentals)>0)
	<ul class="no-bullet ulRent">
		@foreach ($rentals as $rental)
		<li>

			<a href="{{url('rent/'.$rental->id)}}">
				<div class="panel addressColor">
					<div class="row">
						<div class="large-8 columns">
							<strong>
								{{$rental->address}}
							</strong> &nbsp	&nbsp	
						</div>
						<div class="large-2 columns ">
							<a class="alert-box secondary round alertRentalStyle" href="">Rental</a>
						</div>
						<div class="large-2 columns">
							<a class="button secondary radius priceStyle right ">${{number_format($rental->price)}}
							</a>
						</div>					</div>

						<div class="row">
							<div class="large-7 columns houseImgWrapper">
								<small>
									Bedrooms: {{$rental->bedrooms}} | 
									Bathrooms: {{$rental->bathrooms}} | 
									@if ($rental->rental_propertytype!=null)
									Property Type: {{$rental->rental_propertytype}} 
									@endif
								</small>

								@if($rental->rental_images()->first()->maxid)
								<ul class="no-bullet listingImage">
									<li>
										<a href="{{url('rent/'.$rental->id)}}"><img src="{{url('comp/img/rent_thumbs/'.$rental->id.'/1.jpg')}}"class="th">
										</a> 
									</li>

								</ul>
								@endif
							</div>					
							<!-- =houseImgWrapper ends here -->
							<div class="large-5 columns basicInfoWrapper">
								<ul class="vcard basicInfoUl">
									<li>
										<div class="alert-box secondary expand basicInfo">Basic Information
										</div>
										<div class="searchDescription">
											{{Str::limit(ucfirst(strtolower($rental->details)), 280)}} </br>
											<a href="{{url('search/'.$rental->id)}}" class="readMore propDetails"><em>Property Details</em></a>
											<hr/>
										</div>
									</li>
									@if($rental->agent)
									<div class="locality right alert-box secondary radius callAgent">
										<a class="th radius aCallAgent" data-reveal-id="{{$rental->agent['id']}}" href="#">Listing Agent:
											<span class="agentNameList">{{$rental->agent['firstname'] . ' '. $rental->agent['lastname']}}</span>
										</a>
										<br/>
										<span class="agentPhoneList">Direct Phone: <strong>{{$rental->agent['directphone']}}</strong></span>
									</div>
									@endif
								</ul>
							</div>
						</div>				
					</div>
					<!--  =panel addressColor ends here-->
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

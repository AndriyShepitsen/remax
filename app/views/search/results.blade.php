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
						<div class="large-8 columns">

							<strong>
								{{$house->address}}
							</strong> &nbsp	&nbsp	
							<br/>
						</div>
						<div class="large-2 columns">

							<span class="alert-box secondary radius priceStyle right ">${{number_format($house->price)}}
							</span>
						</div>
						<div class="large-2 columns">
							<a class="alert-box secondary round alertRentalStyle right " href="">Sale</a>
						</div>
					</div>
					<div class="row">
						<div class="large-7 columns houseImgWrapper">

							<small>
								MLS#:{{$house->listing}} | 
								Year:{{$house->year}}| 
								Bedrooms:{{$house->bedrooms}} | 
								Bathrooms:{{$house->bathrooms}}  
								@if ($house->year!=null)
								@endif
							</small>
							@if($house->images()->first()->maxid)
							<ul class="no-bullet listingImage">
								<li><a href="{{url('search/'.$house->id)}}"><img src="{{url('comp/img/thumbs/'.$house->id.'/1.jpg')}}"  class="th"></a> </li>
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
										{{Str::limit(ucfirst(strtolower($house->details)), 280)}} </br>
										<a href="{{url('search/'.$house->id)}}" class="propDetails"><em>Property Details</em></a>
										<hr/>
									</div>
								</li>
								@if($house->agent)
								<div class="locality right alert-box secondary radius callAgent">
									<a class="th radius aCallAgent" data-reveal-id="{{$house->agent['id']}}" href="#">Listing Agent:
										<span class="agentNameList" >{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}</span >
									</a>
									<br/>
									<span>Direct Phone: <strong>{{$house->agent['directphone']}}</strong></span>
								</div>
								@endif
							</ul>
						</div>
						<!-- =basicInfoWrapper ends here -->
					</div>
				</div>
				<!-- =panel addressColor ends here -->
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

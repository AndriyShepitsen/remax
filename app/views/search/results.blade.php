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
			<!-- =addressColor starts here -->
				<div class="panel addressColor">
					<div class="row listPropWrap">
						<div class="large-10 columns">
							<h6>
								{{$house->address}}
							</h6> &nbsp	&nbsp	
							<br/>
						</div>

						<div class="large-2 columns">
							<span class="alert-box secondary radius priceStyle right ">${{number_format($house->price)}}
							</span>
						</div>
						<hr/>
					</div>


					<div class="row">
						<div class="large-7 columns houseImgWrapper">
							<small>
								<em>MLS#:</em>{{$house->listing}} | 
								<em>Year:</em>{{$house->year}}| 
								<em>Bedrooms:</em>{{$house->bedrooms}} | 
								<em>Bathrooms:</em>{{$house->bathrooms}}  
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

						<!-- =badicInfoWrapper starts here -->
						<div class="large-5 columns basicInfoWrapper">
							<ul class="vcard basicInfoUl">
								<li>
									<div class="alert-box secondary expand basicInfo">Basic Information
									</div>

									<!-- =searchDescription starts here -->
									<div class="searchDescription">
										{{Str::limit(ucfirst(strtolower($house->details)), 280)}} </br>
										<a href="{{url('search/'.$house->id)}}" class="propDetails"><em>Property Details</em></a>
										<hr/>
									</div>
									<!-- =searchDescription ends here -->
								</li>
								@if($house->agent)

								<!-- =callAgent starts here -->
								<div class="locality right alert-box secondary radius callAgent">
									<a class="th radius aCallAgent" data-reveal-id="{{$house->agent['id']}}" href="#">Listing Agent:
										<span class="agentNameList" >{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}</span >
										</a>
										<br/>
										<span class="agentPhoneList">Direct Phone: <strong>{{$house->agent['directphone']}}</strong></span>
									</div>
									<!-- =callAgent ends here -->
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

@extends('layouts.master')
@section('content')
<!-- 
//LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')
			<div class="userPanelContent">
				<h2>Saved Homes</h2>
				@foreach($user->houses as $house)

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
							</ul>
						</div>
					</div>
					@if(Auth::check())
						{{Form::open(array('url' => 'house-alert-remove/'.$house->id, 'method'=>'POST'))}}
{{ Form::submit('Stop Receiving Price Change Alerts for this Property', array('class'=>'button small secondary radius'))}}
						{{Form::close()}}
					@else
				<div>Please sign-in to stop receiving price change alerts for this Property</div>
					@endif


				</div>





				@endforeach

			</div>

		</div>
	</div>
</div>
@stop
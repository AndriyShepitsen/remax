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
				<h5>{{$house->address}}</h5>
				&nbsp &nbsp
				<br/>

			</div> 
			
			<div class="large-2 columns">

				<span class="priceStyle right top radius label">${{number_format($house->price)}}
				</span>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="large-12 columns">
				<strong>Description:</strong>
				<br/><br/>
				<p>{{ucfirst(strtolower($house->details))}}</p>

				<strong>MLS: #</strong> {{$house->listing}}<br/><br/>

				<strong>Bedrooms:</strong> {{$house->bedrooms}} <br/><br/>

				<strong>Bathrooms:</strong> {{$house->bathrooms}} <br/><br/>

				<strong>Size:</strong> {{$house->size}} <br/><br/>

				<strong>Year:</strong> {{$house->year}} <br/><br/>

				@if($house->agent)
				<strong>Listing Agent:</strong>
				  <a class="agentLink" data-reveal-id="{{$house->agent['id']}}" href="#">
                  {{$house->agent['firstname']}}  {{$house->agent['lastname']}}
                  </a> <br/><br/>
				@endif

				@if($imCounter)
				<ul class="clearing-thumbs" data-clearing>
				@for ($i =1; $i <= $imCounter; $i++)
				<li><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
				<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a></li>
				@endfor
				</ul>	
				@endif
			</div>
		</div>

	</div>
</div>
@stop



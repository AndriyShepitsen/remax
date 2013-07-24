@extends('layouts.master')

@section('set')
{{$imCounter = $house->images()->first()->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel addressColor">
		<div class="row">
			<div class="large-8 columns">
				<strong>{{$house->address}}</strong>
				&nbsp &nbsp
				<br/>

			</div> 
			
			<div class="large-2 columns">
				<a class="alert-box secondary round alertRentalStyle right " href="">Sale</a>
			</div>
			<div class="large-2 columns">

				<span class="alert-box secondary radius priceStyle right ">${{number_format($house->price)}}
				</span>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="large-12 columns">
				<strong>Description:</strong>
				<br></br>
				<p>{{$house->details}}</p>

				<strong>MLS:</strong> {{$house->listing}}<br></br>

				<strong>bedrooms:</strong> {{$house->bedrooms}} <br></br>

				<strong>bathrooms:</strong> {{$house->bathrooms}} <br></br>

				<strong>Size:</strong> {{$house->size}} <br></br>

				<strong>Year:</strong> {{$house->year}} <br></br>


				@if($house->agent)
				<a href="{{URL::to('agent/'.$house->agent['id'])}}">Listing Agent:
					{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}

				</a>
				@endif

				@if($imCounter)
				@for ($i =1; $i <= $imCounter; $i++)
				<p><img src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"> </p>
				@endfor

				@endif
			</div>
		</div>

	</div>
</div>
@stop



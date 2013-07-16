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
				<div class="panel">
					<strong>
						{{$house->address}}
					</strong> &nbsp	&nbsp	<span class="priceStyle">${{number_format($house->price)}}</span>
					<br/>
					<small>
						bedrooms:{{$house->bedrooms}} | 
						bathrooms:{{$house->bathrooms}} | 
						@if ($house->size!=null)
						size:{{$house->size}} sqft. 
						@endif
					</small>
					@if($house->images()->first()->maxid)
					<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
						<li class="clearing-feature"><a href="comp/img/images/1/1.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/1.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						
					</ul>
					@endif
				</div>
			</a>
		</li>
		@endforeach
	</ul class="no-bullet">
<?php echo $houses->appends(array('sort' => 'id'))->links(); ?>
	@else
	{No result found for your request}
	@endif
</div>
@stop

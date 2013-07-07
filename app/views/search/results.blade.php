@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
	@if(count($houses)>0)
	<ol>
		@foreach ($houses as $house)
		<li>

			<a href="{{url('search/'.$house->id)}}">
				<div class="panel">
					<strong>
						{{$house->address}}
					</strong> &nbsp	&nbsp	$<span>{{$house->price}}</span>
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
						<li><a href="comp/img/images/1/2.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/2.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/3.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/3.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/4.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/4.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/5.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/5.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/6.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/6.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/7.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/7.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/8.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/8.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/9.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/9.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/10.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/10.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/11.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/11.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/12.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/12.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/13.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/13.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/14.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/14.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/15.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/15.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/16.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/16.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/17.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/17.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/18.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/18.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/19.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/19.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/20.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/20.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/21.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/21.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/22.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/22.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
						<li><a href="comp/img/images/1/23.jpg"><img src="{{url('comp/img/thumbs/'.$house->id.'/23.jpg')}}" data-caption="This is a caption for the photo." class="th"></a> </li>
					</ul>
					@endif
				</div>
			</a>
		</li>
		@endforeach
	</ol>

	@else
	{No result found for your request}
	@endif
</div>
@stop
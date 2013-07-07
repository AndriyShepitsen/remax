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
</strong> &nbsp	&nbsp	<span>{{$house->price}}</span>
<br/>
<small>
bedrooms:{{$house->bedrooms}} | 
bathrooms:{{$house->bathrooms}} | 
@if ($house->size!=null)
size:{{$house->size}} sqft. 
@endif
</small>
@if($house->images()->first()->maxid)
<p><img src="{{url('comp/img/images/'.$house->id.'/1.jpg')}}"> </p>
@endif
</div>
</a>
</li>
@endforeach
</ol>
{{$houses->appends(array('sort'=>'id'))->links()}}
@else
{No result found for your request}
@endif
</div>
@stop
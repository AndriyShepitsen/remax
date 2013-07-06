@extends('layouts.master')

@section('set')
{{$imCounter = $house->images()->first()->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
<div class="panel">
{{$house->address}} &nbsp &nbsp {{$house->price}}
 <br><br>
Decription:
</br>
{{$house->details}}

</br></br>
MLS:{{$house->listing}} <br></br>

bedrooms:{{$house->bedrooms}} <br></br>

bathrooms:{{$house->bathrooms}} <br></br>

Size:{{$house->size}} <br></br>

Year:{{$house->year}} <br></br>

@if($imCounter)
@for ($i =1; $i < $imCounter; $i++)
<p><img src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"> </p>
@endfor

@endif

</div>
</div>
@stop
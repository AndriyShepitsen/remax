@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns">
	<h1>{{$news->title}}</h1>
	<p>{{$news->body}}</p>
	</div>
</div>
</div>
@stop

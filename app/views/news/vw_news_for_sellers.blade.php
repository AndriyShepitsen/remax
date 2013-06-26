@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns">
			<ul class="breadcrumbs">
				<li><a href="#">NEWS</a></li>
				@if ($news[0]->bs == 1 )	
				<li><a href="#">NEWS FOR BUYERS</a></li>
				@else 	
				<li><a href="#">NEWS FOR SELLERS</a></li>
				@endif
			</ul>

			@foreach($news as $new)
			<h4>{{$new->title}}</h4>
			<hr/>
			<p>{{$new->body}}</p>
			@endforeach
		</div>
	</div>
</div>
@stop

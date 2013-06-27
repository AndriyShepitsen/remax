@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns">
			<ul class="breadcrumbs">
				<li class="newsL"><a href="#">NEWS</a></li>
				@if ($news[0]->bs == 1 ) <!-- Laravel if clause with @ --> 	
				<li class="current"><a href="">NEWS FOR BUYERS</a></li>
				@endif
			</hr>
			</ul>
			
			@foreach($news as $n) <!-- Iterate over the array of news -->
			<h4>{{$n->title}}</h4>
			<p>{{$n->body}}</p>
			<hr/>
			@endforeach

		</div>

		</aside>
	</div>
</div>
@stop

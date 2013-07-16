@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns">
			<ul class="breadcrumbs">
				<li><a href="#">NEWS</a></li>
				@if ($news->bs == 1 )	
				<li><a href="#">NEWS FOR BUYERS</a></li>
				@else 	
				<li><a href="#">NEWS FOR SELLERS</a></li>
				@endif
				<li class="current"><a href="#">{{$news->title}}</a></li>
			</ul>

			<h4>{{$news->title}}</h4>
			<p>{{$news->body}}</p>
			<hr/>
		</div>
	</div>
</div>
@stop

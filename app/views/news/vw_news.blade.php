@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-8 columns">
			<ul class="breadcrumbs">
				<li><a href="#">NEWS</a></li>
				<li><a href="#">NEWS FOR BUYERS</a></li>
				<li><a href="#">NEWS FOR SELLERS</a></li>
			</ul>

			<h4>{{$news->title}}</h4>
			<hr/>
			<p>{{$news->body}}</p>
		</div>
		<aside class="large-4 columns panel">

		</aside>
	</div>
</div>
@stop

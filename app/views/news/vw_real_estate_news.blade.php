@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns">
			<div class="newsContent">


				@foreach($news as $n)
				<h4>{{$n->title}}</h4>
				<p>{{$n->body}}</p>
			</br>
			<hr/>
			@endforeach
		</div>				
	</div>
</div>
</div>
@stop

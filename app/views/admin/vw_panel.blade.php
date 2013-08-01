@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns">
			
			<h1>Admin Panel</h1>
			<hr/>
			{{link_to('user-edit/1', 'Edit My Information')}} <br/>
			{{link_to_route('dream-home', 'Leave a request for your Dream Home')}} <br/>
			
		</div>
	</div>
</div>
@stop
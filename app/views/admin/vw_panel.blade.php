@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			
			<h1>User Panel</h1>
			<hr/>
			<ul class="button-group ulUserPanel">	
				<li class="button tiny leaveRequest">

					{{link_to('dream-home', 'Leave a Request for my Dream Home', array('class'=>'aUserPanelStyle'))}} 
				</li>
				<li class="button tiny manageRequest">	
					{{link_to('dream-home', 'Manage My Previous Request', array('class'=>'aUserPanelStyle'))}} 
				</li>
				<li class="button tiny secondary right editProfile">
					{{link_to('user-edit/'.Auth::user()->id, 'Edit My Profile', array('class'=>'aEditProfileStyle'))}} 
				</li>

			</ul>	
		</div>
	</div>
</div>
@stop
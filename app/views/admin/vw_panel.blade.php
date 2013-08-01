@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			
			<h1>User Panel</h1>
			<hr/>
			<ul class="inline-list ulUserPanel">	
				<li class="leaveRequest">

					{{link_to('dream-home', 'Leave a Request for my Dream Home', array('class'=>'aUserPanelStyle'))}} 
				</li>
				<li class="manageRequest">	
					{{link_to('dream-home', 'Manage My Previous Request', array('class'=>'aUserPanelStyle'))}} 
				</li>
				<li class="right editProfile">
					{{link_to('user-edit/1', 'Edit My Profile', array('class'=>'aEditProfileStyle'))}} 
				</li>

			</ul>	
		</div>
	</div>
</div>
@stop
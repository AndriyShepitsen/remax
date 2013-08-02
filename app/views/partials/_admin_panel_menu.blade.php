<div class="row">
	<div class="large-1 column userImgL">
		<img class="userImg"src="{{url('comp/img/userL.png')}}" alt="name">
	</div>
	<div class="large-9 columns userPanel">
		<h1>User Panel</h1>
	</div>
	<div class="large-2 columns"></div>
	<div class="editProfile button tiny secondary">
		{{link_to('user-edit/'.Auth::user()->id, 'Edit My Profile', array('class'=>'aEditProfileStyle'))}} 
	</div>
</div>          
<hr/>
<div class="row">
<div class="large-12 columns requestButtons">
		<ul class="inline-list ulUserPanel">	
			<li class="leaveRequest button tiny">

				{{link_to('dream-home-request', 'Leave a Request for my Dream Home', array('class'=>'aUserPanelStyle'))}} 
			</li>
			<li class="manageRequest button tiny">	
				{{link_to('dream-home-request-management', 'Manage My Previous Request', array('class'=>'aUserPanelStyle'))}} 
			</li>
			<li class="manageRequest button tiny">	
				{{link_to('dream-home-request-management', 'My Saved Homes', array('class'=>'aUserPanelStyle'))}} 
			</li>
		</ul>
	</div></div>

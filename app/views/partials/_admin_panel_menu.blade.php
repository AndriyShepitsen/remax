<h1>User Panel</h1>
			<hr/>
<ul class="inline-list ulUserPanel">	
				<li class="leaveRequest">

					{{link_to('dream-home-request', 'Leave a Request for my Dream Home', array('class'=>'aUserPanelStyle'))}} 
				</li>
				<li class="manageRequest">	
					{{link_to('dream-home-request-management', 'Manage My Previous Request', array('class'=>'aUserPanelStyle'))}} 
				</li>
				<li class="right editProfile">
					{{link_to('user-edit/'.Auth::user()->id, 'Edit My Profile', array('class'=>'aEditProfileStyle'))}} 
				</li>
			</ul>
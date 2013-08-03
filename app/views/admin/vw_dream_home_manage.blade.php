@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')

			<h4>Manage Dreamhomes Request</h4>
			<div class="row">
				<div class="large-6 columns">

				@if(isset($note))
				<div class="success">
				{{$note}}
				</div>
				@endif

					@if(isset($dreamhomes))
					<ol class="olDreamhomes">
						
						@foreach($dreamhomes as $dreamhome)
						<li>
							<ul class="no-bullet panel radius">
								<li>
									<em> Location: </em>{{$dreamhome->location}} <br/>
								</li>
								<li>
									<em> Property type: </em>{{$dreamhome->property_type}} <br/>
								</li>
								<li>
									<em> Beds: </em>{{$dreamhome->beds}} <br/>
								</li>
								<em> Baths: </em>{{$dreamhome->baths}} <br/>
								<li>
									<em> Garage: </em>{{$dreamhome->garage}} <br/>
								</li>
								<li>
									<ul class="inline-list">
										<li>
								{{link_to_route('dream-home-request-edit', 
								'Edit', $dreamhome->id)}} 
										</li>
										<li>
											{{link_to('dream-home-request-delete/'.$dreamhome->id, 'Delete')}}
										</li>
									</ul>
								</li>
							</ul>
						</li>
						@endforeach
					</ol>
					@endif
				</div>
			</div>

		</div>
	</div>
</div>
@stop
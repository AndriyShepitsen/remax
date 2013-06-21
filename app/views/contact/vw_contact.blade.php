@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public/renovating_a_home
-->

<div class="mainContent">
	<div class="row">
		<div class="large-12 columns">
			<form >
				<fieldset >
					<legend><h3>Contact Us</h3></legend>

					<div class="row">
						<div class="small-6 columns">
							<label>First Name</label>
							<input type="text" placeholder="Text">
						</div>
						<div class="small-6 columns">
							<label>Last Name</label>
							<input type="text" placeholder="Text">
						</div>
					</div>

					<div class="row">


						<div class="small-4 columns">
							<label>Home Phone</label>
							<input type="text" placeholder="Text">
						</div>

						<div class="small-4 columns">
							<label>Mobile Phone</label>
							<input type="text" placeholder="Text">
						</div>

						<div class="small-4 columns">
							<label>Email</label>
							<div class="row collapse">

								<div class="small-2 columns">
									<span class="prefix">@</span>
								</div>
								<div class="small-10 columns">
									<input type="text" placeholder="email">
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="small-8 columns">
							<label>Subject</label>
							<input type="text" placeholder="Text">
						</div>
					</div>

					<div class="row">
						<div class="large-8 columns">
							<label>Message</label>
							<textarea placeholder="Text"></textarea>
						</div>
					</div>

					<input type="submit" class="small button secondary" name="submit" id="submit" value="Send">

				</fieldset>


			</form>
		</div>
	</div>
</div>
@stop
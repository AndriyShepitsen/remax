@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public/about 
-->

<div class="mainContent panel">
	<div class="row">
		<ul class=" large-6 columns large-centered no-bullet ulLoginError">
			{{$errors->first('email', '<li>:message</li>')}}
			{{$errors->first('password', '<li>:message</li>')}}
			{{$errors->first('password_confirmation', '<li>:message</li>')}}
			@if(Session::has('message'))
			<li>{{Session::get('message')}}</li>
			@endif

		</ul>



		<div class="large-6 columns large-centered loginPageWrapper signInFormWrapper">
			<div class="formLoginPage">
				
			
  <a class="close-reveal-modal">&#215;</a>
  <div class="row">
    <div class="large-12 columns">
      <div class="navPanel">
        <nav class="top-bar min">
          <div class="large-2 columns">

            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="Remax First Class Logo">
           </a> 
         </div>

         <div class="large-10 columns"> <ul class="title-area right">
          <!-- Title Area -->
          <li class="name">
            <h1>
              {{link_to_route('home', 'REMAX FIRST CLASS');}}
            </h1>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- =create an account panel ends here -->

  <!-- =create an account form starts here -->
  {{Form::open(array('url' => 'foo/bar'))}}
  <div class="row">

    <div class="large-12 columns createAccount">  
      <h3 class="subheader account">Create Your Account</h3>

      <div class="row">
        <div class="large-6 columns">
          {{Form::label('firstNameCreate', 'First Name')}}
          {{Form::text('firstNameCreate', '', array('placeholder'=>'Your Name', 'class'=>'className'))}}
        </div>

        <div class="large-6 columns">{{Form::label('lastNameCreate', 'Last Name')}}
          {{Form::text('lastNameCreate', '', array('placeholder'=>'Your last name', 'class'=>'className'))}}
        </div>
      </div>


      <div class="row">
        <div class="large-6 columns">
          {{Form::label('emailCreate', 'Email Address')}}
          <div class="row collapse">
            <div class="small-2 columns">
              <span class="prefix">@</span>
            </div>
            <div class="small-10 columns">
              {{Form::text('emailCreate', '', array('placeholder'=>'Your email', 'class'=>'className'))}}
            </div>
          </div>
        </div>        

        <div class="large-6 columns">
          {{Form::label('mobilePhoneCreate', 'Mobile Phone')}}
          {{Form::text('mobilePhoneCreate', '', array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
        </div>
      </div>      

      <div class="row">
        <div class="large-6 columns">
          {{Form::label('passwordCreate', 'Password')}}
          {{Form::text('passwordCreate', '', array('placeholder'=>'**********', 'class'=>'className'))}}
        </div>
        <div class="large-6 columns">
          {{Form::label('confirmPasswordCreate', 'Confirm Password')}}
          {{Form::text('confirmPasswordCreate', '', array('placeholder'=>'**********', 'class'=>'className'))}}
        </div>
      </div>      

      <div class="row">
        <div class="small-2 columns">
          {{ Form::submit('Create Your Free Account', array('class'=>'button secondary small radius'))}}
        </div>
      </div>
    </div>


    {{Form::close()}}
  </div>
</div>
</div>



			</div>                  

		</div>
	</div>
</div>
@stop
@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public/about 
-->

<div class="mainContent">
	<div class="row">
		<div class="large-12 columns menues">
		@if($errors->has())
		These errors have occured	

		@endif


			{{Form::open(array('url'=>'login'))}} 
                             
            {{Form::label('email', 'Your Email')}}
            {{ Form::email('email', $value = null, $attributes = array())}}
            {{Form::label('password', 'Your Password')}}
            {{ Form::password('password', $value = null, $attributes = array())}}
            {{ Form::submit('Login', $attributes = array('class'=>'button  tiny radius'))}}
            {{Form::close()}} 
                  

		</div>
	</div>
</div>
@stop
@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="innerContent">


<div class="about-us">
	<p class="panel radius">
Welcome to Remax First Class.</br> 
We are a trustful Real Estate Company located in Skokie, IL. We offer a comprehensive service in real estate. We can help to buy, sell or manage residential property. We will also help tp  get the best mortgage conditions via our mortgage department as well as get all paper prepared by our staff attorneys.  We  have successful experience in short sales and always have a great investment opportunities.   Our main price range is from 35k till 500k, though we also have experience and listing in luxury market.
</br>
Our  first line districts are Skokie, Morton grove, Evanston, Niles, North Side Chicago, Ukrainian Village and neighboring  areas.
</p>

<div class="orbit-container panel">
<p>Our selected property</p>
				<ul class="orbit-slides-container" data-orbit data-options="timer_speed:260000;">
					<li>
						<img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Visit Open House Event</div>
					</li>
					<li>
						<img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Visit Open House Event</div>
					</li>
					<li>
						<img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Visit Open House Event</div>
					</li>
				</ul>
			</div>

Why we are worth to work with:
<ul class="panel radius">
<li>
we offer one stop service for home purchase. We have long term partnerships with major banks and can negotiate the best possible deal. We can move you to your new home during one week with the lowest mortgage rate. Our clients always have all papers signed on time with all details covered. 
</li>
<li>
we have no hidden fees and as a Remax Representative, we are very flexible in commissions. We always prioritize the client interest and in some cases we work without commissions when they are obstacles to closing. Our main mission is client satisfaction and long term partnership.
</li>
<li>
we offer a comprehensive service in real estate - we can help to change house, avoid foreclosure without any influence on your credit score.
</li>
<li>
we also can sell your residential property in the shortest time as we have a wide network of real estate partnerships in the area and our commissions are never the problem. We have a great experience in pre-sell preparation when small investments could bring the highest return.
</li>
</li>
we always have the best options for investment opportunities in the area and we also have management experience.
</li>
<li>
 in 2012 we sold more than 100 residential properties for middle-class families and 40 of them directly from banks. 
</li>
</ul>

</div>

	<div class="row">
		<div class="large-12 columns">
			
			<!-- =news start here -->
			<div class="row panel">
				<!-- =news for buyers start here -->
				<article class="large-6 columns">
					<h4>{{link_to('news-for-buyers', 'NEWS FOR BUYERS', array('class'=>'newsHead'));}}</h4>

					<hr/>
					
					<a class="newsHeadHover" href="{{'news/'.$newsBuy->id;}}">
						<h5 class="subheader">{{$newsBuy->title}}</h5>
					</a>
					<p>{{$newsBuy->body}}</p> 

					{{link_to('news/'.$newsBuy->id, 'Read more', array('class'=>'readMore'));}}	
				</article>
				<!-- =news for sellers start here  -->
				<article class="large-6 columns">
					<h4>{{link_to('news-for-sellers', 'NEWS FOR SELLERS', array('class'=>'newsHead'));}}</h4>
						<hr/>
						
						<a class="newsHeadHover" href="{{'news/'.$newsSell->id;}}">
							<h5 class="subheader">{{$newsSell->title}}</h5>
						</a>
						<p>{{$newsSell->body}}</p>
						{{link_to('news/'.$newsSell->id, 'Read more', array('class'=>'readMore'));}}	
					</article>
				</div>
			</div>
		</div>
	</div>
	@stop

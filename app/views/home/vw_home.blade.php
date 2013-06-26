@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="innerContent">
	<div class="row">
		<div class="large-12 columns">
			<div class="orbit-container">
				<ul class="orbit-slides-container" data-orbit data-options="timer_speed:2600;">
					<li><img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
					<li><i12g src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
					<li><img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
				</ul>
			</div>
			<!-- =news start here -->
			<div class="row">
				<!-- =news for buyers start here -->
				<article class="large-6 columns">
					<h4> <a href="#">NEWS FOR BUYERS</a> </h4>
					<hr/>
					<a class="th" href="<?php echo 'news/'.$newsBuy->id; ?>"><img src="{{url('comp/img/buyers.jpg')}}" alt="News for Buyers"></a>
					<a class="newsTitleHover" href="<?php echo 'news/'.$newsBuy->id; ?>">
						<h5 class="subheader">{{$newsBuy->title}}</h5>
					</a>
					<p>{{$newsBuy->body}}</p> 
					<a class="readMore" href="<?php echo 'news/'.$newsBuy->id; ?>">Read More</a>
				</article>
				<!-- =news for sellers start here  -->
				<article class="large-6 columns">
					<h4> <a href="#">NEWS FOR SELLERS</a> </h4>
					<hr/>
					<a class="th" href="<?php echo 'news/'.$newsSell->id; ?>"><img src="{{url('comp/img/sellers.jpg')}}" alt="News for Sellers">
					</a>
					<a class="newsTitleHover" href="<?php echo 'news/'.$newsSell->id; ?>">
						<h5 class="subheader">{{$newsSell->title}}</h5>
					</a>
					<p>{{$newsSell->body}}</p>
					<a class="readMore" href="<?php echo 'news/'.$newsSell->id; ?>">Read More</a>

				</article>
			</div>

		</div>
	</div>
</div>
@stop

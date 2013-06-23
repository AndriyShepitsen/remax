@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-8 columns">

			<div class="orbit-container">
				<ul class="orbit-slides-container" data-orbit data-options="timer_speed:2600;">
					<li><img src="comp/img/house.jpg" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
					<li><img src="comp/img/house.jpg" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>

					<li><img src="comp/img/house.jpg" alt="">

						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>

				</ul>
			</div>
		</div>

		<aside class="large-4 columns panel">
			<span class="find">FIND YOUR HOME</span>
			<div class="row">
				<div class="large-12 columns">
					<input type="text" placeholder="LOCATION" class="findInput">
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<input type="text" placeholder="PROPERTY TYPE" class="findInput">
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<input type="text" placeholder="SELECT STATUS" class="findInput">
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<input type="text" placeholder="BADS" class="findInput">
				</div>
				<div class="large-4 columns">
					<input type="text" placeholder="BATHS" class="findInput">
				</div>
				<div class="large-4 columns">
					<input type="text" placeholder="GARAGE" class="findInput">
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<input type="text" placeholder="PRICE FROM:" class="findInput">
				</div>
				<div class="large-6 columns">
					<input type="text" placeholder="PRICE TO:" class="findInput">
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<input type="text" placeholder="LOT SIZE:" class="findInput">
				</div>
				<div class="large-6 columns">
					<input type="text" placeholder="AGE OF HOME:" class="findInput">
				</div>
			</div>
			<input type="submit" class="small button secondary" name="submit" id="submit" value="SEARCH">
		</aside>
	</div>

	<!-- =news start here -->
	<div class="row">
		<!-- =news for buyers start here -->
		<article class="large-4 columns">
			<h4> <a href="#">NEWS FOR BUYERS</a> </h4>
			<hr/>
			<a class="th" href="#"> <img src="comp/img/buyers.jpg" alt="News for Buyers"><a/>
				<h5 class="subheader">{{$newsBuy->title}}</h5>
				<p>{{$newsBuy->body}}</p> 
				<a class="readMore" href="<?php echo 'news/'.$newsBuy->id; ?>">Read More</a>
			</article>
			<!-- =news for sellers start here  -->
			<article class="large-4 columns">
				<h4> <a href="#">NEWS FOR SELLERS</a> </h4>
				<hr/>
				<a class="th" href="#"><img src="comp/img/sellers.jpg" alt="News for Sellers"> <a/>
					<h5 class="subheader">{{$newsSell->title}}</h5>
					<p>{{$newsSell->body}}</p>
					<a class="readMore" href="<?php echo 'news/'.$newsSell->id; ?>">Read More</a>
				</article>
				<!--  =latest listings start here-->
				<section class="large-4 columns">
					<h4> <a href="#">LATEST LISTINGS</a> </h4>
					<hr/>
					<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
						<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
						<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
						<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
						<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
						<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
						<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
					</ul>

					<h4><a href="">FOR RENT</a> <h4>
						<hr/>
						<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
							<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
							<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
							<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
							<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
							<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
							<li><a class="th radius" href="#"><img src="comp/img/agent.png" alt=""><a/></li>
						</ul>
					</section>
				</div>
			</div>
			@stop

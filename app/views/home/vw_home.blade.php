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
	
	<div class="row">
		<article class="large-4 small-4 columns">
			<h4> <a href="#">NEWS FOR BUYERS</a> </h4>
			<hr/>
			<a class="th" href="#">	<img src="comp/img/buyers.jpg" alt="News for Buyers"><a/>
				<h5 class="subheader"><a href="#">NEWS LOREM BUYERS<a/></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, iusto, dolore, natus quisquam eaque ab sequi voluptates molestiae assumenda dicta ratione excepturi officiis at a voluptatibus fugiat quod fuga optio!</p>
			</article>

			<article class="large-4 small-4 columns">
				<h4> <a href="#">NEWS FOR SELLERS</a> </h4>
				<hr/>
				<a class="th" href="#"><img src="comp/img/sellers.jpg" alt="News for Sellers"> <a/>
					<h5 class="subheader"><a href="#">NEWS LOREM SELLERS<a/></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, numquam, quod, nihil illum expedita voluptas consectetur debitis atque laborum cumque dolor eius voluptatum quasi? Aspernatur, excepturi vero hic optio culpa.</p>
				</article>

				<section class="large-4 small-4 columns">
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
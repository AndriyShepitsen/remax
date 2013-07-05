@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="innerContent">
	<div class="row">
		<div class="large-12 columns">
			<div class="orbit-container">
				<ul class="orbit-slides-container" data-orbit data-options="timer_speed:260000;">
					<li>
						<img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
					<li>
						<img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
					<li>
						<img src="{{url('comp/img/house.jpg')}}" alt="">
						<div class="orbit-caption">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
					</li>
				</ul>
			</div>
			<!-- =news start here -->
			<div class="row">
				<!-- =news for buyers start here -->
				<article class="large-6 columns">
					<h4>{{link_to('news-for-buyers', 'NEWS FOR BUYERS', array('class'=>'newsTitle'));}}</h4>

					<hr/>
					<a class="th" href="{{'news/'.$newsBuy->id;}}">
						<img src="{{url('comp/img/buyers.jpg')}}" alt="News for Buyers">
					</a>
					<a class="newsTitleHover" href="{{'news/'.$newsBuy->id;}}">
						<h5 class="subheader">{{$newsBuy->title}}</h5>
					</a>
					<p>{{$newsBuy->body}}</p> 

					{{link_to('news/'.$newsBuy->id, 'Read more', array('class'=>'readMore'));}}	
				</article>
				<!-- =news for sellers start here  -->
				<article class="large-6 columns">
					<h4>{{link_to('news-for-sellers', 'NEWS FOR SELLERS', array('class'=>'newsTitle'));}}</h4>
						<hr/>
						<a class="th" href="{{'news/'.$newsSell->id;}}"><img src="{{url('comp/img/sellers.jpg')}}" alt="News for Sellers">
						</a>
						<a class="newsTitleHover" href="{{'news/'.$newsSell->id;}}">
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

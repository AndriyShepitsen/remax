@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="innerContent">
	<div class="row">
		<div class="large-12 columns">
			
			<!-- =news start here -->
			<div class="row">
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

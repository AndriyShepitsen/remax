<!-- //LOCATION: remax/public
<!-- //<!DOCTYPE html>
  <!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Remax First Class Realty</title>
    {{HTML::style("comp/stylesheets/normalize.css" )}} 
    {{HTML::style("comp/stylesheets/screen.css" )}} 
    {{HTML::script("//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js")}} 

    {{HTML::script("comp/javascripts/vendor/custom.modernizr.js")}} 
    {{HTML::script("comp/javascripts/foundation.min.js")}} 
    {{HTML::script("comp/javascripts/script.js")}} 


  </head>
  <body>
    <!-- navPanel starts here -->
    <div class="navPanel">
      <div class="row">
        <div class="large-12 columns">

          <nav class="top-bar">
            <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
                <h1>
                  {{HTML::linkRoute('home', 'REMAX FIRST CLASS');}}
                </h1>
              </li>
              <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->

             <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
              <ul class="right">
                <li><a href="{{ URL::route('home')}}">Home</a></li>
                <li><a href="{{ URL::route('about')}}">About</a></li>
                <li class="has-dropdown"><a href="{{ URL::route('the_benefits_of_home_ownership')}}">Buying</a>
                  <ul class="dropdown">
                    <li><a href="{{ URL::route('the_benefits_of_home_ownership')}}">The Benefits of Home Ownership</a></li>
                    <li><a href="{{ URL::route('the_importance_of_buyers_agent')}}">The Importance of a Buyer's Agent</a></i>
                     <li><a href="{{ URL::route('deciding_where_to_live')}}">Deciding Where to Live </a></li>
                     <li><a href="{{ URL::route('anatomy_of_a_home_purchase')}}">Anatomy of a Home Purchase</a></li>
                     <li><a href="{{ URL::route('how_much_house_can_you_afford')}}">How Much House Can You Afford?</a></li>
                     <li><a href="{{ URL::route('five_tips_to_narrow_your_online_home_search')}}">5 Tips to Narrow Your Online Home Search</a></li>
                   </ul>
                 </li>
                 <li class="has-dropdown"><a href="{{ URL::route('consider_a_home_inspection_when_selling')}}">Selling</a>
                  <ul class="dropdown">
                    <li><a href="{{ URL::route('consider_a_home_inspection_when_selling')}}">The Right Listing Agent</a></li>
                    <li><a href="{{ URL::route('how_an_agent_markets_your_home')}}">How an Agent Markets Your Home</a></li>
                    <li><a href="{{ URL::route('pricing_your_home_to_sell')}}">Pricing Your Home to Sell</a></li>
                    <li><a href="{{ URL::route('preparing_your_house_for_sale')}}">Preparing Your House for Sale</a></li>
                    <li><a href="{{ URL::route('consider_a_home_inspection_when_selling')}}">Consider a Home Inspection When Selling</a></li>
                  </ul>
                  <li/>
                  <li class="has-dropdown"><a href="{{ URL::route('finding_the_right_mortgage_professional')}}">Mortgage</a>
                    <ul class="dropdown">
                      <li><a href="{{ url::route('finding_the_right_mortgage_professional')}}">Finding the Right Mortgage Professional</a></li>
                      <li><a href="{{ url::route('getting_preapproved')}}">Getting Preapproved</a></li>
                      <li><a href="{{ url::route('how_much_can_you_afford')}}">How Much Can you afford?</a></li>
                      <li><a href="{{ url::route('down_payments_how_much_do_you_need')}}">down payments: how much do you need?</a></li>
                      <li><a href="{{ url::route('mortgages_101_basic_loan_types')}}">mortgages 101: basic loan types </a></li>
                      <li><a href="{{ url::route('renovating_a_home')}}">renovating a home? consider a 203(k) loan </a></li>
                    </ul>
                    <li/>
                    <li class="has-dropdown"><a href="{{ url::route('real_estate_news')}}">News</a>
                      <ul class="dropdown">
                        <li><a href="{{ url::route('real_estate_news')}}">Real Estate News</a></li>
                        <li><a href="{{ url::route('news_for_buyers')}}">News for Buyers</a></li>
                        <li><a href="{{ url::route('news_for_sellers')}}">News for Sellers</a></li>
                      </ul>
                      <li/>
                      <li><a href="{{ url::route('contact')}}">Contact</a></li>

                    </ul>
                  </section>
                </nav>

              </div>
            </div>
          </div>

          <!-- =logoWrapper -->
          <div class="logoWrapper">
            <div class="row">
              <aside class="large-8 columns">
                <a href="{{ URL::route('home')}}"> 
                  <img src="{{url('comp/img/REMAX1Logo.png')}}" alt="Logo Remax First Class Realty">
                  <a/>
                </aside>

                <!-- =loginButton -->
                <aside class="large-4 columns">
                  <div class="row">
                    <div class="large-12 columns">
                      <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                      <input type="submit" class="button tiny right" value="Create an account">
                    </div>
                  </div>
                  <!-- =homeIcon -->
                  <div class="row">
                   <div class="large-12 columns right icon">
                     <a href="{{ URL::route('home')}}" class="homeIcon has-tip-left" title="Home Page">
                       <img src="{{url('comp/img/home_remax.png')}}" alt="Remax First Class Home Icon">
                     </a> 
                     <!-- =mailIcon -->
                     <a href="#" class="mailIcon has-tip-left" title="Send Us Email" data-reveal-id="myModal"> <img src="{{url('comp/img/mail_remax.png')}}" alt="Remax First Class Mail Icon" ></a>
                   </div> 
                 </div>
               </aside>
             </div>
           </div>
           <!-- =header ends here -->


           <div id="mainContent">
             <div class="row">
              <div class="large-8 columns">

               @yield('content')
             </div>

             <!--  =aside starts here-->
             <adide class="large-4 columns">
              <div class="large-12 columns panel">
                <span class="find">FIND YOUR HOME</span>
                <div class="row">
                  <div class="large-12 columns">


                    {{Form::open(array('url' => 'foo/bar'))}}

                    <div class="row">
                      <div class="large-12 columns">
                        {{Form::label('location', 'Location')}}
                        {{Form::text('location', '', array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
                      </div>
                    </div>

                    <div class="row">
                      <div class="large-12 columns">
                        {{Form::label('from', 'Price Range')}}
                      </div>
                    </div>

                    <div class="row">
                      <div class="large-6 columns">
                        {{Form::text('from', '', array('placeholder'=>'$ From', 'class'=>'findInput'))}}
                      </div>
                      <div class="large-6 columns">
                        {{Form::text('to', '', array('placeholder'=>'$ To', 'class'=>'findInput'))}}
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-4 columns">
                        {{Form::label('bads', 'bads')}}
                        {{Form::text('bads', '', array('placeholder'=>'#', 'class'=>'findinput'))}}
                      </div>
                      <div class="large-4 columns">
                        {{Form::label('baths', 'baths')}}
                        {{Form::text('baths', '', array('placeholder'=>'#', 'class'=>'findinput'))}}
                      </div>
                      <div class="large-4 columns">
                        {{Form::label('garage', 'garage')}}
                        {{Form::text('garage', '', array('placeholder'=>'#', 'class'=>'findinput'))}}
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-2 columns">

                        {{ Form::submit('Search', array('class'=>'secondary button small radius'))}}
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 column">
                        <ul class="breadcrumbs">
                         <li> <a class="advanceSearch" href="#">Advances Search</a></li> 
                         <li> <a class="advanceSearch" href="#">Seearch by MLS#</a></li> 
                       </ul>
                     </div>
                   </div>
                   {{Form::close()}}


                 </div>
               </div>
             </div>

             <!-- =find your home ends here -->
             <section class="large-12 columns">
              <h4> <a class="secondary alert-box" href="#">NEW LISTINGS</a> </h4>
              <ul class="small-block-grid-3 clearing-thumbs" data-clearing>
                <li><a class="th radius" href="#"><img src="{{url('comp/img/new/10s.jpg')}}" alt=""><a/></li>
                <li><a class="th radius" href="#"><img src="{{url('comp/img/new/9s.jpg')}}" alt=""><a/></li>
                <li><a class="th radius" href="#"><img src="{{url('comp/img/new/8s.jpg')}}" alt=""><a/></li>
                <li><a class="th radius" href="#"><img src="{{url('comp/img/new/7s.jpg')}}" alt=""><a/></li>
                <li><a class="th radius" href="#"><img src="{{url('comp/img/new/6s.jpg')}}" alt=""><a/></li>
                <li><a class="th radius" href="#"><img src="{{url('comp/img/new/3s.jpg')}}" alt=""><a/></li>
              </ul>
            </section>

            <section class="large-12 columns">
              <h4><a class="secondary alert-box" href="">FOR RENT</a> <h4>
                <hr/>
                <ul class="small-block-grid-3 clearing-thumbs " data-clearing>
                  <li><a class="th radius" href="#"><img src="{{url('comp/img/rent/1s.jpg')}}" alt=""><a/></li>
                  <li><a class="th radius" href="#"><img src="{{url('comp/img/rent/2s.jpg')}}" alt=""><a/></li>
                  <li><a class="th radius" href="#"><img src="{{url('comp/img/rent/3s.jpg')}}" alt=""><a/></li>
                  <li><a class="th radius" href="#"><img src="{{url('comp/img/rent/4s.jpg')}}" alt=""><a/></li>
                  <li><a class="th radius" href="#"><img src="{{url('comp/img/rent/5s.jpg')}}" alt=""><a/></li>
                  <li><a class="th radius" href="#"><img src="{{url('comp/img/rent/6s.jpg')}}" alt=""><a/></li>
                </ul>
              </section>

            </adide>
            <!-- =adide ands here -->


          </div>

        </div>     





        <!-- /* =footeer starts here */ -->

        <footer>
          <div class="row">
            <div class="large-4 columns">
              <div class="row">
                <div class="large-12 columns">
                  <a class="th has-tip-left logoPadding" title="Multiple Listing Service" href="#">
                    <img src="{{url('comp/img/mls.png')}}" alt="Multiple Listing Service">
                  </a>
                  <a class="th has-tip-left logoPadding" title="Remax Commercial" href="#">
                    <img src="{{url('comp/img/remax-commercial-logo.png')}}" alt="Remax Commercial">
                  </a>
                  <a class="th has-tip-left logoPadding"  title="Remax Short Sale Chicago"  href="http://www.shortsalechicago.us/Short-Sale-Chicago">
                    <img src="{{url('comp/img/Chicago-Short-Sale-Logo.png')}}" alt="Chicago Short Sale">
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="large-12 columns logoFooter">
                  <a href="{{ URL::route('home')}}">
                    <img src="{{url('comp/img/logo-footer.png')}}" alt="Logo Remax First Class">
                    <a/>
                  </div>
                </div>
              </div>
              <div class="large-4 columns">

                <section class="large-6 columns social">
                  <ul class="prop">
                    <span class="propertiesFooter">PROPERTIES FOR SALE:</span> <br/>
                    <li class="locality properties"><a href="#">Single home</a></li>
                    <li class="locality properties"><a href="#">Family home</a></li>
                    <li class="locality properties"><a href="#">Apartment</a></li>
                    <li class="locality properties"><a href="#">Villa</a></li>
                    <li class="locality properties"><a href="#">Condo</a></li>
                    <li class="locality properties"><a href="#">Other</a></li>
                  </ul>
                </section>

                <section class="large-6 columns social">
                  <ul class="prop">
                    <span class="propertiesFooter">PROPERTIES FOR RENT:</span> <br/>
                    <li class="locality properties"><a href="#">Single home</a></li>
                    <li class="locality properties"><a href="#">Family home</a></li>
                    <li class="locality properties"><a href="#">Apartment</a></li>
                    <li class="locality properties"><a href="#">Villa</a></li>
                    <li class="locality properties"><a href="#">Condo</a></li>
                    <li class="locality properties"><a href="#">Other</a></li>
                  </ul>
                </section>

              </div>

              <div class="large-4 columns">
                <div class="large-6 columns">
                  <ul class="vcard">
                    <span class="connectFooter">CONTACT INFORMATION:</span>
                    <li class="locality"> PHONE: (847) 674-9797</li>
                    <li class="locality"> FAX: (847) 674-0411</li>
                    <li class="street-address">4023 W. Church St.</li>
                    <li class="locality">Skokie</li>
                    <li><span class="state">IL</span> <span class="zip">600076</span></li>
                    <li class="email"><a href="#">remax1stclass@gmail.com </a></li>
                  </ul>
                </div>
                <section class="large-6 columns social">
                  <span class="contactFooter">CONNECT WITH US:</span>
                  <ul class="small-block-grid-3">
                    <li><a class="has-tip-left" title="Our Facebook Page" href="#"><img src="{{url('comp/img/facebook.png')}}" alt="Skokie Remax First Class Facebook Icon"><a/></li>
                    <li><a class="has-tip-left" title="Our Feed Page" href="#"><img src="{{url('comp/img/feed.png')}}" alt="Skokie Remax First Class Feed Icon"><a/></li>
                    <li><a class="has-tip-left" title="Our Page" href="#"><img src="{{url('comp/img/youtube.png')}}" alt="Skokie Remax First Class Youtube Icon"><a/></li>
                    <li><a class="has-tip-left" title="Our Twitter Page" href="#"><img src="{{url('comp/img/twitter.png')}}" alt="Skokie Remax First Class Twitter Icon"><a/></li>
                    <li><a class="has-tip-left" title="Our Google Plus Page" href="#"><img src="{{url('comp/img/google.png')}}" alt="Skokie Remax First Class Google Icon"><a/></li>
                    <li><a class="has-tip-left" title="Our Linkedin Page" href="#"><img src="{{url('comp/img/linkedin.png')}}" alt="Skokie Remax First Class Linkedin Icon"><a/></li>
                  </ul>
                </section>
              </div>
            </div>
          </footer>

          <!-- /* =copyright starts here */ -->

          <div class="copyright">
            <div class="row">
              <div class="large-4 large-centered columns copy">
                <p>© 2013 RE/MAX FIRST CLASS</p> 
              </div>

            </ul>
          </div>
        </div>
      </div>

<!-- /* My slideDown mail form starts here */
--> 
<script>
document.write('<script src=' +
  ('_proto_' in {} ? 'comp/javascripts/vendor/zepto' : 'comp/javascripts/vendor/jquery') +
  '.js><\/script>')
</script>

{{HTML::script("comp/javascripts/foundation/foundation.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.alerts.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.clearing.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.cookie.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.dropdown.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.forms.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.interchange.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.joyride.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.magellan.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.orbit.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.placeholder.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.reveal.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.section.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.tooltips.js")}}

{{HTML::script("comp/javascripts/foundation/foundation.topbar.js")}}


<script>
$(document).foundation();
</script>



<div id="myModal" class="reveal-modal medium myModal2">
  <form id="contact" name="contact" action="#" method="post">
    <label for="email">Your E-mail</label>
    <input type="text" id="email" name="email" class="txt">
    <br>
    <label for="msg">Enter a Message</label>
    <textarea id="msg" name="msg" class="txtarea"></textarea>

    <button id="send">Send</button>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- /* My slideDown Authentification Form Starts Here */ -->


<div id="adminAuth" class="reveal-modal medium adminAuth2">
  {{Form::open(array('url'=>'/login'))}} 

  {{ Form::email('email', $value = null, $attributes = array())}}
  {{ Form::password('password', $value = null, $attributes = array())}}
  {{ Form::submit('Login', $attributes = array('class'=>'button tiny radius'))}}
  <a class="close-reveal-modal">&#215;</a>
  {{Form::close()}} 
  
</div>


</body>
</html>



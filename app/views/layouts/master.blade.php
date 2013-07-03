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
                  {{link_to_route('home', 'REMAX FIRST CLASS');}}
                </h1>
              </li>
              <!-- Remove the class "menu-icon" to get rid of menu icon. Take out  "Menu" to just have icon alone -->

              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
              <ul class="right">
                <li>{{link_to_route('home', 'Home');}}</li>
                <li>{{link_to_route('about', 'About');}}</li>
                <li class="has-dropdown">{{link_to('#', 'Buying');}}

                  <ul class="dropdown">
                    <li>{{link_to_route('the_benefits_of_home_ownership', 'The Benefits of Home Ownership');}}</li>
                    <li>{{link_to_route('the_importance_of_buyers_agent', 'The Importance of a Buyer\'s Agent');}}</li>
                    <li>{{link_to_route('deciding_where_to_live', 'Deciding Where to Live');}}</li>
                    <li>{{link_to_route('anatomy_of_a_home_purchase', 'Anatomy of a Home Purchase');}}</li>
                    <li>{{link_to_route('how_much_house_can_you_afford', 'How Much House Can You Afford?');}}</li>
                    <li>{{link_to_route('five_tips_to_narrow_your_online_home_search', '5 Tips to Narrow Your Online Home Search');}}</li>
                  </ul>
                </li>
                <li class="has-dropdown">{{link_to('#', 'Selling');}}
                  <ul class="dropdown">
                    <li>{{link_to_route('the_right_listing_agent', 'The Right Listing Agent');}}</li>
                    <li>{{link_to_route('how_an_agent_markets_your_home', 'How an Agent Markets Your Home');}}</li>
                    <li>{{link_to_route('pricing_your_home_to_sell', 'Pricing Your Home to Sell');}}</li>
                    <li>{{link_to_route('preparing_your_house_for_sale', 'Preparing Your House for Sale');}}</li>
                    <li>{{link_to_route('consider_a_home_inspection_when_selling', 'Consider a Home Inspection When Selling');}}</li>
                  </ul>
                  <li/>
                  <li class="has-dropdown">{{link_to('#', 'Mortgage');}}
                    <ul class="dropdown">
                      <li>{{link_to_route('preparing_your_house_for_sale', 'Preparing Your House for Sale');}}</li>
                      <li>{{link_to_route('finding_the_right_mortgage_professional', 'Finding the Right Mortgage Professional');}}</li>
                      <li>{{link_to_route('getting_preapproved', 'Getting Preapproved');}}</li>
                      <li>{{link_to_route('how_much_can_you_afford', 'How Much Can you afford?');}}</li>
                      <li>{{link_to_route('down_payments_how_much_do_you_need', 'Down Payments: How Much Do You Need?');}}</li>
                      <li>{{link_to_route('mortgages_101_basic_loan_types', 'Mortgages 101: Basic Loan Types');}}</li>
                      <li>{{link_to_route('renovating_a_home', 'Renovating a Home? Consider a 203(k) Loan');}}</li>
                    </ul>
                    <li/>
                    <li class="has-dropdown">{{link_to('#', 'News');}}
                      <ul class="dropdown">
                        <li>{{link_to_route('real_estate_news', 'Real Estate News');}}</li>
                        <li>{{link_to_route('news_for_buyers', 'News for Buyers');}}</li>
                        <li>{{link_to_route('news_for_sellers', 'News for Sellers');}}</li>
                      </ul>
                      <li/>
                      <li>{{link_to_route('contact', 'Contact');}}</li>
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

               <a href="{{URL::route('home')}}" title="Home Page">
                 <img src="{{url('comp/img/REMAX1Logo.png')}}" alt="Remax First Class Logo">
               </a> 

             </aside>

             <!-- =loginButton -->
             <aside class="large-4 columns">
              <div class="row">
                <div class="large-12 columns">
                  <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                  <input type="submit" class="button tiny right" data-reveal-id="createAccount" value="Create an account">
                </div>
              </div>
              <!-- =homeIcon -->
              <div class="row">
               <div class="large-12 columns right icon";>
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
                      <li>{{link_to('#', 'Advanced Search', array('class'=>'advanceSearch'));}}</li>
                      <li>{{link_to('#', 'Search by MLS#', array('class'=>'advanceSearch'));}}</li>
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
              <div class="large-12 columns logoRemaxFooter">
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
                  <li class="locality properties">{{link_to('#', 'Single home');}}</li>
                  <li class="locality properties">{{link_to('#', 'Family home');}}</li>
                  <li class="locality properties">{{link_to('#', 'Apartment');}}</li>
                  <li class="locality properties">{{link_to('#', 'Villa');}}</li>
                  <li class="locality properties">{{link_to('#', 'Condo');}}</li>
                  <li class="locality properties">{{link_to('#', 'Other');}}</li>
                </ul>
              </section>

              <section class="large-6 columns social">
                <ul class="prop">
                  <span class="propertiesFooter">PROPERTIES FOR RENT:</span> <br/>
                  <li class="locality properties">{{link_to('#', 'Single home');}}</li>
                  <li class="locality properties">{{link_to('#', 'Family home');}}</li>
                  <li class="locality properties">{{link_to('#', 'Apartment');}}</li>
                  <li class="locality properties">{{link_to('#', 'Villa');}}</li>
                  <li class="locality properties">{{link_to('#', 'Condo');}}</li>
                  <li class="locality properties">{{link_to('#', 'Other');}}</li>
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
                  <li class="email">{{link_to('#', 'remax1stclass@gmail.com');}}</li>
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

          </div>
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
  <h3 class="subheader">Contact Us</h3>
  {{Form::open(array('url' => 'foo/bar'))}}
  {{Form::label('email', 'Your E-mail')}}
  {{Form::text('email', '', array('placeholder'=>'@', 'class'=>'txt'))}}
  {{Form::label('msg', 'Enter a Message')}}
  {{Form::textarea('msg', '', array('placeholder'=>'', 'class'=>'txtarea'))}}
  {{ Form::submit('Send', array('class'=>'secondary button small radius'))}}


  <a class="close-reveal-modal">&#215;</a>
  {{Form::close()}}
</div>


<!--
/* insert data-reveal-id to link with the same id */

<a href="#" class="mailIcon has-tip-left" title="Send Us Email" data-reveal-id="myModal"> <img src="{{url('comp/img/mail_remax.png')}}" alt="Remax First Class Mail Icon" ></a>
-->



<!-- /* My slideDown Create account Form Starts Here */ -->


<div id="createAccount" class="reveal-modal medium createAccount">
  <div class="navPanel">
    <div class="row">
      <div class="large-12 columns">

        <nav class="top-bar">
          <ul class="title-area right">
            <!-- Title Area -->
            <li class="name">
              <h1>
                {{link_to_route('home', 'REMAX FIRST CLASS');}}
              </h1>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- =create an account panel ends here -->

  <!-- =create an account form starts here -->
  <div class="row">

    <div class="large-12 columns">  
      <h3 class="subheader">Create Your Account</h3>
      {{Form::open(array('url' => 'foo/bar'))}}

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
          {{ Form::submit('Create Your Free Account', array('class'=>'button small radius'))}}
        </div>
      </div>
    </div>


    <a class="close-reveal-modal">&#215;</a>
    {{Form::close()}}
  </div>
</div>

<!-- =create an account form ends here -->

</div>
<!--
/* insert data-reveal-id to your button with the same id */
                   <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                 -->

                 <!-- /* My slideDown Authentification Form Starts Here */ -->


                 <div id="adminAuth" class="reveal-modal medium adminAuth2">
                  {{Form::open(array('url'=>'/login'))}} 

                  {{ Form::email('email', $value = null, $attributes = array())}}
                  {{ Form::password('password', $value = null, $attributes = array())}}
                  {{ Form::submit('Login', $attributes = array('class'=>'button tiny radius'))}}
                  <a class="close-reveal-modal">&#215;</a>
                  {{Form::close()}} 

                </div>
<!--
/* insert data-reveal-id to your button with the same id */
                   <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                 -->




               </body>
               </html>



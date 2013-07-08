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
           <div class="row">
            <div class="large-12 columns panel">
             <span class="find">FIND YOUR HOME</span>
             <div class="row">
               <div class="large-12 columns">


                 {{Form::open(array('url' => 'search', 'method'=>'POST'))}}

                 <div class="row">
                   <div class="large-12 columns">
                     {{Form::label('location', 'Location')}}
                     {{Form::text('location',Input::get('location'), array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
                   </div>
                 </div>

                 <div class="row">
                   <div class="large-12 columns">
                     {{Form::label('from', 'Price Range')}}
                   </div>
                 </div>

                 <div class="row">
                   <div class="large-6 columns">
                     {{Form::text('from', Input::get('from'), array('placeholder'=>'$ From', 'class'=>'findInput'))}}
                   </div>
                   <div class="large-6 columns">
                     {{Form::text('to',  Input::get('to'), array('placeholder'=>'$ To', 'class'=>'findInput'))}}
                   </div>
                 </div>
                 <div class="row">
                   <div class="large-6 columns">
                     {{Form::label('beds', 'Bedrooms')}}
                     {{Form::text('beds', Input::get('beds'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                   </div>
                   <div class="large-6 columns">
                     {{Form::label('baths', 'Bathroomss')}}
                     {{Form::text('baths', Input::get('baths'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                   </div>
<!--                    <div class="large-4 columns">
                   {{Form::label('garage', 'garage')}}
                   {{Form::text('garage', '', array('placeholder'=>'#', 'class'=>'findinput'))}}
                 </div>
               -->                 </div>
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
       </div>

       <!-- =find your home ends here -->

       <div class="row">
         <section class="large-12 columns panel ">
           <div>
             <h4> <a class="newListingsTitle" href="http://www.remaxskokie.com/search">NEW LISTINGS</a> </h4>
           </div>
           <hr/>
           <ul class="small-block-grid-3 clearing-thumbs" data-clearing>
             <li><a class="th radius" data-reveal-id="a" href="#"><img src="{{url('comp/img/thumbs/1/1s.jpg')}}" alt=""><a/></li>
             <li><a class="th radius" data-reveal-id="b" href="#"><img src="{{url('comp/img/thumbs/15/1s.jpg')}}" alt=""><a/></li>
             <li><a class="th radius" data-reveal-id="c" href="#"><img src="{{url('comp/img/thumbs/16/1s.jpg')}}" alt=""><a/></li>
             <li><a class="th radius" data-reveal-id="d" href="#"><img src="{{url('comp/img/thumbs/19/1s.jpg')}}" alt=""><a/></li>
             <li><a class="th radius" data-reveal-id="e" href="#"><img src="{{url('comp/img/thumbs/5/1s.jpg')}}" alt=""><a/></li>
             <li><a class="th radius" data-reveal-id="f" href="#"><img src="{{url('comp/img/thumbs/10/1s.jpg')}}" alt=""><a/></li>
           </ul>
         </section>
       </div>

       <div class="row">
         <section class="large-12 columns panel ">
           <h4><a class="newListingsTitle"href="">OUR AGENTS</a> <h4>
             <hr/>
             <ul class="small-block-grid-3 clearing-thumbs " data-clearing>
               <li><a class="th radius" data-reveal-id="danFlorian" href="#"><img src="{{url('comp/img/agents/Dan_I_Florian.jpg')}}" alt=""><a/>
                 {{link_to('#', 'Dan I. Florian', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="ivyMoy" href="#"><img src="{{url('comp/img/agents/Ivy_Moy.jpg')}}" alt=""><a/>
                 {{link_to('#', 'Ivy Moy', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="cheryletteHilton" href="#"><img src="{{url('comp/img/agents/Cherylette_Hilton.jpg')}}" alt=""><a/>
                 {{link_to('#', 'Crerylette Hilton', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="elenaDan" href="#"><img src="{{url('comp/img/agents/Dan_Elena.jpg')}}" alt=""><a/>
                 {{link_to('#', 'Elena Dan', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="haroldOza" href="#"><img src="{{url('comp/img/agents/3.png')}}" alt=""><a/>
                 {{link_to('#', 'Harold Oza', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="johnDias" href="#"><img src="{{url('comp/img/agents/3.png')}}" alt=""><a/>
                 {{link_to('#', 'John B. Dias', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="mariusDan" href="#"><img src="{{url('comp/img/agents/3.png')}}" alt=""><a/>
                 {{link_to('#', 'Marius Dan', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="barryBenveniste" href="#"><img src="{{url('comp/img/agents/3.png')}}" alt=""><a/>
                 {{link_to('#', 'Barry Benveniste', array('class'=>'agentLink'));}}
               </li>
               <li><a class="th radius" data-reveal-id="markFeyman" href="#"><img src="{{url('comp/img/agents/3.png')}}" alt=""><a/>
                 {{link_to('#', 'Mark Feyman', array('class'=>'agentLink'));}}
               </li>
             </ul>
           </section>
         </div>

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
              <li class="locality properties">{{link_to('#', 'Single Family');}}</li>
              <li class="locality properties">{{link_to('#', 'Multi-Family');}}</li>
              <li class="locality properties">{{link_to('#', 'Condo');}}</li>
              <li class="locality properties">{{link_to('#', 'Vacant Land');}}</li>
            </ul>
          </section>

<!--             <section class="large-6 columns social">
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
-->
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


<div id="createAccount" class="reveal-modal medium createAccount panel">
  <a class="close-reveal-modal">&#215;</a>
  <div class="row">
    <div class="large-12 columns">
      {{Form::open(array('url' => 'foo/bar'))}}
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
              {{ Form::submit('Create Your Free Account', array('class'=>'button small radius'))}}
            </div>
          </div>
        </div>


        {{Form::close()}}
      </div>
    </div>
  </div>
</div>

<!-- =create an account form ends here -->

</div>
<!--
/* insert data-reveal-id to your button with the same id */
                   <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                 -->

                 <!-- /* My slideDown Authentification Form Starts Here */ -->


                 <div id="adminAuth" class="reveal-modal small adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
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


                      <div class="row"> 
                       <div class="large-12 columns">
                         <h3 class="subheader account">Sign in to Your Account</h3>
                         <div class="row">
                          <div class="large-6 columns">
                            {{Form::label('emailSignIn', 'Your Email')}}
                            {{ Form::email('emailSignIn', $value = null, $attributes = array())}}
                          </div>
                          <div class="large-6 columns">
                            {{Form::label('passwordSignIn', 'Your Password')}}
                            {{ Form::password('passwordSignIn', $value = null, $attributes = array())}}
                          </div>
                        </div>
                        {{ Form::submit('Login', $attributes = array('class'=>'button tiny radius'))}}
                        {{Form::close()}} 
                      </div>
                    </div>
                  </div>
                </div>

              </div>
<!--
/* insert data-reveal-id to your button with the same id */
                   <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                 -->



<!-- =Dan Florian profile starts here -->

                 <div id="danFlorian" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =danFlorian top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Dan I. Florian </h3>
                           <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
                           <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a>
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/Dan_I_Florian.jpg')}}" alt="Dan I. Florian">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 2003</li>
                     <li class="subheader">Year Licensed: 2003</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Direct: (773) 543-3500 </li>
                     <li class="subheader">Languages: English, Italian, Romanian, Spanish</li>
                   </ul>
                 </div>
               </div>

<!--  =danFlorian contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      <dt><h5>Specialties</h5></dt>
                      <hr/>
                      <dd class="specialties"><p>Buyer Brokerage, Business Opportunities, Condominiums, Foreclosure Property, Investments, Lake/Beach Property, Luxury Homes, New Construction, Property Management, Relocation, Rentals, Short Sales, Vacation and Resorts</p>
                      </dd>  
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Chicago IL, Glenview IL, Morton Grove IL, Niles IL, Skokie IL, Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Dan Florian profile ends here -->



<!-- =Ivy Moy  profile starts here -->

                 <div id="ivyMoy" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =ivyMoy top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Ivy Moy</h3>
                           <!-- <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a>  -->
                           <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a>
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/Ivy_Moy.jpg')}}" alt="Ivy Moy">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 2001</li>
                     <li class="subheader">Year Licensed: 1998</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Direct: (847) 568-3115</li>
                     <li class="subheader">Mobile: (847) 913-3710</li>
                     <li class="subheader">Languages: Chinese, English, Mandarin </li>
                   </ul>
                 </div>
               </div>

<!--  =ivyMoy contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      <!-- <dt><h5>Specialties</h5></dt>
                      <hr/>
                      <dd class="specialties"><p>Buyer Brokerage, Business Opportunities, Condominiums, Foreclosure Property, Investments, Lake/Beach Property, Luxury Homes, New Construction, Property Management, Relocation, Rentals, Short Sales, Vacation and Resorts</p>
                      </dd>   -->
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Chicago IL, Evanston IL, Morton Grove IL, Niles IL, Skokie IL </p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Ivy Moy profile ends here -->


<!-- =Cherylette Hilton profile starts here -->

                 <div id="cheryletteHilton" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =cheryletteHilton top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Crerylette Hilton</h3>
                          <!--  <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
                          <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a> -->
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/Cherylette_Hilton.jpg')}}" alt="Crerylette Hilton">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 2004</li>
                     <li class="subheader">Year Licensed: 1974</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Direct: (847) 864-7073 </li>
                     <li class="subheader">Mobile: (847) 269-7073 </li>
                     <li class="subheader">Languages: English</li>
                   </ul>
                 </div>
               </div>

<!--  =cheryletteHilton contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      <dt><h5>Specialties</h5></dt>
                      <hr/>
                      <dd class="specialties"><p>Auctions, Condominiums, Foreclosure Property, Investments, New Construction, Relocation, Rentals </p>
                      </dd>  
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Crerylette Hilton profile ends here -->


<!-- =Elena Dan profile starts here -->

                 <div id="elenaDan" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =elenaDan  top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Elena Dan</h3>
                           <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
                           <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a>
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/Dan_Elena.jpg')}}" alt="Elena Dan">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 1993</li>
                     <li class="subheader">Year Licensed: 1989</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Direct: (847) 329-3888 </li>
                     <li class="subheader">Mobile: (773) 230-5985 </li>
                     <li class="subheader">Languages: English, Romanian</li>
                   </ul>
                 </div>
               </div>

<!--  =elenaDan contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      <dt><h5>Specialties</h5></dt>
                      <hr/>
                      <dd class="specialties"><p>Condominiums, Foreclosure Property, Investments, Luxury Homes, New Construction, Relocation, Rentals, Senior Communities, Short Sales </p>
                      </dd>  
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Elena Dan  profile ends here -->

<!-- =Harold Oza profile starts here -->

                 <div id="haroldOza" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =haroldOza  top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Harold Oza</h3>
                           <!-- <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
                           <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a> -->
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/3.jpg')}}" alt="Harold Oza">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 2008</li>
                     <li class="subheader">Year Licensed: 2008</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <!-- <li class="subheader">Direct: (847) 329-3888 </li> -->
                     <li class="subheader">Mobile: (312) 720-0743</li>
                     <li class="subheader">Languages: English</li>
                   </ul>
                 </div>
               </div>

<!--  =haroldOza contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Harold Oza  profile ends here -->


<!-- =John Dias profile starts here -->

                 <div id="johnDias" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =johnDias  top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">John B. Dias</h3>
                           <a class="label has-tip-left specialist" title="Short Sale and Foreclosure Resource">SFR</a> 
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/3.png')}}" alt="John Dias">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 1994</li>
                     <li class="subheader">Year Licensed: 1982</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Languages: English, Hindi</li>
                   </ul>
                 </div>
               </div>

<!--  =johnDias contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      <dt><h5>Specialties</h5></dt>
                      <hr/>
                      <dd class="specialties"><p>Condominiums, Foreclosure Property, Investments, Luxury Homes, New Construction, Relocation, Rentals, Senior Communities, Short Sales </p>
                      </dd>  
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =John Dias  profile ends here -->


<!-- =Marius Dan profile starts here -->

                 <div id="mariusDan" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =mariusDan  top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Marius Dan</h3>
                           
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/3.png')}}" alt="Marius Dan">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 2003</li>
                     <li class="subheader">Year Licensed: 2003</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Direct: (847) 568-3125  </li>
                     <li class="subheader">Mobile: (312) 208-6034 </li>
                     <li class="subheader">Languages: English, Romanian</li>
                   </ul>
                 </div>
               </div>

<!--  =mariusDan contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      <dt><h5>Specialties</h5></dt>
                      <hr/>
                      <dd class="specialties"><p>Buyer Brokerage, Condominiums, Investments </p>
                      </dd>  
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Marius Dan  profile ends here -->



<!-- =Barry Benveniste profile starts here -->

                 <div id="barryBenveniste" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =barryBenveniste  top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Barry Benveniste</h3>
                           
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/3.png')}}" alt="Barry Benveniste">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 1987</li>
                     <li class="subheader">Year Licensed: 1972</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     
                     <li class="subheader">Languages: English</li>
                   </ul>
                 </div>
               </div>

<!--  =barryBenveniste contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Barry Benveniste  profile ends here -->

<!-- =Mark Feyman profile starts here -->

                 <div id="markFeyman" class="reveal-modal medium adminAuth2 createAccount panel">
                  <a class="close-reveal-modal">&#215;</a>
                  <div class="row">
                    <div class="large-12 columns">
                      {{Form::open(array('url'=>'/login'))}} 
                      <div class="navPanel">
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

<!--  =markFeyman  top bar ends here-->

                      <div class="row">
                       <div class="large-4 columns">
                        <div class="row">
                         <div class="large-12 columns left">
                          <br/>
                          <ul>
                           <h3 class="subheader agentName">Mark Feyman</h3>
                           
                         </ul>
                       </div>                           
                     </div>
                     <img src="{{url('comp/img/agentsL/3.png')}}" alt="Mark Feyman">

                 </div>

                 <div class="large-7 columns left panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate</h5>
                     <li class="subheader">Year Joined: 2011</li>
                     <li class="subheader">Year Licensed: 2011</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Mobile: (847) 971-8559</li>
                     
                     <li class="subheader">Languages: English, Russian</li>
                   </ul>
                 </div>
               </div>

<!--  =markFeyman contact information ends here-->

                 <div class="row">
                  <div class="large-12 columns">
                    <dl>                              
                      
                      <dt><h5>Service Area Information</h5></dt>
                      <hr/>
                      <dd class="specialties">
                        <h6>Office Area:</h6>
                        <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                        <h6>Agent Area:</h6>
                        <p>Skokie IL</p>  
                      </dd>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<!-- =Mark Feyman  profile ends here -->
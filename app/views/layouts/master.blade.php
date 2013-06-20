<!-- //LOCATION: remax/public
--<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Remax First Class Realty</title>
  {{HTML::style("comp/stylesheets/normalize.css" )}} 
  {{HTML::style("comp/stylesheets/screen.css" )}} 
  {{HTML::style("comp/javascripts/foundation.min.js")}} 
  {{HTML::style("comp/javascripts/vendor/custom.modernizr.js")}} 
  {{HTML::script("//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js")}} 


</head>

<body>

  <div class="navPanel">
    <div class="row">
      <div class="large-12 columns">

        <nav class="top-bar">
          <ul class="title-area">
            <!-- Title Area -->
            <li class="name">
              <h1><a href="#">REMAX FIRST CLASS</a></h1>
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
                  <li class="has-dropdown"><a href="{{ URL::route('finding_the_right_mortgage_professional')}}">Mortgage</a>
                    <ul class="dropdown">
                      <li><a href="{{ URL::route('finding_the_right_mortgage_professional')}}">Finding the Right Mortgage Professional</a></li>
                      <li><a href="{{ URL::route('getting_preapproved')}}">Getting Preapproved</a></i>
                        <li><a href="{{ URL::route('how_much_can_you_afford')}}">How Much Can You Afford?</a></li>
                        <li><a href="{{ URL::route('down_payments_how_much_do_you_need')}}">Down Payments: How Much Do You Need?</a></li>
                        <li><a href="{{ URL::route('mortgages_101_basic_loan_types')}}">Mortgages 101: Basic Loan Types </a></li>
                        <li><a href="{{ URL::route('renovating_a_home')}}">Renovating a home? Consider a 203(k) loan </a></li>
                      </ul>
                      <li><a href="{{ URL::route('contact')}}">Contact</a></li>
                    </ul>
                  </section>


                </div>
              </div>
            </div>

            <div class="logoWrapper">
              <div class="row">
                <aside class="large-4 columns">
                  <img src="comp/img/REMAX1Logo.png" alt="Logo Remax First Class Realty">
                </aside>

                <aside class="large-4 columns">
                  Login Here
                </aside>



                <aside class="large-4 columns">
                  <div class="call right">
                   <p> <strong>Call to our agents: <br/> (847)674-9797</strong></p>
                 </div>
               </aside>

             </div></div>


             @yield('content')

             <footer>
              <div class="row">
                <div class="large-4 columns">
                  <div class="large-12 columns">
                    <img src="comp/img/logo-footer.png" alt="">
                  </div>
                  <div class="large-12 columns mls">
                    <img src="comp/img/mls.jpg" alt="">
                  </div>
                </div>
                <div class="large-4 columns">
                  <div class="large-6 columns"></div>

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
                      <li><img src="comp/img/facebook.png" alt=""></li>
                      <li><img src="comp/img/feed.png" alt=""></li>
                      <li><img src="comp/img/youtube.png" alt=""></li>
                      <li><img src="comp/img/twitter.png" alt=""></li>
                      <li><img src="comp/img/google.png" alt=""></li>
                      <li><img src="comp/img/linkedin.png" alt=""></li>
                    </ul>
                  </section>
                </div>
              </div>

            </footer>
            <div class="copyright">
              <div class="row">
                <div class="large-4 columns copy">
                  <p>© 2013 RE/MAX FIRST CLASS</p>
                </div>
                <div class="large-8 columns">
                  <ul class="inline-list right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Buying</a></li>
                    <li><a href="#">Selling</a></li>
                    <li><a href="#">Renting</a></li>
                    <li><a href="#">Contact</a></li>

                  </ul>
                </div>
              </div>
            </div>
            <script>


            document.write('<script src=' +
              ('_proto_' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
              '.javascripts><\/script>')
            </script>
            <script src="javascripts/foundation.min.js"></script>
            <script>
            $(document).foundation();
            </script>
          </body>
          </html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Author - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('landing/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('landing/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Vendor<span>.</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Bosh sahifa</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>Dastur haqida</span></a></li>
                <li class="nav-item"><a href="#chapter-section" class="nav-link"><span>Chapter</span></a></li>
                <li class="nav-item"><a href="#testimonial-section" class="nav-link"><span>Izohlar</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Bizning mijozlar</span></a></li>

            @auth
                <li class="nav-item"><a href="{{ route('profile.logout') }}" class="nav-link"><span>{{ __('Log Out') }}</span></a></li>
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link"><span>{{ __('Dashboard') }}</span></a></li>
            @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>{{ __('Login') }}</span></a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><span>{{ __('Register') }}</span></a></li>
            @endif
            </ul>

	      </div>
	    </div>
	  </nav>


	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="mt-6 one-third js-fullheight align-self-end order-md-last img-fluid " src="{{ asset('landing/img/pos1.png')}}" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="text mt-5">
	        		<span class="subheading">Biz barcha turdagi do`konlarni avtomatlashtramiz</span>
		  				<h1 style="font-size: 50px;">Biz bilan foydangizni 25% foyizgachan o`string</h1>
		  				<p>Qog`oz bozlikdan vos keching</p>
	          </div>
	        </div>
	    	</div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 col-lg ftco-animate">
    				<a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo1.png')}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-md-12 col-lg ftco-animate">
    				<a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo2.png')}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-md-12 col-lg ftco-animate">
    				<a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo3.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-md-12 col-lg ftco-animate">
    				<a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo5.svg')}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-md-12 col-lg ftco-animate">
    				<a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo4.png')}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about img ftco-section" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('landing/img/16220569-seller-at-home-improvement-store.webp')}});">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Dastur haqida</h2>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		            <div class="text-about">
		            	<h4>Bu qanday ishlaydi</h4>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			            <h4>Takliflar</h4>
			            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			            <h4>Qoidalar</h4>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
				<div class="row d-md-flex align-items-center align-items-stretch">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="11001">0</strong>
                <span>Foydalanuvchilar</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="1200">0</strong>
                <span>Do`konlar</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="340">0</strong>
                <span>mijozlar</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="12000">0</strong>
                <span>Buyurtmalar</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt" id="chapter-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Dakumenttatsiya</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 mb-4">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Dastur haqida</a></li>
					      <li><a href="#page-2">Dastur siga nima beradi</a></li>
					      <li><a href="#page-3">Boshlash</a></li>
					      <li><a href="#page-4">1 qadam</a></li>
					      <li><a href="#page-5">2 qadam</a></li>
					      <li><a href="#page-6">3 qadam</a></li>
					      <li><a href="#page-7">qonun qoidalarf</a></li>
					      <li><a href="#page-8">Tariflar</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page bg-light one">
					  	<h2 class="heading">Dastur haqida</h2>
					  	<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-2" class= "page bg-light two">
					  	<h2 class="heading">Dastur sizga nima beradi</h2>
					  	<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-3" class= "page bg-light three">
					  	<h2 class="heading">Boshlash</h2>
					  	<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-4" class= "page bg-light four">
					    <h2 class="heading">1 qadam</h2>
					    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-5" class= "page bg-light five">
					    <h2 class="heading">2 qadam</h2>
					    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-6" class= "page bg-light six">
					    <h2 class="heading">3 qadam</h2>
					    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-7" class= "page bg-light seven">
					    <h2 class="heading">Qonun qoidalar</h2>
					    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-8" class= "page bg-light eight">
					    <h2 class="heading">Tariflar</h2>
					    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					</div>
			  </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-5 heading-section text-center ftco-animate">
          	<span class="subheading">Xizmat</span>
            <h2 class="mb-4">Xizmatlar</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1 bg-light">
							<span class="icon">
								<i class="flaticon-user-experience"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Do`koni aftamatlashr</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1 bg-light">
							<span class="icon">
								<i class="flaticon-network"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Mijozlarga indiyuduval xizmat</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1 bg-light">
							<span class="icon">
								<i class="flaticon-innovation"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Statistik malumotlar</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section ftco-no-pb" id="testimonial-section">
    	<div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Mijozlar</span>
            <h2 class="mb-3">Mijozlarimiz fikrlari</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="fa fa-map-marker"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Address</h3>
		            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="fa fa-phone"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Contact Number</h3>
		            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="fa fa-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="fa fa-globe"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Website</h3>
		            <p><a href="#">yoursite.com</a></p>
	            </div>
	          </div>
          </div>
        </div>




    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
	              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
	              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"></span>Home</a></li>
                <li><a href="#"></span>About</a></li>
                <li><a href="#"></span>Chapter</a></li>
                <li><a href="#"></span>Reviews</a></li>
                <li><a href="#"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"></span>Experience</a></li>
                <li><a href="#"></span>Marketing Goals</a></li>
                <li><a href="#"></span>Targetting Vission</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('landing/js/jquery.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('landing/js/popper.min.js')}}"></script>
  <script src="{{ asset('landing/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('landing/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('landing/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('landing/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('landing/js/google-map.js')}}"></script>

  <script src="{{ asset('landing/js/main.js')}}"></script>

  </body>
</html>


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <script src="{{ asset('assets/js/home.js') }}" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="" type="text/javascript"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="ae">
<div id="a">
    <div>
        <header class="dk hc jh ka lg:lh lg:uh oh ri" style="background-image:linear-gradient(170deg,#fff 63%,#dcfce7 0,#dcfce7 123%)">
            <div class="cd cf jg ld ri ud" x-data="{ mobileMenu: false}">
                <a href="{{ route('home') }}">
                    <img class="he" src="{{ asset('images/home/logo.svg') }}">
                </a>
                <nav class="cd-row de fd ld lg:space-to-8 md:cd p td wl">
                    <a href="#" class="hover:rg">Home</a>
                    <a href="#" class="hover:rg">Services</a>
                    <a href="#" class="hover:rg">Pricing</a>
                    <a href="#" class="hover:rg">Blog</a>
                    @auth

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="hover:rg">{{ __('Log Out') }}</a>
                        </form>
                    <a href="{{ route('dashboard') }}" class="de hh inline-bd lk mh re tc-lg ya">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="hover:rg">Login</a>
                    <a href="{{ route('register') }}" class="de hh inline-bd lk mh re tc-lg ya">Get started</a>
                    @endif
                </nav>
                <button class="ah ak bd cm gf md:fd pl ri tc-md ya" @click="mobileMenu = !mobileMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="dm fh md:fd qi raapsition tozg0 ui vm wm yl" style="display: none;">
                    <nav class="bh ka pj-lg tc-lg vm">
                        <a href="#" class="bd de hh hover:rg oh pc xc-b">Home</a>
                        <a href="#" class="bd de hh hover:rg oh pc xc-b">Services</a>
                        <a href="#" class="bd de hh hover:rg oh pc xc-b">Pricing</a>
                        <a href="#" class="bd de hh hover:rg oh pc xc-b">Blog</a>
                        <a href="#" class="bd de hh hover:rg oh pc xc-b">Contact</a>
                        <a href="#" class="bd de hh hover:rg oh pc xc-b">Login</a>
                        <a href="#" class="bd de hh mhtext-white re tc-lg wj xj ya">Get started</a>
                    </nav>
                </div>
            </div>
            <div class="cf ed gazg2 jg lf4 lg:gaah0 lg:kf0 lg:lf0 md:ed-cols-2 md:gf2 sm:if0 vj wf xl:ed-cols-5 xl:ld xl:lf4 xl:mf2">
                <div class="km md:vd wd xl:lm">
                    <div class="cd cd-row md:ld n vf">
                        <span class="ah al ee ok qe tc-lg va">NEW</span>
                        <span class="de ok">24/7 onside business coaching</span>
                    </div>
                    <h2 class="ce cg fk md:xe sm:we tol:text-5xl ve">We offer reliable and high quality services for developers</h2>
                    <p class="cg cing-relaxed te tf xl:ue yj0">World among the stalks, and grow familiar with the countless indescribable forms flies</p>
                    <a href="#" class="de hh inline-bd lk mh re tc-lg wf ya">Get started</a>
                </div>
                <div class="km md:fi md:wd tol:pt-0 vd xl:mm">
                    <img src="{{ asset('images/home/slider.jpg') }}">
                </div>
            </div>
            <div class="cf col-gadh ed ed-cols-1 jg lg:ed-cols-3 lg:if6 lg:qh lg:wh2 md:xh0 oh q sm:ed-cols-2 sm:m vf xl:ed-cols-5 xl:gazg2 xl:kh">
                <img class="je justify-qd pd tg zg" src="{{ asset('images/home/brand-1.svg') }}" alt="logo placeholder">
                <img class="justify-qd ke pd tg zg" src="{{ asset('images/home/brand-2.svg') }}" alt="logo placeholder">
                <img class="he justify-qd kpd:pt-0 pd tg zg" src="{{ asset('images/home/brand-3.svg') }}" alt="logo placeholder">
                <img class="je justify-qd pd tg zg" src="{{ asset('images/home/brand-4.svg') }}" alt="logo placeholder">
                <img class="justify-qd ke pd tg zg" src="{{ asset('images/home/brand-2.svg') }}" alt="logo placeholder">
            </div>
        </header>
        <div class="dk la lg:fh0 lg:qh oh vh xl:bi2 xl:xh4">
            <div class="cf jg wj">
                <h2 class="ce fk md:xe sm:we ve">Amazing Features</h2>
                <p class="dk kf lg:ue te">We are mmitted to a unique, cutting-edge approach to that</p>
            </div>
            <div class="cf gf2 i2 jg lg:kf0 md:ed md:ed-cols-2 md:gazg2 md:jppace-y-0 tol:gap-y-20 xl:ed-cols-3">
                <div class="wj">
                    <div class="cf nk qf rl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path fill="#fff" d="m12 14 9-5-9-5-9 5 9 5z"></path>
                            <path fill="#fff" d="m12 14 6.16-3.422a12.083 12.083 0 0 1 .665 6.479A11.952 11.952 0 0 0 12 20.055a11.952 11.952 0 0 0-6.824-2.998 12.078 12.078 0 0 1 .665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 14 9-5-9-5-9 5 9 5zm0 0 6.16-3.422a12.083 12.083 0 0 1 .665 6.479A11.952 11.952 0 0 0 12 20.055a11.952 11.952 0 0 0-6.824-2.998 12.078 12.078 0 0 1 .665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </div>
                    <h3 class="de fk lf te">Collection of textile</h3>
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself It showed transformed.</p>
                </div>
                <div class="wj">
                    <div class="cf nk qf rl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m-6 8a2 2 0 1 0 0-4m0 4a2 2 0 1 1 0-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 1 0 0-4m0 4a2 2 0 1 1 0-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="de fk lf te">How about sleep a little bit</h3>
                    <p>Doing business like this takes much more effort than doing your own business at home, and on top.</p>
                </div>
                <div class="wj">
                    <div class="cf nk qf rl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8-4-4H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3l-4 4z"></path>
                        </svg>
                    </div>
                    <h3 class="de fk lf te">He felt a slight up on his bell</h3>
                    <p>He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the.</p>
                </div>
                <div class="wj">
                    <div class="cf nk qf rl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 0 0-1.022-.547l-2.387-.477a6 6 0 0 0-3.86.517l-.318.158a6 6 0 0 1-3.86.517L6.05 15.21a2 2 0 0 0-1.806.547M8 4h8l-1 1v5.172a2 2 0 0 0 .586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 0 0 9 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="de fk lf te">But who knows, would do it</h3>
                    <p>You've got to get enough sleep. Other travelling salesmen live a life of luxury. For instance.</p>
                </div>
                <div class="wj">
                    <div class="cf nk qf rl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0 1 12 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2m4 6h.01M5 20h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="de fk lf te">His boss would certainly</h3>
                    <p>Well, there's still some hope; once I've got the money together to pay off my parents.</p>
                </div>
                <div class="wj">
                    <div class="cf nk qf rl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1 0 20.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0 1 20.488 9z"></path>
                        </svg>
                    </div>
                    <h3 class="de fk lf te">One morning, when Gregor Samsa</h3>
                    <p>And even if he did catch the train he would not avoid his boss's anger as the.</p>
                </div>
            </div>
        </div>
        <div class="dk lg:fh0 lg:qh oh th xl:bi2 xl:xh4 za">
            <div class="cf jg">
                <h2 class="ce fk md:xe sm:we ve wj">Our recent work</h2>
                <p class="cf dg dk kf lg:ue te wj">We are mmitted to a unique, cutting-edge approach to that</p>
            </div>
            <div class="cf gf2 jg">
                <div class="ed gadh lg:ed-cols-4 lg:hm md:ed-cols-2">
                    <div class="cd cd-col km lg:km md:lm overflow-fd ri sd tc">
                        <img src="{{ asset('images/home/banner-1.jpg') }}" class="ng oe qi ti yl">
                        <div class="di8 gb gi lg:wh2 nb oh ri">
                            <h3 class="de if te xj">Collection of textile</h3>
                            <p class="yj">One morning, when Gregor Samsa woke from troubled dreams, he found himself It showed transformed.</p>
                        </div>
                    </div>
                    <div class="cd cd-col km lg:ie6 lg:lm ri sd tc">
                        <img src="{{ asset('images/home/banner-2.jpg') }}" class="ng oe qi ti yl">
                        <div class="di8 gb gi lg:wh2 nb oh ri">
                            <h3 class="de if te xj">How about sleep a little bit</h3>
                            <p class="yj">Doing business like this takes much more effort than doing your own business at home, and on top.</p>
                        </div>
                    </div>
                    <div class="cd cd-col km lg:km md:sm overflow-fd ri rm sd tc">
                        <img src="{{ asset('images/home/banner-3.jpg') }}" class="ng oe qi ti yl">
                        <div class="di8 gb gi lg:wh2 nb oh ri">
                            <h3 class="de if te xj">Collection of textile</h3>
                            <p class="yj">One morning, when Gregor Samsa woke from troubled dreams, he found himself It showed transformed.</p>
                        </div>
                    </div>
                    <div class="cd cd-col km lg:ie6 lg:lm md:km overflow-fd ri rm sd tc">
                        <img src="{{ asset('images/home/banner-4.jpg') }}" class="ng oe qi ti yl">
                        <div class="di8 gb gi lg:wh2 nb oh ri">
                            <h3 class="de if te xj">How about sleep a little bit</h3>
                            <p class="yj">Doing business like this takes much more effort than doing your own business at home, and on top.</p>
                        </div>
                    </div>
                    <div class="cd cd-col km lg:km md:lm ri sd tc">
                        <img src="{{ asset('images/home/banner-5.jpg') }}" class="ng oe qi ti yl">
                        <div class="di8 gb gi lg:wh2 nb oh ri">
                            <h3 class="de if te xj">But who knows, would do it</h3>
                            <p class="yj">You've got to get enough sleep. Other travelling salesmen live a life of luxury. For instance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dk ka lg:fh0 lg:qh oh th xl:hh2">
            <div class="cf jg wj">
                <h2 class="ce fk md:xe sm:we ve">FastDelivery explained</h2>
                <p class="dk kf lg:ue te">We are mmitted to a unique, cutting-edge approach to that</p>
            </div>
            <div class="cf gf2 hg t">
                <div class="eh va">
                    <h3 class="ee md:te ok se">In enim justo, rhoncus ut, imperdiet a, venenatis</h3>
                    <p class="ek kf md:te se">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                    <p class="ek md:te se tf">hasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus.</p>
                </div>
                <div class="eh va">
                    <h3 class="ee md:te ok se">Leo eget bibendum sodales, augue velit cursus nunc</h3>
                    <p class="ek kf md:te se">hasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas rum. Aenean imperdiet tempus.</p>
                </div>
            </div>
        </div>
        <div class="dk lg:fh0 lg:qh oh th xl:hh2 za">
            <div class="cf jg">
                <h2 class="ce fk md:xe sm:we ve wj">Simple pricing plans</h2>
                <p class="cf dg dk kf lg:ue te wj">We are mmitted to a unique, cutting-edge approach to that</p>
            </div>
            <div class="cf ed ed-cols-3 gf2 ig lg:kf0 md:gf6 md:ld">
                <div class="dh gach ka kpd:mb-0 ld lg:eh md:km mm pj tc-l-lg vf wj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="je ql qf cf nk" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="m12 14 9-5-9-5-9 5 9 5z"></path>
                        <path d="m12 14 6.16-3.422a12.083 12.083 0 0 1 .665 6.479A11.952 11.952 0 0 0 12 20.055a11.952 11.952 0 0 0-6.824-2.998 12.078 12.078 0 0 1 .665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 14 9-5-9-5-9 5 9 5zm0 0 6.16-3.422a12.083 12.083 0 0 1 .665 6.479A11.952 11.952 0 0 0 12 20.055a11.952 11.952 0 0 0-6.824-2.998 12.078 12.078 0 0 1 .665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                    <h3 class="de fk lg:ve ue">Freelance coaching</h3>
                    <span class="bd qf">For single entrepreneurs</span>
                    <span class="ee lg:we nk ve">€119 p/m</span>
                    <div class="ef fi gf0 lg:-mto-8 lg:qh nc oh xc-t">
                        <ul class="k te">
                            <li>20 hours</li>
                            <li>Email support</li>
                            <li>Phone support</li>
                            <li>Work from home</li>
                            <li>12 months</li>
                        </ul>
                        <a href="#" class="de hh inline-bd lk mh re tc-lg wf ya">Get started</a>
                    </div>
                </div>
                <div class="bm dh gach ipg:pb-24 ka kpd:mb-0 kpd:pb-24 ld lg:eh md:-tf md:km md:pj-xl mm ri tc-lg vf wj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="je ql cf nk qf" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0 1 12 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2m4 6h.01M5 20h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z"></path>
                    </svg>
                    <h3 class="de fk lg:ve ue">Team coaching</h3>
                    <span class="bd qf">For more entrepreneurs</span>
                    <span class="ee lg:we nk ve">€249 p/m</span>
                    <div class="ef fi gf0 lg:-mto-8 lg:qh nc oh xc-t">
                        <ul class="k te">
                            <li>20 hours</li>
                            <li>Email support</li>
                            <li>Phone support</li>
                            <li>Work from home</li>
                            <li>12 months</li>
                        </ul>
                        <a href="#" class="de hh inline-bd lk mh re tc-lg wf ya">Get started</a>
                    </div>
                </div>
                <div class="dh gach ka kpd:mb-0 ld lg:eh md:km mm pj tc-r-lg vf wj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="je ql cf nk qf" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5m-4 0h4"></path>
                    </svg>
                    <h3 class="de fk lg:ve ue">Pro coaching</h3>
                    <span class="bd qf">For many entrepreneurs</span>
                    <span class="ee lg:we nk ve">€489 p/m</span>
                    <div class="ef fi gf0 lg:-mto-8 lg:qh nc oh xc-t">
                        <ul class="k te">
                            <li>20 hours</li>
                            <li>Email support</li>
                            <li>Phone support</li>
                            <li>Work from home</li>
                            <li>12 months</li>
                        </ul>
                        <a href="#" class="de hh inline-bd lk mh re tc-lg wf ya">Get started</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="dk la lg:qh lg:xh0 oh th">

            <div class="cf if2 jg lg:if6">
                <img class="he" src="{{ asset('images/home/logo.svg') }}" alt="logo placeholder">
            </div>

            <div class="cf jg">
                <div class="ba ed ed-cols-8 lg:ed-cols-8 md:-mto-8 md:ed-cols-9 md:w md:z y">
                    <div class="jh lg:lm md:dp-0 md:mm md:qh nm">
                        <h5 class="de fk ue">Company</h5>
                        <nav class="of">
                            <ul class="k">
                                <li>
                                    <a href="#" class="be hover:ck se">Landingpages</a>
                                </li>
                                <li>
                                    <a href="#" class="be hover:ck se">Features</a>
                                </li>
                                <li>
                                    <a href="#" class="be hover:ck se">Download brochure</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="jh lg:mm md:dp-0 md:mm md:qh nm">
                        <h5 class="de fk ue">Industries</h5>
                        <nav class="of">
                            <ul class="ed lg:ed-cols-2">
                                <li class="lf">
                                    <a href="#" class="be hover:ck se">Employment</a>
                                </li>
                                <li class="lf">
                                    <a href="#" class="be hover:ck se">Company</a>
                                </li>
                                <li class="lf">
                                    <a href="#" class="be hover:ck se">Childcare</a>
                                </li>
                                <li class="lf">
                                    <a href="#" class="be hover:ck se">Download brochure</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="jh lg:mm md:dp-0 md:mm md:qh nm">
                        <h5 class="de fk ue">Follow us</h5>
                        <nav class="of">
                            <ul class="ed lg:ed-cols-2">
                                <li class="lf">
                                    <a href="#" class="be cd hover:ck l se">
                                        <svg class="fe nl nk" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 22 5.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.072 4.072 0 0 1 2.8 9.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.095 4.095 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 2 18.407a11.616 11.616 0 0 0 6.29 1.84"></path>
                                        </svg>
                                        <span> Twitter </span>
                                    </a>
                                </li>
                                <li class="lf">
                                    <a href="#" class="be cd hover:ck l se">
                                        <svg class="fe nl nk" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 0 1 1.772 1.153 4.902 4.902 0 0 1 1.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 0 1-1.153 1.772 4.902 4.902 0 0 1-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 0 1-1.772-1.153 4.902 4.902 0 0 1-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 0 1 1.153-1.772A4.902 4.902 0 0 1 5.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 0 0-.748-1.15 3.098 3.098 0 0 0-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 1 1 0 10.27 5.135 5.135 0 0 1 0-10.27zm0 1.802a3.333 3.333 0 1 0 0 6.666 3.333 3.333 0 0 0 0-6.666zm5.338-3.205a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span> Instagram </span>
                                    </a>
                                </li>
                                <li class="lf">
                                    <a href="#" class="be cd hover:ck l se">
                                        <svg class="fe nl nk" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span> Facebook </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="cd cd-col cf hi jg ld lg:gf2 mc md:cd-row o ud wf xc-t-2">
                <nav class="cd cd-wrap s td">
                    <a href="#" class="be hover:ck lf re">Cookie settings</a>
                </nav>
                <p class="md:tetot-right re wj">©2021 Company. All rights reserved. | All rights reserved</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html> --}}

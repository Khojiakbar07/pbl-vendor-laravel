<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/faicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/faicon/favicon.ico') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#b920f0">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
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
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="img-fluid" src="{{ asset('images/logo/logo.png')}}" style="max-width: 160px;"
                 alt="{{ env('APP_NAME') }}">
        </a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Bosh sahifa</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>Dastur haqida</span></a></li>
                <li class="nav-item"><a href="#services-section" class="nav-link"><span>Xizmatlar</span></a></li>
                <li class="nav-item"><a href="#testimonial-section" class="nav-link"><span>Izohlar</span></a></li>

                @auth
                    <li class="nav-item"><a href="{{ route('profile.logout') }}"
                                            class="nav-link"><span>{{ __('Log Out') }}</span></a></li>
                    <li class="nav-item"><a href="{{ route('dashboard') }}"
                                            class="nav-link"><span>{{ __('Dashboard') }}</span></a></li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>{{ __('Login') }}</span></a>
                    </li>
                    <li class="nav-item"><a href="{{ route('register') }}"
                                            class="nav-link"><span>{{ __('Register') }}</span></a></li>
                @endif
            </ul>

        </div>
    </div>
</nav>


<section class="hero-wrap js-fullheight" id="home-section">
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters align-items-center js-fullheight justify-content-end">
            <div class="d-none d-md-block col-md-5">
                <div class="">
                    <div class="text mt-5" style="display: flex;flex-direction: column;align-items: flex-end;padding-left: 12rem;">
                        <h1 style="font-size: 50px;">Biz bilan onlayn savdo qiling</h1>
                        <p>Barcha savdo jarayonini avtomatlashitiring va statistikalarni kuzatib boring.</p>
                    </div>
                </div>
            </div>

            <div class="d-none d-md-block col-md-7">
                <img class="mt-6 img-fluid" src="{{ asset('landing/img/pos1.png')}}" alt="">
            </div>

            <div class="d-block d-md-none col-12">
                <div class="text mt-5" style="display: flex;flex-direction: column;align-items: center;">
                    <h1 style="font-size: 50px;text-align: center;">Biz bilan onlayn savdo qiling</h1>
                    <p>Barcha savdo jarayonini avtomatlashitiring va statistikalarni kuzatib boring.</p>
                </div>
                <img class="mt-6 img-fluid" src="{{ asset('landing/img/pos1.png')}}" alt="">
            </div>

        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo1.png')}}"
                                                                               class="img-fluid"
                                                                               alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo2.png')}}"
                                                                               class="img-fluid"
                                                                               alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo3.jpg')}}"
                                                                               class="img-fluid"
                                                                               alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo5.svg')}}"
                                                                               class="img-fluid"
                                                                               alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('landing/img/logo4.png')}}"
                                                                               class="img-fluid"
                                                                               alt="Colorlib Template"></a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about img ftco-section" id="about-section">
    <div class="container">
        <div class="row">
    			<div class="col-md-3 mb-4">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Dastur haqida</a></li>
					      <li><a href="#page-2">Dastur sizga nima beradi</a></li>
					      <li><a href="#page-3">Boshlash</a></li>
					      <li><a href="#page-4">1 qadam</a></li>
					      <li><a href="#page-5">2 qadam</a></li>
					      <li><a href="#page-6">3 qadam</a></li>
					      <li><a href="#page-7">Qonun qoidalar</a></li>
					      <li><a href="#page-8">Tariflar</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page bg-light one">
					  	<h2 class="heading">Dastur haqida</h2>
					  	<p>Savdo jarayonini avtomatlashtirish savdo jarayonidagi turli vazifalar va faoliyatlarni avtomatlashtirish va soddalashtirish uchun texnologiya va dasturiy vositalardan foydalanishni anglatadi. Bu takrorlanadigan, qo'lda bajariladigan vazifalarni avtomatlashtirish va savdo operatsiyalarini optimallashtirish uchun texnologik echimlardan foydalanishni o'z ichiga oladi.avdo jarayonini avtomatlashtirish savdo funktsiyasi doirasida samaradorlik, mahsuldorlik va samaradorlikni oshirishga qaratilgan.</p>
					  </div>
					  <div id="page-2" class= "page bg-light two">
					  	<h2 class="heading">Dastur sizga nima beradi</h2>
                        <p>Mazkur loyiha Savdo jarayonini soddalashtirish mahsulot yoki xizmatni sotish bilan bog'liq bo'lgan turli bosqichlar va tadbirlarni tartibga solish va murakkabliklarni olib tashlashni anglatadi.Aniq narxlar va shartlar: narxlash tuzilmalari va shartlari shaffof va tushunarli bo'lishini ta'minlang. Mijozlarni chalg'itishi yoki xafa qilishi mumkin bo'lgan yashirin to'lovlar yoki murakkab narxlash modellaridan qoching.

                        Xarid qilish jarayonini soddalashtiring: xaridorlar xaridni yakunlashini iloji boricha osonlashtiring. Bu foydalanuvchilarga qulay onlayn buyurtma tizimini ta'minlash, bir nechta to'lov variantlarini taklif qilish yoki savdoni yakunlash uchun zarur bo'lgan qadamlar sonini kamaytirishni o'z ichiga olishi mumkin.</p>
					  </div>
					  <div id="page-3" class= "page bg-light three">
					  	<h2 class="heading">Boshlash</h2>
					  	<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
					  </div>
					  <div id="page-4" class= "page bg-light four">
					    <h2 class="heading">1 qadam</h2>
					    <p>Etakchi boshqaruv: Avtomatlashtirish vositalari veb-saytlar, ijtimoiy media yoki elektron pochta kampaniyalari kabi turli manbalardan bo'lgan mijozlarni qo'lga kiritishi, tartibga solish va kuzatishi mumkin. Etakchilar oldindan belgilangan mezonlar asosida avtomatik ravishda savdo vakillariga tayinlanishi yoki davra tartibida taqsimlanishi mumkin. Bu tezkor kuzatuvni ta'minlaydi va yo'llarning yoriqlar orqali tushishini oldini oladi.</p>
					  </div>
					  <div id="page-5" class= "page bg-light five">
					    <h2 class="heading">2 qadam</h2>
					    <p>Elektron pochtani avtomatlashtirish: Elektron pochtani avtomatlashtirish vositalari istiqbolli va mijozlarga shaxsiylashtirilgan va maqsadli elektron pochta xabarlarini yuborish jarayonini soddalashtiradi. Avtomatlashtirilgan elektron pochta kampaniyalari etakchilarni tarbiyalash, kuzatuvlarni yuborish yoki tegishli kontentni almashish uchun o'rnatilishi mumkin. Shablonlar va ketma-ketliklar aloqani soddalashtirish va savdo vakillari uchun vaqtni tejash uchun yaratilishi mumkin.</p>
					  </div>
					  <div id="page-6" class= "page bg-light six">
					    <h2 class="heading">3 qadam</h2>
					    <p>Hisobot va tahlillar: Avtomatlashtirish vositalari real vaqtda hisobotlar va asosiy savdo ko'rsatkichlari, masalan, konversiya stavkalari, quvur liniyasi tezligi yoki daromad prognozlari bo'yicha tahlillarni yaratishi mumkin. Ma'lumotlarga asoslangan ushbu yondashuv savdo menejerlari va rahbarlariga ish faoliyatini tushunishga, qiyinchiliklarni aniqlashga va ma'lumotlarga asoslangan qarorlar qabul qilishga yordam beradi.</p>
					  </div>
					  <div id="page-7" class= "page bg-light seven">
					    <h2 class="heading">Qonun qoidalar</h2>
					    <p>Boshqa tizimlar bilan integratsiya: Savdoni avtomatlashtirish vositalari ko'pincha marketingni avtomatlashtirish platformalari, mijozlarni qo'llab-quvvatlash dasturlari yoki buxgalteriya tizimlari kabi boshqa tizimlar bilan birlashadi. Ushbu integratsiya ma'lumotlarning uzluksiz oqimini ta'minlaydi, ma'lumotlarni qo'lda kiritish zaruratini yo'q qiladi va turli bo'limlar bo'ylab izchillikni ta'minlaydi.</p>
					  </div>
					  <div id="page-8" class= "page bg-light eight">
					    <h2 class="heading">Tariflar</h2>
					    <p>Savdo jarayonini avtomatlashtirish savdo guruhlari samaradorligini va samaradorligini sezilarli darajada oshirishi mumkin. Takroriy vazifalarni avtomatlashtirish va ma'lumotlarga asoslangan tushunchalarni taqdim etish orqali savdo vakillari ko'proq aloqalarni o'rnatish, bitimlarni yopish va mijozlarning ajoyib tajribasini taqdim etishga e'tibor berishlari mumkin.</p>
					  </div>
					</div>
			  </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img">
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


<section class="ftco-section ftco-no-pt" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-5 heading-section text-center ftco-animate">
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
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
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
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
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
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
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
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
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
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
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
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
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
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
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
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
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
                <h2 class="mb-4">Biz bilan bog'lanish</h2>
                <p>Biz do'koninigiz ishini yengillashtiramiz. Doimiy statistikalar taqdim qilib boramiz!</p>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Manzil</h3>
                        <p>O'zbekiston, Toshkent shahri, Mizo Ulug'bek tumi, Buz-2, 21</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Telefon raqam</h3>
                        <p><a href="tel://998950000409">+998 (95) 000 04 09</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Elektron pochta</h3>
                        <p><a href="mailto:info@vender.uz">info@vender.uz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Websayt</h3>
                        <p><a href="#">www.vender.uz</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Biz haqimizda</h2>
                    <p>Biz do'koninigiz ishini yengillashtiramiz. Doimiy statistikalar taqdim qilib boramiz!</p>
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
                    <h2 class="ftco-heading-2">Savolingiz bormi?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">O'zbekiston, Toshkent shahri, Mizo Ulug'bek tumi, Buz-2, 21</span>
                            </li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span
                                        class="text">+998 (95) 000 04 09</span></a>
                            </li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@vender.uz</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>


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
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('landing/js/google-map.js')}}"></script>

<script src="{{ asset('landing/js/main.js')}}"></script>

</body>
</html>

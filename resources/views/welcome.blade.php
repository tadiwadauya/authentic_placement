<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/finate/finate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 06:51:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>AuthenticPlacement</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset('front/assets/img/favicon.ico')}}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&amp;display=swap" rel="stylesheet">


    <!--== Bootstrap CSS ==-->
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--== Icofont Icon CSS ==-->
    <link href="{{asset('front/assets/css/icofont.css')}}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{asset('front/assets/css/swiper.min.css')}}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{asset('front/assets/css/fancybox.min.css')}}" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="{{asset('front/assets/css/aos.min.css')}}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet" />

</head>

<body>

<!--wrapper start-->
<div class="wrapper">
  
  <!--== Start Header Wrapper ==-->
  <header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="{{asset('front/assets/img/logo-light.png')}}" alt="Logo" />
                  <img class="logo-light" src="{{asset('front/assets/img/logo-light.png')}}" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-align-center">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li><a href="index.html"><span>Home</span></a></li>
                <li><a href="job.html"><span>Jobs</span></a></li>
                  <li><a href="employers-details.html"><span>Categories</span></a></li>
                  <li><a href="employers-details.html"><span>About us</span></a></li>
                  <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                    <ul class="submenu-nav">
                      <li><a href="blog-grid.html">Blog Grid</a></li>
                      <li><a href="blog.html">Blog Left Sidebar</a></li>
                      <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                 
                  <li><a href="contact.html"><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
            @guest
           @if (Route::has('login'))
    <div class="header-align-end">
        <div class="header-action-area">
           
             
                <a class="btn-registration" href="{{ route('login') }}"><span></span> Log in</a>
                @endif

                @if (Route::has('register'))
                    <a class="btn-registration" href="{{ url('jobseeker/register') }}"><span>+</span>Jobseeker Register </a>
                @endif
                @if (Route::has('register'))
                    <a class="btn-registration" href="{{ url('employer/register') }}"><span>+</span>Employer Register </a>
                @endif

              @else
              <a class="btn-registration btn-sm" href="#"  > {{ Auth::user()->name }} </a>

                                <a class="btn-theme btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

             @endguest
            <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                <i class="icofont-navigation-menu"></i>
            </button>
        </div>
    </div>
 
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">

    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="home-slider-container default-slider-container">
        <div class="home-slider-wrapper slider-default">
          <div class="slider-content-area" data-bg-img="{{asset('front/assets/img/slider/slider-bg.jpg')}}">
            <div class="container pt--0 pb--0">
              <div class="slider-container">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-lg-8">
                    <div class="slider-content">
                      <h2 class="title"><span class="counter" data-counterup-delay="80">2,568</span> job available <br>You can choose your dream job</h2>
                      <p class="desc">We are authentic HR Consultants dedicated to optimize your organisations human resources for success</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="job-search-wrap">
                      <div class="job-search-form">
                        <form action="#">
                          <div class="row row-gutter-10">
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Job title or keywords">
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control">
                                  <option value="1" selected>Choose City</option>
                                  <option value="2">Harare</option>
                                  <option value="3">Bulawayo</option>
                                  <option value="4">Mutare</option>
                                  <option value="5">Gweru</option>
                                  <option value="6">Masvingo</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control">
                                  <option value="1" selected>Category</option>
                                  <option value="2">Web Designer</option>
                                  <option value="3">Web Developer</option>
                                  <option value="4">Graphic Designer</option>
                                  <option value="5">App Developer</option>
                                  <option value="6">UI &amp; UX Expert</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <button type="button" class="btn-form-search"><i class="icofont-search-1"></i></button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="play-video-btn">
              <a href="https://www.youtube.com/mcvqOUtcAJg" class="video-popup">
                <img src="{{asset('front/assets/img/icons/play.png')}}" alt="Image-HasTech">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="home-slider-shape">
        <img class="shape1" data-aos="fade-down" data-aos-duration="1500" src="{{asset('front/assets/img/slider/vector1.png')}}" width="270" height="234" alt="Image-HasTech">
        <img class="shape2" data-aos="fade-left" data-aos-duration="2000" src="{{asset('front/assets/img/slider/vector2.png')}}" width="201" height="346" alt="Image-HasTech">
        <img class="shape3" data-aos="fade-right" data-aos-duration="2000" src="{{asset('front/assets/img/slider/vector3.png')}}" width="276" height="432" alt="Image-HasTech">
        <img class="shape4" data-aos="flip-left" data-aos-duration="1500" src="{{asset('front/assets/img/slider/vector4.png')}}" width="127" height="121" alt="Image-HasTech">
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Job Category Area Wrapper ==-->
    <section class="job-category-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Popular Category</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-gutter-20" >
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Accounting/Finance <span>(305)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Production/Operation <span>(95)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Education/Training <span>(212)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Design/Creative <span>(93)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Health & Fitness <span>(4)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Research/Consultancy <span>(34)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Engineer/Architects <span>(376)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Telecommunication <span>(450)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Data Entry/Operator <span>(25)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Production/Operation <span>(95)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Marketing/Sales <span>(666)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Security/Support Service <span>(62)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Job Category Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
    <section class="recent-job-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Recent Job Circulars</h3>
              <div class="desc">
                <a href="#">Browse All Jobs -></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/1.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Darkento Ltd.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Front-end Developer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/2.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Inspire Fitness Co.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Senior UI Designer</a></h3>
                <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/3.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/4.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Obelus Concepts</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">UX Researcher</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/5.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Sanguine Skincare</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Android App Developer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/6.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Flux Water Gear</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Product Designer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/7.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Darkento Ltd.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Front-end Developer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/8.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Inspire Fitness Co.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Senior UI Designer</a></h3>
                <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="{{asset('front/assets/img/companies/9.jpg')}}" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Part-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
               <div class="recent-job-info">
                <div class="salary">
                  <h4>Expires:</h4>
                  <p>Dec-21-2023</p>
                </div>
                <a class="btn-theme btn-sm" href="job-details.html">View</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Recent Job Area Wrapper ==-->

    <!--== Start Work Process Area Wrapper ==-->
    <section class="work-process-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">OUR SERVICES</h3>
              <div class="desc">
                <p>We Provide</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="working-process-content-wrap">
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                 <a href> <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="{{asset('front/assets/img/icons/w1.png')}}" alt="Image-HasTech">
                      <img class="icon-hover" src="{{asset('front/assets/img/icons/w1-hover.png')}}" alt="Image-HasTech">
                    </div>
                  </div></a>
                  <div class="content">
                    <h4 class="title">Psychometric Testing</h4>
                    <p class="desc">We have an online tool for pysochometric testing</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="{{asset('front/assets/img/icons/right-arrow.png')}}" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="{{asset('front/assets/img/icons/right-arrow2.png')}}" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="{{asset('front/assets/img/icons/w2.png')}}" alt="Image-HasTech">
                      <img class="icon-hover" src="{{asset('front/assets/img/icons/w2-hover.png')}}" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Training and Development</h4>
                    <p class="desc">We offer Training programs for private and public organizations, in-house and workshops.</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="{{asset('front/assets/img/icons/right-arrow.png')}}" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="{{asset('front/assets/img/icons/right-arrow2.png')}}" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="{{asset('front/assets/img/icons/w3.png')}}" alt="Image-HasTech">
                      <img class="icon-hover" src="{{asset('front/assets/img/icons/w3-hover.png')}}" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Job placement services</h4>
                    <p class="desc">Efficient CV database for quick candidate selection in any position.</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="{{asset('front/assets/img/icons/right-arrow.png')}}" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="{{asset('front/assets/img/icons/right-arrow2.png')}}" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="{{asset('front/assets/img/icons/w4.png')}}" alt="Image-HasTech">
                      <img class="icon-hover" src="{{asset('front/assets/img/icons/w4-hover.png')}}" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">CV / Resume Writing</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon d-none">
                    <img class="shape-icon" src="{{asset('front/assets/img/icons/right-arrow.png')}}" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="{{asset('front/assets/img/icons/right-arrow2.png')}}" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Work Process Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
   
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    
    <!--== End Team Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area">
      <div class="container pt--0 pb--0" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="brand-logo-content" >
              <div class="swiper brand-logo-slider-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/1.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/2.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/3.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/4.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/5.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/6.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{asset('front/assets/img/brand-logo/1.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                </div>
              </div>
              <!--== Add Swiper Arrows ==-->
              <div class="swiper-btn-wrap">
                <div class="brand-swiper-btn-prev">
                  <i class="icofont-long-arrow-left"></i>
                </div>
                <div class="brand-swiper-btn-next">
                  <i class="icofont-long-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Testimonials</h3>
              <div class="desc">
                <p> Happy clients</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper testi-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                       
                        <div class="testi-info">
                          <h4 class="name">Roselia Hamets</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">This organisation made my job easier it and was able to get us elit employees</p>
                       
                        <div class="testi-quote"><img src="{{asset('front/assets/img/icons/quote1.png')}}" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                       
                        <div class="testi-info">
                          <h4 class="name">Assunta Manson</h4>
                          <span class="designation">Employee</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">I really appriciate this site l was able to get hired by a great company after using your site. thank you so much</p>
                       
                        <div class="testi-quote"><img src="{{asset('front/assets/img/icons/quote1.png')}}" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                      
                        <div class="testi-info">
                          <h4 class="name">Amira Shepard</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">Wonderful resources you have there you get to meet the cream before physical interwiew with your pysochometric test</p>
                       
                        <div class="testi-quote"><img src="{{asset('front/assets/img/icons/quote1.png')}}" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                       
                        <div class="testi-info">
                          <h4 class="name">Joshua George</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                      
                        <div class="testi-quote"><img src="{{asset('front/assets/img/icons/quote1.png')}}" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                       
                        <div class="testi-info">
                          <h4 class="name">Rosie Patton</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                      
                        <div class="testi-quote"><img src="{{asset('front/assets/img/icons/quote1.png')}}" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
              </div>

              <!--== Add Swiper Pagination ==-->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Testimonial Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-home-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Recent Articles</h3>
              <div class="desc">
                <p>Checkout our posts</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center post-home-style row-gutter-40">
          <div class="col-md-6 col-lg-4" data-aos="fade-right">
            <!--== Start Blog Post Item ==-->
            <div class="post-item">
              <div class="thumb">
                <a href="blog-details.html"><img src="{{asset('front/assets/img/blog/1.jpg')}}" alt="Image" width="370" height="270"></a>
              </div>
              <div class="content">
                <div class="author">By <a href="blog.html">Walter Houston</a></div>
                <h4 class="title"><a href="blog-details.html">It long established fact that reader will distracted the readable.</a></h4>
                <div class="meta">
                  <span class="post-date">03 April, 2022</span>
                  <span class="dots"></span>
                  <span class="post-time">10 min read</span>
                </div>
              </div>
            </div>
            <!--== End Blog Post Item ==-->
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-left">
            <!--== Start Blog Post Item ==-->
            <div class="post-item">
              <div class="thumb mb--0">
                <a href="blog-details.html"><img src="{{asset('front/assets/img/blog/h1.jpg')}}" alt="Image" width="370" height="440"></a>
              </div>
            </div>
            <!--== End Blog Post Item ==-->
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="post-home-list-style">
              <!--== Start Blog Post Item ==-->
              <div class="post-item">
                <div class="content">
                  <div class="author">By <a href="blog.html">Walter Houston</a></div>
                  <h4 class="title"><a href="blog-details.html">Established fact and readeren will distracted the readable content.</a></h4>
                  <div class="meta">
                    <span class="post-date">03 April, 2022</span>
                    <span class="dots"></span>
                    <span class="post-time">10 min read</span>
                  </div>
                </div>
              </div>
              <!--== End Blog Post Item ==-->

              <!--== Start Blog Post Item ==-->
              <div class="post-item">
                <div class="content">
                  <div class="author">By <a href="blog.html">Walter Houston</a></div>
                  <h4 class="title"><a href="blog-details.html">With WooLentor's drag-and drop interface for creating...</a></h4>
                  <div class="meta">
                    <span class="post-date">03 April, 2022</span>
                    <span class="dots"></span>
                    <span class="post-time">10 min read</span>
                  </div>
                </div>
              </div>
              <!--== End Blog Post Item ==-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <!--== Start Footer Top ==-->
    <div class="footer-top">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-lg-5">
            <div class="footer-newsletter-content">
              <h4 class="title">Subscribe for everyday job newsletter.</h4>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="footer-newsletter-form">
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button type="submit" class="btn-newsletter">Subscribe Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Top ==-->

    <!--== Start Footer Main ==-->
    <div class="footer-main">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="widget-item widget-about">
              <div class="widget-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="{{asset('front/assets/img/logo-light-theme.png')}}" alt="Logo" />
                </a>
              </div>
              <p class="desc">That necessitat ecommerce platform that optimi your store popularised the release</p>
              <div class="social-icons">
                <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="icofont-facebook"></i></a>
                <a href="https://www.skype.com/" target="_blank" rel="noopener"><i class="icofont-skype"></i></a>
                <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="icofont-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-3 col-lg-3">
                <div class="widget-item nav-menu-item1">
                  <h4 class="widget-title">Company</h4>
                  <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-1">Company</h4>
                  <div id="widgetId-1" class="collapse widget-collapse-body">
                    <div class="collapse-body">
                      <div class="widget-menu-wrap">
                        <ul class="nav-menu">
                          <li><a href="about-us.html">About Us</a></li>
                          <li><a href="about-us.html">Why Extobot</a></li>
                          <li><a href="contact.html">Contact With Us</a></li>
                          <li><a href="contact.html">Our Partners</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="widget-item nav-menu-item2">
                  <h4 class="widget-title">Resources</h4>
                  <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-2">Resources</h4>
                  <div id="widgetId-2" class="collapse widget-collapse-body">
                    <div class="collapse-body">
                      <div class="widget-menu-wrap">
                        <ul class="nav-menu">
                          <li><a href="account-login.html">Quick Links</a></li>
                          <li><a href="job.html">Job Packages</a></li>
                          <li><a href="job.html">Post New Job</a></li>
                          <li><a href="job.html">Jobs Listing</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="widget-item nav-menu-item3">
                  <h4 class="widget-title">Legal</h4>
                  <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-3">Legal</h4>
                  <div id="widgetId-3" class="collapse widget-collapse-body">
                    <div class="collapse-body">
                      <div class="widget-menu-wrap">
                        <ul class="nav-menu">
                          <li><a href="account-login.html">Affiliate</a></li>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="account-login.html">Help & Support</a></li>
                          <li><a href="job.html">Careers</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="widget-item nav-menu-item4">
                  <h4 class="widget-title">Products</h4>
                  <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-4">Products</h4>
                  <div id="widgetId-4" class="collapse widget-collapse-body">
                    <div class="collapse-body">
                      <div class="widget-menu-wrap">
                        <ul class="nav-menu">
                          <li><a href="account-login.html">Star a Trial</a></li>
                          <li><a href="about-us.html">How It Works</a></li>
                          <li><a href="account-login.html">Features</a></li>
                          <li><a href="about-us.html">Price & Planing</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Main ==-->

    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="footer-bottom-content">
              <p class="copyright">© 2022 Finate. Made with <i class="icofont-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival">Codecarnival.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

  <!--== Start Aside Menu ==-->
  <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
      <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i class="icofont-simple-left"></i></button>
    </div>
    <div class="offcanvas-body">
      <!-- Mobile Menu Start -->
      <div class="mobile-menu-items">
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Find Jobs</a>
            <ul class="sub-menu">
              <li><a href="job.html">Jobs</a></li>
              <li><a href="job-details.html">Job Details</a></li>
            </ul>
          </li>
          <li><a href="employers-details.html">Employers Details</a></li>
          <li><a href="#">Candidates</a>
            <ul class="sub-menu">
              <li><a href="candidate.html">Candidates</a></li>
              <li><a href="candidate-details.html">Candidate Details</a></li>
            </ul>
          </li>
          <li><a href="#">Blog</a>
            <ul class="sub-menu">
              <li><a href="blog-grid.html">Blog Grid</a></li>
              <li><a href="blog.html">Blog Left Sidebar</a></li>
              <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="about-us.html">About us</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="registration.html">Registration</a></li>
              <li><a href="page-not-found.html">Page Not Found</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <!-- Mobile Menu End -->
    </div>
  </aside>
  <!--== End Aside Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="{{asset('front/assets/js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{asset('front/assets/js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{asset('front/assets/js/jquery-migrate.js')}}"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{asset('front/assets/js/swiper.min.js')}}"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="{{asset('front/assets/js/fancybox.min.js')}}"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="{{asset('front/assets/js/aos.min.js')}}"></script>
<!--=== jQuery Counterup Min Js ===-->
<script src="{{asset('front/assets/js/counterup.js')}}"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="{{asset('front/assets/js/waypoint.js')}}"></script>

<!--=== jQuery Custom Js ===-->
<script src="{{asset('front/assets/js/custom.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/finate/finate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 06:52:16 GMT -->
</html>
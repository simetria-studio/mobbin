<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Mobbin Admin</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/responsive.css') }}">

   </head>
   <body class="sidebar-main-active right-column-fixed header-top-bgcolor">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <img src="{{ url('assets/img/simetria.png') }}" class="img-fluid" alt="">
               {{-- <span>ADMIN</span> --}}
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li class="">
                        <a href="{{ url('admin') }}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Home</span></a>
                     </li>
                     <li>
                        <a href="dashboard-1.html" class="iq-waves-effect"><i class="ri-home-3-line"></i><span>Cursos</span></a>
                     </li>
                     <li>
                        <a href="dashboard-2.html" class="iq-waves-effect"><i class="ri-home-8-line"></i><span>Layouts</span></a>
                     </li>
                     <li>
                        <a href="dashboard-3.html" class="iq-waves-effect"><i class="ri-home-7-line"></i><span>Alunos</span></a>
                     </li>

                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <img src="{{ url('assets/img/simetria.png') }}" class="img-fluid" alt="">
                     <span>ADMIN</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="navbar-left">
                  <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                     <li class="nav-item">
                        <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i class="ri-home-4-line"></i></a>
                     </li>
                     <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>
                     <li><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-file-list-line"></i></a></li>
                     <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                     <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i class="ri-chat-check-line"></i></a></li>
                     <li><a href="app/index.html" class="nav-link"><i class="ri-inbox-line"></i></a></li>
                  </ul>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <div class="searchbox-datalink">
                           <h6 class="pl-3 pt-3">Pages</h6>
                           <ul class="m-0 pl-3 pr-3 pb-3">
                              <li class="iq-bg-primary-hover rounded"><a href="index.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i class="ri-message-line pr-2"></i>Chat</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i class="ri-profile-line pr-2"></i>Profile</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i class="ri-chat-check-line pr-2"></i>Todo</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i class="ri-mail-line pr-2"></i>Email</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-detail.html" class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i class="ri-compasses-line pr-2"></i>Faq</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                           </ul>
                        </div>
                     </form>
                  </div>
               </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        {{-- <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                           </div>
                        </li> --}}

                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Todas as Notificações<small class="badge  badge-light float-right pt-1">0</small></h5>
                                    </div>


                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                             <div id="lottie-mail"></div>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Todas as Mensagens<small class="badge  badge-light float-right pt-1">0</small></h5>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  {{-- <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                           <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height text-white">Nik jone</h6>
                              <span class="font-size-12 text-white">Available</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul> --}}
               </nav>


            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            @yield('content')
         </div>



      <!-- Wrapper END -->
      <!-- Footer -->

      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ url('painel/js/jquery.min.js') }}"></script>
      <script src="{{ url('painel/js/popper.min.js') }}"></script>
      <script src="{{ url('painel/js/bootstrap.min.js') }}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ url('painel/js/jquery.appear.js') }}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ url('painel/js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ url('painel/js/waypoints.min.js') }}"></script>
      <script src="{{ url('painel/js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ url('painel/js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ url('painel//apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ url('painel/js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ url('painel/js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ url('painel/js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ url('painel/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ url('painel/js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ url('painel/js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <script src="{{ url('painel/js/core.js') }}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ url('painel/js/charts.js') }}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ url('painel/js/animated.js') }}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ url('painel/js/kelly.js') }}"></script>
      <!-- am maps JavaScript -->
      <script src="{{ url('painel/js/maps.js') }}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{ url('painel/js/worldLow.js') }}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ url('painel/js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ url('painel/js/custom.js') }}"></script>

   </body>
</html>

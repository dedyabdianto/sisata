<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" href="{{ asset ('pariwisata/assets/images/logo-papsel2.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset ('pariwisata/assets/vendors/bootstrap/css/bootstrap.min.css') }}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet"  href="{{ asset ('pariwisata/assets/vendors/fontawesome/css/all.min.css') }}">
      <!-- jquery-ui css -->
      <link rel="stylesheet"  href="{{ asset ('pariwisata/assets/vendors/jquery-ui/jquery-ui.min.css') }}">
      <!-- modal video css -->
      <link rel="stylesheet"  href="{{ asset ('pariwisata/assets/vendors/modal-video/modal-video.min.css') }}">
      <!-- light box css -->
      <link rel="stylesheet"  href="{{ asset ('pariwisata/assets/vendors/lightbox/dist/css/lightbox.min.css') }}">
      <!-- slick slider css -->
      <link rel="stylesheet"  href="{{ asset ('pariwisata/assets/vendors/slick/slick.css') }}">
      <link rel="stylesheet"  href="{{ asset ('pariwisata/assets/vendors/slick/slick-theme.css') }}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet"  href="{{ asset ('pariwisata/style.css') }}">

      
    <link href="/pariwisata/admin/assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">



      <title>Papua Selatan | Pariwisata</title>
   </head>
   <body class="home">
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="{{ asset ('pariwisata/assets/images/loader1.gif') }}" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         @include('layouts.frontend.header')
            <!-- Home slider html start -->
            @yield('content')
             
            <!--  contact details html end -->

            {{-- Footer --}}
         @include('layouts.frontend.footer')
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
            <div class="header-search-form">
               <div class="container">
                  <div class="header-search-container">
                     <form class="search-form" role="search" method="get" >
                        <input type="text" name="s" placeholder="Enter your text...">
                     </form>
                     <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                     </a>
                  </div>
               </div>
            </div>
         <!-- header html end -->
      </div>

   <!-- JavaScript -->
   <script src="{{ asset ('pariwisata/assets/js/jquery.js') }}"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/js/jquery.counterup.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/masonry/masonry.pkgd.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/lightbox/dist/js/lightbox.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/vendors/slick/slick.min.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/js/jquery.slicknav.js') }}"></script>
   <script src="{{ asset ('pariwisata/assets/js/custom.min.js') }}"></script>

   <script src="{{ asset ('pariwisata/assets2/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  {{-- <script src="{{ asset ('pariwisata/assets2/vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset ('pariwisata/assets2/vendors/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset ('pariwisata/assets2/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset ('pariwisata/assets2/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset ('pariwisata/assets2/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset ('pariwisata/assets2/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset ('pariwisata/assets2/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset ('pariwisata/assets2/js/dashboard-light.js') }}"></script>
  <script src="{{ asset ('pariwisata/assets2/js/datepicker.js') }}"></script> --}}

  {{-- CHART --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  @stack('js')

</body>

</html>
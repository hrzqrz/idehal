<div id="header">

    <!-- Top Bar Start-->
    @include('includes.navbar._topbar')
    <!-- Top Bar End-->

    <!-- Header Start-->
    @include('includes.navbar._header')
    <!-- Header End-->
    
    <!-- Main آقایانu Start-->
    <div class="container">
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="index.html"><span>خانه</span></a></li>
            <!-- dasteha -->
            @include('includes.navbar._dasteha')
            <!-- dasteha -->

            <!-- brands -->
            @include('includes.navbar._brands')
            <!-- brands -->
            
            {{-- <li class="custom-link"><a href="#">لینک های دلخواه</a></li> --}}
            
            <!-- بلاگ سفارشی -->
            {{-- @include('includes.navbar._custome_blog') --}}
            <!-- بلاگ سفارشی -->

            <!-- صفحات داخلی  - برگه ها  -->
            @include('includes.navbar._pages')
            <!-- صفحات داخلی  - برگه ها  -->

            <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
            <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Main آقایانu End-->
  </div>
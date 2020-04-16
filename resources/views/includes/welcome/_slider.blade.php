<div id="content" class="col-sm-9">
    <!-- Slideshow Start-->
    <div class="slideshow single-slider owl-carousel">
      <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
      <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
      <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-3.jpg" alt="banner 3" /></a> </div>
    </div>
    <!-- Slideshow End-->

    <!-- Featured محصولات Start-->
    @include('includes.slider._vijeh')
    <!-- Featured محصولات End-->
    
    <!-- Banner Start-->
    <div class="marketshop-banner">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-3-400x200.jpg" alt="بنر نمونه 3" title="بنر نمونه 3" /></a></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-1-400x200.jpg" alt="بنر نمونه" title="بنر نمونه" /></a></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-2-400x200.jpg" alt="بنر نمونه 2" title="بنر نمونه 2" /></a></div>
      </div>
    </div>
    <!-- Banner End-->

    <!-- دسته ها محصولات Slider Start-->
    @include('includes.slider._electronics')
    <!-- دسته ها محصولات Slider End-->

    <!-- Banner Start -->
    <div class="marketshop-banner">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-4-400x150.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-5-400x150.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- دسته ها محصولات Slider Start -->
    @include('includes.slider._healthandbeauty')
    <!-- دسته ها محصولات Slider End -->

    <!-- Brand محصولات Slider Start-->
    @include('includes.slider._apple')
    <!-- Brand محصولات Slider End -->

    <!-- Brand Logo Carousel Start-->
    @include('includes.slider._brands_slider')
    <!-- Brand Logo Carousel End -->

  </div>
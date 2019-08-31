@extends('layouts.app')

@section('content')
<!-- header content section --> 
<!-- portfolio grid section -->
<section id="portfolio">
  <div class="container">
    <div class="row" style="margin-top: -5%">
      <div class="col-lg-12 text-center">
        <hr class="section">
        <h4 class="pull-right" style="margin-top: -5%">الاعلانات المضافه حديثا</h4>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-4 portfolio-item"> <a  href="/show_product" class="portfolio-link">
        <div class="caption">
          <div class="caption-content" style="top:20%">
            <h3>اي كلام فاضي معقوووول</h3>
            <h4>100 ح.م</h4>
            <h4>للبيع</h4>
            <hr>
            <h4>اليوم 11:00</h4>
            <h4>البحيره \ دمنهور</h4>
          </div>
        </div>
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-4 portfolio-item"> <a href="/show_product" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-2.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-4 portfolio-item"> <a href="/show_product" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-3.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-4 portfolio-item"> <a href="/show_product" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-4.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-4 portfolio-item"> <a href="/show_product" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-5.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-4 portfolio-item"> <a href="/show_product" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-6.jpg" class="img-responsive" alt=""> </a> </div>
    </div>
  </div>
</section>
@endsection


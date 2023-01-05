@extends('frontend.layouts.app')
@section('content')
<style>
    .breadcrumb::after {
    border-width: 74px 25px 0 0 !important;
}
.breadcrumb::before {
    border-width: 0 0 74px 25px !important;
}
</style>
    <!-- main-area -->
    


    <section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/about_bg.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Donate Now</h2>
<p>Give a helping hand for poor people</p>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Donate</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-what-we-do-box">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-light-red">
<span class="icon-water"></span>
<h5>Pure Water <br>For Poor People</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-green">
<span class="icon-groceries"></span>
<h5>Healty Food <br>For Poor People</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-blue">
<span class="icon-heartbeat"></span>
<h5>Medical <br>Facilities for People</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="xs-service-promo box-color bg-purple">
<span class="icon-open-book"></span>
<h5>Pure Education <br>For Every Children</h5>
<p>663 million people drink dirty water. Learn how access to clean water.</p>
</div>
</div>
</div>
</div>
</section> 



    @endsection
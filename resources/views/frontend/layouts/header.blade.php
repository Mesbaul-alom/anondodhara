<header class="xs-header header-transparent xs-box">
<div class="container">
<nav class="xs-menus">
<div class="xs-top-bar clearfix">
<ul class="xs-top-social">
<li><a href="{{ get_setting('facebook') }}" class="color-facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="{{ get_setting('twitter') }}" class="color-twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="{{ get_setting('linkedin') }}" class="color-dribbble"><i class="fa fa-linkedin"></i></a></li>
<li><a href="{{ get_setting('youtube') }}" class="color-pinterest"><i class="fa fa-youtube"></i></a></li>
</ul>
<a href="" class="xs-top-bar-mail"><i class="fa fa-envelope-o"></i><span class="__cf_email__" data-cfemail="fd94939b8dbd98859c908d9198d39e9290">{{ get_setting('office_email') }}</span></a>
</div>
<div class="nav-header">
<div class="nav-toggle"></div>
<a href="/" class="xs-nav-logo">
<img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="">
</a>
</div>
<div class="nav-menus-wrapper row">
<div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
<a class="nav-brand" href="/">
<img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="">
</a>
</div>
<div class="col-lg-10 col-xl-9">
<ul class="nav-menu">
@php
                                     $headers = DB::table('pages')
                                     ->where('hearder', 1)
                                     ->get();
                                     @endphp
<li><a href="/">Home</a>
</li>
@foreach ($headers as $header)
<li>
                                         <a href="/page/{{ $header->slug }}">{{ $header->title }}</a>
                                     </li>
@endforeach

</li>

</ul>
</div>
<div class="xs-navs-button d-flex-center-end col-lg-1 col-xl-1 d-block d-lg-none d-xl-block">
<a href="/donate/now" class="btn btn-primary">
<span class="badge"><i class="fa fa-heart"></i></span> Donate Now
</a>
</div>
</div>
</nav>
</div>
</header>
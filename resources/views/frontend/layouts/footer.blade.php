<footer class="xs-footer-section">
<div class="container">
<div class="xs-footer-top-layer">
<div class="row">
<div class="col-lg-3 col-md-6 footer-widget xs-pr-20">
<a href="/" class="xs-footer-logo">
<img src="{{ asset(get_setting('frontend_logo_footer')) }}" alt="">
</a>
<p>CharityPress online and raise money for charity and causes you’re passionate about. CharityPress is an innovative, cost-effective online.</p>

</div>
<div class="col-lg-4 col-md-6 footer-widget">
<h3 class="widget-title">Contact Us</h3>
<ul class="xs-info-list">
<li><i class="fa fa-home bg-red"></i>{{ get_setting('office_address') }}</li>
<li><i class="fa fa-phone bg-green"></i>{{ get_setting('office_phone') }}</li>
<li><i class="fa fa-envelope-o bg-blue"></i><a href=""><span class="__cf_email__" data-cfemail="dea7b1abacb0bfb3bb9ebab1b3bfb7b0f0bdb1b3">{{ get_setting('office_email') }}</span></a></li>
</ul>
</div>

<div class="col-lg-2 col-md-6 footer-widget">
<h3 class="widget-title">INFORMATION</h3>
<ul class="xs-footer-list">
@php
                                    $footer_lefts = DB::table('pages')
                                        ->where('footer_left', 2)
                                        ->get();
                                @endphp
                                @foreach ($footer_lefts as $footer_left)
                                <li><a href="/page/{{ $footer_left->slug }}">{{ $footer_left->title }}</a></li>
                                   
                                @endforeach

</ul>
</div>


<div class="col-lg-3 col-md-6 footer-widget">
<h3 class="widget-title">SOCIAL LINKS</h3>
<ul class="xs-social-list-v2">
<li><a href="{{ get_setting('facebook') }}" class="color-facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="{{ get_setting('twitter') }}" class="color-twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="{{ get_setting('linkedin') }}" class="color-dribbble"><i class="fa fa-linkedin"></i></a></li>
<li><a href="{{ get_setting('youtube') }}" class="color-pinterest"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">
<div class="xs-copyright">
<div class="row">
<div class="col-md-6">
<div class="xs-copyright-text">
<p>{{ get_setting('copyright_text') }}</p>
</div>
</div>
<div class="col-md-6">
<nav class="xs-footer-menu">
<ul>
<li><a href="#">FAQ</a></li>
<li><a href="#">Help Desk</a></li>
<li><a href="#">Support</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
<div class="xs-back-to-top-wraper">
<a href="#" class="xs-back-to-top"><i class="fa fa-angle-up"></i></a>
</div>
</footer>
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
    

    <!-- slider-area -->
    <section class="banner" style="padding:150px 0px">
           
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
    
                    {!! $page->description !!}
                        </div>
                   
                        </div>
            </div>
        </section>
        <!-- slider-area-end -->

     

    @endsection
@extends('frontend.master') 

@section('title','About Unspoken')

@push('css')

@endpush


@section('mainContent')


	     <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
          
              <h1 class="breadcrumbs-custom-title">About Unspoken</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">About Us</li>
            </ul>
          </div>
        </div>
      </section>
	     <!-- Overview-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6">
              <p>{!! $pageintro->description !!}</p>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5"> <img class="img-responsive" src="{{asset('')}}images/pagemodule/{{$pageintro->image}}" alt="" width="470" height="334"/>
            </div>
          </div>
        </div>
      </section>
	  
	  <!-- Why Choose Us?-->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-6">
                <h3 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Why Choose Us? </span></h3>
                <p class="wow-outer offset-top-3"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">We guarantee a humanistic experience with those who are hiring, receiving, and providing services.</span></p>
                <div class="wow-outer button-outer"> <a class="button button-primary button-winona wow slideInDown" href="{{ url('/the-unspoken-promise')}}" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;"><div class="content-original">Learn More</div><div class="content-dubbed">Learn More</div></a></div>
              </div>
            </div>
          </div>
        </section>







@endsection




@push('scripts')

@endpush
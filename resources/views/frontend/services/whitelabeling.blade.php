@extends('frontend.master') 

@section('title','White Labeling')

@push('css')

@endpush


@section('mainContent')


 <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h1 class="breadcrumbs-custom-title">Agencies</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/our-services') }}">Our Services</a></li>
              <li class="active">Agencies</li>
            </ul>
          </div>
        </div>
      </section>
	  <!-- White Labeling-->
      <section class="section-lg text-center pb-0">
        <div class="container">
          <h3><b>White Labeling</b></h3>
	    </div>
      </section>
      @php 
      $x = 0;
      @endphp
      @foreach($pagemodules as $module)
      @php
       $x++;
      @endphp
     
       @if($x % 2 == 0)
        <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-lg-6 col-xl-5">
              <div class="inset-right-3">
                <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h3>
                <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">	
                {!! $module->description !!}
		            </p>
                
              </div>
            </div>
            
			<div class="col-md-10 col-lg-6"><img class="img-responsive" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368">
            </div>
			
            
          </div>
        </div>
      </section>
       @else
      
      	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}} </span></h3>
              <p class="wow-outer">
              {!! $module->description !!}
              </p>
           
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
      @endif
      @endforeach
	  	<!--Learn How We Can Help! -->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-6">
                <h3 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Learn How We Can Help!</span></h3>
                <p class="wow-outer offset-top-3"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">Send us your inquiry and specific interpreting needs.</span></p>
                <div class="wow-outer button-outer"> <a class="button button-primary button-winona wow slideInDown" href="contact-us.html" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;"><div class="content-original">Contact Us</div><div class="content-dubbed">Contact Us</div></a></div>
              </div>
            </div>
          </div>
        </section>







@endsection




@push('scripts')

@endpush
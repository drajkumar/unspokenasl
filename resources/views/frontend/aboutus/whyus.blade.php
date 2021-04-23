@extends('frontend.master') 

@section('title','The Unspoken Promise')

@push('css')

@endpush


@section('mainContent')


	  <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h1 class="breadcrumbs-custom-title">The Unspoken Promise</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="{{ url('/about-unspoken') }}"> About us</a></li>
              <li class="active">Why Us</li>
            </ul>
          </div>
        </div>
      </section>
	  <!-- Promises We Keep -->
	  <section class="section section-lg text-center pb-0" >
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInUp"> <b>{{$pageintro->title}}</b></span></h3>
          <p class="wow-outer"><span class="text-width-1 wow slideInDown">{!! $pageintro->description !!}</span></p>
	    </div>
      </section>
	   <!-- to the Client-->
       <?php 
       $x = 0;
      ?>
      @foreach($pagemodules as $module)
      <?php $x++; ?>
      @if($x % 2 == 0)
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".1s">{!! $module->description !!}</span></p>
              @if($module->url != '')
                <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{$module->url}}">
                {{$module->buttonvalue}}</a></div>
               @else
                 {{''}}
               @endif
            </div>
            
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	    <!-- to the Deaf Consumer-->
      @else
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".1s">{!! $module->description !!}</span></p>
               @if($module->url != '')
                <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{$module->url}}">
                {{$module->buttonvalue}}</a></div>
               @else
                 {{''}}
               @endif
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInLeft" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
      
      @endif
      @endforeach
	  <!-- to the Interpreter-->
      {{-- <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">	...to the Interpreter</span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Unspoken Language Services is a boutique company owned and operated by American Sign Language interpreters, which means we respect and value your unique craft as an interpreter. We understand the amount of time and dedication it took to become one of the best in the industry, so we treat and compensate you as such. Apply today to be a part of our growing team!</span></p>
             
              <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="join-us.html">Join Our Team</a></div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInLeft" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-SrMpzl-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section> --}}
	  <!-- Principles of the Promise -->
	   <section class="section section-lg bg-gray-100">
		<div class="container text-center">
          <h3 class="wow-outer"><span class="wow slideInUp">Principles of the Promise</span></h3>
	    </div>
		<div class="container">
          <div class="row row-30">

            @foreach ($pofps as $pofp)
              <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon {{$pofp->icon}} wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown">{{$pofp->title}}</h4>
                  <p class="wow fadeInUpSmall">{!! $pofp->description !!}</p>
                </div>
              </article>
            </div>
            @endforeach
            
            
            
          </div>
         
        </div>
      </section>
	  
	   <!-- Contact Unspoken-->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-6">
                <h3 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Contact Unspoken...</span></h3>
                <p class="wow-outer offset-top-3"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">Let us bring the humanistic approach to your interpreting experience.</span></p>
                <div class="wow-outer button-outer"> <a class="button button-primary button-winona wow slideInDown" href="contact-us.html" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;"><div class="content-original">Contact Us</div><div class="content-dubbed">Contact Us</div></a></div>
              </div>
            </div>
          </div>
        </section>







@endsection




@push('scripts')

@endpush
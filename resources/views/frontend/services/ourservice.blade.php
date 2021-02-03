@extends('frontend.master') 

@section('title','Our Services')

@push('css')

@endpush


@section('mainContent')


 <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h1 class="breadcrumbs-custom-title">Services</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Our Services</li>
            </ul>
          </div>
        </div>
      </section>

	  <section class="section-lg text-center pb-0">
        <div class="container">
          <h3>{{$pageintro->title}}</h3>
		  <p class="font-size-18">{!! $pageintro->description !!}</p>
	     </div>
      </section>
	  
	  	   <!-- What is ASL  -->
      <?php 
      $x = 0;
     ?>
      @foreach($pagemodules as $module)
      <?php $x++; ?>
     
       @if($x % 2 == 0)
         <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
            <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h3>
            {!! $module->description !!}
           
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>

       @else
       <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h3>
              {!! $module->description !!}
              
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInLeft" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
       @endif
      @endforeach

      	   <!-- Services-->
      <section class="section-lg text-center">
        <div class="container">
          <h3>Our Services</h3>
          <h4>Our expertise includes, but are not limited to the following settings:</h4>
          <div class="row row-50 row-xxl-70 offset-top-2">
          
          @foreach($service as $serv)
          
		       	<div class="col-sm-6 col-lg-3">

             <?php
             
              $name = str_replace(' ', '-', $serv->name);
             ?>

              <!-- Thumbnail 1-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href='{{ url("/service/{$serv->id}/{$name}") }}'><img class="thumbnail-light-image" src="{{asset('')}}images/service/{{$serv->image}}" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title"><a href='{{ url("/service/{$serv->id}/{$name}") }}'>{{$serv->name}}</a></h5>
              </article>
            </div>
          
            @endforeach
            
            
            
            
          </div>
        </div>
      </section>
	  
	    <section class="section-lg text-center pt-0">
        <div class="container">
          <h4>We service the need of ASL Interpreting to consumers who are:</h4>
		  <p class="font-size-18">Profoundly Deaf</p>
		  <p class="font-size-18">Hard of Hearing</p>
		  <p class="font-size-18">Deaf-Blind</p>
		  <p class="font-size-18">Deaf Close-Vision</p>
		  <p class="font-size-18">Late-Deafened</p>

	     </div>
      </section>
	  
<!-- Contact Unspoken-->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-7">
                <h4 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Need to Request an Interpreter for a Different Setting?</span></h4>
                <p class="wow-outer offset-top-3"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">Contact us to discuss your specific needs.</span></p>
                <div class="group group-middle text-center w-100">
				
				<a class="button button-primary button-winona" href="request-services.html" data-waypoint-to="#"><div class="content-original">Request</div><div class="content-dubbed">Request</div></a>
	<span><code style="background:none;"><script type="text/javascript" async="" src="https://cdn.reamaze.com/assets/reamaze.js"></script>
<script type="text/javascript">
  var _support = _support || { 'ui': {}, 'user': {} };
  _support['account'] = 'unspokensigns';
  _support['ui']['contactMode'] = 'mixed';
  _support['ui']['enableKb'] = 'true';
  _support['ui']['styles'] = {
    widgetColor: 'rgb(106, 175, 183)',
  };
  _support['apps'] = {
    faq: {"enabled":true},
    recentConversations: {},
    orders: {}
  };
</script>
<span style="font-size: 16px;">
<a class="button button-primary-outline button-winona text-white" href="#" data-reamaze-lightbox="contact"><div class="content-original">Contact our support team</div><div class="content-dubbed">Contact our support team</div></a></span></code>
&nbsp;<a href="#" data-reamaze-lightbox="contact"></a> </span>

				
				
				
				</div>
              </div>
            </div>
          </div>
        </section>	  








@endsection




@push('scripts')

@endpush
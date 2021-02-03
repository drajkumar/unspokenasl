@extends('frontend.master') 

@section('title','Business Interpreting')

@push('css')

@endpush


@section('mainContent')


 <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h1 class="breadcrumbs-custom-title">Business Interpreting</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/our-services') }}">Our Services</a></li>
              <li><a href="workers-compensation.html">ASL Interpreting</a></li>
              <li class="active">Business Interpreting</li>
            </ul>
          </div>
        </div>
      </section>
	  
	  	  <!-- Promises We Keep -->
	  <section class="section section-lg text-center pb-0" >
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInUp"> <b>Business Interpreting</b></span></h3>
	    </div>
      </section>
	  
	  <?php 
      $x = 0;
     ?>
      @foreach($service->servicemodule as $module)
      <?php $x++; ?>
     
       @if($x % 2 == 1)
         <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
            {!! $module->description !!}
           
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{asset('')}}images/service/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>

       @else
       	  <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
           {!! $module->description !!}
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInLeft" src="{{asset('')}}images/service/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
       @endif
      @endforeach
	  <section class="section section-lg text-center py-0" >
        <div class="container">
              <h4 class="wow-outer"><span class="wow slideInUp" style="visibility: visible; animation-name: slideInUp;">If you're interested in learning about the laws in place to protect people with disabilities within the workplace, below are a few provided resources:</span></h4>
			<p class="wow-outer" style="text-align: center;"><a class="font-bold"  style="color: #005e54; text-decoration: underline;" href="http://www.ada.gov/cguide.htm"><b>U.S. Department of Justice – A Guide to Disability Rights Laws</b></a></p>
			<p class="wow-outer" style="text-align: center;"><a class="font-bold" style="color: #005e54; text-decoration: underline;" href="https://www.dol.gov/oasam/regs/statutes/sec504.htm"><b>U.S Department of Labor</b></a></p>
	    </div>
      </section>

	    <!-- 4 column Layout-->
     
        <section class="section-lg text-center">
          <div class="container">
            <h4 class="wow-outer"><span class="wow slideInUp">Unspoken Language Services interprets in the following business settings: </span></h4>
            <div class="row row-30 offset-top-2">
              @foreach($service->servicesettings as $setting)
              <div class="col-sm-6 col-lg-3 wow-outer">
                <!-- Thumbnail 1-->
                <article class="thumbnail-light wow slideInLeft"> <span class="thumbnail-light-media  d-block"> 
			          	<img class="thumbnail-light-image" src="{{asset('')}}images/service/{{$setting->image}}" alt="" width="270" height="300"/></span>
                  <h5 class="thumbnail-light-title">{{$setting->title}}</h5>
                </article>
			      </div>
            @endforeach
			 
			 
			
            </div>
         </div>
          </div>
        </section>
 
	   <!-- Contact Unspoken-->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-7">
                <h4 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Need an Interpreter for a Different Business setting?</span></h4>
				<p class="wow-outer offset-top-3"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">Contact us to discuss your specific interpreting needs.</span></p>
                <div class="group group-middle text-center w-100"><a class="button button-primary button-winona" href="request-services.html" data-waypoint-to="#"><div class="content-original">Request</div><div class="content-dubbed">Request</div></a><span><code style="background:none;"><script type="text/javascript" async="" src="https://cdn.reamaze.com/assets/reamaze.js"></script>
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
				&nbsp;<a href="#" data-reamaze-lightbox="contact"></a> </span></div>
              </div>
            </div>
          </div>
        </section>	 







@endsection




@push('scripts')

@endpush
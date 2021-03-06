@extends('frontend.master') 

@section('title','Worker’s Compensation')

@push('css')

@endpush


@section('mainContent')

 <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h1 class="breadcrumbs-custom-title">Worker’s Compensation</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/our-services') }}">Our Services</a></li>
              <li><a href="workers-compensation.html">ASL Interpreting</a></li>
              <li class="active">Worker’s Compensation</li>
            </ul>
          </div>
        </div>
      </section>
	  
	  	  <!-- Worker’s Compensation-->
	  <section class="section section-lg text-center pb-0" >
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInUp"> <b>Worker’s Compensation</b></span></h3>
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
		  			  
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Here at Unspoken Language Services, we provide you with the best Sign Language interpreters to meet the needs of your deaf consumers. As an interpreting service provider within the National Provider Identifier (NPI) registry, we can ensure each interpreting occurrence between our interpreters and your Deaf injured worker is held with the utmost care and confidence as guided by the Health Insurance Portability and Accountability Act (HIPAA).   </span></p>
			<p class="wow-outer" style="text-align: center;"><a class="font-bold" style="color: #005e54; text-decoration: underline;" href="https://www.ada.gov/effective-comm.htm"><b>Using Sign Language Interpreters for "Effective&nbsp;Communication"</b></a></p>
			<p class="wow-outer" style="text-align: center;"><a class="font-bold"  style="color: #005e54; text-decoration: underline;" href="http://www.ada.gov/cguide.htm"><b>U.S. Department of Justice – A Guide to Disability Rights Laws</b></a></p>
	    </div>
      </section>
	  

	
	    <!-- 4 column Layout-->
        <section class="section-lg text-center pt-0">
          <div class="container">
            <h4 class="wow-outer"><span class="wow slideInUp">Worker’s Compensation Sign Language interpreters are necessary in the following medical and legal settings:</span></h4>
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
           
          </div>
        </section>
 
	   <!-- Request -->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-7">
                <h4 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Request a Worker's Compensation Interpreter Today!</span></h4>
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
      <!-- Page Footer-->








@endsection




@push('scripts')

@endpush
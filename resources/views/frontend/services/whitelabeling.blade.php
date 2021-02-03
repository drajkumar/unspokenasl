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
	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h3 class="wow-outer"><span class="wow slideInDown">"We Help Agencies Make Language Access Easier" </span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Translation and interpreting agencies across the country struggle daily with meeting their deaf consumers' language needs and serving them with quality interpreters that deliver brand loyalty. Unspoken Language Services was built to partner with you as an agency to provide on-site Sign Language interpreting support.</span></p>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Our team <b class="font-bold">seamlessly</b> integrates with your agency’s processes and has the nationwide capacity to accommodate your deaf consumer as needed. Whether your agency needs an interpreter for a routine medical appointment or needs to arrange a team of interpreters for an upcoming conference, we can help.</span></p>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Learn more about Unspoken’s White Labeling American Sign Interpreting Services, and the results we’ve delivered to our partnered agencies.</span></p>
           
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-SDQues-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
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
@extends('frontend.master') 

@section('title','Joining Our Team')

@push('css')

@endpush


@section('mainContent')

<!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h1 class="breadcrumbs-custom-title">Joining Our Team</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/join-us') }}">Join Our Team</a></li>
              <li class="active">Interpreter Promise</li>
            </ul>
          </div>
        </div>
      </section>
	    <!-- Interpreter Promise -->
	  <section class="section section-lg text-center pb-0" >
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown">Interpreter Promise</span></h3>
		  <p class="wow-outer font-size-18 my-3"><span class="wow slideInDown" data-wow-delay=".05s">Unspoken Language Services is a boutique company owned and operated by American Sign Language interpreters, which means we respect your unique skill as an interpreter. We understand the amount of time and dedication it took to become one of the best in the industry, so we treat and compensate you as such.</span></p>
		  <h3 class="wow-outer"><span class="wow slideInDown">Why Us?</span></h3>
	    </div>
      </section>
	  <!-- We're Paperless! -->
	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h4 class="wow-outer"><span class="wow slideInDown">We're Paperless!</span></h4>
			<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">As a young, technology-based business, we eliminate the paperwork from the start of on-boarding, to the end of your first assignment, to getting you paid. Unspoken <b class="font-bold">values</b> your time as working interpreters by making the process of contracting with us seamless. </span></p>
			<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Our interpreter scheduling app allows you to login into your account, see the jobs you have scheduled with us, and upon job completion, you can submit verification signatures and your total billing amount all in one location. We know you worked hard to get to where you are as professional interpreters, so we worked even harder to modify, customize, and minimize your contracting experience with us.</span></p>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-y9YMr2-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  <!-- No Need to Explain -->
	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between ">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h4 class="wow-outer"><span class="wow slideInDown">No Need to Explain...</span></h4>
			<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Contracting with us means no longer having to explain why you require a team for a job over two hours or having to constantly advocate for the professional boundaries crossed by average language agencies. </span></p>
			<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">We <b class="font-bold">treat you like humans,</b> not robots. Your personal health and well-being as an independent contractor always come first as one of our interpreters.</span></p>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-ajT7LY-1024x686-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  <!-- Company Culture -->
	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h4 class="wow-outer"><span class="wow slideInDown">Company Culture</span></h4>
			<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Unspoken Language Services is a boutique agency providing exclusive on-site American Sign Language interpreting services. We focus on servicing Deaf and hearing consumers with the highest quality of interpreting and cultural competence, and it <b class="font-bold">starts with you.</b> </span></p>
			<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">As American Sign Language interpreters, we have first hand knowledge in understanding what it means to feel valued within an agency and how important it is to have a community of interpreters for additional professional support. We encourage open communication between our interpreters: whether it's for a debriefing period or an assignment concern prior to its start. <b class="font-bold">We're here for you, just as much as you're here for us.</b>  </span></p>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-syu8OU-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  
	  <!-- Become an Unspoken Interpreter-->
        <section class="section section-1 bg-primary-darker text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-10 col-lg-7 col-xl-7">
                <h3 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Become an Unspoken Interpreter</span></h3>
				<p class="wow-outer offset-top-3"><span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">Fill out an application today to contract with us!</span></p>
                <div class="group group-middle text-center w-100"><a class="button button-primary button-winona" href="application.html" data-waypoint-to="#"><div class="content-original">Apply Here</div><div class="content-dubbed">Apply Here</div></a></div>
              </div>
            </div>
          </div>
        </section>
	  








@endsection




@push('scripts')

@endpush
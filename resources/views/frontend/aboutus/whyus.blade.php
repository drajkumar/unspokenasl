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
          <h3 class="wow-outer"><span class="wow slideInUp"> <b>Promises We Keep...</b></span></h3>
          <p class="wow-outer"><span class="text-width-1 wow slideInDown">The Unspoken Promise was founded on the core belief of creating a humanistic experience to those hiring, receiving and providing services through Unspoken Language Services. As a boutique interpreting company, we interact with you directly to make you feel like a priority.</span></p>
	    </div>
      </section>
	   <!-- to the Client-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">	...to the Client</span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Our ASL interpreters are driven by passion and dedication to the profession. We provide the best interpreters because you deserve the best. Professionalism, culturally knowledgeable, and timely interpreters are ready to serve your interpreting requests.</span></p>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".1s">As a boutique agency, we recognize that one size does not fit all; therefore, we carefully connect you with the right on-site interpreter for your company’s specific situation. Our extensively trained and certified interpreters each have various interpreting styles and specialized skills that tailor to your needs.</span></p>
              <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="request-services.html">Request Services</a></div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInLeft" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-HTzu3B-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	    <!-- to the Deaf Consumer-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">...to the Deaf Consumer</span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">“Boutique” means you as the consumer, come first. Unspoken Language Services knows the importance of quality, consistency, and accuracy during an interpretation. Whether it is for an intimate medical appointment or a staff meeting, you have the right to preference your request by gender, signing style (ASL, Transliteration, etc.), and comfort level.</span></p>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".1s">Unspoken Language Services’ goal is to bring complete awareness to the under-served Deaf Community by specializing in cultural mediation and interpretation and allying with you, as the consumer, to ensure your rights as an individual.</span></p>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-WmfLgF-1024x546-circle.jpeg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  <!-- to the Interpreter-->
      <section class="section section-lg">
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
      </section>
	  <!-- Principles of the Promise -->
	   <section class="section section-lg bg-gray-100">
		<div class="container text-center">
          <h3 class="wow-outer"><span class="wow slideInUp">Principles of the Promise</span></h3>
	    </div>
		<div class="container">
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fa-underline wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown">Full Transparency</h4>
                  <p class="wow fadeInUpSmall">Our commitment is to operate our company in a way that produces a proficient request processing experience.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fa-users wow fadeIn" data-wow-delay=".1s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Personable Customer Service</h4>
                  <p class="wow fadeInUpSmall" data-wow-delay=".1s">Our commitment is to provide high quality, convenient, and a personable client service experience that is instilled with timely and consistent communication.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fa-home wow fadeIn" data-wow-delay=".2s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Community Driven</h4>
                  <p class="wow fadeInUpSmall" data-wow-delay=".2s">We commit to uphold the utmost integrity of doing business within the community and demonstrate moral citizenship that embodies accountability for the outcome of our work.</p>
                </div>
              </article>
            </div>
          </div>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fa-id-card wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown">Thorough Quality Control</h4>
                  <p class="wow fadeInUpSmall">We are committed to upholding elevated standards in the profession when evaluating, vetting, and placing our sign language interpreters in the field.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fa-handshake-o wow fadeIn" data-wow-delay=".1s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">We’ll Make It Right</h4>
                  <p class="wow fadeInUpSmall" data-wow-delay=".1s">We commit to making it right should a challenge arise with our delivered interpreting services.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fa-comments wow fadeIn" data-wow-delay=".2s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Feedback</h4>
                  <p class="wow fadeInUpSmall" data-wow-delay=".2s">We absolutely commit to actively extending the opportunity for our clients to share all aspects of their service experience. We want to hear from you!</p>
                </div>
              </article>
            </div>
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
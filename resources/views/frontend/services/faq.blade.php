@extends('frontend.master') 

@section('title','Frequently Asked Questions (FAQ)')

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
              <li class="active">FAQ</li>
            </ul>
          </div>
        </div>
      </section>
	  
	  <!-- FAQ-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 justify-content-lg-between flex-lg-row-reverse offset-top-1">
            <div class="col-lg-7 col-xl-6">
              <h3 class="wow-outer"><span class="wow slideInDown">Frequently Asked Questions (FAQ)</span></h3>
			  <p>Questions about the interpreting profession or about Unspoken? Find out here!</p>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate wow-outer" id="accordion2" role="tablist" aria-multiselectable="false">
				  <!-- Q1 card-->  
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".05s">
					<div class="card-header" id="accordion2-heading-1" role="tab">
					  <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-1" aria-controls="accordion2-collapse-1" aria-expanded="true"> <b>What are your Hours of Operation?</b>
						<div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse show" id="accordion2-collapse-1" role="tabpanel" aria-labelledby="accordion2-heading-1">
					  <div class="card-body">
						<p>Unspoken Language Services is happy to assist you during the following office hours:</p>
						<p>Monday- Friday <b class="font-bold">8AM-5PM PST</b>.</p>
					  </div>
					</div>
				  </article>
				  <!-- Q2 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".1s">
					<div class="card-header" id="accordion2-heading-2" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-2" aria-controls="accordion2-collapse-2" aria-expanded="false"><b> What is your refund policy? </b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-2" role="tabpanel" aria-labelledby="accordion2-heading-2">
					  <div class="card-body">
						<p>Unspoken believes in providing exceptional interpreting services. Though all services are final, in the rare occurrence that you are dissatisfied with our services, please <a class="d-inline" style="color: #005e54; text-decoration: underline;" href="contact-us.html">contact us</a>  to let us make the situation right.</p>
					  </div>
					</div>
				  </article>
				  <!-- Q3 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".15s">
					<div class="card-header" id="accordion2-heading-3" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-3" aria-controls="accordion2-collapse-3" aria-expanded="false"><b>How do I work with Sign Language interpreters?</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-3" role="tabpanel" aria-labelledby="accordion2-heading-3">
					  <div class="card-body">
						<p>If interacting with deaf people through Sign Language interpreters is an infrequent event, not to worry. We have outlined a few expectations so that you are better prepared for the environment's dynamics. To avoid any further communication complications, uncomfortable interactions, or potentially offending the deaf consumer, <a class="d-inline" style="color: #005e54; text-decoration: underline;" href="https://unspokensigns.com/how-to-work-with-sign-language-interpreters/" target="_blank">here</a> are some basic rules to follow.</p>
					  </div>
					</div>
				  </article>
				  <!-- Q4 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".2s">
					<div class="card-header" id="accordion2-heading-4" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-4" aria-controls="accordion2-collapse-4" aria-expanded="false"> <b>Why is a team of ASL interpreters required for our upcoming conference?</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-4" role="tabpanel" aria-labelledby="accordion2-heading-4">
					  <div class="card-body">
						<p>During the process of interpreting a verbal language into a physical one, ASL interpreters become susceptible to both physical and mental fatigue. After one hour of interpreting alone, even some of the best sign language interpreters decrease in the quality of service. A team of interpreters ensures your deaf consumer receives high-level language access throughout the duration of the conference.</p>
					  </div>
					</div>
				  </article>
				  <!-- Q5 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".2s">
					<div class="card-header" id="accordion2-heading-5" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-5" aria-controls="accordion2-collapse-5" aria-expanded="false"> <b>Are there laws that support the use of Sign Language Interpreters?</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-5" role="tabpanel" aria-labelledby="accordion2-heading-5">
					  <div class="card-body">
						<p>There are several laws in place that support the use of Sign Language interpreters. These laws make it possible for Deaf and hard of hearing people obtain access to their education, employment, and overall environment. Below lists a few federal laws that provide guidance on how to ensure your business is in compliance with providing "reasonable accommodations".</p>
						<p><a style="color: #005e54; text-decoration: underline;" href="https://www.ada.gov/cguide.htm" target="_blank">Americans with Disabilities Act (ADA)</a></p>
						<p><a style="color: #005e54; text-decoration: underline;" href="https://www.dol.gov/oasam/regs/statutes/sec504.htm" target="_blank">Vocational Rehabilitation Act of 1973- Section 504</a></p>
						<p><a style="color: #005e54; text-decoration: underline;" href="https://sites.ed.gov/idea/" target="_blank">Individuals with Disabilities Education Act (IDEA)</a></p>
						<p><a style="color: #005e54; text-decoration: underline;" href="https://www2.ed.gov/about/offices/list/ocr/docs/edlite-FAPE504.html" target="_blank">Free Appropriate Public Education</a></p>
					  </div>
					</div>
				  </article>
				  <!-- Q6 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".2s">
					<div class="card-header" id="accordion2-heading-6" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-6" aria-controls="accordion2-collapse-6" aria-expanded="false"> <b>What is the history of Deaf education using Sign Language?</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-6" role="tabpanel" aria-labelledby="accordion2-heading-6">
					  <div class="card-body">
						<p>The history behind Deaf education roots from the language of sign. If the language is lost, so goes the culture and Deaf people's education. Though the history of Deaf Education is extensive, it is summarized best by <a class="d-inline" style="color: #005e54; text-decoration: underline;" href="http://www3.gallaudet.edu/clerc-center/info-to-go/deaf-education/200-years-of-deaf-education.html" target="_blank">Gallaudet University</a> the world's only Liberal Arts University for the Deaf and Hard of Hearing established in 1850.</p>
						
					  </div>
					</div>
				  </article>
				  <!-- Q7 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".2s">
					<div class="card-header" id="accordion2-heading-7" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-7" aria-controls="accordion2-collapse-7" aria-expanded="false"> <b>"I need a Deaf Interpreter, right?"</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-7" role="tabpanel" aria-labelledby="accordion2-heading-7">
					  <div class="card-body">
						<p>No. For most interpreting settings, you will need to hire a Hearing Sign Language Interpreter- one who speaks English and interprets for Deaf people using Sign Language.</p>
						<p>Requesting a Deaf Interpreter is often confused with the need for a traditional Sign Language interpreter. Naturally so, but Deaf Interpreters or Certified Deaf Interpreters are used in the field of interpreting to provide a formal connection between a Deaf person with limited ASL usage or minimum language skills (MLS) and a Hearing Sign Language interpreter.</p>
						<p>CDIs are often used in critical traumatic medical situations or police interrogations and depending on the deaf individual, they may communicate better with the use of a Certified Deaf Interpreter, especially if they are deaf immigrants whose first language is not ASL. When you hire a CDI, you also require a Hearing Sign Language interpreter to interpret from sign to spoken English for the Certified Deaf Interpreter. <a class="d-inline" style="color: #005e54; text-decoration: underline;" href="https://www.huffingtonpost.com/entry/frequently-asked-questions-about-certified-deaf-interpreters_us_5936eedee4b033940169ce70" target="_blank">LEARN MORE!</a></p>
						
					  </div>
					</div>
				  </article>
				  <!-- Q8 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".2s">
					<div class="card-header" id="accordion2-heading-8" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-8" aria-controls="accordion2-collapse-8" aria-expanded="false"> <b>What are "Deaf Rights"?</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-8" role="tabpanel" aria-labelledby="accordion2-heading-8">
					  <div class="card-body">
						<p>Similar to Civil and Human Rights, Deaf Rights includes laws that protect Deaf people from disability prejudice or <a class="d-inline" style="color: #005e54; text-decoration: underline;" href="https://www.verywellhealth.com/deaf-culture-audism-1046267" target="_blank">"Audism",</a> a new word used alongside the common discrimination "isms" to describe a negative attitude towards those who are Deaf or Hard of Hearing.</p>
						
						<p><b>Read more on Deaf Rights here:</b></p>
						<p style="text-align: left;"><a style="color: #005e54; text-decoration: underline;" href="https://www.huffingtonpost.com/lydia-l-callis/deaf-rights-what-you-need-to-know_b_5688351.html?ec_carp=7727435785114187190" target="_blank">What You Need to Know About Deaf Rights&nbsp;</a></p>
						
					  </div>
					</div>
				  </article>
				  <!-- Q9 card-->
				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".2s">
					<div class="card-header" id="accordion2-heading-9" role="tab">
					  <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-9" aria-controls="accordion2-collapse-9" aria-expanded="false"> <b>"What information is required to complete my interpreting request?"</b>
						  <div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse" id="accordion2-collapse-9" role="tabpanel" aria-labelledby="accordion2-heading-9">
					  <div class="card-body">
						<p>As part of the business agreement with an interpreter or service provider, you will need to provide the following information to help the interpreter achieve the overall communication goal:</p>
						<p> 
							<ul class="faq-list">
								<li> Services requestors’ name, telephone number, email address and the agency/organization requesting services.</li>
								<li> Date, time and the duration of the appointment.</li>
								<li> Location of assignment (address, directions, floor, building #, etc.) </li>
								<li> Nature and format of the meeting (i.e. medical appointment, lecture, staff meeting, therapy session, etc.)</li>
								<li> Names of deaf participants and hearing participants, if pertinent.</li>
								<li> Name of onsite contact person.</li>
								<li> Materials pertaining to a given assignment as needed (agenda and/or presentation materials). </li>
							</ul>
						</p>
						
						<p>RID believes that when interpreters and service providers conduct themselves in a professional manner, all parties gain a clear understanding of interpreting business practices.</p>
						
					  </div>
					</div>
				  </article>
              </div>
            </div>
            <div class="col-lg-5 wow-outer"><img class="wow slideInLeft" src="images/accordions-1-470x368.jpg" alt="" width="470" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  







@endsection




@push('scripts')

@endpush
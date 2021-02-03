@extends('frontend.master') 

@section('title','Contact Unspoken')

@push('css')

@endpush


@section('mainContent')

<!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark"
      style="background-image: url({{asset('')}}frontend/images/breadcrumbs-image-1.jpg);">
      <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
          <div class="breadcrumbs-custom-main">
            <h1 class="breadcrumbs-custom-title">Contact Unspoken</h1>
          </div>
          <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Contact us</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Unsure of your specific interpreting needs -->
    <section class="section section-lg text-center pb-0">
      <div class="container">
        <h4 class="wow-outer"><span class="wow slideInDown">Unsure of your specific interpreting needs?</span></h4>
        <p class="wow-outer mt-3"><span class="wow slideInDown" data-wow-delay=".05s">Send us a message and we'll get
            back with you soon!</span></p>
      </div>
    </section>
    <section class="section section-lg ">
      <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
          <div class="col-md-10 col-lg-6 col-xl-5">
            <h4 class="wow-outer"><span class="wow slideInDown">Office Hours:</span></h4>
            <p class="wow-outer mt-0"><span class="wow slideInDown" data-wow-delay=".05s">Monday-Friday: 8am-5pm
                PST</span></p>
            <h4 class="wow-outer"><span class="wow slideInDown">In Need of Services During:</span></h4>
            <p class="wow-outer mt-0"><span class="wow slideInDown" data-wow-delay=".05s">After Hours, Weekends, or
                Holidays?</span></p>
            <p class="wow-outer mt-0"><span class="wow slideInDown" data-wow-delay=".05s">Contact Us Below!</span></p>
            <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">
                <div class="fl-html">
                  <h5 style="text-align: left;"><code>
                      <script type="text/javascript" async="" src="https://cdn.reamaze.com/assets/reamaze.js"></script>
                      <script type="text/javascript">
                        var _support = _support || {
                          'ui': {},
                          'user': {}
                        };
                        _support['account'] = 'unspokensigns';
                        _support['ui']['contactMode'] = 'mixed';
                        _support['ui']['enableKb'] = 'true';
                        _support['ui']['styles'] = {
                          widgetColor: 'rgb(106, 175, 183)',
                        };
                        _support['apps'] = {
                          faq: {
                            "enabled": true
                          },
                          recentConversations: {},
                          orders: {}
                        };
                      </script>
                      <span style="font-size: 16px;">
                        <a style="color: #005e54;text-decoration:none;" href="#" data-reamaze-lightbox="contact"><b>CHAT
                            LIVE WITH OUR TEAM</b></a></span>
                    </code></h5>
                  &nbsp;<a href="#" data-reamaze-lightbox="contact"></a>
                </div>

              </span></p>
            <h4 class="wow-outer mt-0"><span class="wow slideInDown">Email</span></h4>
            <p class="wow-outer mt-0"><span class="wow slideInDown" data-wow-delay=".05s"><a
                  style="color: #005e54;text-decoration:none;"
                  href="mailto:services@unspokensigns.com">services@unspokensigns.com</a></span></p>
            <h4 class="wow-outer"><span class="wow slideInDown">Phone</span></h4>
            <p class="wow-outer mt-0"><span class="wow slideInDown" data-wow-delay=".05s">1.888.280.0751</span></p>
            <h4 class="wow-outer"><span class="wow slideInDown">Address</span></h4>
            <p class="wow-outer mt-0"><span class="wow slideInDown" data-wow-delay=".05s">1370 Valley Vista Drive
                <br>Suite 200 <br>Diamond Bar, CA 91765</span></p>
            <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">
                <iframe
                  src="https://www.google.com/maps?q=1370%20Valley%20Vista%20Drive%0ASuite%20200%0ADiamond%20Bar%2C%20CA%2091765&amp;output=embed&amp;hl=en&amp;z=14"
                  frameborder="0" class="wpcw-widget-contact-map"></iframe>

              </span></p>
          </div>
          <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight"
              src="https://secureservercdn.net/72.167.25.126/2v8.0a8.myftpupload.com/wp-content/uploads/bb-plugin/cache/qtq80-DzBzFy-circle.jpeg"
              alt="" width="570" height="368" />
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg text-center pt-0">
      <div class="container">
        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown"
            data-wow-delay=".1s" href="request-services.html"
            style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;">
            <div class="content-original">REQUEST SERVICES ONLINE</div>
            <div class="content-dubbed">REQUEST SERVICES ONLINE</div>
          </a></div> <br>
        <h4 class="wow-outer"><span class="wow slideInDown">...or send us an email using the form below!</span></h4>




      </div>
    </section>
    <!-- Contact Form Start  Here -->
    <div class="container">
      <form class="contact100-form ">
        <span class="contact100-form-title">
          Contact Us
        </span>

        <div class="wrap-input100 rs1-wrap-input100">
          <span class="label-input100">Name</span>
          <input class="input100" type="text" name="name" placeholder="Enter your Name">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100">
          <span class="label-input100">Phone</span>
          <input class="input100" type="text" name="name" placeholder="Enter your Phone">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 ">
          <span class="label-input100">Email</span>
          <input class="input100" type="text" name="email" placeholder="Enter your email addess">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 ">
          <span class="label-input100">Subject</span>
          <input class="input100" type="text" name="email" placeholder="Enter your subject">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input100">Message</span>
          <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right ml-3" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>









@endsection




@push('scripts')

@endpush
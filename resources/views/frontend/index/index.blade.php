@extends('frontend.master') 

@section('title','A Humanistic Approach to Interpreting')

@push('css')

@endpush


@section('mainContent')



     <!-- Slider-->
      <section class="section swiper-container swiper-slider swiper-slider-business bg-gray-700" data-loop="true" data-slide-effect="fade" data-autoplay="6000" data-simulate-touch="false" data-custom-slide-effect="inter-leave-effect">
        <div class="swiper-wrapper">
         @foreach($sliders as $slider)
          <div class="swiper-slide bg-image-dark" data-slide-bg="{{asset('')}}images/pagemodule/{{$slider->image}}">
            <div class="slide-inner">
              <div class="swiper-slide-caption">
                <div class="container">
                  <h1 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"> <span class="font-weight-bold"> {{$slider->title}}</span></span></h1>
                  <div class="swiper-caption-text swiper-caption-text-sm">
                    <div class="swiper-caption-text-decoration wow" data-caption-animate="scaleInVertical"></div>
                    <div class="swiper-caption-text-inner">
                      <p class="wow" data-caption-animate="slideInLeft">{!! $slider->description !!}</p>
                    </div>
                  </div>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="{{$slider->url}}" data-caption-animate="slideInUp">Learn more</a></div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="swiper-slider-nav container">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>
      <!-- Why Us-->

    <?php 
      $x = 0;
     ?>
      @foreach($pagemodule as $module)
      <?php $x++; ?>
     
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
                <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{$module->url}}">Learn More</a></div>
              </div>
            </div>
            
			<div class="col-md-10 col-lg-6"><img class="img-responsive" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368">
            </div>
			
            
          </div>
        </div>
      </section>

	  @else
    	  <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
               <div class="inset-right-3">
                <h3 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h3>
                <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">
                  {!! $module->description !!}
                </p>
					
                <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{$module->url}}">Learn more</a></div>
              </div>
            </div>
            <div class="col-md-10 col-lg-6"><img class="img-responsive" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368">
            </div>
          </div>
        </div>
      </section>
	  <!-- Our Services -->

       @endif
      @endforeach
      <!-- Request Services-->
      <section class="section section-xl bg-gray-700 bg-image bg-image-dark" style="background-image: url({{asset('')}}images/pagemodule/{{$pagemodule3->image}});">
        <div class="container">
          <div class="row justify-content-sm-end">
            <div class="col-sm-9 col-md-7 col-lg-6">
              <div class="box-2">
                <div class="wow-outer">
                  <div class="wow slideInUp">
                   
                    <h3 class="font-weight-bold">{{$pagemodule3->title}}</h3>
                  </div>
                </div>
                <div class="wow-outer offset-top-4">
                  <div class="wow slideInDown">
                    <p style="color:#f9f9f9">{!! $pagemodule3->description !!} </p>
					
					<a class="button button-primary button-winona" href="{{$pagemodule3->url}}">Request</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <!-- 3 Column Layout testimonial -->
      <section class="section section-lg text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown">Current Clients Trusting in Unspoken</span></h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="4" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
           @foreach($cslider as $cl) 
           <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatarf"><img src="{{asset('')}}images/home/{{$cl->image}}" alt="" width="100%" />
                </div>
              </div>
            </blockquote>
			     @endforeach
          </div>
        </div>
      </section>
	  <!-- Joining Our Team -Apply Here -->
	  <section class="section section-xs bg-primary-darker text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight" style="visibility: visible; animation-name: slideInRight;">Joining Our Team <span class="font-weight-bold">Become an Unspoken Interpreter</span> </span></h4>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="{{url('/application')}}" style="visibility: visible; animation-name: slideInLeft;"><div class="content-original">Apply Here</div><div class="content-dubbed">Apply Here</div></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection




@push('scripts')

@endpush
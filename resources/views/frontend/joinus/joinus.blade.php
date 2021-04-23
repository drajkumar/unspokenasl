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
          <h3 class="wow-outer"><span class="wow slideInDown">{{$pageintro->title}}</span></h3>
		  <p class="wow-outer font-size-18 my-3"><span class="wow slideInDown" data-wow-delay=".05s">{!! $pageintro->description !!}</span></p>
		  <h3 class="wow-outer"><span class="wow slideInDown">Why Us?</span></h3>
	    </div>
      </section>
	  <!-- We're Paperless! -->
    <?php 
       $x = 0;
      ?>
      @foreach($pagemodules as $module)
      <?php $x++; ?>
      @if($x % 2 == 0)

     	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between ">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h4 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h4>
			       <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">{!! $module->description !!}</span></p>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>


      @else
	  <!-- No Need to Explain -->
      	  <section class="section section-lg ">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
             <h4 class="wow-outer"><span class="wow slideInDown">{{$module->title}}</span></h4>

		       	<p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">{!! $module->description !!}</span></p>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{asset('')}}images/pagemodule/{{$module->image}}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  <!-- Company Culture -->
      @endif
      @endforeach
	  
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
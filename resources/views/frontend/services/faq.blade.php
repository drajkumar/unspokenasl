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
              <h3 class="wow-outer"><span class="wow slideInDown">{{$pageintro->title}}</span></h3>
			  <p>{!! $pageintro->description !!}</p>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate wow-outer" id="accordion2" role="tablist" aria-multiselectable="false">
				  <!-- Q1 card--> 
				  @php 
				  $x = 0;
				  @endphp
				  @foreach($fquestions as $ans)
				  @php
                  $x++;
                  @endphp 
					

				  <article class="card card-custom card-corporate wow fadeInDown" data-wow-delay=".05s">
					<div class="card-header" id="accordion2-heading-1" role="tab">
					  <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-collapse-{{$ans->id}}" aria-controls="accordion2-collapse-{{$ans->id}}" aria-expanded="true"> <b>{{$ans->question}}</b>
						<div class="card-arrow"></div></a></div>
					</div>
					<div class="collapse @if($x == 1) {{'show'}} @else {{''}}  @endif" id="accordion2-collapse-{{$ans->id}}" role="tabpanel" aria-labelledby="accordion2-heading-{{$ans->id}}">
					  <div class="card-body">
						{!! $ans->answer !!}
					  </div>
					</div>
				  </article>
			      @endforeach
              </div>
            </div>
            <div class="col-lg-5 wow-outer"><img class="wow slideInLeft" src="{{asset('')}}images/pagemodule/{{$pageintro->image}}" alt="" width="470" height="368"/>
            </div>
          </div>
        </div>
      </section>
	  







@endsection




@push('scripts')

@endpush
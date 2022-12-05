@extends('layouts.app')

@section('content')
<!-- ***** Banner Start ***** -->
<div class="main-banner">
    <div class="row">
      <div class="col-lg-7">
        <div class="header-text">
          <h6>Why Dogs Goes Viral</h6>
          <h4><em>Browse</em> Our latest capture here</h4>
          <div class="main-button">
            <a href="browse.html">Browse Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Banner End ***** -->

   <!-- ***** Most Popular Start ***** -->
   <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Most Popular</em> Right Now</h4>
        </div>
        <div class="row">
            @foreach ($dogsArray as $dog)
            <div class="col-lg-3 col-sm-6">
                <div class="item">

                  <img src="{{ $dog['image_src'] }}"  width="40" height="200"  alt="">
                  <h4 class="text-capitalize">{{ $dog['name'] }}</h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            @endforeach


          <div class="col-lg-12">
            <div class="main-button">
              <a href="browse.html">Discover Popular</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Most Popular End ***** -->
@endsection

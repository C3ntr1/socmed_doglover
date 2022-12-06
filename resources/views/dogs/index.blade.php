@extends('layouts.app')

@section('content')
<div class="main-banner">
    <div class="row">
        <div class="col-lg-7">
            <div class="header-text">
                <h6>Why Dogs Goes Viral</h6>
                <h4><em>Browse</em> Our latest capture here</h4>
                <div class="main-button">
                    <a href="{{ route('dogs.index') }}">Browse Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="most-popular">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>Dogs</em> List</h4>
            </div>
            <div class="row">
                @foreach ($dogsArray as $dog)
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('dogs.show', $dog['name']) }}">
                            <div class="item">

                                <img src="{{ $dog['image_src'] }}" width="40" height="200" alt="">
                                <h4 class="text-capitalize">{{ $dog['name'] }}</h4>
                                <ul>
                                    <li><i class="fa fa-star"></i> {{ $dog['likes'] }}</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                @endforeach


                <div class="col-lg-12">
                    <div class="main-button">
                        <a href="browse.html">See Ranking List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

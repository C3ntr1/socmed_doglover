@extends('layouts.app')

@section('content')
    <!-- ***** Banner Start ***** -->
    <div class="row">
        <div class="col-lg-12">
            <div class="main-profile ">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/images/profile.jpg') }}" alt="" style="border-radius: 23px;">
                    </div>
                    <div class="col-lg-4 align-self-center">
                        <div class="main-info header-text">
                            <h4>
                                {{ $user->name }}
                                @if ($user->id == auth()->user()->id)
                                    <a href="{{ route('users.edit', $user->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endif

                            </h4>
                            <p>A man of culture.</p>
                            <div class="main-border-button">
                                <a href="{{ route('dogs.index') }}">Browse Dogs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 align-self-center">
                        <ul>
                            <li><a href="{{ $user->facebook }}" target="_blank">Facebook</a></li>
                            <li><a href="{{ $user->youtube }}" target="_blank">Youtube</a></li>
                            <li><a href="{{ $user->instagram }}" target="_blank">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Banner End ***** -->

    <div class="gaming-library" id="yourLikes">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4>
                    @if ($user->id == auth()->user()->id)
                        <em>Your Liked</em>
                    @else
                        <em>User's Liked</em>
                    @endif

                    Library
                </h4>
            </div>
            @foreach ($votesUserArray as $dog)
                <div class="item">
                    <ul>
                        <li><img src="{{ $dog['image_src'] }}" alt="" class="templatemo-item"></li>
                        <li>
                            <h4 class="text-capitalize">{{ $dog['name'] }}</h4>
                        </li>
                        <li>
                            <h4><i class="fa fa-star" style="color:#e75e8d;"></i>{{ $dog['likes'] }}</h4>
                        </li>
                    </ul>
                </div>
            @endforeach

        </div>
    </div>
@endsection

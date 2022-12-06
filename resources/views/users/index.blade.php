@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>User's</em> List</h4>
            </div>
            <div class="row">
               @foreach ($users as $user)
               <div class="col-lg-3 col-sm-6">
                <a href="{{ route('users.show', $user->id) }}">
                    <div class="item">

                        <img src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/images/game-03.jpg') }}" width="40" height="200" alt="">
                        <center><h4 class="text-capitalize">{{ $user->name }}</h4></center>
                        <ul>
                            {{-- <li><i class="fa fa-star"></i> {{ $dog['likes'] }}</li> --}}
                        </ul>
                    </div>
                </a>
            </div>
               @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

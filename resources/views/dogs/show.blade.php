@extends('layouts.app')

@section('page-style')
    <style>
        .page-banner {
            /* background-image: url(../images/banner-bg.jpg); */
            background-position: center center;
            background-size: cover;
            min-height: 380px;
            border-radius: 23px;
            padding: 80px 60px;
        }
    </style>
@endsection

@section('content')
    <div class="page-banner">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ $image_src }}" alt="">
            </div>
            <div class="col-lg-7">
                <div class="header-text">
                    <h4 class="text-capitalize mb-2">
                        <span class="mr-5"><u>{{ $name }}</u></span>
                        <a href="#" onclick="vote('{{ $name }}')">
                            @if ($voted)
                                <i class="fa fa-star" style="color:#e75e8d;"></i>
                            @else
                                <i class="fa fa-star"></i>
                            @endif

                        </a>
                    </h4>
                    <h6 class="mb-4"><em>Lorem ipsum dolor sit amet, </em>consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</h6>
                    <div class="main-button">
                        <a href="{{ route('dogs.index') }}">Browse other dogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            console.log("ready!");
        });

        function vote(name) {
            var formData = {
                _token: '<?php echo csrf_token(); ?>',
                name: name,
            };
            $.ajax({
                type: 'POST',
                url: "{{ route('votes.store') }}",
                data: formData,
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        }
    </script>
@endsection

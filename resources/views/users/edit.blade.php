@extends('layouts.app')

@section('content')
    <div class="col-md-5 text-white">
        <h3 class="mb-4">Update Info</h3>
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}"
                    placeholder="Enter Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="facebook">Facebook Link</label>
                <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"
                    value="{{ old('facebook', $user->facebook) }}" aria-describedby="emailHelp" placeholder="Enter Facebook">
                @error('facebook')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="youtube">Youtube Channel Link</label>
                <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtube" name="youtube"
                    value="{{ old('youtube', $user->youtube) }}" aria-describedby="emailHelp" placeholder="Enter Youtube">
                @error('youtube')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="instagram">Instagram Link</label>
                <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"
                    value="{{ old('instagram', $user->instagram) }}" aria-describedby="emailHelp"
                    placeholder="Enter Instagram">
                @error('instagram')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group  mb-4">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    value="{{ $user->email }}" placeholder="Enter Email" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

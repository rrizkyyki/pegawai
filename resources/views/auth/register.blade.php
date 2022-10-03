@extends('layouts.base')
@section('content')
@include('partials.navbar')

<div class="container">
    <div class="card mt-5" style="width: 40rem;">

        <div class="card-header">
            <h5>SignUp</h5>
        </div>

        <div class="card-body">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Full Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Johnny">
                    @error('name')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="youremail@example.com">
                    @error('email')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Insert Your Password">
                    @error('password')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        
    </div>
</div>

@endsection
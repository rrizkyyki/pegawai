@extends('layouts.base')
@section('content')
@include('partials.navbar')

<div class="container">

    <div class="mb-2 mt-5" style="width: 40rem;">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>

    <div class="card" style="width: 40rem;">
        <div class="card-header">
            <h5>Welcome to my app</h5>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi iste eos nesciunt delectus earum voluptatibus id corrupti harum? Saepe dicta soluta aliquam, quaerat rem similique eligendi ducimus unde excepturi. Culpa.</p>
        </div>
    </div>

</div>
    
@endsection
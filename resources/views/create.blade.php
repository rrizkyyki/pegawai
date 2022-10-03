@extends('layouts.base')
@section('content')
@include('partials.navbar')
    
<div class="container mt-3">
    <div class="card" style="width: 40rem;">
        <div class="card-header">
            <h5>Add New Employee</h5>
        </div>
        <div class="card-body">
            <form action="/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nip">NIP</label>
                    <input class="form-control" type="text" name="nip" id="nip">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Alamat</label>
                    <input class="form-control" type="text" name="address" id="address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
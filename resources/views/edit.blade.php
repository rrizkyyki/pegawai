@extends('layouts.base')
@section('content')
@include('partials.navbar')

<div class="container mt-3">
    <div class="card" style="width: 40rem;">
        <div class="card-header">
            <h5>Update Data</h5>
        </div>
        <div class="card-body">
            <form action="/edit/{{$employee->id}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nip">Nip</label>
                    <input class="form-control" type="text" name="nip" id="nip" value="{{$employee->nip}}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{$employee->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Alamat</label>
                    <input class="form-control" type="text" name="address" id="address" value="{{$employee->address}}">
                </div>
                <button class="btn btn-warning" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts.base')
@section('content')
@include('partials.navbar')

<div class="container mt-3">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5>Dashboard</h5>
        </div>
        <div class="card-body">
            
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NIP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1
                    @endphp
                    @foreach ($employee as $e)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $e->nip }}</td>
                            <td>{{ $e->name }}</td>
                            <td>{{ $e->address }}</td>
                            <td>
                                <a href="/edit/{{$e->id}}" class="btn btn-warning">Update</a>
                                <form action="/edit/{{$e->id}}" method="post" onsubmit="return confirm('Are you sure wanna delete {{$e->name}}')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
@extends('template.template01')
@section('isi')

<div class="container">
    <p align="right">
        <a href="logout" class="btn btn-danger">Logout</a>
    </p>
    Selamat datang {{ auth()->user()->name }}
</div>

@endsection

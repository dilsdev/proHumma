@extends('template.template01')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card border-danger">
                <div class="card-header bg-warning">
                Login
                </div>
                <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form action="login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email terdaftar">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="kata sandi">
                            @error('passwrod')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Login</button>
                    <a href="register" class="btn btn-primary">Register</a>
                </div>
            </form>
            </div>
        </div></div>
    </div>
@endsection

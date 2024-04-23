@extends('template.template01')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card border-primary">
                <div class="card-header bg-info">
                Register User
                </div>
                <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form action="registeruser" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama :</label>
                        <input type="text" name="name" value="" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Nama lengkap">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="" class="form-control @error('email') is-invalid @enderror" value="{{old('name')}}" placeholder="email@contoh.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="isi dengan paling sedikit 8 digit">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Register</button>
                    <a href="login" class="btn btn-primary">Login</a></div>
                </form>
            </div>
        </div></div>
    </div>
@endsection

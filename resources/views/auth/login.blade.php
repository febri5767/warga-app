@extends('layouts.master-login')
@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Sistem Rekap Warga</h3>
                                    @error('login_gagal')
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Warning!</strong> {{ $message }}
                                        </div>
                                    @enderror
                                    <form action="{{ url('proses_login') }}" method="POST" id="logForm">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Username</label>
                                            <input class="form-control" id="inputEmailAddress" name="username"
                                                type="text" placeholder="Masukkan Username" />
                                            @if ($errors->has('username'))
                                                <span class="error">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password" name="password"
                                                placeholder="Masukkan Password" />
                                            @if ($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember
                                                    password</label>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button class="btn w-100 btn-primary btn-block btn-login"
                                                type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

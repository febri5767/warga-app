@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Tambah User
        </div>
        <div class="card-body">
            <form action="{{ route('users.proses_tambah') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name') }}">
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Username" value="{{ old('username') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nomer_hp" class="form-label">Nomor Hp</label>
                                <input type="text" class="form-control" name="nomer_hp" id="nomer_hp"
                                    placeholder="Nomor Hp" value="{{ old('nomer_hp') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-select" aria-label="Default select example" name="level"
                                    id="level" value="{{ old('level') }}">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                    </div>
                    <div class="row align-items-end">
                        <button class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

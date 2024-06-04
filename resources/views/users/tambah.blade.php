@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Tambah User
        </div>
        <div class="card-body">
            <form action="">
                <div class="container">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nomer_hp" class="form-label">Nomor Hp</label>
                                <input type="text" class="form-control" name="nomer_hp" id="nomer_hp"
                                    placeholder="Nomor Hp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-select" aria-label="Default select example" name="level"
                                    id="level">
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email">
                    </div>
                    <div class="row align-items-end">
                        <button class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

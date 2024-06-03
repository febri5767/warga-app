@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                Data Warga
                <a href="/warga/tambah" class="btn btn-success"> <i class="fas fa-plus"></i>
                    Tambah Warga</a>
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Golongan Darah</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>zxc</td>
                    <td>qwe</td>
                    <td>
                        <a href="/warga/edit/{0}" class="btn btn-primary"> <i class="fas fa-edit"></i>
                            Edit</a>
                        <a href="" class="btn btn-danger"> <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>

            </table>
        </div>
    </div>
@endsection
@section('css')
@endsection

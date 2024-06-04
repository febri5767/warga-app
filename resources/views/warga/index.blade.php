@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-around">
                <h4>Data Warga</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-3 ">
                <a href="/warga/tambah" class="btn btn-success"><i class="fas fa-user-plus"></i> Tambah Warga</a>
            </div>
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
                @foreach ($warga as $wrg)
                    <tr>
                        <td>{{ $wrg->nama }}</td>
                        <td>{{ $wrg->tempat_lahir }}</td>
                        <td>{{ $wrg->tgl_lahir }}</td>
                        <td>{{ $wrg->jenis_kelamin }}</td>
                        <td>{{ $wrg->status }}</td>
                        <td>{{ $wrg->pekerjaan }}</td>
                        <td>{{ $wrg->gol_dar }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="/warga/edit/{{ $wrg->id }}" class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</a>
                                <a href="" class="btn btn-danger"><i class="fas fa-user-times"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </table>
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Tambah Warga
        </div>
        <div class="card-body">
            <form action="{{ route('warga.proses_tambah') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                            value="{{ old('nama') }}">
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir "
                                    placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"
                                    placeholder="Tanggal Lahir" value="{{ old('tgl_lahir') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="kelamin_id" id="kelamin_id"
                                    value="{{ old('kelamin_id') }}">
                                    @foreach ($data_kelamin as $kelamin)
                                        <option value="{{ $kelamin->id }}">{{ $kelamin->kelamin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status_id" id="status_id" value="{{ old('status_id') }}">
                                    @foreach ($data_status as $status)
                                        <option value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="goldar" class="form-label">Golongan Darah</label>
                                <select class="form-select" name="goldar_id" id="goldar_id" value="{{ old('goldar_id') }}">
                                    @foreach ($data_goldar as $goldar)
                                        <option value="{{ $goldar->id }}">{{ $goldar->goldar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan"
                            value="{{ old('pekerjaan') }}">
                    </div>
                    <div class="row align-items-end">
                        <button class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
                    </div>
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

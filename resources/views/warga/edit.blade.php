@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Edit Warga
        </div>
        <div class="card-body">
            <form action="{{ route('warga.proses_edit') }}" method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $data['warga']->id }}">
                <div class="container">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                            value="{{ $data['warga']->nama }}">
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                    placeholder="Tempat Lahir" value="{{ $data['warga']->tempat_lahir }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"
                                    placeholder="Tanggal Lahir" value="{{ $data['warga']->tgl_lahir }}">
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="kelamin_id"
                                    id="kelamin_id">
                                    @foreach ($data['data_kelamin'] as $kelamin)
                                        <option @if ($kelamin->id == $data['warga']->kelamin_id) selected @endif
                                            value="{{ $kelamin->id }}">{{ $kelamin->kelamin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example" name="status_id"
                                    id="status_id">
                                    @foreach ($data['data_status'] as $status)
                                        <option @if ($status->id == $data['warga']->status_id) selected @endif
                                            value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="goldar" class="form-label">Golongan Darah</label>
                                <select class="form-select" aria-label="Default select example" name="goldar_id"
                                    id="goldar_id">
                                    @foreach ($data['data_goldar'] as $goldar)
                                        <option @if ($goldar->id == $data['warga']->goldar_id) selected @endif
                                            value="{{ $goldar->id }}">{{ $goldar->goldar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="{{$data["warga"]->pekerjaan}}">
                    </div>
                    <div class="row align-items-end">
                        <button class="btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-around">
                <h4>DATA AGREGAT</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-primary mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Laki-Laki</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_kelamin['laki-laki']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Perempuan</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_kelamin['perempuan']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Total</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_kelamin['total']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-primary mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Belum Kawin</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_status['belum_kawin']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Kawin</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_status['kawin']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-primary mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Cerai Hidup</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_status['cerai_hidup']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Cerai Mati</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_status['cerai_mati']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Total</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_kelamin['total']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-primary mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Golongan Darah A</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_goldar['goldar_a']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Golongan Darah B</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_goldar['goldar_b']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-primary mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Golongan Darah AB</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_goldar['goldar_ab']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Golongan Darah O</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_goldar['goldar_o']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-primary mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Tidak Diketahui</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_goldar['tidak_tahu']}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Total</div>
                            <div class="card-body">
                                <h1>{{$data_agregat_kelamin['total']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

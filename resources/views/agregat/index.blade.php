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
                                <h1>1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Perempuan</div>
                            <div class="card-body">
                                <h1>1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mt-1 mx-1" style="max-width: 18rem;">
                            <div class="card-header">Total</div>
                            <div class="card-body">
                                <h1>2</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

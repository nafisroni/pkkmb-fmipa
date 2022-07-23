@extends('layouts.app')

@section('content')
<section id="dashboard">
    <div>
        <h1>Selamat Datang, {{ auth()->user()->name}} </h1>
        <div class="row ">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h6 class="fs-6 fw-light">Data List</h6>
                        <h4 class="fw-bold">{{ $positionCount }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h6 class="fs-6 fw-light">Data Mahasiswa</h6>
                        <h4 class="fw-bold">{{ $userCount }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.home')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-2">
                <div class="card-header bg-danger text-light">
                    Daftar Absensi Hari Ini
                </div>
                <div class="card-body shadow">
                    <ul class="list-group">
                        @foreach ($attendances as $attendance)
                        <a href="{{ route('home.show', $attendance->id) }}" class="list-group-item d-flex justify-content-between align-items-start py-3">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $attendance->title }}</div>
                                <p class="mb-0">{{ $attendance->description }}</p>
                            </div>

                            @include('partials.attendance-badges')
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info fw-bold">
                    Informasi Mahasiswa
                </div>
                <div class="card-body shadow">
                    <ul class="list-group">
                        <li class=" list-group-item">
                            <span class="fw-bold d-block">Nama : </span>
                            <span>{{ auth()->user()->name }}</span>
                        </li>
                        <li class=" list-group-item">
                            <span class="fw-bold d-block">Email : </span>
                            <span href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</span>
                        </li>
                        <li class=" list-group-item">
                            <span class="fw-bold d-block">No. Telp : </span>
                            <span href="">{{ auth()->user()->phone }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold d-block">Bergabung Pada : </span>
                            <span>{{ auth()->user()->created_at->diffForHumans() }} ({{
                                auth()->user()->created_at->format('d M Y') }})</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="{{asset('img/kyaaa.png')}}" alt="" height="400" style="margin-top: -220px; margin-left: 85px;">
<footer class="bg-primary fixed-bottom text-light">
    <div class="container">
        <div class="row">
            <div class="col mt-2">
                <p>Copyright <a href="https://www.instagram.com/nafisroni_/" class="text-light text-decoration-none"> Muhammad Nafis Roni Wijaya</a></p>
            </div>
        </div>
    </div>
</footer>
@endsection
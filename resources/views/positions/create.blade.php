@extends('layouts.app')

@section('buttons')
<div class="btn-toolbar mb-2">
    <div>
        <a href="{{ route('positions.index') }}" class="btn btn-sm btn-danger">
            <span data-feather="arrow-left-circle" class="align-text-bottom"></span>
            Kembali
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <livewire:position-create-form />
    </div>
</div>
@endsection
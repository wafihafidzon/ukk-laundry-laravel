@extends('layouts.app')

@push('style')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('title', 'Users')

@section('content')
    <div class="container">
        <h1>Pegawai {{$outlet[0]->nama}}</h1>
        <div class="col-6">
            <a href="{{ route('user.store' , $outlet[0]->id) }}" class="btn btn-primary">Tambah Pegawai</a>
        </div>
        @livewire('pegawai.pegawai-table', ['user' => $user, 'outlet' => $outlet])
    </div>
@endsection

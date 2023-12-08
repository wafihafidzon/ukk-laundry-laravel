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
        <h1>Tambah Paket</h1>
        @livewire('paket.tambah', ['id_outlet' => $id_outlet])
    </div>
@endsection

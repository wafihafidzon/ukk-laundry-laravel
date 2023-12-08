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
        <h1>Paket {{$outlet[0]->nama}}</h1>
        <div class="col-6">
            <a href="{{ route('paket_outlet.store' , $outlet[0]->id) }}" class="btn btn-primary">Tambah Paket</a>
        </div>
        @livewire('paket.paket-table', ['paket' => $paket, 'outlet' => $outlet])
    </div>
@endsection

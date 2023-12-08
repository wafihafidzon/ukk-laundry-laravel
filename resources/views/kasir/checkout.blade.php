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
        {{-- <h1>Checkout {{Auth::user()->nama}}</h1> --}}
        {{var_dump($keranjang)}}
        @livewire('kasir.checkout', ['keranjang' => $keranjang])
    </div>
@endsection

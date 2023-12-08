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
        @livewire('kasir.keranjang', ['keranjang' => $keranjang])
    </div>
@endsection

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
        <h1>Kasir {{Auth::user()->nama}}</h1>
        @livewire('kasir.data', ['paket' => $paket])
    </div>
@endsection

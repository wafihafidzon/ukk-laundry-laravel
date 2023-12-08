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
      {{var_dump($paket)}}
        @livewire('paket.update', ['paket' => $paket])
    </div>
@endsection

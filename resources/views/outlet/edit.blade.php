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
        <h1>Test</h1>
        <div class="col-6">
            <a href="{{route('outlet.store')}}" class="btn btn-primary">Tambah Outlet</a></a>
        </div>
        @livewire('outlet.edit', ['user' => $user])
    </div>
@endsection

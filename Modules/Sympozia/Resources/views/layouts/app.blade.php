@extends('adminlte::page')

@section('title', 'Sympozia')

@section('css')
    @livewireStyles
@stop

@section('content_header')
    <div class="container-fluid ">
        <h3 class="p-0 m-0">{{ $header }}</h3>
    </div>
@stop

@section('content')
    @yield('content')
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        Projek <strong>Aplikasi Teknologi Jaringan</strong> - 2021
    </div>
    By Fahmi Jabbar
    <livewire:sympozia::common.offline />
@stop

@section('js')
    @livewireScripts
@stop

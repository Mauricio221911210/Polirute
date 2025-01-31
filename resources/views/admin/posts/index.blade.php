@extends('adminlte::page')

@section('title', 'Admin')


@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">Nueva Lista</a>
    <h1>Listado de Anuncios</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

   @livewire('admin.posts-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
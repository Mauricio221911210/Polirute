@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>

    <h1>Mostrar listado de etiquetas</h1>
@stop




@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
   <!-- <div class="card">
    <div class="card-body">
        <table class="table ta">

        </table>
    </div>
   </div> -->

 
   
        <div class="card-body"> 
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px" >
                                <a class="btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">editar</a>
                            </td>
                            <td width="10px" >
                               <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                            @csrf 
                               @method('delete')

                               <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                               </form> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
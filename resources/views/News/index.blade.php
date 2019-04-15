@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h3>Bienvenido al sistema de Noticias de la Universiada</h3>
        </div>
        <div class="card-body">
            <p>Podrás crear, editar y eliminar noticias sobre la Universiada 2019</p>
            <a href="{{route('News.create')}}" class="btn btn-primary">Crear</a>
            <a href="#" class="btn btn-warning">Editar</a>
            <a href="#" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
</div>
@endsection
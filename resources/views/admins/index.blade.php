@extends('layouts.app')
@section('content')
<img src="" alt="">
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h3>Noticias</h3>
        </div>
        <div class="card-body">
            <p>Soy la sección de las noticias</p>
            <a href="{{route('News.index')}}" class="btn btn-primary">Noticias</a>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-header">
            <h3>Medallero</h3>
        </div>
        <div class="card-body">
            <p>Soy la sección del medallero.</p>
            <a href="#" class="btn btn-primary">Medallero</a>
        </div>

    </div>
</div>



@endsection
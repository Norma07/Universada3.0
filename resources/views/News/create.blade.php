@extends('layouts.app')
@section('content')

<div class="container">
    <div class="colum-sm-8">
        <div class="card">


            <div class="card-body">
            {!!Form::open( ['route' =>'News.store', 'files' =>true]) !!}

            @include('News.fragment.form')
            {{csrf_field()}}
            {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>


@endsection
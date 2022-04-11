@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>{{$post->title}}</h1>
                <div><strong>Titolo: </strong> {{$post->title}}</div>
                <div><strong>Contenuto: </strong> {!! $post->content !!}</div>
                <div><strong>Slug: </strong> {{$post->slug}}</div>
                <div><strong>Categoria: </strong> {{isset($post->category)?$post->category->name:'Altro'}}</div>

                <a href="{{url()->previous()}}" class="btn btn-primary">Torna alla lista dei prodotti</a>
            </div>
        </div>
    </div>
@endsection

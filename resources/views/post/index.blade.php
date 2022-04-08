@extends('layouts.main')
@section('content')
    <div><a class="btn btn-primary" href="{{route('posts.create')}}">Создать новый пост</a></div>
    <div>
        @foreach($posts as $post)
            <div><a href="{{route('posts.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
        @endforeach
    </div>

@endsection

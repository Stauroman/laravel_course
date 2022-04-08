@extends('layouts.main')
@section('content')
    <div>
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>
        <div>{{$post->image}}</div>
    </div>
    <div><a class="btn btn-primary" href="{{route('posts.edit', $post->id) }}">Редактировать</a></div>
    <div>
        <form action="{{route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
    <div><a class="btn btn-primary" href="{{route('posts.index')}}">Все посты</a></div>
@endsection

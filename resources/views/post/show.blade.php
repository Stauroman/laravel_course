@extends('layouts.main')
@section('content')
    <div>
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>
        <div>{{$post->image}}</div>
    </div>
    <div><a class="btn btn-primary" href="{{route('post.edit', $post->id) }}">Редактировать</a></div>
    <div>
        <form action="{{route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
    <div><a class="btn btn-primary" href="{{route('post.index')}}">Все посты</a></div>
@endsection

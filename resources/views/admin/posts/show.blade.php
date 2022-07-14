@extends('layouts.app')

@section('content')
    <h1>SHOW</h1>

    <div>
        <ul>
            
            <li>{{$post->id}}</li>
            <li>{{$post->title}}</li>
            <li>{{$post->text}}</li>
            <li>{{$post->category ? $post->category->name : '-' }}</li>
            <li>
                @forelse ($post->tags as $tag)
                    {{$tag->tag}}
                @empty
                    -
                @endforelse 
            </li>
        </ul>
    </div>
@endsection
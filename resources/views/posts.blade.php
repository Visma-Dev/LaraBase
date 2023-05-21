@extends('layouts.layout')
@section('content')
    <h1>Its the Posts Page</h1>
    <div>
        <!-- @директивы в blade позволяют писать более простой и лаконичный восприятию код -->
        @foreach($posts as $post)
            <h1>{{ $post->title }}</h1>
            <div>{{ $post->content }}</div>
            <div>{{ $post->likes }}</div>
        @endforeach
    </div>
@endsection

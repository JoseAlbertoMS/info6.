@extends('layouts.master')

@section('content')
    <h1>Post</h1>
    @include('fragments.validation-errors')
    @include('fragments.sesion')
    <form action="{{ route("post.update", $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection

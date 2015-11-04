@extends('layouts.master')

@section('title')
    Show Book
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    @if(!isset($name))
        You have not specified a book!
    @else
        <h1>Show book: {{ $name }}</h1>
    @endif
@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
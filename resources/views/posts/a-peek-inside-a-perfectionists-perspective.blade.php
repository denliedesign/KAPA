@extends('layouts.app')

@section('title', 'A Peek Inside A Perfectionists Perspective | Kenosha Academy of Performing Arts')
@section('description', 'Have you ever wondered why perfectionism is so prevalent among dancers? Like many other athletes and artists, dancers tend to be their own worst critic.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h3 class="text-center pt-5">A Peek Inside A Perfectionists Perspective</h3>
            <div class="my-3 d-flex justify-content-center">
                <a href="/images/blog-june.pdf" class="btn-opacity"><div class="shadow btn btn-kapa-teal btn-family mt-2">Read The PDF</div></a>
            </div>
            <div class="py-3 d-flex justify-content-center">
                <img src="/images/blog-june-1.jpg" alt="blog june" class="img-fluid">
            </div>
            <div class="py-3 d-flex justify-content-center">
                <img src="/images/blog-june-2.jpg" alt="blog june" class="img-fluid">
            </div>
        </div>
    </div>


@endsection

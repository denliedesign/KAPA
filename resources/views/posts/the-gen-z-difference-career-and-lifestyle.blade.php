@extends('layouts.app')

@section('title', 'The Gen Z Difference: Career & Lifestyle | Kenosha Academy of Performing Arts')
@section('description', 'As parents, educators, and leaders, we have a responsibility to
                                    mentor future generations in their career pursuits. However, it’s safe to
                                    say that things look very different from when the Millennial and Gen X
                                    generations navigated through that territory.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h3 class="text-center pt-5">The Gen Z Difference: Career & Lifestyle</h3>
            <div class="my-3 d-flex justify-content-center">
                <a href="/images/blog-may.pdf" class="btn-opacity"><div class="shadow btn btn-kapa-teal btn-family mt-2">Read The PDF</div></a>
            </div>
            <div class="py-3 d-flex justify-content-center">
                <img src="/images/blog-may-1.jpg" alt="blog may" class="img-fluid">
            </div>
            <div class="py-3 d-flex justify-content-center">
                <img src="/images/blog-may-2.jpg" alt="blog may" class="img-fluid">
            </div>
        </div>
    </div>


@endsection

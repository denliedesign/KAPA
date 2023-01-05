@extends('layouts.app')

@section('title', 'Beyond the Stage - Witnessing Your Dancers Reevolution | Kenosha Academy of Performing Arts')
@section('description', 'There are so many reasons that people invest in dance. For some, it’s
                            the spectacle of performance or the escape through entertainment. For
                            others, it’s the marriage of athleticism and artistry, and the sense of
                            community. Regardless of what lures you into the dance world, dance
                            inherently gives back to its community in the most beautiful ways
                            imaginable.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h3 class="text-center pt-5">Beyond the Stage - Witnessing Your Dancer's Re(evolution)</h3>
            <div class="my-3 d-flex justify-content-center">
                <a href="/images/blog-january.pdf" class="btn-opacity" target="_blank"><div class="shadow btn btn-kapa-teal btn-family mt-2">Read The PDF</div></a>
            </div>
            <div class="py-3 d-flex justify-content-center">
                <img src="/images/blog-jan-1.jpg" alt="blog january" class="img-fluid">
            </div>
            <div class="py-3 d-flex justify-content-center">
                <img src="/images/blog-jan-2.jpg" alt="blog january" class="img-fluid">
            </div>
        </div>
    </div>


@endsection

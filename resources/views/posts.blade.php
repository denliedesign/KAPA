@extends('layouts.app')

@section('title', 'Blog | Kenosha Academy of Performing Arts')
@section('description', 'Beyond Horizons Performance Blog')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h3 class="text-center pt-5">Blog</h3>
            <div class="card-group row">
                <a style="text-decoration: none; color: black;" href="/posts/finding-joy-in-the-ordinary-through-creative-play">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Finding Joy In The Ordinary Through Creative Play</h5>
                            <p class="card-text">School’s out and summer is here! For students - those words are
                                sweet music to their ears. For parents? Well, let’s just say there’s a
                                lot more on their minds now. Children are eager to spend their days in
                                the hot sun, spend quality time with friends and family and create
                                lasting memories. During these moments away from the rigor of the
                                academic school year, parents and caretakers ought to encourage
                                relaxation, fun, and creative play.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">July 2022</small>
                        </div>
                    </div>
                </a>
                <a style="text-decoration: none; color: black;" href="">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">A Peek Inside A Perfectionists Perspective</h5>
                            <p class="card-text">Have you ever wondered why perfectionism is so prevalent among
                                dancers? Like many other athletes and artists, dancers tend to be
                                their own worst critic. As we close competition season and enter
                                recital time, it may be helpful to understand why dancers trend
                                towards a perfectionist outlook.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">June 2022</small>
                        </div>
                    </div>
                </a>
                <a style="text-decoration: none; color: black;" href="">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">The Gen Z Difference: Career & Lifestyle</h5>
                            <p class="card-text">As parents, educators, and leaders, we have a responsibility to
                                mentor future generations in their career pursuits. However, it’s safe to
                                say that things look very different from when the Millennial and Gen X
                                generations navigated through that territory.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">May 2022</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection

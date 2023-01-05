@extends('layouts.app')

@section('title', 'Blog | Kenosha Academy of Performing Arts')
@section('description', 'Beyond Horizons Performance Blog')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h3 class="text-center py-5">Blog</h3>
            <div class="card-group">
                <div class="card m-3 shadow rounded">
                    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/posts/witnessing-your-dancers-reevolution">
                        <img src="/images/blog-banner.png" class="card-img-top" alt="collage of dancers">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Beyond the Stage - Witnessing Your Dancer's Re(evolution)</h5>
                        <p class="card-text">
                            There are so many reasons that people invest in dance. For some, it’s
                            the spectacle of performance or the escape through entertainment. For
                            others, it’s the marriage of athleticism and artistry, and the sense of
                            community. Regardless of what lures you into the dance world, dance
                            inherently gives back to its community in the most beautiful ways
                            imaginable.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">January 2023</small>
                    </div>
                </div>
                <div class="card m-3 shadow rounded">
                    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/posts/beyond-the-stage">
                        <img src="/images/blog-banner.png" class="card-img-top" alt="collage of dancers">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Beyond the Stage - The Gift of Body Intelligence</h5>
                        <p class="card-text">There are so many reasons that people invest in dance. For some, it’s
                            the spectacle of performance or the escape through entertainment. For
                            others, it’s the marriage of athleticism and artistry, and the sense of
                            community. Regardless of what lures you into the dance world, dance
                            inherently gives back to its community in the most beautiful ways
                            imaginable.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">December 2022</small>
                    </div>
                </div>

                <div class="card m-3 shadow rounded">
                    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/posts/embracing-the-rollercoaster-of-life">
                        <img src="/images/blog-banner.png" class="card-img-top" alt="collage of dancers">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Embracing the Rollercoaster of Life & its Seasons of Joy</h5>
                        <p class="card-text">Joy - an experience defined by “an intense feeling of deep spiritual
                            connection, pleasure, and appreciation”. There’s simply nothing that
                            can compare to the surrendering delight that joy brings. The
                            unfortunate side, however, is that there are situations that distract us
                            from those powerful, blissful moments of life.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">August 2022</small>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card m-3 shadow rounded">
                    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/posts/finding-joy-in-the-ordinary-through-creative-play">
                        <img src="/images/blog-banner.png" class="card-img-top" alt="collage of dancers">
                    </a>
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
                <div class="card m-3 shadow rounded">
                    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/posts/the-gen-z-difference-career-and-lifestyle">
                        <img src="/images/blog-banner.png" class="card-img-top" alt="collage of dancers">
                    </a>
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
                <div class="card m-3 shadow rounded">
                    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/posts/a-peek-inside-a-perfectionists-perspective">
                        <img src="/images/blog-banner.png" class="card-img-top" alt="collage of dancers">
                    </a>
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
{{--                <div class="card m-3 shadow rounded" style="opacity: 0;"></div>--}}
            </div>
        </div>
    </div>


@endsection

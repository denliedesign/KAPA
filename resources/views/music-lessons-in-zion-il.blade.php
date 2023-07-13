@extends('layouts.app')

@section('title', 'Music Lessons in Zion IL | Kenosha Academy of Performing Arts')
@section('description', 'Zion Piano Lessons, Zion Voice Lessons, & More. ')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="pt-5 text-center">Zion Music School</h2>
                    <h5 class="p-2 rounded" style="background: yellow;"><em>Kenosha Academy of Performing Arts located in Kenosha, WI welcomes families from all surrounding areas including Zion, IL.</em></h5>
                    <p>
                        At our Academy of Performing Arts one of our many qualified music instructors will lead you in a private 30 minute session. We offer voice lessons in Zion IL, we offer piano lessons in Zion IL, as well as drums and voice.
                        <br>For a <strong>complimentary trial music lesson</strong>, call us at
                        <a href="tel:+2626053951">262-605-3951</a>.
                    </p>
                </div>
            </div>
            <div class="row text-center">
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/guitar-lessons-in-zion-il.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Zion Guitar Lessons</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-teal shadow">ENROLL</button></a>--}}
{{--                </div>--}}
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/piano-lessons-in-zion-il.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Zion Piano Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-orange shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/voice-lessons-in-zion-il.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Zion Voice Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-pink shadow">ENROLL</button></a>
                </div>
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/violin-lessons-in-zion-il.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Zion Violin Lessons</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-green shadow">ENROLL</button></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="bg-teal p-5 text-center text-white">
        <div class="container">
            <h3>More Than Just Music</h3>
            All students deserve to feel safe and inspired to grow as musicians. Through quality music lessons in Zion IL we teach life lessons that build community, leadership skills, self confidence, motivation, and creative thinking. Our students experience the joy of reaching their goals and find a lifelong passion for music and the arts.
        </div>
    </div>

    <div class="bg-white py-5 text-center">
        <div class="container">
            <div class="my-4">
                <h3>Meet Our Instructors & Learn More About Music Lessons In Zion IL</h3>
                <a href="/about"><button class="btn btn-kapa-teal-outline shadow">LEARN MORE</button></a>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>


@endsection
